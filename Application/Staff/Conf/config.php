<?php
return array(

	'SHOW_PAGE_TRACE' =>true, 

	'LANG_SWITCH_ON' => true,   // 开启语言包功能
	'LANG_AUTO_DETECT' => true, // 自动侦测语言 开启多语言功能后有效
	'LANG_LIST'        => 'zh-cn,en-us', // 允许切换的语言列表 用逗号分隔
	'VAR_LANGUAGE'     => 'l', // 默认语言切换变量

	
	/* 模板相关配置 */
    'TMPL_PARSE_STRING' => array(
        '__IMG__'    => __ROOT__ . '/Public/' . MODULE_NAME . '/Images',
        '__CSS__'    => __ROOT__ . '/Public/' . MODULE_NAME . '/Css',
        '__JS__'     => __ROOT__ . '/Public/' . MODULE_NAME . '/Js',
        '__STATIC__' => __ROOT__ . '/Public/Static'
    ),

    'AUTH_CONFIG' => array(
        'AUTH_ON'           => false,                      // 认证开关
        'AUTH_TYPE'         => 1,                         // 认证方式，1为实时认证；2为登录认证。
        'AUTH_GROUP'        => C('DB_PREFIX').'auth_group',        // 用户组数据表名
        'AUTH_GROUP_ACCESS' => C('DB_PREFIX').'auth_group_access', // 用户-用户组关系表
        'AUTH_RULE'         => C('DB_PREFIX').'auth_rule',         // 权限规则表
        'AUTH_USER'         => C('DB_PREFIX').'user'             // 管理员信息表
    ),

    /* SESSION 和 COOKIE 配置 */
    'SESSION_PREFIX' => 'it_staff', //session前缀
    'COOKIE_PREFIX'  => 'it_staff_', // Cookie前缀 避免冲突
    'VAR_SESSION_ID' => 'session_id',   //修复uploadify插件无法传递session_id的bug

    'USER_AUTH_KEY' =>'uid',

    'ADMIN_AUTH_KEY' => 'miao',

    'IS_IP' => false,
    'IP' => array(
    	'27.153.13.204',
		'27.153.13.189'
    )
);