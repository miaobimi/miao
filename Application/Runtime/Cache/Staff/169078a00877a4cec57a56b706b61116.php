<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="renderer" content="webkit">

    <title>中远融投</title>
    <meta name="keywords" content="">
    <meta name="description" content="">

    <link href="/Public/Static/bootstrapv3/css/bootstrap.min.css?v=3.4.0" rel="stylesheet">
    <link href="/Public/Static/font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <link href="/Public/Staff/Css/animate.css" rel="stylesheet">
    <link href="/Public/Staff/Css/style.css" rel="stylesheet">
    
    <script src="/Public/Static/jquery-1.10.2.min.js"></script>
    <script src="/Public/Static/bootstrapv3/js/bootstrap.min.js"></script>
    <script src="/Public/Static/metisMenu/jquery.metisMenu.js"></script>
    <script src="/Public/Static/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="/Public/Staff/Js/common.js"></script>

</head>

<body>
    <div id="wrapper">
        <nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav" id="side-menu">
            <li class="nav-header">

                <div class="dropdown profile-element"> <span>
                    <img alt="image" class="img-circle" src="/Public/Staff/Images/miao.jpg" />
                     </span>
                    <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
                        <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold"><?php echo session('uname');?></strong>
                     </span> <span class="text-muted text-xs block">xxxxx <b class="caret"></b></span> </span>
                    </a>
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        <li><a data-toggle="modal" href="#modal-form">修改密码</a>
                        </li>
                        <li><a href="profile.html">个人资料</a>
                        </li>
                        <li><a href="">联系我们</a>
                        </li>
                        <li><a href="mailbox.html">信箱</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="<?php echo U('Public/login');?>">安全退出</a>
                        </li>
                    </ul>
                </div>
                <div class="logo-element">
                    H+
                </div>

            </li>
            <?php if(authcheck('Staff/Index/index',session('uid'))): ?><li>
                    <a href="index.html"><i class="icon-th-large"></i> <span class="nav-label">主页</span> <span class="icon-angle-down"></span></a>
                    <ul class="nav nav-second-level">
                        <li><a href="<?php echo U('Index/index');?>">主页</a></li>
                    </ul>
                </li><?php endif; ?>
            <?php if(authcheck('Staff/Out/index',session('uid'))): ?><li>
                    <a href="index.html#"><i class="fa icon-globe"></i> <span class="nav-label">外出管理</span><span class="icon-angle-down"></span></a>
                    <ul class="nav nav-second-level">
                        <li><a href="<?php echo U('Out/index');?>">提单</a></li>
                        <li><a href="<?php echo U('Out/lists');?>">列表</a></li>
                        <li><a href="<?php echo U('Out/alists');?>">经理审核</a></li>
                        <li><a href="<?php echo U('Out/blists');?>">总监审核</a></li>
                    </ul>
                </li><?php endif; ?>
            <?php if(authcheck('Staff/Upcard/index',session('uid'))): ?><li>
                    <a href="index.html#"><i class="fa icon-globe"></i> <span class="nav-label">补卡管理</span><span class="icon-angle-down"></span></a>
                    <ul class="nav nav-second-level">
                        <li><a href="<?php echo U('Upcard/index');?>">提单</a></li>
                        <li><a href="<?php echo U('Upcard/lists');?>">列表</a></li>
                        <li><a href="<?php echo U('Upcard/alists');?>">经理审核</a></li>
                        <li><a href="<?php echo U('Upcard/blists');?>">总监审核</a></li>
                    </ul>
                </li><?php endif; ?>
            <?php if(authcheck('Staff/Off/index',session('uid'))): ?><li>
                    <a href="index.html#"><i class="fa icon-globe"></i> <span class="nav-label">请假管理</span><span class="icon-angle-down"></span></a>
                    <ul class="nav nav-second-level">
                        <li><a href="<?php echo U('Off/index');?>">提单</a></li>
                        <li><a href="<?php echo U('Off/lists');?>">列表</a></li>
                        <li><a href="<?php echo U('Off/alists');?>">经理审核</a></li>
                        <li><a href="<?php echo U('Off/blists');?>">总监审核</a></li>
                    </ul>
                </li><?php endif; ?>
            <?php if(authcheck('Staff/User/lists',session('uid'))): ?><li>
                    <a href="index.html#"><i class="fa icon-globe"></i> <span class="nav-label">用户管理</span><span class="icon-angle-down"></span></a>
                    <ul class="nav nav-second-level">
                        <li><a href="<?php echo U('User/lists');?>">用户列表</a></li>
                        <li><a href="<?php echo U('User/index');?>">添加用户</a></li>
                    </ul>
                </li><?php endif; ?>
            <?php if(authcheck('Staff/Auth/index',session('uid'))): ?><li>
                    <a href="index.html#"><i class="fa icon-globe"></i> <span class="nav-label">权限管理</span><span class="icon-angle-down"></span></a>
                    <ul class="nav nav-second-level">
                        <li><a href="<?php echo U('Auth/index');?>">角色列表</a></li>
                        <li><a href="<?php echo U('Auth/addRole');?>">添加角色</a></li>
                        <li><a href="<?php echo U('Auth/node');?>">节点列表</a></li>
                        <li><a href="<?php echo U('Auth/addNode');?>">添加节点</a></li>
                        <li><a href="<?php echo U('Auth/addModules');?>">添加模块</a></li>
                    </ul>
                </li><?php endif; ?>
            <li>
                <a href="index.html#"><i class="fa icon-globe"></i> <span class="nav-label">考勤管理</span><span class="icon-angle-down"></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="<?php echo U('Attence/index');?>">考勤列表</a></li>
                    <li><a href="<?php echo U('Attence/import');?>">导入考勤表</a></li>
                </ul>
            </li>
        </ul>

    </div>
