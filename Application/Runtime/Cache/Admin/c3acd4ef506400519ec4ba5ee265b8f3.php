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

<!-- layer -->
<script src="/Public/Static/layer/layer.min.js"></script>
<!-- layer 结束 -->
<!-- icheck -->
<link href="/Public/Static/iCheck/skins/all.css?v=1.0.2" rel="stylesheet">
<script src="/Public/Static/iCheck/icheck.min.js"></script>
<!-- icheck 结束 -->
<!-- validate -->
<script src="/Public/Static/Validform_v5.3.2_min.js"></script>
<!-- validate 结束 -->
<script type="text/javascript" src="/Public/Admin/Js/common.js"></script>
<link rel="stylesheet" type="text/css" href="/Public/Admin/Css/admin.css">
<title>管理平台</title>
</head>
<body>
	<div class="login-back">
		<div class="login">
			<h2 class="login-top">管理平台</h2>
			<div class="login-body">
				<form class="hui-form" method="POST" action="<?php echo U(login);?>">
				  <div class="form-group">
				    <label>账号：</label>
				    <input datatype="s2-16" nullmsg="不能为空" class="form-control"  name="username">
				  </div>
				  <div class="form-group">
				    <label>密码：</label>
				    <input datatype="*2-15" nullmsg="不能为空" errormsg="密码范围在2~15位之间！" type="password" class="form-control" name="password">
				  </div>
				 
				   <div class="checkbox">
				    <label>
				      <input type="checkbox"> Check me out
				    </label>
				  </div>
				  <div class="form-group">
				    <label>验证码：</label>
				    <!-- <div class="col-xs-4"> -->
				      <input datatype="*0-6" nullmsg="不能为空"  type="text" name="verify" class="form-control col-sm-2" >
				    <!-- </div> -->
				   </div>
				    
				   <div class="form-group">
				   	<div class="col-sm-4" style="margin:20px 0;">
				     <img class="verifyimg reloadverify" alt="点击切换" src="<?php echo U('verify');?>" style="cursor:pointer;">
				    </div>
				    <label class="control-label" for="inputSuccess"></label>
				  </div>
				  <div class="form-group">
				 	 <button type="submit" class="btn btn-info col-sm-12 login-submit">登陆</button>
				  </div>
				</form>
			</div>
		</div>
	</div>
</body>
<script type="text/javascript">
	$(document).ready(function(){

	  //验证码
	  var verifyimg = $(".verifyimg").attr("src");
      $(".reloadverify").click(function(){
          if( verifyimg.indexOf('?')>0){
              $(".verifyimg").attr("src", verifyimg+'&random='+Math.random());
          }else{
              $(".verifyimg").attr("src", verifyimg.replace(/\?.*$/,'')+'?'+Math.random());
          }
      });

      validate('.hui-form',null,false)

	});
</script>
</html>