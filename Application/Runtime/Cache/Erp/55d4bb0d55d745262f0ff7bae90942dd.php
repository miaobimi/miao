<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>中远融投</title>
<meta name="Keywords" content=""/>
<meta name="Description" content=""/> 
<!-- bootstrap - css -->
<link href="/Public/Static/B-JUI/BJUI/themes/css/bootstrap.css" rel="stylesheet">
<!-- core - css -->
<link href="/Public/Static/B-JUI/BJUI/themes/css/style.css" rel="stylesheet">
<link href="/Public/Static/B-JUI/BJUI/themes/purple/core.css" id="bjui-link-theme" rel="stylesheet">
<!-- plug - css -->
<link href="/Public/Static/B-JUI/BJUI/plugins/kindeditor_4.1.10/themes/default/default.css" rel="stylesheet">
<link href="/Public/Static/B-JUI/BJUI/plugins/colorpicker/css/bootstrap-colorpicker.min.css" rel="stylesheet">
<link href="/Public/Static/B-JUI/BJUI/plugins/niceValidator/jquery.validator.css" rel="stylesheet">
<link href="/Public/Static/B-JUI/BJUI/plugins/bootstrapSelect/bootstrap-select.css" rel="stylesheet">
<link href="/Public/Static/B-JUI/BJUI/themes/css/FA/css/font-awesome.min.css" rel="stylesheet">
<!--[if lte IE 7]>
<link href="/Public/Static/B-JUI/BJUI/themes/css/ie7.css" rel="stylesheet">
<![endif]-->
<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lte IE 9]>
    <script src="/Public/Static/B-JUI/BJUI/other/html5shiv.min.js"></script>
    <script src="/Public/Static/B-JUI/BJUI/other/respond.min.js"></script>
