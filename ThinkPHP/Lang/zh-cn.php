<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2014 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

/**
 * ThinkPHP 简体中文语言包
 */
return array(
    /* 核心语言变量 */  
    '_MODULE_NOT_EXIST_'     => '无法加载模块',
    '_CONTROLLER_NOT_EXIST_' =>	'无法加载控制器',
    '_ERROR_ACTION_'         => '非法操作',
    '_LANGUAGE_NOT_LOAD_'    => '无法加载语言包',
    '_TEMPLATE_NOT_EXIST_'   => '模板不存在',
    '_MODULE_'               => '模块',
    '_ACTION_'               => '操作',
    '_MODEL_NOT_EXIST_'      => '模型不存在或者没有定义',
    '_VALID_ACCESS_'         => '没有权限',
    '_XML_TAG_ERROR_'        => 'XML标签语法错误',
    '_DATA_TYPE_INVALID_'    => '非法数据对象！',
    '_OPERATION_WRONG_'      => '操作出现错误',
    '_NOT_LOAD_DB_'          => '无法加载数据库',
    '_NO_DB_DRIVER_'         => '无法加载数据库驱动',
    '_NOT_SUPPORT_DB_'       => '系统暂时不支持数据库',
    '_NO_DB_CONFIG_'         => '没有定义数据库配置',
    '_NOT_SUPPORT_'          => '系统不支持',
    '_CACHE_TYPE_INVALID_'   => '无法加载缓存类型',
    '_FILE_NOT_WRITABLE_'   => '目录（文件）不可写',
    '_METHOD_NOT_EXIST_'     => '方法不存在！',
    '_CLASS_NOT_EXIST_'      => '实例化一个不存在的类！',
    '_CLASS_CONFLICT_'       => '类名冲突',
    '_TEMPLATE_ERROR_'       => '模板引擎错误',
    '_CACHE_WRITE_ERROR_'    => '缓存文件写入失败！',
    '_TAGLIB_NOT_EXIST_'     => '标签库未定义',
    '_OPERATION_FAIL_'       => '操作失败！',
    '_OPERATION_SUCCESS_'    => '操作成功！',
    '_SELECT_NOT_EXIST_'     => '记录不存在！',
    '_EXPRESS_ERROR_'        => '表达式错误',
    '_TOKEN_ERROR_'          => '表单令牌错误',
    '_RECORD_HAS_UPDATE_'    => '记录已经更新',
    '_NOT_ALLOW_PHP_'        => '模板禁用PHP代码',
    '_PARAM_ERROR_'          => '参数错误或者未定义',
    '_ERROR_QUERY_EXPRESS_'  => '错误的查询条件',

    //自定义 语言  start
    'webname'       => 'MT4 Web Trader',
    'language'      => '语言',
    'companyname'       => '公司名',
    'companyurl'        => '公司网址',
    'copyright'         => ' 2008-2012 公司名. 所有权保留',
    'accountlic'        => '授权通过交易帐户',
    'account'       => '账户',
    'exit'          => '退出',
    'password'      => '密码',
    'accessser'     => '登陆服务器',
    'login'         => '登陆',
    'login_faile'   => '账户登陆失败',
    'userlogin'     => '账户登陆',
    'selectlng'     => '选择语言',
    'regnewaccount' => '注册',
    'regtext'       =>'请用英文填写以下各字段以便开设新的模拟帐户：',
    'rltimequotes'  => '实时报价',
    'trader'        => '交易',
    'history'       => '历史',
    'quotes'        => '报价',
    'char'          => 'K线',
    'logout'        => '登出',
    'about'         => '关于',
    'volume'        => '量',
    'sl'            => '止损',
    'tp'            => '止盈',
    'comment'       => '备注',
    'action'        => '类型',
    'swap'          => '利息',
    'commission'    => '佣金',
    'profit'        => '利润',
    'edit'          => '修改',
    'delete'        => '关闭',
    'open_price'    => '开单价格',
    'open_time'     => '开单时间',
    'currentprice'  => '当前价格',
    'close_price'   => '平仓价格',
    'close_time'    => '平仓时间',
    'loss'          => '损失',
    'credit'        => '信用额',
    'deposit'       => '存款',
    'withdrawal'    => '取款',
    
    'ordertype'     => '下单类型',
    'order'         => '单号',        
    'pendingorder'  => '挂单',
    'pendingtype'   => '挂单类型',
    'buy'           => '买',
    'sell'          => '卖',     
    'place'         => '下单',        
    'atprice'       => '价位',
    'atleastpips'   => '挂单价格必须远离市价至少20点差.',
    'name'          => '名称',            
    'email'         => '邮箱',
    'group'         => '组',
    'leverage'      => '杠杆',
    'deposit'       => '金额(只限体检账户)',
    'password'      => '密码',
    'confirmpassword'=> '密码确认',
    'city'          => '城市',
    'zip'           => '邮编',
    'state'         => '状态',
    'country'       => '国家',
    'address'       => '地址',
    'phone'         => '电话',
    'phonepassword' => '电话密码',
    'sendreports'   => '邮件反馈',
    'vcode'         => '验证码',
    'register'      => '注册',
    'profit'        => '利润',
    'balance'       => '余额',
    'equity'        => '净值',
    'margin'        => '预付款',
    'freemargin'    => '可用预付款',
    'marginLevel'   => '预付比例(%)',   
    'close'         => '平仓',
    'edit'          => '修改',
    'kline'         => 'K线图',
    'nohtml5'       => '你的浏览器不支持html5',
    'chartype'      => '图类型',
    'line'          => '线',
    'bar'           => '柱',
    'mas'           => '移动平均',
    'copyright'     => '版权所有',
    'sure'          => '是否要登出系统?',
    'symbol'        => '商品',
    'ask'           => '买价',
    'bid'           => '卖价',    
    'quotestime'    => '时间',    
    'MakeTwatch'    => '市场报价',
    'neworder'      => '',
    // 'neworder'       => '开单',
    'news'          => '新闻',        
    'openorder'     => '开单记录',
    'closeorder'    => '平仓记录',      
    'pendingorder'  => '挂单记录',
    'tradehistory'  => '交易记录',  
    'ok'            => '是',
    'cancel'        => '否',         
    'back'      => '返回',
    'save'      => '保存',
    'cycle'     => '周期',
    'buyup'     => '买涨',
    'buydown'   => '买跌',
    'moneyinto' => '投资',
    'createorder'=>'新开交易单?',

//  我自定义的语言  start
    'my_our_rate'=>'杠杆',
    'my_edit_title'=>'开始交易',
    'my_return' => '回报率',
    'my_createAccount' => '创建虚拟账户',

//  我自定义的语言  end
    
    
    'processing'    => '正在执行操作...',
    'processsuccess'=> '正在执行操作...',
        
    'attention'     => '<b>注意!</b> 数据刷新频率是0.5秒',
    'loadingdata'   => '正在加载......',
    'networkerror'  => '网络错误',
    'closeall'      => '关闭所有',
    'sureorder'     =>'确定要关闭所有交易吗？',
    'noorderdata'   =>'无交易单',
    'odds'          =>'赔率',
    'loading'       =>'正在加载 ......',
    'upsum'         =>'买涨金额',
    'downsum'       =>'买跌金额 ',
        
    'newpwd'        =>'新密码',
    'oldpwd'        =>'旧密码',
    'changerpwd'    =>'修改密码',
    'twicepwderror' =>'新密码两次输入不同',
    'pwdconfirm'    =>'再次输入密码',
    'transfervalues' =>'转账金额',
    'transferacount' =>'转账目标账户',
    'transfer'      =>'账户转账',   
    'payment' =>'在线支付',
    'help' =>'帮助',
    'news'  =>'新闻',
    'view'  =>'显示',
    'file'  =>'文件',
    'about' =>'关于',
    'binarytime'    =>'期权计时'
    //自定义 语言  end
);
