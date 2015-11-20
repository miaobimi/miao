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
					<li class="active"><a href="<?php echo U('Article/index');?>">文章列表</a></li>
					<li><a href="<?php echo U('Article/addArticle');?>">添加文章</a></li>
					
				</ul>
			
		</div>
	</div>
	
	<div class="admin-right">
		<span class="admin-right-top">
			<a href="<?php echo U('addArticle');?>" class="btn btn-info btn-xm">新增</a>
			<a class="btn btn-info btn-xm allOpen">启用</a>
			<a class="btn btn-info btn-xm allDeny">禁用</a>
			<a class="btn btn-info btn-xm">删除</a>
		</span>
		<table class="table">
  		  
  		  <thead>
		  	<tr align="center"> 
			    <td></td>
			    <td>ID</td>
			    <td>文章标题</td>
			    <td>文章内容</td>
			    <td>添加时间</td>
			    <td>操作</td>
			</tr>
		  </thead>

		  <tbody id="tbody" align="center">  
			 <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr> 
				  <td><input type="checkbox"></td>
				  <td><?php echo ($vo["id"]); ?></td>
				  <td><?php echo ($vo["title"]); ?></td>
				  <td><?php echo (msubstr(htmlspecialchars($vo["content"]),0,30)); ?></td>
				  <td><?php echo (date("Y-m-d H:i:s",$vo["add_time"])); ?></td>
				  <td align="center">
				    <a class="btn btn-info btn-sm" onclick="edit(<?php echo ($vo["id"]); ?>)">修改</a>
				    <a class="btn btn-danger btn-sm" onclick="del(<?php echo ($vo["id"]); ?>,this)">删除</a>
				  </td>
				</tr><?php endforeach; endif; else: echo "" ;endif; ?>
		 </tbody>
		<tr> 
		 <td align="center" height="36" colspan="9">
			<nav>

			  <ul class="pagination">
			    <?php echo ($page); ?>
			  </ul>
			</nav>
		 </td>
		</tr>
		</table>
	</div>
	
	
	
	<script type="text/javascript">
		function edit(id){
			layer.alert('暂时不想做',0)
		}

		function del(id,obj){
			layer.confirm('确定删除？',function(){
				ajaxReturn("<?php echo U('Admin/Category/del');?>",{id:id},'POST',null,
				function(data){
					layer.closeAll();
					if(data.status){
						$(obj).parents('tr').remove();
					}else{
						layer.alert(data.info);
					}
				})
			})
		}
		function changeStatus(id,obj){
			var self = obj;
			layer.confirm('确认执行该操作？',function(){
				if($.trim($(self).text()) == '禁用'){
					var status = 0;
				}else{
					var status = 1;
				}

				ajaxReturn("<?php echo U('Admin/Category/changeCateStatus');?>",{id:id,status:status},'POST',null,
				function(data){
					layer.closeAll();
					if(data.status){
						if(status){
							$(self).parent().prev().empty().append('启用');
							$(self).text('禁用');
						}else{
							$(self).parent().prev().empty().append('禁用');
							$(self).text('启用');
						}
					}else{
						layer.alert(data.info);
					}
				})
			})
		}
		//导航高亮
        highlight_subnav('<?php echo U("Article/index");?>');

	</script>
	
</body>
</html>