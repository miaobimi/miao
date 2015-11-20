<?php 

	return array(

		/* 主题设置 */
    	//'DEFAULT_THEME' =>  'itchuang',  // 默认模板主题名称


	    /* 模板相关配置 */
	    'TMPL_PARSE_STRING' => array(
	        '__STATIC__' => __ROOT__ . '/Public/Static',
	        '__IMG__'    => __ROOT__ . '/Public/' . MODULE_NAME . '/Images',
	        '__CSS__'    => __ROOT__ . '/Public/' . MODULE_NAME . '/Css',
	        '__JS__'     => __ROOT__ . '/Public/' . MODULE_NAME . '/Js',
	    ),

	    /* SESSION 和 COOKIE 配置 */
	    'SESSION_PREFIX' => 'it_wechat', //session前缀
	    'COOKIE_PREFIX'  => 'it_wechat_', // Cookie前缀 避免冲突
	    'VAR_SESSION_ID' => 'session_id',	//修复uploadify插件无法传递session_id的bug

	    // 微信
	    'APPID' => 'wx0923ff41995c0a96',
	    'SECRET' => '3010516d58081c9c39a2a680038f37f3',


	);
 ?>