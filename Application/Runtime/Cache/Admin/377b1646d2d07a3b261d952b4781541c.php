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
					<li><a href="<?php echo U('User/index');?>">管理员列表</a></li>
					<li><a href="<?php echo U('User/addUser');?>">添加管理员</a></li>
				</ul>
			
		</div>
	</div>
	
	<div class="admin-right">
		<ol class="breadcrumb">
		  <li><a href="#">权限管理</a></li>
		  <li><a href="#">为<font style="color:red;"><?php echo ($username); ?></font>指定组</a></li>
		  
		</ol>
		<form method="POST" action="<?php echo U('Auth/group',array('uid'=>I('uid')));?>" class="form-horizontal" role="form">
			<?php if(is_array($group)): $i = 0; $__LIST__ = $group;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="checkbox">
			    <h4>
			    	<label>
			     	 <input <?php if(in_array($vo['id'], $groupid)){echo "checked='true'";} ?> type="checkbox" name="groupid[]" value="<?php echo ($vo["id"]); ?>"> <?php echo ($vo["title"]); ?>
			     	 <small><?php echo ($vo["description"]); ?></small>
			        </label>
			    </h4>
			  </div><?php endforeach; endif; else: echo "" ;endif; ?>
		  <div class="form-group">
		    <div class="col-sm-offset-2 col-sm-10">
		      <button type="submit" class="btn btn-info">确定</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		      <a class="btn btn-info" href="<?php echo U('User/index');?>">返回</a>
		    </div>
		  </div>
		</form>
	</div>
	
	
	<script type="text/javascript">
		//导航高亮
        highlight_subnav('<?php echo U("User/index");?>');
	</script>

</body>
</html>