</nav>
<div class="theme-config">
    <div class="theme-config-box">
        <div class="spin-icon">
            <i class="icon-cog icon-spin"></i>
        </div>
        <div class="skin-setttings">
            <div class="title">主题设置</div>
            <div class="setings-item">
                <span>
                        收起左侧菜单
                    </span>

                <div class="switch">
                    <div class="onoffswitch">
                        <input type="checkbox" name="collapsemenu" class="onoffswitch-checkbox" id="collapsemenu">
                        <label class="onoffswitch-label" for="collapsemenu">
                            <span class="onoffswitch-inner"></span>
                            <span class="onoffswitch-switch"></span>
                        </label>
                    </div>
                </div>
            </div>
            <div class="setings-item">
                <span>
                        固定侧边栏
                    </span>

                <div class="switch">
                    <div class="onoffswitch">
                        <input type="checkbox" name="fixedsidebar" class="onoffswitch-checkbox" id="fixedsidebar">
                        <label class="onoffswitch-label" for="fixedsidebar">
                            <span class="onoffswitch-inner"></span>
                            <span class="onoffswitch-switch"></span>
                        </label>
                    </div>
                </div>
            </div>
            <div class="setings-item">
                <span>
                        固定顶部
                    </span>

                <div class="switch">
                    <div class="onoffswitch">
                        <input type="checkbox" name="fixednavbar" class="onoffswitch-checkbox" id="fixednavbar">
                        <label class="onoffswitch-label" for="fixednavbar">
                            <span class="onoffswitch-inner"></span>
                            <span class="onoffswitch-switch"></span>
                        </label>
                    </div>
                </div>
            </div>
            <div class="setings-item">
                <span>
                        固定宽度
                    </span>

                <div class="switch">
                    <div class="onoffswitch">
                        <input type="checkbox" name="boxedlayout" class="onoffswitch-checkbox" id="boxedlayout">
                        <label class="onoffswitch-label" for="boxedlayout">
                            <span class="onoffswitch-inner"></span>
                            <span class="onoffswitch-switch"></span>
                        </label>
                    </div>
                </div>
            </div>
            <div class="setings-item">
                <span>
                        固定底部
                    </span>

                <div class="switch">
                    <div class="onoffswitch">
                        <input type="checkbox" name="fixedfooter" class="onoffswitch-checkbox" id="fixedfooter">
                        <label class="onoffswitch-label" for="fixedfooter">
                            <span class="onoffswitch-inner"></span>
                            <span class="onoffswitch-switch"></span>
                        </label>
                    </div>
                </div>
            </div>
            <div class="setings-item">
                <span>
                        RTL模式
                    </span>

                <div class="switch">
                    <div class="onoffswitch">
                        <input type="checkbox" name="RTLmode" class="onoffswitch-checkbox" id="RTLmode">
                        <label class="onoffswitch-label" for="RTLmode">
                            <span class="onoffswitch-inner"></span>
                            <span class="onoffswitch-switch"></span>
                        </label>
                    </div>
                </div>
            </div>

            <div class="title">皮肤选择</div>
            <div class="setings-item default-skin">
                <span class="skin-name ">
                         <a href="#" class="s-skin-0">
                             默认皮肤
                         </a>
                    </span>
            </div>
            <div class="setings-item blue-skin">
                <span class="skin-name ">
                        <a href="#" class="s-skin-1">
                            蓝色主题
                        </a>
                    </span>
            </div>
            <div class="setings-item yellow-skin">
                <span class="skin-name ">
                        <a href="#" class="s-skin-3">
                            黄色/紫色主题
                        </a>
                    </span>
            </div>
            <div class="setings-item ultra-skin">
                <span class="skin-name ">
                        <a href="#" class="s-skin-2">
                            灰色主题
                        </a>
                    </span>
            </div>
        </div>
    </div>