<![endif]-->
<!-- jquery -->
<script src="/Public/Static/B-JUI/BJUI/js/jquery-1.7.2.min.js"></script>
<script src="/Public/Static/B-JUI/BJUI/js/jquery.cookie.js"></script>
<!--[if lte IE 9]>
<script src="/Public/Static/B-JUI/BJUI/other/jquery.iframe-transport.js"></script>    
<![endif]-->
<!-- BJUI.all 分模块压缩版 -->
<script src="/Public/Static/B-JUI/BJUI/js/bjui-all.js"></script>
<!-- 以下是B-JUI的分模块未压缩版，建议开发调试阶段使用下面的版本 -->
<!--
<script src="/Public/Static/B-JUI/BJUI/js/bjui-core.js"></script>
<script src="/Public/Static/B-JUI/BJUI/js/bjui-regional.zh-CN.js"></script>
<script src="/Public/Static/B-JUI/BJUI/js/bjui-frag.js"></script>
<script src="/Public/Static/B-JUI/BJUI/js/bjui-extends.js"></script>
<script src="/Public/Static/B-JUI/BJUI/js/bjui-basedrag.js"></script>
<script src="/Public/Static/B-JUI/BJUI/js/bjui-slidebar.js"></script>
<script src="/Public/Static/B-JUI/BJUI/js/bjui-contextmenu.js"></script>
<script src="/Public/Static/B-JUI/BJUI/js/bjui-navtab.js"></script>
<script src="/Public/Static/B-JUI/BJUI/js/bjui-dialog.js"></script>
<script src="/Public/Static/B-JUI/BJUI/js/bjui-taskbar.js"></script>
<script src="/Public/Static/B-JUI/BJUI/js/bjui-ajax.js"></script>
<script src="/Public/Static/B-JUI/BJUI/js/bjui-alertmsg.js"></script>
<script src="/Public/Static/B-JUI/BJUI/js/bjui-pagination.js"></script>
<script src="/Public/Static/B-JUI/BJUI/js/bjui-util.date.js"></script>
<script src="/Public/Static/B-JUI/BJUI/js/bjui-datepicker.js"></script>
<script src="/Public/Static/B-JUI/BJUI/js/bjui-ajaxtab.js"></script>
<script src="/Public/Static/B-JUI/BJUI/js/bjui-datagrid.js"></script>
<script src="/Public/Static/B-JUI/BJUI/js/bjui-tablefixed.js"></script>
<script src="/Public/Static/B-JUI/BJUI/js/bjui-tabledit.js"></script>
<script src="/Public/Static/B-JUI/BJUI/js/bjui-spinner.js"></script>
<script src="/Public/Static/B-JUI/BJUI/js/bjui-lookup.js"></script>
<script src="/Public/Static/B-JUI/BJUI/js/bjui-tags.js"></script>
<script src="/Public/Static/B-JUI/BJUI/js/bjui-upload.js"></script>
<script src="/Public/Static/B-JUI/BJUI/js/bjui-theme.js"></script>
<script src="/Public/Static/B-JUI/BJUI/js/bjui-initui.js"></script>
<script src="/Public/Static/B-JUI/BJUI/js/bjui-plugins.js"></script>
-->
<!-- plugins -->
<!-- swfupload for uploadify && kindeditor -->
<script src="/Public/Static/B-JUI/BJUI/plugins/swfupload/swfupload.js"></script>
<!-- kindeditor -->
<script src="/Public/Static/B-JUI/BJUI/plugins/kindeditor_4.1.10/kindeditor-all.min.js"></script>
<script src="/Public/Static/B-JUI/BJUI/plugins/kindeditor_4.1.10/lang/zh_CN.js"></script>
<!-- colorpicker -->
<script src="/Public/Static/B-JUI/BJUI/plugins/colorpicker/js/bootstrap-colorpicker.min.js"></script>
<!-- ztree -->
<script src="/Public/Static/B-JUI/BJUI/plugins/ztree/jquery.ztree.all-3.5.js"></script>
<!-- nice validate -->
<script src="/Public/Static/B-JUI/BJUI/plugins/niceValidator/jquery.validator.js"></script>
<script src="/Public/Static/B-JUI/BJUI/plugins/niceValidator/jquery.validator.themes.js"></script>
<!-- bootstrap plugins -->
<script src="/Public/Static/B-JUI/BJUI/plugins/bootstrap.min.js"></script>
<script src="/Public/Static/B-JUI/BJUI/plugins/bootstrapSelect/bootstrap-select.min.js"></script>
<script src="/Public/Static/B-JUI/BJUI/plugins/bootstrapSelect/defaults-zh_CN.min.js"></script>
<!-- icheck -->
<script src="/Public/Static/B-JUI/BJUI/plugins/icheck/icheck.min.js"></script>
<!-- dragsort -->
<script src="/Public/Static/B-JUI/BJUI/plugins/dragsort/jquery.dragsort-0.5.1.min.js"></script>
<!-- HighCharts -->
<script src="/Public/Static/B-JUI/BJUI/plugins/highcharts/highcharts.js"></script>
<script src="/Public/Static/B-JUI/BJUI/plugins/highcharts/highcharts-3d.js"></script>
<script src="/Public/Static/B-JUI/BJUI/plugins/highcharts/themes/gray.js"></script>
<!-- ECharts -->
<script src="/Public/Static/B-JUI/BJUI/plugins/echarts/echarts.js"></script>
<!-- other plugins -->
<script src="/Public/Static/B-JUI/BJUI/plugins/other/jquery.autosize.js"></script>
<link href="/Public/Static/B-JUI/BJUI/plugins/uploadify/css/uploadify.css" rel="stylesheet">
<script src="/Public/Static/B-JUI/BJUI/plugins/uploadify/scripts/jquery.uploadify.min.js"></script>
<!-- init -->
<script type="text/javascript">
$(function() {
    BJUI.init({
        JSPATH       : '/Public/Static/B-JUI/BJUI/',         //[可选]框架路径
        PLUGINPATH   : '/Public/Static/B-JUI/BJUI/plugins/', //[可选]插件路径
        loginInfo    : {url:'login_timeout.html', title:'登录', width:400, height:200}, // 会话超时后弹出登录对话框
        statusCode   : {ok:200, error:300, timeout:301}, //[可选]
        ajaxTimeout  : 50000, //[可选]全局Ajax请求超时时间(毫秒)
        pageInfo     : {pageCurrent:'pageCurrent', pageSize:'pageSize', orderField:'orderField', orderDirection:'orderDirection'}, //[可选]分页参数
        alertMsg     : {displayPosition:'topcenter', displayMode:'slide', alertTimeout:3000}, //[可选]信息提示的显示位置，显隐方式，及[info/correct]方式时自动关闭延时(毫秒)
        keys         : {statusCode:'statusCode', message:'message'}, //[可选]
        ui           : {
                         showSlidebar     : true, //[可选]左侧导航栏锁定/隐藏
                         clientPaging     : true, //[可选]是否在客户端响应分页及排序参数
                         overwriteHomeTab : false //[可选]当打开一个未定义id的navtab时，是否可以覆盖主navtab(我的主页)
                       },
        debug        : true,    // [可选]调试模式 [true|false，默认false]
        theme        : 'purple' // 若有Cookie['bjui_theme'],优先选择Cookie['bjui_theme']。皮肤[五种皮肤:default, orange, purple, blue, red, green]
    })
    //时钟
    var today = new Date(), time = today.getTime()
    $('#bjui-date').html(today.formatDate('yyyy/MM/dd'))
    setInterval(function() {
        today = new Date(today.setSeconds(today.getSeconds() + 1))
        $('#bjui-clock').html(today.formatDate('HH:mm:ss'))
    }, 1000)
})

