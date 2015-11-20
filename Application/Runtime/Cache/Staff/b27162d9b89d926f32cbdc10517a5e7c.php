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
            <li>
                <a href="index.html#"><i class="fa icon-globe"></i> <span class="nav-label">报销管理</span><span class="icon-angle-down"></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="<?php echo U('Upbill/index');?>">报销单列表</a></li>
                    <li><a href="<?php echo U('Upbill/import');?>">上传报销单</a></li>
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
            <div class="row  border-bottom white-bg dashboard-header">
                <div class="col-sm-12">
                    <blockquote class="text-warning" style="font-size:14px">您是否需要自己做一款后台、会员中心等等的，但是又缺乏html等前端知识…
                        <br>您是否一直在苦苦寻找一款适合自己的后台主题…
                        <br>您是否想做一款自己的web应用程序…
                        <br>…………
                        <h4 class="text-danger">那么，现在H+来了</h4>
                    </blockquote>

                    <hr>
                </div>
                <div class="col-sm-3">
                    <h2>Hello,Guest</h2>
                    <small>移动设备访问请扫描以下二维码：</small>
                    <br>
                    <br>
                    <img src="/Public/Staff/Images/qr_code.png" width="100%" style="max-width:264px;">
                    <br>
                </div>
                <div class="col-sm-5">
                    <h2>
                            H+ 后台主题UI框架
                        </h2>
                    <p>H+是一个完全响应式，基于Bootstrap3.3.4最新版本开发的扁平化主题，她采用了主流的左右两栏式布局，使用了Html5+CSS3等现代技术，她提供了诸多的强大的可以重新组合的UI组件，并集成了最新的jQuery版本(v2.1.1)，当然，也集成了很多功能强大，用途广泛的jQuery插件，她可以用于所有的Web应用程序，如<b>网站管理后台</b>，<b>网站会员中心</b>，<b>CMS</b>，<b>CRM</b>，<b>OA</b>等等，当然，您也可以对她进行深度定制，以做出更强系统。</p>
                    <p>
                        <b>当前版本：</b>v2.2.0
                    </p>
                    <p>
                        <b>定价：</b><span class="label label-warning">&yen;768（不开发票）</span>
                    </p>
                    <br>
                    <p>
                        <a class="btn btn-success btn-outline" href="http://wpa.qq.com/msgrd?v=3&uin=516477188&site=qq&menu=yes" target="_blank">
                            <i class="icon-qq"> </i> 联系我
                        </a>
                        <a class="btn btn-white btn-bitbucket" href="http://www.zi-han.net" target="_blank">
                            <i class="icon-home"></i> 访问博客
                        </a>
                    </p>
                </div>
                <div class="col-sm-4">
                    <h4>H+具有以下特点：</h4>
                    <ol>
                        <li>完全响应式布局（支持电脑、平板、手机等所有主流设备）</li>
                        <li>基于最新版本的Bootstrap 3.3.4</li>
                        <li>提供4套不同风格的皮肤</li>
                        <li>支持多种布局方式</li>
                        <li>使用最流行的的扁平化设计</li>
                        <li>提供了诸多的UI组件</li>
                        <li>集成多款国内优秀插件，诚意奉献</li>
                        <li>提供盒型、全宽、响应式视图模式</li>
                        <li>采用HTML5 & CSS3</li>
                        <li>拥有良好的代码结构</li>
                        <li>更多……</li>
                    </ol>
                </div>

            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="wrapper wrapper-content">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="ibox float-e-margins">
                                    <div class="ibox-title">
                                        <h5>H+ 开发文档</h5>
                                    </div>
                                    <div class="ibox-content">
                                        <p>H+从v2.2.0版本以后，提供了开发文档，如下图所示：</p>
                                        <p>
                                            <img src="http://cdn.zi-han.net/theme/hplus/hplus-docs.png" width="100%">
                                        </p>
                                        <p>开发文档位于压缩包中的docs目录下。</p>
                                    </div>
                                </div>

                                <div class="ibox float-e-margins">
                                    <div class="ibox-title">
                                        <h5>二次开发</h5>
                                    </div>
                                    <div class="ibox-content">
                                        <p>我们提供基于H+的二次开发服务，具体费用请联系作者。</p>
                                        <p>同时，我们也提供以下服务：</p>
                                        <ol>
                                            <li>基于WordPress的网站建设和主题定制</li>
                                            <li>PSD转WordPress主题</li>
                                            <li>PSD转XHTML</li>
                                            <li>Html页面（CSS+XHTML+jQuery）制作</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="ibox float-e-margins">
                                    <div class="ibox-title">
                                        <h5>购买说明</h5>
                                    </div>
                                    <div class="ibox-content">
                                        <p>如果需要购买H+主题，可直接付款到支付宝：<a href="javascript;">zheng-zihan@qq.com</a>，收款人：<a href="javascript;">*子涵</a>。或者使用手机支付宝直接扫码支付：</p>
                                        <div class="alert alert-warning">
                                            付款完成后请及时联系作者，或在付款备注中留下邮箱或QQ，方便作者及时联系您。
                                        </div>
                                        <p>
                                            <img src="/Public/Staff/Images/alipay_qr_code.png" width="100%" style="max-width:369px">
                                        </p>

                                    </div>
                                </div>
                                <div class="ibox float-e-margins">
                                    <div class="ibox-title">
                                        <h5>联系信息</h5>

                                    </div>
                                    <div class="ibox-content">
                                        <p><i class="icon-send-o"></i> 博客：<a href="http://www.zi-han.net" target="_blank">http://www.zi-han.net</a>
                                        </p>
                                        <p><i class="icon-qq"></i> QQ：<a href="http://wpa.qq.com/msgrd?v=3&uin=516477188&site=qq&menu=yes" target="_blank">516477188</a>
                                        </p>
                                        <p><i class="icon-weixin"></i> 微信：<a href="javascript:;">zheng-zihan</a>
                                        </p>
                                        <p><i class="icon-credit-card"></i> 支付宝：<a href="javascript:;" class="支付宝信息">zheng-zihan@qq.com / *子涵</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="ibox float-e-margins">
                                    <div class="ibox-title">
                                        <h5>更新日志</h5>
                                    </div>
                                    <div class="ibox-content no-padding">

                                        <div class="panel-body">
                                            <div class="panel-group" id="version">
                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <h5 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#version" href="#v22">v2.2</a><code class="pull-right">2015.07.01更新</code>
                                            </h5>
                                                    </div>
                                                    <div id="v22" class="panel-collapse collapse in">
                                                        <div class="panel-body">
                                                            <ol>
                                                                <li>从现在起，Hplus有开发文档啦，解压后在docs目录下；
                                                                </li>
                                                                <li>根据用户的反馈，根据用户的反馈，移除了CDN支持，CDN服务将于2015年6月30日之后结束支持，如果您正在使用CDN服务，请尽快完成迁移，对于给您造成的不便，我们表示非常抱歉；
                                                                </li>
                                                                <li>升级Bootstrap到最新版本v3.3.4；
                                                                </li>
                                                                <li>修改了style.css，修复了其中的一些bug；；
                                                                </li>

                                                            </ol>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <h5 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#version" href="#v21">v2.1</a>
                                            </h5>
                                                    </div>
                                                    <div id="v21" class="panel-collapse collapse">
                                                        <div class="panel-body">
                                                            <ol>
                                                                <li>增加cdn服务支持，cdn节点使用阿里云服务，可保证您的项目随时使用最新版本的H+，免去反复升级的麻烦；</a>
                                                                </li>
                                                                <li>修复一些问题；</li>
                                                            </ol>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <h5 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#version" href="#v20">v2.0</a>
                                            </h5>
                                                    </div>
                                                    <div id="v20" class="panel-collapse collapse">
                                                        <div class="panel-body">
                                                            <ol>
                                                                <li>增加RTL布局及RTL支持，可点击右上角齿轮按钮选择RTL模式查看；
                                                                </li>
                                                                <li>增加上下布局； <a href="index_4.html" title="去看看"><i class="icon-eye"></i></a>
                                                                </li>
                                                                <li>在360浏览器6.0以上版本中强制以webkit内核解析，体验更佳；
                                                                </li>
                                                                <li>增加<a href="toastr_notifications.html">Toastr通知</a>、<a href="nestable_list.html">嵌套列表</a>、<a href="timeline_v2.html">时间轴</a>、<a href="forum_main.html">论坛</a>、<a href="code_editor.html">代码编辑器</a>、<a href="modal_window.html">模态窗口</a>、<a href="validation.html">表单验证</a>、<a href="tree_view_v2.html">树形视图</a>、<a href="chat_view.html">聊天窗口</a>等页面；
                                                                </li>
                                                                <li>升级<a href="icons.html">Font Awesome</a>，<a href="form_simditor.html">Simditor</a>等到最新版本；</a>
                                                                </li>
                                                                <li>优化部分内容
                                                                </li>

                                                            </ol>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <h5 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#version" href="#v18">v1.8</a>
                                            </h5>
                                                    </div>
                                                    <div id="v18" class="panel-collapse collapse">
                                                        <div class="panel-body">
                                                            <ol>
                                                                <li>修复一些错误；
                                                                </li>
                                                                <li>修复了WebUploader中的一些问题； <a href="form_webuploader.html" title="去看看"><i class="icon-eye"></i></a>
                                                                </li>
                                                            </ol>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <h5 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#version" href="#v17">v1.7</a>
                                            </h5>
                                                    </div>
                                                    <div id="v17" class="panel-collapse collapse">
                                                        <div class="panel-body">
                                                            <ol>
                                                                <li>更新jquery版本到官方最新版v2.1.1；
                                                                </li>
                                                                <li>更新Bootstrap版本到官方最新版v3.3.0；
                                                                </li>
                                                                <li>增加jqGrid组件； <a href="table_jqgrid.html" title="去看看"><i class="icon-eye"></i></a>
                                                                </li>
                                                                <li>修复Summernote编辑器中的一个严重错误； <a href="form_editors.html" title="去看看"><i class="icon-eye"></i></a>
                                                                </li>
                                                                <li>修改了一些已知的bug，并修复了演示示例中的一些错误；
                                                                </li>
                                                            </ol>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <h5 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#version" href="#v16">v1.6</a>
                                            </h5>
                                                    </div>
                                                    <div id="v16" class="panel-collapse collapse">
                                                        <div class="panel-body">
                                                            <ol>
                                                                <li>优化资源文件路径，删除多余文件
                                                                </li>
                                                                <li>增加Markdown编辑器 <a href="form_markdown.html" title="去看看"><i class="icon-eye"></i></a>
                                                                </li>
                                                                <li>增加拾色器ColorPicker <a href="form_advanced.html" title="去看看"><i class="icon-eye"></i></a>
                                                                </li>
                                                                <li>优化部分页面代码
                                                                </li>
                                                            </ol>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#version" href="#v15">v1.5</a>
                                            </h4>
                                                    </div>
                                                    <div id="v15" class="panel-collapse collapse">
                                                        <div class="panel-body">
                                                            <ol>
                                                                <li>增加了Bootstrap3表单构建器，表单设计更轻松； <a href="form_builder.html" title="去看看"><i class="icon-eye"></i></a>
                                                                </li>
                                                                <li>修改了webim的高度；
                                                                </li>
                                                                <li>修复了因缺少jquery.min.map文件而导致页面加载进度条速度过慢的问题；
                                                                </li>
                                                            </ol>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <h4 class="panel-title"><a data-toggle="collapse" data-parent="#version" href="#v14">v1.4</a>
                                            </h4>
                                                    </div>
                                                    <div id="v14" class="panel-collapse collapse">
                                                        <div class="panel-body">
                                                            <ol>
                                                                <li>修复了百度ECharts图表显示不正确的问题； <a href="graph_echarts.html" title="去看看"><i class="icon-eye"></i></a>
                                                                </li>
                                                                <li>新增表单验证示例，使用jQuery Validate插件实现； <a href="form_validate.html" title="去看看"><i class="icon-eye"></i></a>
                                                                </li>
                                                                <li>新增树形视图示例； <a href="tree_view.html" title="去看看"><i class="icon-eye"></i></a>
                                                                </li>
                                                                <li>修复弹框遮罩的Bug；
                                                                </li>
                                                            </ol>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#version" href="#v13">v1.3</a>
                                            </h4>
                                                    </div>
                                                    <div id="v13" class="panel-collapse collapse">
                                                        <div class="panel-body">
                                                            <ol>
                                                                <li>加入阿里巴巴团队的字体图标库，字体图标可以自定义啦； <a href="iconfont.html" title="去看看"><i class="icon-eye"></i></a>
                                                                </li>
                                                                <li>新增头像裁剪上传组件FullAvatareditor； <a href="form_avatar.html" title="去看看"><i class="icon-eye"></i></a>
                                                                </li>
                                                                <li>集成网页弹层插件layer； <a href="layer.html" title="去看看"><i class="icon-eye"></i></a>
                                                                </li>
                                                                <li>集成日期选择器layerDate； <a href="layerdate.html" title="去看看"><i class="icon-eye"></i></a>
                                                                </li>
                                                                <li class="text-danger"><b>增加web即时通讯功能，可以在系统内在线聊天了；</b> <a href="webim.html" title="去看看"><i class="icon-eye"></i></a>
                                                                </li>
                                                                <li>增加主题预览功能，点击右上侧齿轮图标预览；</li>
                                                                <li>增加左侧边栏固定功能；</li>
                                                                <li>修复了多处问题。</li>
                                                            </ol>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#version" href="#v12">v1.2</a>
                                            </h4>
                                                    </div>
                                                    <div id="v12" class="panel-collapse collapse">
                                                        <div class="panel-body">
                                                            <ol>
                                                                <li>新增百度WebUploader拖动上传文件组件；<a href="form_webuploader.html" title="去看看"><i class="icon-eye"></i></a>
                                                                </li>
                                                                <li>新增国产优秀富文本编辑器插件Simditor；<a href="form_simditor.html" title="去看看"><i class="icon-eye"></i></a>
                                                                </li>
                                                                <li>新增百度ECharts统计图表插件；<a href="form_simditor.html" title="去看看"><i class="icon-eye"></i></a>
                                                                </li>
                                                                <li>修复了几处问题。</li>
                                                            </ol>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#version" href="#v11">v1.1</a>
                                            </h4>
                                                    </div>
                                                    <div id="v11" class="panel-collapse collapse">
                                                        <div class="panel-body">
                                                            <ol>
                                                                <li>修复了几处问题。</li>
                                                            </ol>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>

                </div>
                <div class="footer">
                    <div class="pull-right">
                        By：<a href="http://www.zi-han.net" target="_blank">zihan's blog</a>
                    </div>
                    <div>
                        <strong>Copyright</strong> H+ &copy; 2014
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Custom and plugin javascript -->
    <script src="/Public/Staff/Js/hplus.js?v=2.2.0"></script>
    <script src="/Public/Static/pace/pace.min.js"></script>
</body>

</html>