</div>
<div id="modal-form" class="modal fade" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-12">
                        <h3 class="m-t-none m-b">修改密码</h3>

                        <p>欢迎登录本站(⊙o⊙)</p>

                        <form role="form" id="editform">
                            <div class="form-group">
                                <label>旧密码：</label>
                                <input type="password" placeholder="请输入密码" class="form-control" name="oldpassword" id="oldpassword">
                                <div style="display: inline" id="tip1"></div>
                            </div>
                            <div class="form-group">
                                <label>新密码：</label>
                                <input type="password" placeholder="请输入密码" class="form-control" name="password1" id="password1">
                                <div style="display: inline" id="tip2"></div>
                            </div>
                            <div class="form-group">
                                <label>确认密码：</label>
                                <input type="password" placeholder="请输入密码" class="form-control" name="password2">
                                <div style="display: inline" id="tip3"></div>                                                                    
                            </div>
                            <div>
                                <button class="btn btn-sm btn-primary pull-right m-t-n-xs" type="submit" id="btn1"><strong>确认修改</strong>
                                </button>
                            </div>
                            <div id="tip4"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <!-- jQuery Validation plugin javascript-->
    <script src="/Public/Static/validate/jquery.validate.min.js"></script>
    <script src="/Public/Static/validate/messages_zh.min.js"></script>
    <script src="/Public/Static/layer1.9.3/layer.js"></script>
