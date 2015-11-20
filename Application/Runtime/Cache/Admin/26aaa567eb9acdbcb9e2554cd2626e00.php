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
					<li class="active"><a href="<?php echo U('User/index');?>">管理员列表</a></li>
					<li><a href="<?php echo U('User/addUser');?>">添加管理员</a></li>
					
				</ul>
			
		</div>
	</div>
	
	<div class="admin-right">
		<nav class="navbar navbar-default" role="navigation" style="padding-left:500px;">
		  <div class="container-fluid">
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		     
		      <form class="navbar-form navbar-left" role="search">
		        
		       	  <select name="groups" class="form-control" style="margin-right:30px;">
					 <option value="<?php echo U('index',array('gid'=>0));?>">--管理员分组--</option>

					  <?php if(is_array($group)): $i = 0; $__LIST__ = $group;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option <?php if($vo['id'] == I('gid')): ?>selected="selected"<?php else: ?>value="<?php echo U('index',array('gid'=>$vo['id']));?>"<?php endif; ?>><?php echo ($vo["title"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
				  </select>
			      <div class="form-group">
		          	 <input type="text" class="form-control" placeholder="Search">
		          </div>
		        <button type="submit" class="btn btn-default">搜素</button>
		      </form>
		     <!--  <ul class="nav navbar-nav navbar-right">
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
		      </ul> -->

		    </div>
		  </div>
		</nav>
		<span class="admin-right-top">
			<a href="<?php echo U('addUser');?>" class="btn btn-info btn-xm">新增</a>
			<a class="btn btn-info btn-xm allOpen">启用</a>
			<a class="btn btn-info btn-xm allDeny">禁用</a>
			<a class="btn btn-info btn-xm">删除</a>
		</span>
		<table class="table">
  
		  <tbody align="center">
		  <tr> 
		    <td width="3%">选择</td>
		    <td width="5%">uid</td>
		    <td width="11%">登录名</td>
		    <td width="16%">email/昵称</td>
		    <td width="5%">性别</td>
		    <td width="20%">管理员分组</td>
		    <td width="10%">最后登录</td>
		    <td>操作</td>
		  </tr>
		 <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr> 
			  <td userid="<?php echo ($vo["uid"]); ?>"><input type="checkbox" /></td>
			  <td><?php echo ($vo["uid"]); ?></td>
			  <td><a target="_blank">
			    <u><?php echo ($vo["username"]); ?></u>
			  </td>
			  <td><?php echo ($vo["email"]); ?></td>
			  <td><?php if($vo["sex"] == 1): ?>男<?php else: ?>女<?php endif; ?></td>
			  <td>
			  	<?php if(empty($vo["gro"])): ?><font color="red">暂无分组</font><br />
			  	<?php else: ?>
				  	<?php if(is_array($vo["gro"])): $i = 0; $__LIST__ = $vo["gro"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$group): $mod = ($i % 2 );++$i;?><font color="red"><?php echo ($group["title"]); ?></font><br /><?php endforeach; endif; else: echo "" ;endif; endif; ?>
			  	
			  </td>
			  <td><?php if($vo["last_login_time"] == 0): ?>还未登录<?php else: echo (date("Y-m-d H:i:s",$vo["last_login_time"])); ?> <br>【<?php echo ($vo["last_login_ip"]); ?>】<?php endif; ?></td>
			  <td align="center" userid="<?php echo ($vo["uid"]); ?>">
			    <a class="btn btn-info btn-sm">修改</a>
			    <a onclick="del(<?php echo ($vo['uid']); ?>,this)" class="btn btn-danger btn-sm">删除</a>
			    <a class="btn btn-info btn-sm deny"><?php if($vo["status"] == 0): ?>启用<?php else: ?>禁用<?php endif; ?></a>
			    <a href="<?php echo U('Auth/group',array('uid'=>$vo['uid']));?>" class="btn btn-info btn-sm">授权</a>
			  </td>
			</tr><?php endforeach; endif; else: echo "" ;endif; ?>
		<tr align="left"> 
		 <td colspan="9" userid=0>
			<label>
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
	
	
	<script type="text/javascript" src="/Public/Admin/Js/userList.js"></script>
	<script type="text/javascript">
		var denyUrl = '<?php echo U("User/deny");?>';
		//导航高亮
        highlight_subnav('<?php echo U("User/index");?>');

        function del (uid,obj) {
        	layer.confirm('确定删除？',function(){
        		ajaxReturn({uid:uid},"<?php echo U('Admin/User/del');?>",function(data){
        			if(data.status){
        				layer.msg(data.info,2,9);
        				$(obj).parents('tr').remove();
        			}else{
        				layer.alert(data.info);
        			}
        		});
        	})
        }
	</script>
	
</body>
</html>