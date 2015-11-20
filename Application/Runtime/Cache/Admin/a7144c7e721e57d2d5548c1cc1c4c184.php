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
					<li><a href="<?php echo U('Auth/index');?>">角色列表</a></li>
					<li><a href="<?php echo U('Auth/addRole');?>">添加角色</a></li>
					<li class="active"><a href="<?php echo U('Auth/Node');?>">节点列表</a></li>
					<li><a href="<?php echo U('Auth/addNode');?>">添加节点</a></li>
					<li><a href="<?php echo U('Auth/addModules');?>">添加模块</a></li>
				</ul>
			
		</div>
	</div>
	
	<div class="admin-right">
		<nav class="navbar navbar-default" role="navigation">
		  	<div class="col-sm-2" style="display:block;margin-top:8px;">
		      	<select class="form-control" name="modules_id">
				  <?php if(is_array($group)): $i = 0; $__LIST__ = $group;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option <?php if($vo['id'] == I('gid')): ?>selected="selected"<?php else: ?>value="<?php echo U('Auth/node',array('gid'=>$vo['id']));?>"<?php endif; ?>><?php echo ($vo["title"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
				</select>
		    </div>
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
		<form name="group" action="<?php echo U('addRules',array('gid'=>I('gid')));?>" method="POST">
		<div>
			<?php if(is_array($modules)): $i = 0; $__LIST__ = $modules;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><dl class="checkmod">
					<dt class="hd">
						<label class="checkbox"><input class="selectedAll" type="checkbox" value="<?php echo ($vo["id"]); ?>"><?php echo ($vo["modules_name"]); ?></label>
					</dt>
					<dd class="bd">
						<ul class="rule_check">
							<?php if(is_array($vo['children'])): $i = 0; $__LIST__ = $vo['children'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$node): $mod = ($i % 2 );++$i;?><li>
		                        	<label class="checkbox" >
			                           <input <?php if(in_array($node['id'], $access)){ echo "checked='true'";} ?> type="checkbox" name="rules[]"
			                           value="<?php echo ($node["id"]); ?>"/><?php echo ($node["title"]); ?>
			                        </label>
		                        </li><?php endforeach; endif; else: echo "" ;endif; ?>

	          			</ul>
	                </dd>       
				</dl><?php endforeach; endif; else: echo "" ;endif; ?>
		</div>
		<div class="form-group">
	    <div class="col-sm-offset-1 col-sm-10">
	      <button type="submit" class="btn btn-info">确定</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	      <a class="btn btn-info" href="<?php echo U(index);?>">返回</a>
	    </div>
	  </div>
	  </form>
	</div>
	
	
	<script type="text/javascript">
		$(function(){
			$('.selectedAll').on('ifChecked', function(event){
				$(this).parents('dl').find('input').iCheck('check');
			});
			$('.selectedAll').on('ifUnchecked', function(event){
				$(this).parents('dl').find('input').iCheck('uncheck');
			});

			//select框change事件
			$('select[name=modules_id]').change(function(){
				var url = $(this).children('option:selected').val();
				window.location.href=url;
			})
		})
		//导航高亮
        highlight_subnav('<?php echo U("Auth/index");?>');
	</script>
	
</body>
</html>