<script>
    $().ready(function (){
        $("#editform").validate({ 
                    rules: {
                        oldpassword: {
                            required : true,
                            // remote:{
                            //     type:'POST',
                            //     //dataType:"json",
                            //     url:"<?php echo U('Public/checkpwd');?>",
                            //     data:{
                            //         'oldpassword':
                            //         function(){
                            //                return $('#oldpassword').val(); 
                            //         }
                            //     }
                            // }
                        },
                        password1 : {
                            required : true,
                            minlength : 6
                        },
                        password2: {
                            required : true,
                            minlength: 6,
                            equalTo: '#password1'
                        }
                    },
                    messages: {
                        oldpassword: {
                            required : "请输入旧密码",
                            remote:"旧密码错误"
                        },
                        password1: {
                            required: "请输入新密码",
                            minlength: '最小长度为6'
                        },
                        password2: {
                            required : "请确认新密码",
                            minlength: '最小长度为6',
                            equalTo: '两次密码必须一致'

                        }
                    },
                    submitHandler: function(form) {  //通过之后回调 
                        var param = $("#editform").serialize();
                        alert(param);
                        $.ajax({ 
                            url : "<?php echo U('Public/changepwd');?>", 
                            type : "POST", 
                            dataType : "json", 
                            data: param, 
                            success : function(result) { 
                                if(result.status){
                                    // layer.alert(result.info,{icon:6})
                                    layer.alert(result.info,{icon:6});
                                }else{
                                    layer.alert(result.info,{icon:5});
                                }
                            } 
                        }); 
                    } 
                });
        })
    // 顶部菜单固定
    $('#fixednavbar').click(function () {
        if ($('#fixednavbar').is(':checked')) {
            $(".navbar-static-top").removeClass('navbar-static-top').addClass('navbar-fixed-top');
            $("body").removeClass('boxed-layout');
            $("body").addClass('fixed-nav');
            $('#boxedlayout').prop('checked', false);
        } else {
            $(".navbar-fixed-top").removeClass('navbar-fixed-top').addClass('navbar-static-top');
            $("body").removeClass('fixed-nav');
        }
    });

    // 左侧菜单固定
    $('#fixedsidebar').click(function () {
        if ($('#fixedsidebar').is(':checked')) {
            $("body").addClass('fixed-sidebar');
            $('.sidebar-collapse').slimScroll({
                height: '100%',
                railOpacity: 0.9
            });
        } else {
            $('.sidebar-collapse').slimscroll({
                destroy: true
            });
            $('.sidebar-collapse').attr('style', '');
            $("body").removeClass('fixed-sidebar');
        }
    });

    // 收起左侧菜单
    $('#collapsemenu').click(function () {
        if ($('#collapsemenu').is(':checked')) {
            $("body").addClass('mini-navbar');
            SmoothlyMenu();
        } else {
            $("body").removeClass('mini-navbar');
            SmoothlyMenu();
        }
    });

    // 自适应宽度
    $('#boxedlayout').click(function () {
        if ($('#boxedlayout').is(':checked')) {
            $("body").addClass('boxed-layout');
            $('#fixednavbar').prop('checked', false);
            $(".navbar-fixed-top").removeClass('navbar-fixed-top').addClass('navbar-static-top');
            $("body").removeClass('fixed-nav');
            $(".footer").removeClass('fixed');
            $('#fixedfooter').prop('checked', false);
        } else {
            $("body").removeClass('boxed-layout');
        }
    });

    // 底部版权固定
    $('#fixedfooter').click(function () {
        if ($('#fixedfooter').is(':checked')) {
            $('#boxedlayout').prop('checked', false);
            $("body").removeClass('boxed-layout');
            $(".footer").addClass('fixed');
        } else {
            $(".footer").removeClass('fixed');
        }
    });

    // RTL模式
    $('#RTLmode').click(function () {
        if ($('#RTLmode').is(':checked')) {
            $('head').append('<link href="css/bootstrap-rtl.css" id="rtl-mode" rel="stylesheet">');
            $('body').addClass('rtls');
        } else {
            $('#rtl-mode').remove();
            $('body').removeClass('rtls');
        }
    });

    // 皮肤选择
    $('.spin-icon').click(function () {
        $(".theme-config-box").toggleClass("show");
    });

    // 默认主题
    $('.s-skin-0').click(function () {
        $("body").removeClass("skin-1");
        $("body").removeClass("skin-2");
        $("body").removeClass("skin-3");
    });

    // 蓝色主题
    $('.s-skin-1').click(function () {
        $("body").removeClass("skin-2");
        $("body").removeClass("skin-3");
        $("body").addClass("skin-1");
    });

    // 灰色主题
    $('.s-skin-2').click(function () {
        $("body").removeClass("skin-1");
        $("body").removeClass("skin-3");
        $("body").addClass("skin-2");
    });

    // 黄色主题
    $('.s-skin-3').click(function () {
        $("body").removeClass("skin-1");
        $("body").removeClass("skin-2");
        $("body").addClass("skin-3");
    });
</script>

<style>
    .fixed-nav .slimScrollDiv #side-menu {
        padding-bottom: 60px;
    }
