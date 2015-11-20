<?php
return array(
	//'配置项'=>'配置值'
	'DEFAULT_MODULE'     => 'Home',

    /* 调试配置 */
    'SHOW_PAGE_TRACE' => true,

    'APP_SUB_DOMAIN_DEPLOY'   =>    1, // 开启子域名配置
    'APP_SUB_DOMAIN_RULES'    =>    array(   
        'm'        => 'M',  // admin子域名指向Admin模块
        'erp'         => 'Erp',  // test子域名指向Test模块
        'binary'  => 'Binary',
        'staff' => 'Staff',
        'wechat' => 'Wechat'
    ),

    /* 用户相关设置 */
    //'USER_MAX_CACHE'     => 1000, //最大缓存用户数
    //'USER_ADMINISTRATOR' => 1, //管理员用户ID

    /* URL配置 */
    'URL_CASE_INSENSITIVE' => true, //默认false 表示URL区分大小写 true则表示不区分大小写
    'URL_MODEL'            => 3, //URL模式
    'VAR_URL_PARAMS'       => '', // PATHINFO URL参数变量
    'URL_PATHINFO_DEPR'    => '/', //PATHINFO URL分割符


    // 开启路由
    // 'URL_ROUTER_ON'   => true,

    // 'URL_ROUTE_RULES'=>array(
    //     'Team/:tid'=>'Team/teamDetail', 
    //     'Project/:id'=>'Project/detail', 
    //     'Team/index'=>'Team', 
    //     'People/index'=>'People', 
    //     'Project/index'=>'Project'
    // ),

    /* 全局过滤配置 */
    'DEFAULT_FILTER' => '', //全局过滤函数

     /* 数据库配置 */
    'DB_TYPE'   => 'mysqli', // 数据库类型
    'DB_HOST'   => '127.0.0.1', // 服务器地址
    'DB_NAME'   => 'miao', // 数据库名
    'DB_USER'   => 'root', // 用户名
    'DB_PWD'    => 'a0fc8b113f',  // 密码
    'DB_PORT'   => '3306', // 端口
    'DB_PREFIX' => 'm_', // 数据库表前缀

    /* 模板相关配置 */
    'TMPL_PARSE_STRING' => array(
        '__STATIC__' => __ROOT__ . '/Public/Static'
    ),

    // 配置邮件发送服务器
    'MAIL_HOST' =>'smtp.qq.com',//smtp服务器的名称
    'MAIL_SMTPAUTH' =>TRUE, //启用smtp认证
    'MAIL_USERNAME' =>'3069887237@qq.com',//你的邮箱名
    'MAIL_FROM' =>'3069887237@qq.com',//发件人地址
    'MAIL_FROMNAME'=>'IT创',//发件人姓名
    'MAIL_PASSWORD' =>'ddg123456',//邮箱密码
    'MAIL_CHARSET' =>'utf-8',//设置邮件编码
    'MAIL_ISHTML' =>TRUE, // 是否HTML格式邮件


    /* 支付设置 */
    'payment' => array(
        'tenpay' => array(
            // 加密key，开通财付通账户后给予
            'key' => 'e82573dc7e6136ba414f2e2affbe39fa',
            // 合作者ID，财付通有该配置，开通财付通账户后给予
            'partner' => '1900000113'
        ),
        'alipay' => array(
            // 收款账号邮箱
            'email' => '1817638456@qq.com',
            // 加密key，开通支付宝账户后给予
            'key' => 'v49fkwuje9kv9hhe8msa9fd6p0qkjkaa',
            // 合作者ID，支付宝有该配置，开通易宝账户后给予
            'partner' => '2088901893504704'
        ),
        'aliwappay' => array(
            // 收款账号邮箱
            'email' => 'chenf003@yahoo.cn',
            // 加密key，开通支付宝账户后给予
            'key' => 'v49fkwuje9kv9hhe8msa9fd6p0qkjkaa',
            // 合作者ID，支付宝有该配置，开通易宝账户后给予
            'partner' => '2088901893504704'
        ),
        'palpay' => array(
            'business' => 'zyj@qq.com'
        ),
        'yeepay' => array(
            'key' => '69cl522AV6q613Ii4W6u8K6XuW8vM1N6bFgyv769220IuYe9u37N4y7rI4Pl',
            'partner' => '10001126856'
        ),
        'kuaiqian' => array(
            'key' => '1234567897654321',
            'partner' => '1000300079901'
        ),
        'unionpay' => array(
            'key' => '88888888',
            'partner' => '105550149170027'
        )
    )
);

?>