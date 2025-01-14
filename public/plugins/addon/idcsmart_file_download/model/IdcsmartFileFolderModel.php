<?php
namespace addon\idcsmart_file_download\model;

use think\db\Query;
use think\facade\Cache;
use think\Model;
use app\common\model\ProductModel;
use app\common\model\ClientModel;
use app\common\model\HostModel;

/**
 * @title 文件夹模型
 * @desc 文件夹模型
 * @use addon\idcsmart_file_download\model\IdcsmartFileFolderModel
 */
class IdcsmartFileFolderModel extends Model
{
    protected $name = 'addon_idcsmart_file_folder';

    // 设置字段信息
    protected $schema = [
        'id'      		    => 'int',
        'name'              => 'string',
        'admin_id'     		=> 'int',
        'create_time'       => 'int',
        'update_time'       => 'int',

    ];

    # 获取文件夹
    public function idcsmartFileFolderList($app = '')
    {
        $list = $this->alias('aiff')
            ->field('aiff.id,aiff.name,a.name admin,aiff.update_time')
            ->leftJoin('admin a', 'a.id=aiff.admin_id')
            ->select()
            ->toArray();

        if($app=='home'){
            $clientId = get_client_id();
            $hostCount = HostModel::where('status', 'Active')->where('client_id', $clientId)->count();
            $productId = HostModel::where('status', 'Active')->where('client_id', $clientId)->column('product_id');
            $fileId1 = IdcsmartFileLinkModel::whereIn('product_id', $productId)->column('addon_idcsmart_file_id');
            $fileId2 = IdcsmartFileModel::whereIn('visible_range', ['all', 'host'])->column('id');
            $fileId = array_merge($fileId1, $fileId2);
        }else{
            $hostCount = 0;
            $fileId = [];
        }
        $file = IdcsmartFileModel::field('addon_idcsmart_file_folder_id,COUNT(id) file_num')
            ->where(function ($query) use($app, $hostCount, $fileId) {
                if($app=='home'){
                    $query->where('hidden', 0);
                    if($hostCount>0){
                        $query->whereIn('id', $fileId);
                    }else{
                        $query->where('visible_range', 'all');
                    }
                }
            })
            ->group('addon_idcsmart_file_folder_id')
            ->select()
            ->toArray();
        $file = array_column($file, 'file_num', 'addon_idcsmart_file_folder_id');
        foreach ($list as $key => $value) {
            $list[$key]['file_num'] = $file[$value['id']] ?? 0;
            if($app=='home'){
                unset($list[$key]['admin'], $list[$key]['update_time']);
            }
        }

        return ['list' => $list];
    }

    # 添加文件夹
    public function createIdcsmartFileFolder($param)
    {
        $this->startTrans();
        try {
            $adminId = get_admin_id();

            $idcsmartFileFolder = $this->create([
                'admin_id' => $adminId,
                'name' => $param['name'],
                'create_time' => time(),
                'update_time' => time()
            ]);

            # 记录日志
            active_log(lang_plugins('log_admin_add_file_folder', ['{admin}'=>request()->admin_name,'{name}'=>$param['name']]), 'addon_idcsmart_file_folder', $idcsmartFileFolder->id);

            $this->commit();
        } catch (\Exception $e) {
            // 回滚事务
            $this->rollback();
            return ['status' => 400, 'msg' => lang_plugins('create_fail')];
        }
        return ['status' => 200, 'msg' => lang_plugins('create_success')];
    }

    # 修改文件夹
    public function updateIdcsmartFileFolder($param)
    {
        // 验证文件夹ID
        $idcsmartFileFolder = $this->find($param['id']);
        if(empty($idcsmartFileFolder)){
            return ['status'=>400, 'msg'=>lang_plugins('file_folder_is_not_exist')];
        }

        $this->startTrans();
        try {
            $adminId = get_admin_id();

            $this->update([
                'admin_id' => $adminId,
                'name' => $param['name'],
                'update_time' => time()
            ], ['id' => $param['id']]);

            # 记录日志
            active_log(lang_plugins('log_admin_edit_file_folder', ['{admin}'=>request()->admin_name,'{name}'=>$param['name']]), 'addon_idcsmart_file_folder', $idcsmartFileFolder->id);

            $this->commit();
        } catch (\Exception $e) {
            // 回滚事务
            $this->rollback();
            return ['status' => 400, 'msg' => lang_plugins('update_fail')];
        }
        return ['status' => 200, 'msg' => lang_plugins('update_success')];
    }

    # 删除文件夹
    public function deleteIdcsmartFileFolder($id)
    {
        // 验证文件夹ID
        $idcsmartFileFolder = $this->find($id);
        if(empty($idcsmartFileFolder)){
            return ['status'=>400, 'msg'=>lang_plugins('file_folder_is_not_exist')];
        }

        $count = IdcsmartFileModel::where('addon_idcsmart_file_folder_id', $id)->count();
        if($count>0){
            return ['status'=>400, 'msg'=>lang_plugins('file_folder_is_used')];
        }

        $this->startTrans();
        try {
            # 记录日志
            active_log(lang_plugins('log_admin_delete_file_folder', ['{admin}'=>request()->admin_name,'{name}'=>$idcsmartFileFolder['name']]), 'addon_idcsmart_file_folder', $idcsmartFileFolder->id);

            $this->destroy($id);
            $this->commit();
        } catch (\Exception $e) {
            // 回滚事务
            $this->rollback();
            return ['status' => 400, 'msg' => lang_plugins('delete_fail')];
        }
        return ['status' => 200, 'msg' => lang_plugins('delete_success')];
    }
}