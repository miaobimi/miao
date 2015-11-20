<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
 <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
 <head>
 	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
 	<!-- Bootstrap -->
	<link href="/Public/Static/bootstrapv3/css/bootstrap.min.css" rel="stylesheet">
	<script type="text/javascript" src="/Public/Static/jquery-1.10.2.min.js"></script>
	<script type="text/javascript" src="/Public/Static/bootstrapv3/js/bootstrap.min.js"></script>
	<!-- Bootstrap end-->
	<!-- icheck -->
	<link href="/Public/Static/iCheck/skins/all.css?v=1.0.2" rel="stylesheet">
	<script src="/Public/Static/iCheck/icheck.min.js"></script>
	<!-- icheck 结束 -->
	<!-- layer -->
	<script src="/Public/Static/layerv1.9.1/layer.js"></script>
	<script src="/Public/Static/layerv1.9.1/extend/layer.ext.js"></script>
	<!-- layer 结束 -->
	<!-- validate -->
	<script src="/Public/Static/Validform_v5.3.2_min.js"></script>
	<!-- validate 结束 -->
	<script src="/Public/Binary/Js/common.js"></script>
	<link rel="stylesheet" type="text/css" href="/Public/Binary/Css/home.css">
 	<title>中远融投－登录</title>
 </head>

 <body>
 	<div class="col-sm-2" id="lan">
      <select class="form-control select" name="lan">
      	<option value="">切换语言</option>
      	<option value="zh-cn">中文简体</option>
      	<option value="en-us">英文</option>
      </select>
    </div>
 	<div class="login-box">
 		<img src="/Public/Binary/Images/logo.gif" alt="中远融投" />
 		<form class="form-horizontal">
		  <div class="form-group">
		    <div class="col-sm-offset-1 col-sm-10">
		      <input type="text" class="form-control" id="" placeholder="<?php echo (L("account")); ?>">
		    </div>
		  </div>
		  <div class="form-group">
		    <div class="col-sm-offset-1 col-sm-10">
		      <input type="password" class="form-control" id="" placeholder="">
		    </div>
		  </div>
		  <div class="form-group">
		    <div class="col-sm-offset-1 col-sm-10">
		        <select class="form-control select">
				  <option>1</option>
				  <option>2</option>
				  <option>3</option>
				  <option>4</option>
				  <option>5</option>
				</select>
		    </div>
		  </div>
		  <div class="form-group" style="margin-top:40px;">
		    	<a class="loginBtn"><?php echo (L("login")); ?></a>
		    	<a href="<?php echo U('reg');?>" class="reg"><?php echo (L("my_createAccount")); ?></a>
		  </div>
		</form>
 	</div>

 </body>
  <script>
 	var url = "<?php echo U('changeLanguage');?>";
	changeLanguage(url);
 </script>
 </html>