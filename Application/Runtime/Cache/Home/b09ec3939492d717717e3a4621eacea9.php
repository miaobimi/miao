<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta content="中远融投是中国领先的在线理财服务平台，帮助您发布/查找信托产品、理财产品、理财顾问、理财问答、证券公司、期货开户等本地投资理财信息。" name="description">
	<meta content="外汇 二元期权 投资 中远融投" name="keywords">
	<title>首页</title>
	<script type="text/javascript" src="/Public/Static/jquery-1.10.2.min.js"></script>
	<link rel="stylesheet" href="/Public/Home/Css/index.css">
	<script type="text/javascript" src="/Public/Static/jquery.SuperSlide.2.1.1.js"></script>
</head>
<body>
	<header class="index-header">
		<div class="bar">
			<div class="top-bar">
				<span class="notice">欢迎来到中远融投,投资又风险,选择需谨慎!</span>
				<div class="bar-right">
					<ul>
						<li><a class="login cheng" href="">登录</a></li>
						<li><a href="">注册</a></li>
						<li><a href=""><i class="flag"></i>旗下APP</a></li>
						<li><a href="">关于我们<i class="blog"></i><i class="wechat"></i></a></li>
						<li><a class="cheng" href=""><i class="tel"></i>78976779569</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="head-main">
			<div class="head-main-left">
				<div class="logo">
					<img src="/Public/Home/Images/logo.png" alt="">
				</div>
				<div class="company">
					<img src="/Public/Home/Images/logo_07.png" alt="">
				</div>
				
			</div>
			<div class="head-main-right">
				<div class="input">
					<div class="input-left">
						<span class="input-left-word">信托产品</span>
						<em class="input-left-icon"></em>
					</div>
					<div class="input-left-slide">
						<ul>
							<li><a href="">信托产品</a></li>
							<li><a href="">信托产品</a></li>
							<li><a href="">信托产品</a></li>
							<li><a href="">信托产品</a></li>
						</ul>
					</div>
					<div class="input-mid">
						<input type="text">
					</div>	
					<div class="input-right">
						<em class="sear-j"></em>
					</div>
				</div>
				<div class="sear-lit">
					<ul>
						<li><a href="">公募资金</a></li>
						<li><a href="">私募资金</a></li>
						<li><a href="">优选信托</a></li>
						<li><a href="">股票开户</a></li>
						<li><a href="">外汇反佣</a></li>
					</ul>
				</div>
			</div>	
		</div>
		<div class="head-nav">
			<div class="nav-content">
				<div class="nav-left">
					<ul>
						<li><a class="current" href="<?php echo U('Index/index');?>">首页</a></li>
						<li><a href=""><i></i>银行票据</a></li>
						<li><a href=""><i></i>公募资金</a></li>
						<li><a href=""><i></i>保险理财</a></li>
						<li><a href=""><i></i>信托</a></li>
						<li><a href=""><i></i>资管</a></li>
						<li><a href=""><i></i>顶级私募</a></li>
						<li><a href=""><i></i>理财顾问</a></li>
						<li><a href=""><i></i>理财APP</a></li>
					</ul>
				</div>
				<div class="nav-right">
					<!-- 右侧  先留空 -->
				</div>
			</div>
		</div>
	</header>
	<div id="main">
		<div class="art-ad">
			<!-- slide start -->
			<style type="text/css">

				/* 本例子css */
				.slideBox{ width:100%;overflow:hidden; position:relative;}
				.slideBox .hd{ height:15px; overflow:hidden; position:absolute; right:50%; bottom:5px; z-index:1; }
				.slideBox .hd ul{ overflow:hidden; zoom:1; float:left;  }
				.slideBox .hd ul li{ float:left; margin-right:2px;  width:15px; height:15px; line-height:14px;list-style: none;text-align:center;border-radius: 50%; background:#fff; cursor:pointer; margin:0 10px;}
				.slideBox .hd ul li.on{ background:#FF9900; color:#fff; }
				.slideBox .bd{ position:relative; height:100%; z-index:0;   }
				.slideBox .bd li{ zoom:1; vertical-align:middle;}
				.slideBox .bd img{display:block;  width:100%; }

			</style>
			<div class="slideBox" id="slideBox">
				<div class="hd">
					<ul><li class="on"></li><li class=""></li><li class=""></li></ul>
				</div>
				<div class="bd">
					<ul>
						<li style="display: list-item;"><a target="_blank"><img src="/Public/Home/Images/banner_1.gif"></a></li>
						<li style="display: none;"><a target="_blank" ><img src="/Public/Home/Images/banner_2.gif"></a></li>
						<li style="display: none;"><a target="_blank" ><img src="/Public/Home/Images/banner_3.gif"></a></li>
					</ul>
				</div>
			</div>
			<script>
				$(function(){
					jQuery(".slideBox").slide({mainCell:".bd ul",effect:"fold",autoPlay:true});
				})
			</script>
			<!-- slide end -->
		</div>
		<div class="art-con">
			<div class="art-left">
				<ul class="art-ul">
					<li class="art-li ">
						<a class="art-title art-li-current">关于我们<em class="art-icon"></em></a>
						<ul class="art-c-ul" style="display:none">
							<li><a href="">公司介绍</a></li>
							<li><a href="">发展历程</a></li>
							<li><a href="">股东背景</a></li>
							<li><a href="">网站动态</a></li>
						</ul>
					</li>
					<li class="art-li">
						<a class="art-title art-li-current">关于我们<em class="art-icon"></em></a>
						<div class="art-c-ul">
							<ul>
								<li><a href="">公司介绍</a></li>
								<li><a href="">发展历程</a></li>
								<li><a href="">股东背景</a></li>
								<li><a href="">网站动态</a></li>
							</ul>
						</div>
					</li>
					<li class="art-li">
						<a class="art-title art-li-current">关于我们<em class="art-icon"></em></a>
						<div class="art-c-ul">
							<ul>
								<li><a href="">公司介绍</a></li>
								<li><a href="">发展历程</a></li>
								<li><a href="">股东背景</a></li>
								<li><a href="">网站动态</a></li>
							</ul>
						</div>
					</li>
				</ul>
			</div>
			<div class="art-right">
				<div class="aright-head"></div>
				<div class="aright-body">
					<div class="body-tit">公司简介</div>
					<div class="body-desc">
						<a class="quo quo1"></a>
						<a class="quo quo2"></a>
						公司简介公司简介公司简介公司简介公司简介公司简介公司简介公司简介公司简介公司简介公司简介公司简介公司简介公司简介公司简介公司简介公司简介公司简介公公司简介公司简介公司简介公司简介公司简介公司简介公司简介公司简介公司简介公司简介公司简介公司简介公司简介公司简介公司简介公司简介公司简介公司简介公公司简介公司简介公司简介公司简介公司简介公司简介公司简介公司简介公司简介公司简介公司简介公司简介公司简介公司简介公司简介公司简介公司简介公司简介公公司简介公司简介公司简介公司简介公司简介公司简介公司简介公司简介公司简介公司简介公司简介公司简介公司简介公司简介公司简介公司简介公司简介公司简介公公司简介公司简介公司简介公司简介公司简介公司简介公司简介公司简介公司简介公司简介公司简介公司简介公司简介公司简介公司简介公司简介公司简介公司简介公公司简介公司简介公司简介公司简介公司简介公司简介公司简介公司简介公司简介公司简介公司简介公司简介公司简介公司简介公司简介公司简介公司简介公司简介公司简介公司简介公司简介公司简介公司简介公司简介公司简介公司简介公司简介公司简介
						
					</div>
				</div>
				<div class="aright-foot"></div>
			</div>
		</div>
	</div>
	<footer class="index-footer">
		<div class="footer">
			<div class="footer-top">
				<div class="footer-ul">
					<ul>
						<li>
							<span class="footer-title">关于我们</span>
							<a href="">公司介绍</a>
							<a href="">股东背景</a>
							<a href="">媒体报道</a>
							<a href="">最新动态</a>
						</li>
						<li>
							<span class="footer-title">帮助中心</span>
							<a href="">新手入门</a>
							<a href="">理财问答</a>
							<a href="">使用帮助</a>
						</li>
						<li style="width:260px;">
							<span class="footer-title">关注我们</span>
							<div class="focus-div">
								<div class="focusitem">
									<em class="focus-icon icon1s"></em>
									<span class="focus-title">微信公众号</span>
								</div>
								<div class="focusitem">
									<em class="focus-icon icon2s"></em>
									<span class="focus-title">新浪微博</span>
								</div>
								<div class="focusitem">
									<em class="focus-icon icon3s"></em>
									<span class="focus-title">腾讯微博</span>
								</div>
							</div>
						</li>
						<li style="width:260px;">
							<span class="footer-title">客服热线</span>
							<span class="cus">
								<em class="cus-icon01"></em>
								<span class="cus-title">4000-27482-2428</span>
							</span>
							<span class="footer-title">在线咨询</span>
							<div class="cus">
								<em class="cus-icon02"></em>
								<span class="cus-title">在线咨询 09:00 - 23:00</span>
							</div>
						</li>
					</ul>
				</div>
			</div>
			<div class="footer-mid"></div>
			<div class="footer-bottom"></div>
		</div>
	</footer>
</body>
</html>