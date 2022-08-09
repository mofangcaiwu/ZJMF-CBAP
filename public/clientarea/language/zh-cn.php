<?php

return [
    # 通用
	'display_name' => '中文简体',//用于在语言切换下拉中显示
	'display_flag' => 'CN',//用于显示图片，使用国家代码大写
    'add_success' => '添加成功',
    'add_fail' => '添加失败',
    'success_message' => '请求成功',
    'fail_message' => '请求失败',
    'create_success' => '创建成功',
    'create_fail' => '创建失败',
    'delete_success' => '删除成功',
    'delete_fail' => '删除失败',
    'update_success' => '修改成功',
    'update_fail' => '修改失败',
    'save_success' => '保存成功',
    'save_fail' => '保存失败',
    'register_success' => '注册成功',
    'register_fail' => '注册失败',
    'pay_success' => '支付成功',
    'pay_fail' => '支付失败',
    'id_error' => 'ID错误',
    'param_error' => '参数错误',
    'cannot_repeat_opreate' => '不可重复操作',
    'disable_success' => '禁用成功',
    'disable_fail' => '禁用失败',
    'enable_success' => '启用成功',
    'enable_fail' => '启用失败',
    'login_success' => '登录成功',
    'login_fail' => '登录失败',
    'move_success' => '移动成功',
    'move_fail' => '移动失败',
    'buy_fail' => '购买失败',
    'buy_success' => '购买成功',
    'missing_route_paramters' => '缺少路由参数{param}',
    'range_of_values' => '{key}取值范围:{value}',
    'gateway_error' => '支付接口错误',
    'login_unauthorized' => '未授权',
    'remember_password_value_0_or_1' => '记住密码取值为0或1',
    'password_is_change_please_login_again' => '密码已修改,请重新授权',
    'logout_success' => '注销成功',
    'inconsistent_login_ip' => '登录ip不一致',
    'login_user_ID_is_inconsistent' => '登录用户ID不一致',
    'log_out_automatically_after_2_hours_without_operation' => '2个小时未操作自动退出登录',
    'login_captcha' => '请输入图形验证码',
    'login_captcha_token' => '请输入图形验证码唯一识别码',
    'login_captcha_error' => '图形验证码错误',

    # 前台登录注册修改密码
    'login_type_is_required' => '请传入登录类型',
    'login_type_only_code_or_password' => '登录类型取值为code或password',
    'login_account_require' => '请输入账号',
    'login_email_error' => '邮箱格式错误',
    'login_password_require' => '请输入密码',
    'login_password_len' => '密码长度为6-32位',
    'login_remember_password_is_0_or_1' => '记住密码取值为0或1',
    'login_email_is_not_register' => '邮箱未注册',
    'login_password_error' => '账号或密码错误',
    'login_email_is_not_open' => '未开启邮箱登录',
    'login_phone_is_not_open' => '未开启手机登录',
    'login_phone_verify_is_not_open' => '未开启手机验证码登录',
    'register_type_is_required' => '请传入注册类型',
    'register_type_only_phone_or_email' => '注册类型取值为phone或email',
    'register_account_is_required' => '请输入账号',
    'verification_code_has_expired' => '验证码已过期',
    'register_email_is_not_open' => '未开启邮箱注册',
    'register_phone_is_not_open' => '未开启手机注册',
    'login_phone_code_require' => '请选择国家区号',
    'login_phone_code_error' => '国家区号错误',
    'login_phone_require' => '请输入手机号',
    'login_phone_is_not_right' => '手机号格式错误',
    'login_phone_is_not_register' => '手机号未注册',
    'login_client_is_disabled' => '该帐号已停用/关闭，请联系管理员处理',
    'please_enter_vaild_phone' => '请输入正确的手机号',
    'client_name_cannot_exceed_20_chars' => '用户姓名最多不能超过20个字符',
    'passwords_not_match' => '两次输入的密码不一致',
    'phone_has_been_registered' => '手机号已被注册',
    'email_has_been_registered' => '邮箱已被注册',

    # 支付
    'order_id_is_not_exist' => '请传入订单ID',
    'order_is_not_exist' => '订单不存在',
    'order_ownership_error' => '订单归属错误',
    'order_is_paid' => '订单已支付',
    'gateway_is_required' => '请选择支付方式',
    'no_support_gateway' => '不支持的支付方式',
    'recharge_is_not_open' => '充值功能未开启',
    'recharge_amount_is_greater_than_0' => '最小充值金额大于等于0.01',
    'min_recharge_is_error' => '最小充值金额为{min}',
    'recharge_success' => '充值成功',
    'client_recharge' => '用户充值',
    'recharge_order_cannot_use_credit' => '充值订单不可使用余额',
    'client_credit_is_0' => '余额为0',
    'client_credit_is_used' => '您已使用过余额',
    'client_credit_is_not_enough' => '余额不足',

	# 验证码
    'error_message'                                        => '请求错误',
    'verification_code_error' => '验证码错误',
    'please_get_verification_code' => '请获取验证码',
    'verification_code_can_only_sent_once_per_minute' => '验证码每分钟只能发送一次',

    # 导航
    'nav_index' => '首页',
    'nav_host_list' => '产品列表',
    'nav_finance_info' => '财务信息',
    'nav_account_info' => '账户信息',
    'nav_security' => '安全',

    # 日志
    'modify_profile' => '{client}将{description}',
    'old_to_new' => '{old}改为{new}',
    'submit_order' => '{client}提交订单：{order}包含商品：{product}',
    'bound_mobile' => '{client}绑定手机{phone}',
    'change_bound_mobile' => '{client}修改绑定手机为{phone}原手机号为：{old_phone}',
    'bound_email' => '{client}绑定邮箱{email}',
    'change_bound_email' => '{client}修改绑定邮箱为{email}原邮箱为：{old_email}',
    'change_password' => '{client}修改密码',

    'log_client_login' => '{client}登录系统',
    'log_client_logout' => '{client}注销登录',
    'log_client_register' => '账号{account}注册成功',
    'log_client_pay_order_success' => '{client}支付订单:{order_id},支付金额:{amount}',
    'log_client_pay_with_credit_fail' => '{client}使用部分余额支付失败,失败原因:余额不足(可能将余额应用至其它订单).已将支付金额存入客户余额',
    'log_client_recharge' => '{client}交易流水号:{transaction},充值金额:{amount}',


    'client_username' => '姓名',
    'client_company' => '公司',
    'client_country' => '国家',
    'client_address' => '地址',
    'client_language' => '语言',
    'client_notes' => '备注',


    # 账户管理
    'please_enter_old_password' => '请输入旧密码',
    'please_enter_new_password' => '请输入新密码',
    'old_password_error' => '旧密码错误',
    'new_password_cannot_same_old_password' => '新密码不能和旧密码相同',
    'please_enter_code' => '请输入验证码',
    'please_verify_old_phone' => '请验证原手机',
    'please_verify_old_email' => '请验证原邮箱',
    'user_not_bind_phone' => '用户未绑定手机',
    'user_not_bind_email' => '用户未绑定邮箱',

    # 购物车
    'clear_cart_success' => '清空购物车成功',
    'position_error' => '位置错误',
    'please_enter_config_options' => '请传入自定义配置',
    'config_options_error' => '自定义配置错误',
    'please_enter_qty' => '请传入数量',
    'qty_error' => '数量错误',
    'product_inventory_shortage' => '商品库存不足',
    'there_are_no_items_in_the_cart' => '购物车内没有商品',
    'please_select_products_in_the_cart' => '请选择购物车商品',

    # API密钥
    'api_is_not_exist' => 'API密钥不存在',
    'please_enter_api_name' => '请输入API密钥名称',
    'api_name_cannot_exceed_10_chars' => 'API密钥名称最多不能超过10个字符',
    'please_select_api_status' => '清选择是否开启白名单',
    'api_status_error' => '白名单参数错误',
    'please_enter_api_ip' => '请输入白名单IP',
    'api_ip_error' => '白名单IP格式错误',
    'api_key_create_max' => '单个用户最多只允许创建10个API密钥',
];