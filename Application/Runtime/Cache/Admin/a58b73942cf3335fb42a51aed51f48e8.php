<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="shortcut icon" type="image/x-icon" href="http://www.taobao.com/favicon.ico">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- Bootstrap -->
<link href="/Public/Static/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<script type="text/javascript" src="/Public/Static/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="/Public/Static/bootstrap/js/bootstrap.min.js"></script>
<!-- Bootstrap end-->
<!-- icheck -->
<link href="/Public/Static/iCheck/skins/all.css?v=1.0.2" rel="stylesheet">
<script src="/Public/Static/iCheck/icheck.min.js"></script>
<!-- icheck 结束 -->
<!-- layer -->
<script src="/Public/Static/layer/layer.min.js"></script>
<!-- layer 结束 -->
<!-- validate -->
<script src="/Public/Static/Validform_v5.3.2_min.js"></script>
<!-- validate 结束 -->
<script type="text/javascript" src="/Public/Admin/Js/common.js"></script>
<link rel="stylesheet" type="text/css" href="/Public/Admin/Css/admin.css">

<title>管理平台</title>
</head>
<body>
	<div class="top">
		<div class="admin-logo"></div>
		<ul class="admin-li">
		
			<?php $moduless = M('Modules')->order('sort asc')->select(); ?>
			<?php if(is_array($moduless)): $k = 0; $__LIST__ = $moduless;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k; if(authcheck($vo['link'],session('uid'))): ?><li>
						<span class="admin-li-span-<?php echo ($k); ?>"></span>
						<a href="<?php echo U("$vo[link]");?>"><?php echo ($vo["modules_name"]); ?></a>
						
					</li><?php endif; endforeach; endif; else: echo "" ;endif; ?>
		</ul>
		<h3 class="admin-message">
			欢迎您。。<?php echo session('uname');?>
		</h3>
		<a class="admin-logout" href="<?php echo U('Public/logout');?>">退出</a>
	</div>	
	<div class="clear"></div>
	<div class="admin-left">
		<span class="admin-nav-top"><a href="">网站首页</a>|<a href="">后台首页</a></span>
		<div class="admin-nav">
			
				<ul>
					<li class="active"><a href="<?php echo U('Auth/index');?>">角色列表</a></li>
					<li><a href="<?php echo U('Auth/addRole');?>">添加角色</a></li>
					<li><a href="<?php echo U('Auth/node');?>">节点列表</a></li>
					<li><a href="<?php echo U('Auth/addNode');?>">添加节点</a></li>
					<li><a href="<?php echo U('Auth/addModules');?>">添加模块</a></li>
				</ul>
			
		</div>
	</div>
	
	<div class="admin-right">
		<nav class="navbar navbar-default" role="navigation" style="padding-left:500px;">
		  <div class="container-fluid">
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      <ul class="nav navbar-nav navbar-right">
		        <li><a href="#">Link</a></li>
		        <li class="dropdown">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
		          <ul class="dropdown-menu" role="menu">
		            <li><a href="#">Action</a></li>
		            <li><a href="#">Another action</a></li>
		            <li><a href="#">Something else here</a></li>
		            <li class="divider"></li>
		            <li><a href="#">Separated link</a></li>
		          </ul>
		        </li>
		      </ul>

		    </div>
		  </div>
		</nav>
		<span class="admin-right-top">
			<a href="<?php echo U('addRole');?>" class="btn btn-info btn-xm">新增</a>
			<a class="btn btn-info btn-xm">启用</a>
			<a class="btn btn-info btn-xm">禁用</a>
			<a class="btn btn-info btn-xm">删除</a>
		</span>
		<table class="table">
  
		  <tbody align="center">
		  <tr> 
		    <td width="3%">选择</td>
		    <td width="11%">角色组</td>
		    <td width="16%">描述</td>
		    <td width="20%">授权</td>
		    <td width="20%">状态</td>
		    <td>操作</td>
		  </tr>
		 <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr> 
			  <td><input type="checkbox" name="id"></td>
			  <td><a target="_blank">
			    <u><?php echo ($vo["title"]); ?></u>
			  </td>
			  <td><?php echo ($vo["description"]); ?></td>
			  <td><a href="<?php echo U('Auth/node',array('gid'=>$vo['id']));?>">访问授权</a>  <a href="<?php echo U('Auth/toGroup',array('gid'=>$vo['id']));?>">成员授权</a></td>
			  <td><?php if($vo["status"] == 1): ?>开启<?php else: ?>关闭<?php endif; ?></td>
			  <td align="center">
			    <a  class="btn btn-danger btn-sm">删除</a>
			    <a onclick="changeStatus(<?php echo ($vo["id"]); ?>,this);" class="btn btn-info btn-sm"><?php if(($vo['status']) == "0"): ?>启用<?php else: ?>禁用<?php endif; ?></a>
			  </td>
			</tr><?php endforeach; endif; else: echo "" ;endif; ?>
		<tr align="left"> 
		 <td colspan="9">
			<label >
				<input class="btn btn-info btn-sm" id="selectedAll" type="checkbox">
				全选本页
			</label>
		 </td>
		</tr>
		<tr> 
		 <td align="center" height="36" colspan="9">
			<nav>

			  <ul class="pagination">
			    <?php echo ($page); ?>
			  </ul>
			</nav>
		 </td>
		</tr>
		</tbody></table>
	</div>
	
	
	<script type="text/javascript">
		$(function(){
			$('#selectedAll').on('ifChecked', function(event){
				$('input').iCheck('check');
			});
			$('#selectedAll').on('ifUnchecked', function(event){
				$('input').iCheck('uncheck');
			});
		})
		//导航高亮
        highlight_subnav('<?php echo U("Auth/index");?>');

        function changeStatus(id,obj){
        	var self = obj;
        	if($.trim($(self).text()) == '禁用'){
        		var status = 0;
        	}else{
        		var status = 1;
        	}
        	layer.confirm('确定执行该操作?',function(){
        		
        		ajaxReturn("<?php echo U('Admin/Auth/changeRoleStatus');?>",{id:id,status:status},'POST',null,function(data){
        			layer.closeAll();
        			if(data.status){
        				if(status){
        					$(self).parent().prev().empty().text('开启');
        					$(self).text('关闭');
        				}else{
        					$(self).parent().prev().empty().text('关闭');
        					$(self).text('开启');
        				}
        			}else{
        				layer.alert(data.info);
        			}
        		})
        	})
        }
	</script>
	
</body>
</html>