</style>

        <div id="page-wrapper" class="gray-bg dashbard-1">
            <div class="row border-bottom">
                <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
                    <div class="navbar-header">
                        <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="icon-reorder"></i> </a>
                        <form role="search" class="navbar-form-custom" method="post" action="search_results.html">
                            <div class="form-group">
                                <input type="text" placeholder="请输入您需要查找的内容 …" class="form-control" name="top-search" id="top-search">
                            </div>
                        </form>
                    </div>
                    <ul class="nav navbar-top-links navbar-right">
                        <li>
                            <span class="m-r-sm text-muted welcome-message"><a href="index.html" title="返回首页"><i class="icon-home"></i></a>欢迎使用</span>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle count-info" data-toggle="dropdown" href="index.html#">
                                <i class="icon-envelope"></i> <span class="label label-warning">16</span>
                            </a>
                            <ul class="dropdown-menu dropdown-messages">
                                <li>
                                    <div class="dropdown-messages-box">
                                        <a href="profile.html" class="pull-left">
                                            <img alt="image" class="img-circle" src="/Public/Staff/Images/a7.jpg">
                                        </a>
                                        <div class="media-body">
                                            <small class="pull-right">46小时前</small>
                                            <strong>小四</strong> 项目已处理完结
                                            <br>
                                            <small class="text-muted">3天前 2014.11.8</small>
                                        </div>
                                    </div>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <div class="dropdown-messages-box">
                                        <a href="profile.html" class="pull-left">
                                            <img alt="image" class="img-circle" src="/Public/Staff/Images/a4.jpg">
                                        </a>
                                        <div class="media-body ">
                                            <small class="pull-right text-navy">25小时前</small>
                                            <strong>国民岳父</strong> 这是一条测试信息
                                            <br>
                                            <small class="text-muted">昨天</small>
                                        </div>
                                    </div>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <div class="text-center link-block">
                                        <a href="mailbox.html">
                                            <i class="icon-envelope"></i> <strong> 查看所有消息</strong>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle count-info" data-toggle="dropdown" href="index.html#">
                                <i class="icon-bell"></i> <span class="label label-primary">8</span>
                            </a>
                            <ul class="dropdown-menu dropdown-alerts">
                                <li>
                                    <a href="mailbox.html">
                                        <div>
                                            <i class="icon-envelope fa-fw"></i> 您有16条未读消息
                                            <span class="pull-right text-muted small">4分钟前</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="profile.html">
                                        <div>
                                            <i class="icon-qq fa-fw"></i> 3条新回复
                                            <span class="pull-right text-muted small">12分钟钱</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <div class="text-center link-block">
                                        <a href="notifications.html">
                                            <strong>查看所有 </strong>
                                            <i class="icon-angle-right"></i>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="<?php echo U('Public/login');?>">
                                <i class="icon-signout"></i> 退出
                            </a>
                        </li>
                    </ul>

                </nav>
            </div>
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>添加用户</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.html">主页</a>
                        </li>
                        <li>
                            <a>表格</a>
                        </li>
                        <li>
                            <strong>列表</strong>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-2">

                </div>
            </div>
            <div class="wrapper wrapper-content animated fadeInRight">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <h5>添加用户</h5>
                                <div class="ibox-tools">
                                    <a class="collapse-link">
                                        <i class="fa fa-chevron-up"></i>
                                    </a>
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="table_basic.html#">
                                        <i class="fa fa-wrench"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-user">
                                        <li><a href="table_basic.html#">选项1</a>
                                        </li>
                                        <li><a href="table_basic.html#">选项2</a>
                                        </li>
                                    </ul>
                                    <a class="close-link">
                                        <i class="fa fa-times"></i>
                                    </a>
                                </div>
                            </div>
                            <form id='infoform'>
                            <div class="ibox-content">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="ibox float-e-margins">
                                           
                                            <div class="form-horizontal m-t" >
                                                <div class="form-group">
                                                    <label class="col-sm-5 control-label">用户名称：</label>
                                                    <div class="col-sm-7">
                                                        <input name="username" minlength="2" type="text" value="<?php echo ($user['username']); ?>" class="form-control"  aria-required="true">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-5 control-label">工号：</label>
                                                    <div class="col-sm-7">
                                                        <input name="number" minlength="2" type="text" value="<?php echo ($user['number']); ?>" class="form-control"  aria-required="true">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-5 control-label">英文名：</label>
                                                    <div class="col-sm-7">
                                                        <input name="nickname" minlength="2" type="text" value="<?php echo ($user['nickname']); ?>" class="form-control"  aria-required="true">
                                                    </div>
                                                </div>
                                                <!-- <div class="form-group">
                                                    <label class="col-sm-3 control-label">所属组：</label>
                                                    <div class="col-sm-6">
                                                        <select class="form-control" name="groupname" id="groupname">
                                                                <option value="">-选择所属组-</option>
                                                            <?php if(is_array($list1)): $i = 0; $__LIST__ = $list1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="$vo['id']"><?php echo ($vo["title"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                                                        </select>
                                                    </div>
                                                </div> -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="ibox float-e-margins">
                                           
                                            <div class="form-horizontal m-t" >
                                                
                                                <div class="form-group">
                                                    <label class="col-sm-5 control-label">性别：</label>
                                                    <div class="col-sm-7">
                                                        <label class="checkbox-inline i-checks">
                                                            <input name="sex" <?php if(($user['sex']) == 0): ?>checked="true"<?php endif; ?> value="0" type="radio">&nbsp;男
                                                        </label>
                                                        <label class="checkbox-inline i-checks">
                                                            <input name="sex" <?php if(($user['sex']) == 1): ?>checked="true"<?php endif; ?> value="1" type="radio">&nbsp;女
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-5 control-label">婚姻状况：</label>
                                                    <div class="col-sm-7">
                                                        <label class="checkbox-inline i-checks">
                                                            <input name="marriage" <?php if(($user['marriage']) == 0): ?>checked="true"<?php endif; ?> value="0" type="radio">&nbsp;是
                                                        </label>
                                                        <label class="checkbox-inline i-checks">
                                                            <input name="marriage" <?php if(($user['marriage']) == 1): ?>checked="true"<?php endif; ?> value="1" type="radio">&nbsp;否
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-5 control-label">手机：</label>
                                                    <div class="col-sm-7">
                                                        <input name="mobile" minlength="2" type="text" value="<?php echo ($user['mobile']); ?>" class="form-control"  aria-required="true">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-5 control-label">QQ：</label>
                                                    <div class="col-sm-7">
                                                        <input name="qq" minlength="2" type="text" value="<?php echo ($user['qq']); ?>" class="form-control"  aria-required="true">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-5 control-label">邮箱：</label>
                                                    <div class="col-sm-7">
                                                        <input name="email" minlength="2" type="text" value="<?php echo ($user['email']); ?>" class="form-control"  aria-required="true">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-5 control-label">身份证：</label>
                                                    <div class="col-sm-7">
                                                        <input name="identity" minlength="2" type="text" value="<?php echo ($user['identity']); ?>" class="form-control"  aria-required="true">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-5 control-label">出生日期：</label>
                                                    <div class="col-sm-7">
                                                        <input name="birth" id='birth' minlength="2" type="text" <?php if($user['birth'] != ''): ?>value="<?php echo (date('Y-m-d',$user['birth'])); ?>"<?php endif; ?> class="form-control layer-date"  aria-required="true">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-5 control-label">本人住址：</label>
                                                    <div class="col-sm-7">
                                                        <input name="address" minlength="2" type="text" value="<?php echo ($user['address']); ?>" class="form-control"  aria-required="true">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-5 control-label">户口所在地：</label>
                                                    <div class="col-sm-7">
                                                        <input name="households" minlength="2" type="text" value="<?php echo ($user['households']); ?>" class="form-control"  aria-required="true">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-5">
                                        <div class="ibox float-e-margins">
                                           
                                            <div class="form-horizontal m-t" >
                                                <div class="form-group">
                                                    <label class="col-sm-5 control-label">平台账号：</label>
                                                    <div class="col-sm-6">
                                                        <input name="platform" minlength="2" type="text" value="<?php echo ($user['platform']); ?>" class="form-control" aria-required="true">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-5 control-label">是否住宿：</label>
                                                    <div class="col-sm-6">
                                                        <label class="checkbox-inline i-checks">
                                                            <input name="stay" <?php if(($user['stay']) == 0): ?>checked="true"<?php endif; ?> value="0" type="radio">&nbsp;是
                                                        </label>
                                                        <label class="checkbox-inline i-checks">
                                                            <input name="stay" <?php if(($user['stay']) == 1): ?>checked="true"<?php endif; ?> value="1" type="radio">&nbsp;否
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-5 control-label">入职日期：</label>
                                                    <div class="col-sm-6">
                                                        <input name="entry" id="entry" minlength="2" type="text" <?php if($user['birth'] != ''): ?>value="<?php echo (date('Y-m-d',$user['entry'])); ?>"<?php endif; ?> class="form-control layer-date"  aria-required="true">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-5 control-label">离职日期：</label>
                                                    <div class="col-sm-6">
                                                        <input name="quit" id="quit" minlength="2" type="text" <?php if($user['birth'] != ''): ?>value="<?php echo (date('Y-m-d',$user['quit'])); ?>"<?php endif; ?> class="form-control layer-date"  aria-required="true">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-5 control-label">合同编号：</label>
                                                    <div class="col-sm-6">
                                                        <input name="contract" minlength="2" type="text" value="<?php echo ($user['contract']); ?>" class="form-control"  aria-required="true">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-5 control-label">合同开始日期：</label>
                                                    <div class="col-sm-6">
                                                        <input name="startcon" id="startcon" minlength="2" type="text" <?php if($user['birth'] != ''): ?>value="<?php echo (date('Y-m-d',$user['startcon'])); ?>"<?php endif; ?> class="form-control layer-date"  aria-required="true">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-5 control-label">合同结束日期：</label>
                                                    <div class="col-sm-6">
                                                        <input name="endcon" id="endcon" minlength="2" type="text" <?php if($user['birth'] != ''): ?>value="<?php echo (date('Y-m-d',$user['endcon'])); ?>"<?php endif; ?> class="form-control layer-date"  aria-required="true">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-5 control-label">试用期开始日期：</label>
                                                    <div class="col-sm-6">
                                                        <input name="starttrial" id="starttrial" minlength="2" type="text" <?php if($user['birth'] != ''): ?>value="<?php echo (date('Y-m-d',$user['starttrial'])); ?>"<?php endif; ?> class="form-control layer-date"  aria-required="true">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-5 control-label">试用期结束日期：</label>
                                                    <div class="col-sm-6">
                                                        <input name="endtrial" id="endtrial" minlength="2" type="text" <?php if($user['birth'] != ''): ?>value="<?php echo (date('Y-m-d',$user['endtrial'])); ?>"<?php endif; ?> class="form-control layer-date" aria-required="true">
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            
                            <div class="ibox-content">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <div class="col-sm-4 col-sm-offset-5">
                                                <a href="<?php echo U('lists');?>" class="btn btn-danger">返回</a>&nbsp;&nbsp;&nbsp;&nbsp;
                                                <?php if($user['uid'] == session('uid')): ?><button id="upBtn" class="btn btn-primary" type="submit">修改</button>
                                                <?php else: ?>
                                                    <button id="sumBtn" class="btn btn-primary" type="submit">提交</button><?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
            <div class="footer">
                <div class="pull-right">
                    By：<a href="http://www.chntz.cn" target="_blank">xxxx</a>
                </div>
                <div>
                    <strong>Copyright</strong> 中远融投
                </div>
            </div>

        </div>
    </div>


    </div>


    <!-- iCheck -->
    <link href="/Public/Static/iCheck/skins/all.css" rel="stylesheet">
    <script src="/Public/Static/iCheck/icheck.min.js"></script>
    <!-- Custom and plugin javascript -->
    <script src="/Public/Staff/Js/hplus.js?v=2.2.0"></script>
    <script src="/Public/Static/pace/pace.min.js"></script>
    <script src="/Public/Static/layer1.9.3/layer.js"></script>
    <!-- layerdate -->
    <script src="/Public/Static/layer/laydate/laydate.js"></script>
    <script>
        //导航高亮
        highlight_subnav('<?php echo U("User/index");?>');

        $(document).ready(function () {
            $('.i-checks').iCheck({
                checkboxClass: 'icheckbox_square-green',
                radioClass: 'iradio_square-green',
            });
            //验证表单
            $("#infoform").validate({ 
                rules: {
                    username: {
                        required : true,
                    },
                    number:{
                        required:true
                        // minlength:3
                    },
                    nickname:{
                        required:true,
                    },
                    mobile:{
                        required:true,
                        digits:true,
                        minlength:11
                    },
                    email:{
                        required:true,
                        email:true,
                    },
                    qq:{
                        required:true,
                        digits:true,
                    },
                    identity:{
                        required:true,
                        minlength:15,
                    },
                    address:{
                        required:true,
                    },
                    households:{
                        required:true,
                    },
                    contract:{
                        required:true,
                    },
                    birth:{
                        required:true,
                        date:true,
                    },
                    entry:{
                        required:true,
                        date:true,
                    },
                    quit:{
                        required:true,
                        date:true,
                    },
                    startcon:{
                        required:true,
                        date:true,
                    },
                    endcon:{
                        required:true,
                        date:true,
                    },
                    starttrial:{
                        required:true,
                        date:true,
                    },
                    endtrial:{
                        required:true,
                        date:true,
                    }
                },
                messages: {
                    username: {
                        required : "请输入用户名",
                    },
                    number:{
                        required:'请输入工号',
                    },
                    nickname:{
                        required:'请输入昵称',
                    },
                    mobile:{
                        required:'请输入手机号码',
                        digits:'输入正确号码',
                        minlength:'手机位数不正确'
                    },
                    email:{
                        required:'请输入邮箱',
                        email:'邮箱格式不正确',
                    },
                    qq:{
                        required:'请输入qq号',
                        digits:'QQ号非法',
                    },
                    identity:{
                        required:'请输入身份证号',
                        minlength:'最小位数15',
                    },
                    address:{
                        required:'请输入本人住址',
                    },
                    households:{
                        required:'请输入户口所在地',
                    },
                    contract:{
                        required:'请输入合同编号',
                    },
                    birth:{
                        required:'请输入出生日期',
                        date:'日期格式不正确',
                    },
                    entry:{
                        required:'请输入入职日期',
                        date:'日期格式不正确',
                    },
                    quit:{
                        required:'请输入离职日期',
                        date:'日期格式不正确',
                    },
                    startcon:{
                        required:'请输入合同开始日期',
                        date:'日期格式不正确',
                    },
                    endcon:{
                        required:'请输入合同结束日期',
                        date:'日期格式不正确',
                    },
                    starttrial:{
                        required:'请输入试用期开始日期',
                        date:'日期格式不正确',
                    },
                    endtrial:{
                        required:'请输入试用期结束日期',
                        date:'日期格式不正确',
                    }
                },
                submitHandler: function(form) {  //通过之后回调 
                    var param = $("#infoform").serialize();
                    var re = new RegExp("uid");
                    var urlbtn;
                    if(re.test(window.location.href)){
                        urlbtn="<?php echo U('User/updateUser');?>";
                    }else{
                        urlbtn="<?php echo U('User/addUser');?>";
                    }
                    $.ajax({ 
                        url : urlbtn, 
                        type : "POST", 
                        dataType : "json", 
                        data: param, 
                        success : function(result) { 
                            if(result.status){
                                layer.alert(result.info,{icon:6});
                                window.location.href="<?php echo U('index');?>"
                            }else{
                                layer.alert(result.info,{icon:5})
                            }
                        } 
                    }); 
                } 
            });

        });
        laydate.skin('molv');

         //日期范围限制
        var birth = {
            elem: '#birth',
            format: 'YYYY/MM/DD',
            min: '1900-01-01', //最小日期
            max: '2099-06-16 ', //最大日期
            start:'1990-01-01',
            istime: false,
            istoday: false,
            choose: function (datas) {
            }
        };
        var entry = {
            elem: '#entry',
            format: 'YYYY/MM/DD',
            min: '2014-01-01', //设定最小日期为当前日期
            max: '2099-06-16 ', //最大日期
            istime: false,
            istoday: false,
            choose: function (datas) {
                quit.min = datas; //开始日选好后，重置结束日的最小日期
                quit.start = datas //将结束日的初始值设定为开始日
            }
        };
        var quit = {
            elem: '#quit',
            format: 'YYYY/MM/DD',
            min: '2014-01-01',
            max: '2099-06-16',
            istime: false,
            istoday: false,
            choose: function (datas) {
                entry.max = datas; //结束日选好后，重置开始日的最大日期
            }
        };
        var startcon = {
            elem: '#startcon',
            format: 'YYYY/MM/DD',
            min: '2014-01-01', //设定最小日期为当前日期
            max: '2099-06-16 ', //最大日期
            istime: false,
            istoday: false,
            choose: function (datas) {
                endcon.min = datas; //开始日选好后，重置结束日的最小日期
                endcon.start = datas //将结束日的初始值设定为开始日
            }
        };
        var endcon = {
            elem: '#endcon',
            format: 'YYYY/MM/DD',
            min: '2014-01-01',
            max: '2099-06-16',
            istime: false,
            istoday: false,
            choose: function (datas) {
                startcon.max = datas; //结束日选好后，重置开始日的最大日期
            }
        };
        var starttrial = {
            elem: '#starttrial',
            format: 'YYYY/MM/DD',
            min: '2014-01-01', //设定最小日期为当前日期
            max: '2099-06-16 ', //最大日期
            istime: false,
            istoday: false,
            choose: function (datas) {
                endtrial.min = datas; //开始日选好后，重置结束日的最小日期
                endtrial.start = datas //将结束日的初始值设定为开始日
            }
        };
        var endtrial = {
            elem: '#endtrial',
            format: 'YYYY/MM/DD',
            min: '2014-01-01',
            max: '2099-06-16',
            istime: false,
            istoday: false,
            choose: function (datas) {
                starttrial.max = datas; //结束日选好后，重置开始日的最大日期
            }
        };
        laydate(birth);
        laydate(entry);
        laydate(quit);
        laydate(startcon);
        laydate(endcon);
        laydate(starttrial);
        laydate(endtrial);
    </script>

</body>

</html>