//菜单-事件
function MainMenuClick(event, treeId, treeNode) {
    event.preventDefault()
    
    if (treeNode.isParent) {
        var zTree = $.fn.zTree.getZTreeObj(treeId)
        
        zTree.expandNode(treeNode)
        return
    }
    
    if (treeNode.target && treeNode.target == 'dialog')
        $(event.target).dialog({id:treeNode.tabid, url:treeNode.url, title:treeNode.name})
    else
        $(event.target).navtab({id:treeNode.tabid, url:treeNode.url, title:treeNode.name, fresh:treeNode.fresh, external:treeNode.external})
}
</script>
<!-- for doc begin -->
<link type="text/css" rel="stylesheet" href="/Public/Static/B-JUI/js/syntaxhighlighter-2.1.382/styles/shCore.css"/>
<link type="text/css" rel="stylesheet" href="/Public/Static/B-JUI/js/syntaxhighlighter-2.1.382/styles/shThemeEclipse.css"/>
<script type="text/javascript" src="/Public/Static/B-JUI/js/syntaxhighlighter-2.1.382/scripts/brush.js"></script>
<link href="/Public/Static/B-JUI/doc/doc.css" rel="stylesheet">
<script type="text/javascript">
$(function(){
    SyntaxHighlighter.config.clipboardSwf = '/js/syntaxhighlighter-2.1.382/scripts/clipboard.swf'
    $(document).on(BJUI.eventType.initUI, function(e) {
        SyntaxHighlighter.highlight();
    })
})
</script>
<!-- for doc end -->
</head>
<body>
    <!--[if lte IE 7]>
        <div id="errorie"><div>您还在使用老掉牙的IE，正常使用系统前请升级您的浏览器到 IE8以上版本 <a target="_blank" href="http://windows.microsoft.com/zh-cn/internet-explorer/ie-8-worldwide-languages">点击升级</a>&nbsp;&nbsp;强烈建议您更改换浏览器：<a href="http://down.tech.sina.com.cn/content/40975.html" target="_blank">谷歌 Chrome</a></div></div>
    <![endif]-->
    <header id="bjui-header">
        <div class="bjui-navbar-header">
            <button type="button" class="bjui-navbar-toggle btn-default" data-toggle="collapse" data-target="#bjui-navbar-collapse">
                <i class="fa fa-bars"></i>
            </button>
            <a class="bjui-navbar-logo" href="#"><img src="/Public/Static/B-JUI/images/logo.png"></a>
        </div>
        <nav id="bjui-navbar-collapse">
            <ul class="bjui-navbar-right">
                <li class="datetime"><div><span id="bjui-date"></span><br><i class="fa fa-clock-o"></i> <span id="bjui-clock"></span></div></li>
                <li><a href="http://www.bootcss.com/" target="_blank">Bootstrap中文网</a></li>
                <li><a href="http://www.j-ui.com/" target="_blank">DWZ(j-ui)官网</a></li>
                <li><a href="#">消息 <span class="badge">4</span></a></li>
                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">我的账户 <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="changepwd.html" data-toggle="dialog" data-id="changepwd_page" data-mask="true" data-width="400" data-height="260">&nbsp;<span class="glyphicon glyphicon-lock"></span> 修改密码&nbsp;</a></li>
                        <li><a href="#">&nbsp;<span class="glyphicon glyphicon-user"></span> 我的资料</a></li>
                        <li class="divider"></li>
                        <li><a href="login.html" class="red">&nbsp;<span class="glyphicon glyphicon-off"></span> 注销登陆</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href="#" class="dropdown-toggle theme purple" data-toggle="dropdown"><i class="fa fa-tree"></i></a>
                    <ul class="dropdown-menu" role="menu" id="bjui-themes">
                        <li><a href="javascript:;" class="theme_default" data-toggle="theme" data-theme="default">&nbsp;<i class="fa fa-tree"></i> 黑白分明&nbsp;&nbsp;</a></li>
                        <li><a href="javascript:;" class="theme_orange" data-toggle="theme" data-theme="orange">&nbsp;<i class="fa fa-tree"></i> 橘子红了</a></li>
                        <li class="active"><a href="javascript:;" class="theme_purple" data-toggle="theme" data-theme="purple">&nbsp;<i class="fa fa-tree"></i> 紫罗兰</a></li>
                        <li><a href="javascript:;" class="theme_blue" data-toggle="theme" data-theme="blue">&nbsp;<i class="fa fa-tree"></i> 青出于蓝</a></li>
                        <li><a href="javascript:;" class="theme_red" data-toggle="theme" data-theme="red">&nbsp;<i class="fa fa-tree"></i> 红红火火</a></li>
                        <li><a href="javascript:;" class="theme_green" data-toggle="theme" data-theme="green">&nbsp;<i class="fa fa-tree"></i> 绿草如茵</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </header>
    <!-- 横向菜单 start -->
    <div id="bjui-hnav">
        <button type="button" class="bjui-hnav-toggle btn-default" data-toggle="collapse" data-target="#bjui-hnav-navbar">
            <i class="fa fa-bars"></i>
        </button>
        <ul id="bjui-hnav-navbar">
            <li style="width:204px;"><a>欢迎您，超级管理员！</a></li>
            <li><a href="javascript:;" data-toggle="slidebar"><i class="fa fa-check-square-o"></i> 表单元素</a>
                <ul id="bjui-hnav-tree1" class="ztree ztree_main" data-toggle="ztree" data-on-click="MainMenuClick" data-expand-all="true" data-noinit="true">
                    <li data-id="1" data-pid="0" data-faicon="th-large">表单元素</li>
                    <li data-id="10" data-pid="1" data-url="form-button.html" data-tabid="form-button" data-faicon="hand-o-up">按钮</li>
                    <li data-id="11" data-pid="1" data-url="form-input.html" data-tabid="form-input" data-faicon="terminal">文本框</li>
                    <li data-id="12" data-pid="1" data-url="form-select.html" data-tabid="form-select" data-faicon="caret-square-o-down">下拉选择框</li>
                    <li data-id="13" data-pid="1" data-url="form-checkbox.html" data-tabid="table" data-faicon="check-square-o">复选、单选框</li>
                    <li data-id="14" data-pid="1" data-url="form.html" data-tabid="form" data-faicon="list">表单综合演示</li>
                </ul>
            </li>
            <li><a href="javascript:;" data-toggle="slidebar"><i class="fa fa-table"></i> 表格</a>
                <ul id="bjui-hnav-tree2" class="ztree ztree_main" data-toggle="ztree" data-on-click="MainMenuClick" data-expand-all="true" data-noinit="true">
                    <li data-id="2" data-pid="0">表格</li>
                    <li data-id="20" data-pid="2" data-url="table.html" data-tabid="table">普通表格</li>
                    <li data-id="21" data-pid="2" data-url="table-fixed.html" data-tabid="table-fixed">固定表头表格</li>
                    <li data-id="22" data-pid="2" data-url="table-edit.html" data-tabid="table-edit">可编辑表格</li>
                </ul>
            </li>
            <li><a href="javascript:;" data-toggle="slidebar"><i class="fa fa-table"></i> Datagrid(beta)</a>
                <ul id="bjui-hnav-tree-datagrid" class="ztree ztree_main" data-toggle="ztree" data-on-click="MainMenuClick" data-expand-all="true" data-noinit="true">
                    <li data-id="3" data-pid="0">datagrid (beta)</li>
                    <li data-id="31" data-pid="3" data-url="datagrid-convertable.html" data-tabid="datagrid-convertable">转换普通表格</li>
                    <li data-id="32" data-pid="3" data-url="datagrid-demo.html" data-tabid="datagrid-demo">完整示例</li>
                    <li data-id="33" data-pid="3" data-url="datagrid-datatype.html" data-tabid="datagrid-datatype">三种数据类型</li>
                </ul>
            </li>
            <li><a href="javascript:;" data-toggle="slidebar"><i class="fa fa-plane"></i> 弹出窗口</a>
                <ul id="bjui-hnav-tree4" class="ztree ztree_main" data-toggle="ztree" data-on-click="MainMenuClick" data-expand-all="true" data-noinit="true">
                    <li data-id="4" data-pid="0">弹出窗口</li>
                    <li data-id="40" data-pid="4" data-url="dialog.html" data-tabid="dialog">弹出窗口</li>
                    <li data-id="41" data-pid="4" data-url="alert.html" data-tabid="alert">信息提示</li>
                </ul>
            </li>
            <li><a href="javascript:;" data-toggle="slidebar"><i class="fa fa-image"></i> 图形报表</a>
                <ul id="bjui-hnav-tree5" class="ztree ztree_main" data-toggle="ztree" data-on-click="MainMenuClick" data-expand-all="true" data-noinit="true">
                    <li data-id="5" data-pid="0">图形报表</li>
                    <li data-id="51" data-pid="5" data-url="highcharts.html" data-tabid="chart">Highcharts图表</li>
                    <li data-id="52" data-pid="5" data-url="echarts.html" data-tabid="echarts">ECharts图表</li>
                </ul>
            </li>
            <li><a href="javascript:;" data-toggle="slidebar"><i class="fa fa-coffee"></i> 框架组件</a>
                <ul id="bjui-hnav-tree6" class="ztree ztree_main" data-toggle="ztree" data-on-click="MainMenuClick" data-expand-all="true" data-noinit="true">
                    <li data-id="6" data-pid="0">框架组件</li>
                    <li data-id="61" data-pid="6" data-url="tabs.html" data-tabid="tabs">选项卡</li>
                </ul>
            </li>
            <li><a href="javascript:;" data-toggle="slidebar"><i class="fa fa-bug"></i> 其他插件</a>
                <ul id="bjui-hnav-tree6" class="ztree ztree_main" data-toggle="ztree" data-on-click="MainMenuClick" data-expand-all="true" data-noinit="true">
                    <li data-id="7" data-pid="0">其他插件</li>
                    <li data-id="71" data-pid="7" data-url="ztree.html" data-tabid="ztree">zTree</li>
                    <li data-id="72" data-pid="7" data-url="ztree-select.html" data-tabid="ztree-select">zTree下拉选择</li>
                </ul>
            </li>
            <li><a href="javascript:;" data-toggle="slidebar"><i class="fa fa-database"></i> 综合应用</a>
                <ul id="bjui-hnav-tree8" class="ztree ztree_main" data-toggle="ztree" data-on-click="MainMenuClick" data-expand-all="true" data-noinit="true">
                    <li data-id="8" data-pid="0">综合应用</li>
                    <li data-id="80" data-pid="8" data-url="table-layout.html" data-tabid="table-layout">局部刷新1</li>
                </ul>
            </li>
            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-cog"></i> 系统设置 <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="#">角色权限</a></li>
                    <li><a href="#">用户列表</a></li>
                    <li class="divider"></li>
                    <li><a href="#">关于我们</a></li>
                    <li class="divider"></li>
                    <li><a href="#">友情链接</a></li>
                </ul>
            </li>
        </ul>
        <form class="hnav-form">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                    <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
                </span>
            </div>
        </form>
    </div>
    <!-- 横向菜单 end -->
    <div id="bjui-container" class="clearfix">
        <!-- 导航栏 start -->
        <div id="bjui-leftside">
            <div id="bjui-sidebar-s">
                <div class="collapse"></div>
            </div>
            <div id="bjui-sidebar">
                <div class="toggleCollapse"><h2><i class="fa fa-bars"></i> 导航栏 <i class="fa fa-bars"></i></h2><a href="javascript:;" class="lock"><i class="fa fa-lock"></i></a></div>
                <div class="panel-group panel-main" data-toggle="accordion" id="bjui-accordionmenu" data-heightbox="#bjui-sidebar" data-offsety="26">
                    <div class="panel panel-default">
                        <div class="panel-heading panelContent">
                            <h4 class="panel-title"><a data-toggle="collapse" data-parent="#bjui-accordionmenu" href="#bjui-collapse0" class="active"><i class="fa fa-caret-square-o-down"></i>&nbsp;考勤系统</a></h4>
                        </div>
                        <div id="bjui-collapse0" class="panel-collapse panelContent collapse in">
                            <div class="panel-body" >
                                <ul id="bjui-tree0" class="ztree ztree_main" data-toggle="ztree" data-on-click="MainMenuClick" data-expand-all="true">
                                    <li data-id="1" data-pid="0" data-faicon="th-large">考勤系统</li>
                                    <li data-id="10" data-pid="1" data-url="<?php echo U('Attence/index');?>" data-tabid="form-button" data-faicon="hand-o-up">打卡记录</li>
                                    <li data-id="11" data-pid="1" data-url="<?php echo U('Attence/build');?>" data-tabid="form-input" data-faicon="terminal">计算考勤</li>
                                    <li data-id="12" data-pid="1" data-url="<?php echo U('Attence/import');?>" data-tabid="form-select" data-faicon="caret-square-o-down">excel导入</li>
                                    <li data-id="13" data-pid="1" data-url="<?php echo U('Attence/rule');?>" data-tabid="table" data-faicon="check-square-o">设置规则模版</li>
                                    <li data-id="14" data-pid="1" data-url="form.html" data-tabid="form" data-faicon="list">表单综合演示</li>
                                    
                                </ul>
                            </div>
                        </div>
                        <div class="panelFooter"><div class="panelFooterContent"></div></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- 导航栏 end -->
        <!-- 工作区 start -->
        <div id="bjui-navtab" class="tabsPage">
            <div class="tabsPageHeader">
                <div class="tabsPageHeaderContent">
                    <ul class="navtab-tab nav nav-tabs">
                        <li data-url="<?php echo U('index_layout');?>"><a href="javascript:;"><span><i class="fa fa-home"></i> #maintab#</span></a></li>
                    </ul>
                </div>
                <div class="tabsLeft"><i class="fa fa-angle-double-left"></i></div>
                <div class="tabsRight"><i class="fa fa-angle-double-right"></i></div>
                <div class="tabsMore"><i class="fa fa-angle-double-down"></i></div>
            </div>
            <ul class="tabsMoreList">
                <li><a href="javascript:;">#maintab#</a></li>
            </ul>
            <div class="navtab-panel tabsPageContent">
                <div class="navtabPage unitBox">
                    <div class="bjui-pageHeader" style="background:#FFF;">
                        <div style="padding: 0 15px;">
                            <h4>
                                B-JUI 前端框架　
                                <a target="_blank" href="http://shang.qq.com/wpa/qunwpa?idkey=0047455f3845597286edd381d54076b1e10a45c0c735115f0ee74961f70880af"><img border="0" src="/Public/Static/B-JUI/images/group.png" alt="B-JUI前端框架-群1" title="B-JUI前端框架-群1" style="vertical-align:top;"></a>
                                <span class="label label-default" style="vertical-align:middle;">(1群已满)</span>　
                                <a target="_blank" href="http://shang.qq.com/wpa/qunwpa?idkey=96974f9b311cb8566e371703e2e4c2abb23c4835f4ec6c2893652f7a3b920c32"><img border="0" src="/Public/Static/B-JUI/images/group.png" alt="B-JUI前端框架-群2" title="B-JUI前端框架-群2" style="vertical-align:top;"></a>
                            </h4>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="alert alert-success" role="alert" style="margin:0 0 5px; padding:5px 15px;">
                                        <strong>B-JUI团队欢迎你!</strong>
                                        <br><span class="label label-default">开发：</span> <a href="http://weibo.com/xknaan" target="_blank">@萧克南 （成都锦杨）</a>
                                        <br><span class="label label-default">开发：</span> <a href="http://www.topstack.cn" target="_blank">@小策一喋 （北京）</a>
                                        <br><span class="label label-default">测试 & 推广：</span> <a href="#" target="_blank">@Jack Yuan （成都锦杨）</a>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="alert alert-info" role="alert" style="margin:0 0 5px; padding:5px 15px;">
                                        <h5>官方论坛：<a href="http://www.b-jui.com/" target="_blank">http://www.b-jui.com/</a></h5>
                                        <h5>项目地址：<a href="http://git.oschina.net/xknaan/B-JUI" target="_blank">GIT</a>　<a href="http://www.oschina.net/p/bootstrap-for-DWZ" target="_blank">OSCHINA</a></h5>
                                        <h5>微博地址：<a href="http://weibo.com/xknaan" target="_blank">http://weibo.com/xknaan</a></h5>
                                        <h5>PHP整合：<a href="http://git.oschina.net/xvpindex/BJUI_TP_CMS" target="_blank">ThinkPHP整合</a></h5>
                                    </div>                                  
                                </div>
                                <div class="col-md-4">
                                    <div class="alert alert-info" role="alert" style="margin:0 0 5px; padding:5px 15px;">
                                        <h5>框架演示：<a href="http://b-jui.com/" target="_blank">http://b-jui.com/</a></h5>
                                        <h5>DWZ(J-UI)官网：<a href="http://www.j-ui.com/" target="_blank">http://www.j-ui.com/</a></h5>
                                        <h5>Bootstrap中文网：<a href="http://www.bootcss.com/" target="_blank">http://www.bootcss.com/</a></h5>
                                        <h5>JAVA整合：<a href="http://git.oschina.net/xvpindex/BJUI_SSM_DEMO" target="_blank">SSM整合</a></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- 工作区 end -->
    </div>
    <footer id="bjui-footer">Copyright &copy; 2013 - 2015　<a href="" target="_blank">中远融投</a>
    </footer>
</body>
</html>