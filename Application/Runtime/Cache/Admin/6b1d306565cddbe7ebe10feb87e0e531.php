<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="shortcut icon" type="image/x-icon" href="http://www.taobao.com/favicon.ico">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- Bootstrap -->
<link href="/miao/Public/Static/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<script type="text/javascript" src="/miao/Public/Static/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="/miao/Public/Static/bootstrap/js/bootstrap.min.js"></script>
<!-- Bootstrap end-->
<!-- icheck -->
<link href="/miao/Public/Static/iCheck/skins/all.css?v=1.0.2" rel="stylesheet">
<script src="/miao/Public/Static/iCheck/icheck.min.js"></script>
<!-- icheck 结束 -->
<!-- layer -->
<script src="/miao/Public/Static/layer/layer.min.js"></script>
<!-- layer 结束 -->
<!-- validate -->
<script src="/miao/Public/Static/Validform_v5.3.2_min.js"></script>
<!-- validate 结束 -->
<script type="text/javascript" src="/miao/Public/Admin/Js/common.js"></script>
<link rel="stylesheet" type="text/css" href="/miao/Public/Admin/Css/admin.css">

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
					<li><a href="<?php echo U('Article/index');?>">文章列表</a></li>
					<li class="active"><a href="<?php echo U('Article/addArticle');?>">添加文章</a></li>
					
				</ul>
			
		</div>
	</div>
	
	<div class="admin-right">
		<ol class="breadcrumb">
		  <li><a href="#">文章管理</a></li>
		  <li><a href="#">添加文章</a></li>
		  
		</ol>
		<form name="addArticle" class="form-horizontal addArticle" role="form" action="<?php echo U('addArticle');?>" method="POST">
		  <div class="form-group">
		    <label class="col-sm-2 control-label">文章分类：</label>
		    <div class="col-sm-2">
		     <select name="pid" class="form-control" style="margin-right:30px;">
				 <option value="0">--顶级分类--</option>
				 <?php if(is_array($cateList)): $i = 0; $__LIST__ = $cateList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cat): $mod = ($i % 2 );++$i;?><option value="<?php echo ($cat["id"]); ?>" >
                    	<?php echo ($cat["html"]); echo ($cat["title"]); ?>
                    </option><?php endforeach; endif; else: echo "" ;endif; ?>
			  </select>
		    </div>
		    <label class="control-label" for="inputSuccess"></label>
		  </div>
		  <div class="form-group">
		    <label class="col-sm-2 control-label">文章名称：</label>
		    <div class="col-sm-4">
		      <input type="text" dataType="*2-10" nullmsg="不能为空" class="form-control" name="title">
		    </div>
		    <label class="control-label" for="inputSuccess"></label>
		  </div>
		   <div class="form-group">
		    <label class="col-sm-2 control-label">文章内容：</label>
		    <div class="col-sm-10">
		    	 <script type="text/plain" name="content" id="myEditor" style="width:98%;height:300px;">
                <p> <?php echo ($result['content']); ?></p>
              </script>
		    </div>
		  </div>
		  <div class="form-group">
		    <div class="col-sm-offset-2 col-sm-10">
		      <button id="add-user" type="submit" class="btn btn-info">确定</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		      <a class="btn btn-info" href="<?php echo U(index);?>">返回</a>
		    </div>
		  </div>
		</form>
	</div>
	
	
	<link href="/miao/Public/Static/umeditor/themes/default/css/umeditor.css" type="text/css" rel="stylesheet">
	<script type="text/javascript" charset="utf-8" src="/miao/Public/Static/umeditor/umeditor.config.js"></script>
	<script type="text/javascript" charset="utf-8" src="/miao/Public/Static/umeditor/umeditor.min.js"></script>
	<script type="text/javascript" src="/miao/Public/Static/umeditor/lang/zh-cn/zh-cn.js"></script>
	<script type="text/javascript">
	$(function(){
	  //实例化编辑器
	    var um = UM.getEditor('myEditor');
	    um.addListener('blur',function(){
	        $('#focush2').html('编辑器失去焦点了')
	    });
	    um.addListener('focus',function(){
	        $('#focush2').html('')
	    });
	})
		//导航高亮
        highlight_subnav('<?php echo U("Article/index");?>');

        validate('.addArticle',function(data){},true)
	</script>

</body>
</html>