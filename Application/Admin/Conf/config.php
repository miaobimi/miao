<?php 

	return array(

		/* 主题设置 */
    	'DEFAULT_THEME' =>  'default',  // 默认模板主题名称

    	

    	/* 数据缓存设置 */
	    //'DATA_CACHE_PREFIX' => 'weibo_', // 缓存前缀
	    //'DATA_CACHE_TYPE'   => 'File', // 数据缓存类型

	    /* 模板相关配置 */
	    'TMPL_PARSE_STRING' => array(
	        '__IMG__'    => __ROOT__ . '/Public/' . MODULE_NAME . '/Images',
	        '__CSS__'    => __ROOT__ . '/Public/' . MODULE_NAME . '/Css',
	        '__JS__'     => __ROOT__ . '/Public/' . MODULE_NAME . '/Js',
	        '__STATIC__' => __ROOT__ . '/Public/Static'
	    ),

	    //加密异位或
	    'ENCRYPTION_KEY' => '25%&$#dsgjl',

	    //自动登录的时间
	    'AUTO_LOGIN_TIME' => time() + 3600*24*7,

	    'SHOW_PAGE_TRACE' =>true, 

	    
	    'UPLOAD_MAX_SIZE' => 2000000,   // 文件上传大小
	    'UPLOAD_PATH' => './Uploads/',	//文件上传保存路径

	    'AUTH_CONFIG' => array(
	        'AUTH_ON'           => true,                      // 认证开关
	        'AUTH_TYPE'         => 1,                         // 认证方式，1为实时认证；2为登录认证。
	        'AUTH_GROUP'        => C('DB_PREFIX').'auth_group',        // 用户组数据表名
	        'AUTH_GROUP_ACCESS' => C('DB_PREFIX').'auth_group_access', // 用户-用户组关系表
	        'AUTH_RULE'         => C('DB_PREFIX').'auth_rule',         // 权限规则表
	        'AUTH_USER'         => C('DB_PREFIX').'admin'             // 管理员信息表
	    ),

	    /* SESSION 和 COOKIE 配置 */
	    'SESSION_PREFIX' => 'it_admin', //session前缀
	    'COOKIE_PREFIX'  => 'it_admin_', // Cookie前缀 避免冲突
	    'VAR_SESSION_ID' => 'session_id',	//修复uploadify插件无法传递session_id的bug

	    'USER_AUTH_KEY' =>'uid',

	    'ADMIN_AUTH_KEY' => 'miao'

	);
 ?>