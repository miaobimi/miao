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
				<span class="notice">欢迎来到中远融投,投资有风险,选择需谨慎!</span>
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
						<li><a class="current" href="">首页</a></li>
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
		<div class="slide">
			<!-- slide start -->
			<style type="text/css">

				/* 本例子css */
				.slideBox{ width:100%;overflow:hidden; position:relative;}
				.slideBox .hd{ height:15px; overflow:hidden; position:absolute; right:50%; bottom:5px; z-index:1; }
				.slideBox .hd ul{ overflow:hidden; zoom:1; float:left;  }
				.slideBox .hd ul li{ float:left; margin-right:2px;  width:15px; height:15px; line-height:14px;list-style: none;text-align:center;border-radius: 50%; background:#fff; cursor:pointer; margin:0 10px;}
				.slideBox .hd ul li.on{ background:#FF9900; color:#fff; }
				.slideBox .bd{ position:relative; height:100%; z-index:0;   }
				.slideBox .bd li{ zoom:1; vertical-align:middle; }
				.slideBox .bd img{display:block;  }

			</style>
			<div class="slideBox" id="slideBox">
				<div class="hd">
					<ul><li class="on"></li><li class=""></li><li class=""></li></ul>
				</div>
				<div class="bd">
					<ul>
						<li style="display: list-item;"><a target="_blank" ><img src="http://static.jinfuzi.com/edit/image/1430899373.jpeg"></a></li>
						<li style="display: none;"><a target="_blank" ><img src="http://static.jinfuzi.com/edit/image/1432262183.jpeg"></a></li>
						<li style="display: none;"><a target="_blank" ><img src="http://static.jinfuzi.com/edit/image/1431479504.jpeg"></a></li>
					</ul>
				</div>

			</div>
			<!-- slide end -->
		<script>
			$(function(){
				jQuery(".slideBox").slide({mainCell:".bd ul",effect:"fold",autoPlay:true});
			})
		</script>
			<!-- <img src="http://static.jinfuzi.com/edit/image/1430899373.jpeg" alt=""> -->
		</div>
		<div class="main-content">
			<div class="main-content-top">
				<div class="guide-left">
					<div class="item1">
						<a target="_blank" href="">
							<em class="guide-icon icon-guide-1"></em>
						</a>
						<p class="guide-con">
							<a class="g-title" href="">认识中远融投</a><br>
							<a class="g-desc" href="">理财导购领先平台</a>
						</p>
					</div>
					<div class="item2">
						<a target="_blank" href="">
							<em class="guide-icon icon-guide-2"></em>
						</a>
						<p class="guide-con">
							<a class="g-title" href="">新手指引</a><br>
							<a class="g-desc" href="">3分钟了解理财产品</a>
						</p>
					</div>
				</div>
				<div class="guide-right">
					<div class="media-top">
						<span class="txt">
							<em class="media-icon"></em>
							<span class="media-txt">媒体报道</span>
						</span>
						<a class="more-media" target="_blank" href="">更多</a>
					</div>
					<div class="media-con">
						媒体报道媒体报道媒体报道媒体报道媒体报道媒体报道媒体报道
					</div>
					<div class="media-con">
						媒体报道媒体报道媒体报道媒体报道媒体报道媒体报道媒体报道
					</div>
				</div>
			</div>
			<div class="main-content-ad">
				<ul>
					<li><a href=""><img src="http://static.jinfuzi.com/edit/image/abvert/430-220.jpg" alt=""></a></li>
					<li><a href=""><img src="http://static.jinfuzi.com/edit/image/abvert/123456.jpg" alt=""></a></li>
					<li><a href=""><img src="http://static.jinfuzi.com/edit/image/1411563156.jpg" alt=""></a></li>
				</ul>
			</div>
			<div class="main-content-main">
				<ul>
					<li class="mainli">
						<div class="ladder-left ladder02">
							<p class="ladder-income">（7%-9%收益）</p>
							<p class="ladder-desc"> 
								<i class="idx-icon"></i>
								银行票据是高收益，低门槛，低风险的理财产品，特别适合追求较高收益，又不想承担较高风险的人群理财</p>
						</div>
						<div class="ladder-right">
							<div class="tab-hd">
								<ul class="tab-control">
									<li>
										<a class="txt">银行票据</a>
									</li>
								</ul>
								<a class="more-link" href="">更多票据产品...</a>
							</div>
							<div class="tab-bd">
								<div class="tab-con-active">
									<ul class="con-ul">
										<li>
											<a class="u-title">【新手加息】滚盈票</a>
											<p class="u-per">
												<span class="i">9</span>.50%
											</p>
											<p class="u-zq">
												<span>总额：<i>34,500</i>元</span>
												<span>期限：<i>27</i>天</span>
											</p>
											<p class="u-sure">
												<i></i>
												<span>100%银行无条件兑付</span>
											</p>
											<a class="knowbtn" href="">了解详情</a>
										</li>
										<li>
											<a class="u-title">【新手加息】滚盈票</a>
											<p class="u-per">
												<span class="i">9</span>.50%
											</p>
											<p class="u-zq">
												<span>总额：<i>34,500</i>元</span>
												<span>期限：<i>27</i>天</span>
											</p>
											<p class="u-sure">
												<i></i>
												<span>100%银行无条件兑付</span>
											</p>
											<a class="knowbtn" href="">了解详情</a>
										</li>
										<li>
											<a class="u-title">【新手加息】滚盈票</a>
											<p class="u-per">
												<span class="i">9</span>.50%
											</p>
											<p class="u-zq">
												<span>总额：<i>34,500</i>元</span>
												<span>期限：<i>27</i>天</span>
											</p>
											<p class="u-sure">
												<i></i>
												<span>100%银行无条件兑付</span>
											</p>
											<a class="knowbtn" href="">了解详情</a>
										</li>
									</ul>
								</div>
						<div class="tab-bd-bottom">
							<div class="bo">
								<div class="bo-left">
									<em class="bo-img"></em>
									<span>投资分析</span>
								</div>
								<div class="bo-right">
									<ul class="analysis_list">
										<li>
											<span class="tit">收益系数</span>
											<div class="uc_fivestar_wrap">
												<div class="star_bar">
													<p class="star_b"></p>
													<p class="star_f" style="width:70%"></p>
												</div>
											</div>
											<span class="analysis">高收益</span>
										</li>
										<li>
											<span class="tit">安全系数</span>
											<div class="uc_fivestar_wrap">
												<div class="star_bar">
													<p class="star_b"></p>
													<p class="star_f" style="width:100%"></p>
												</div>
											</div>
											<span class="analysis">较低风险</span>
										</li>
										<li>
											<span class="tit">投资门槛</span>
											<div class="uc_fivestar_wrap">
												<div class="star_bar">
													<p class="star_b"></p>
													<p class="star_f" style="width:100%"></p>
												</div>
											</div>
											<span class="analysis">超低门槛</span>
										</li>
									</ul>
								</div>	
							</div>
							<div class="bo">
								<div class="bo-left">
									<em class="bos-img"></em>
									<span>小贴士</span>
								</div>
								<div class="bo-right">
									<ul class="analysis_list">
										<li>
											<a target="_blank" href="">
												<em class="idx_ico idx_ico_8"></em>
												<span class="txt">什么是银行票据？</span>
											</a>
										</li>
										<li>
											<a target="_blank" href="">
												<em class="idx_ico idx_ico_8"></em>
												<span class="txt">什么是银行票据？</span>
											</a>
										</li>
										<li>
											<a target="_blank" href="">
												<em class="idx_ico idx_ico_8"></em>
												<span class="txt">什么是银行票据？</span>
											</a>
										</li>
									</ul>
								</div>	
							</div>
						</div>
							</div>
						</div>
					</li>
					<li class="mainli">
						<div class="ladder-left ladder03">
							<p class="ladder-income">（7%-9%收益）</p>
							<p class="ladder-desc"> 
								<i class="idx-icon"></i>
								银行票据是高收益，低门槛，低风险的理财产品，特别适合追求较高收益，又不想承担较高风险的人群理财</p>
						</div>
						<div class="ladder-right">
							<div class="tab-hd">
								<ul class="tab-control">
									<li>
										<a class="txt">银行票据</a>
									</li>
								</ul>
								<a class="more-link" href="">更多票据产品...</a>
							</div>
							<div class="tab-bd">
								<div class="tab-con-active">
									<ul class="con-ul">
										<li>
											<a class="u-title">【新手加息】滚盈票</a>
											<p class="u-per">
												<span class="i">9</span>.50%
											</p>
											<p class="u-zq">
												<span>总额：<i>34,500</i>元</span>
												<span>期限：<i>27</i>天</span>
											</p>
											<p class="u-sure">
												<i></i>
												<span>100%银行无条件兑付</span>
											</p>
											<a class="knowbtn" href="">了解详情</a>
										</li>
										<li>
											<a class="u-title">【新手加息】滚盈票</a>
											<p class="u-per">
												<span class="i">9</span>.50%
											</p>
											<p class="u-zq">
												<span>总额：<i>34,500</i>元</span>
												<span>期限：<i>27</i>天</span>
											</p>
											<p class="u-sure">
												<i></i>
												<span>100%银行无条件兑付</span>
											</p>
											<a class="knowbtn" href="">了解详情</a>
										</li>
										<li>
											<a class="u-title">【新手加息】滚盈票</a>
											<p class="u-per">
												<span class="i">9</span>.50%
											</p>
											<p class="u-zq">
												<span>总额：<i>34,500</i>元</span>
												<span>期限：<i>27</i>天</span>
											</p>
											<p class="u-sure">
												<i></i>
												<span>100%银行无条件兑付</span>
											</p>
											<a class="knowbtn" href="">了解详情</a>
										</li>
									</ul>
								</div>
								<div class="tab-bd-bottom">
									<div class="bo">
										<div class="bo-left">
											<em class="bo-img"></em>
											<span>投资分析</span>
										</div>
										<div class="bo-right">
											<ul class="analysis_list">
												<li>
													<span class="tit">收益系数</span>
													<div class="uc_fivestar_wrap">
														<div class="star_bar">
															<p class="star_b"></p>
															<p class="star_f" style="width:70%"></p>
														</div>
													</div>
													<span class="analysis">高收益</span>
												</li>
												<li>
													<span class="tit">安全系数</span>
													<div class="uc_fivestar_wrap">
														<div class="star_bar">
															<p class="star_b"></p>
															<p class="star_f" style="width:100%"></p>
														</div>
													</div>
													<span class="analysis">较低风险</span>
												</li>
												<li>
													<span class="tit">投资门槛</span>
													<div class="uc_fivestar_wrap">
														<div class="star_bar">
															<p class="star_b"></p>
															<p class="star_f" style="width:100%"></p>
														</div>
													</div>
													<span class="analysis">超低门槛</span>
												</li>
											</ul>
										</div>	
									</div>
									<div class="bo">
										<div class="bo-left">
											<em class="bos-img"></em>
											<span>小贴士</span>
										</div>
										<div class="bo-right">
											<ul class="analysis_list">
												<li>
													<a target="_blank" href="">
														<em class="idx_ico idx_ico_8"></em>
														<span class="txt">什么是银行票据？</span>
													</a>
												</li>
												<li>
													<a target="_blank" href="">
														<em class="idx_ico idx_ico_8"></em>
														<span class="txt">什么是银行票据？</span>
													</a>
												</li>
												<li>
													<a target="_blank" href="">
														<em class="idx_ico idx_ico_8"></em>
														<span class="txt">什么是银行票据？</span>
													</a>
												</li>
											</ul>
										</div>	
									</div>
								</div>
							</div>
						</div>
					</li>
					<li class="mainli">
						<div class="ladder-left ladder01">
							<p class="ladder-income">（7%-9%收益）</p>
							<p class="ladder-desc"> 
								<i class="idx-icon"></i>
								银行票据是高收益，低门槛，低风险的理财产品，特别适合追求较高收益，又不想承担较高风险的人群理财</p>
						</div>
						<div class="ladder-right">
							<div class="tab-hd">
								<ul class="tab-control">
									<li>
										<a class="txt">银行票据</a>
									</li>
								</ul>
								<a class="more-link" href="">更多票据产品...</a>
							</div>
							<div class="tab-bd">
								<div class="tab-con-active">
									<ul class="con-ul">
										<li>
											<a class="u-title">【新手加息】滚盈票</a>
											<p class="u-per">
												<span class="i">9</span>.50%
											</p>
											<p class="u-zq">
												<span>总额：<i>34,500</i>元</span>
												<span>期限：<i>27</i>天</span>
											</p>
											<p class="u-sure">
												<i></i>
												<span>100%银行无条件兑付</span>
											</p>
											<a class="knowbtn" href="">了解详情</a>
										</li>
										<li>
											<a class="u-title">【新手加息】滚盈票</a>
											<p class="u-per">
												<span class="i">9</span>.50%
											</p>
											<p class="u-zq">
												<span>总额：<i>34,500</i>元</span>
												<span>期限：<i>27</i>天</span>
											</p>
											<p class="u-sure">
												<i></i>
												<span>100%银行无条件兑付</span>
											</p>
											<a class="knowbtn" href="">了解详情</a>
										</li>
										<li>
											<a class="u-title">【新手加息】滚盈票</a>
											<p class="u-per">
												<span class="i">9</span>.50%
											</p>
											<p class="u-zq">
												<span>总额：<i>34,500</i>元</span>
												<span>期限：<i>27</i>天</span>
											</p>
											<p class="u-sure">
												<i></i>
												<span>100%银行无条件兑付</span>
											</p>
											<a class="knowbtn" href="">了解详情</a>
										</li>
									</ul>
								</div>
								<div class="tab-bd-bottom">
									<div class="bo">
										<div class="bo-left">
											<em class="bo-img"></em>
											<span>投资分析</span>
										</div>
										<div class="bo-right">
											<ul class="analysis_list">
												<li>
													<span class="tit">收益系数</span>
													<div class="uc_fivestar_wrap">
														<div class="star_bar">
															<p class="star_b"></p>
															<p class="star_f" style="width:70%"></p>
														</div>
													</div>
													<span class="analysis">高收益</span>
												</li>
												<li>
													<span class="tit">安全系数</span>
													<div class="uc_fivestar_wrap">
														<div class="star_bar">
															<p class="star_b"></p>
															<p class="star_f" style="width:100%"></p>
														</div>
													</div>
													<span class="analysis">较低风险</span>
												</li>
												<li>
													<span class="tit">投资门槛</span>
													<div class="uc_fivestar_wrap">
														<div class="star_bar">
															<p class="star_b"></p>
															<p class="star_f" style="width:100%"></p>
														</div>
													</div>
													<span class="analysis">超低门槛</span>
												</li>
											</ul>
										</div>	
									</div>
									<div class="bo">
										<div class="bo-left">
											<em class="bos-img"></em>
											<span>小贴士</span>
										</div>
										<div class="bo-right">
											<ul class="analysis_list">
												<li>
													<a target="_blank" href="">
														<em class="idx_ico idx_ico_8"></em>
														<span class="txt">什么是银行票据？</span>
													</a>
												</li>
												<li>
													<a target="_blank" href="">
														<em class="idx_ico idx_ico_8"></em>
														<span class="txt">什么是银行票据？</span>
													</a>
												</li>
												<li>
													<a target="_blank" href="">
														<em class="idx_ico idx_ico_8"></em>
														<span class="txt">什么是银行票据？</span>
													</a>
												</li>
											</ul>
										</div>	
									</div>
								</div>
							</div>
						</div>
					</li>
					<li class="mainli">
						<div class="ladder-left ladder04">
							<p class="ladder-income">（7%-9%收益）</p>
							<p class="ladder-desc"> 
								<i class="idx-icon"></i>
								银行票据是高收益，低门槛，低风险的理财产品，特别适合追求较高收益，又不想承担较高风险的人群理财</p>
						</div>
						<div class="ladder-right">
							<div class="tab-hd">
								<ul class="tab-control">
									<li>
										<a class="txt">银行票据</a>
									</li>
								</ul>
								<a class="more-link" href="">更多票据产品...</a>
							</div>
							<div class="tab-bd">
								<div class="tab-con-active">
									<ul class="con-ul">
										<li>
											<a class="u-title">【新手加息】滚盈票</a>
											<p class="u-per">
												<span class="i">9</span>.50%
											</p>
											<p class="u-zq">
												<span>总额：<i>34,500</i>元</span>
												<span>期限：<i>27</i>天</span>
											</p>
											<p class="u-sure">
												<i></i>
												<span>100%银行无条件兑付</span>
											</p>
											<a class="knowbtn" href="">了解详情</a>
										</li>
										<li>
											<a class="u-title">【新手加息】滚盈票</a>
											<p class="u-per">
												<span class="i">9</span>.50%
											</p>
											<p class="u-zq">
												<span>总额：<i>34,500</i>元</span>
												<span>期限：<i>27</i>天</span>
											</p>
											<p class="u-sure">
												<i></i>
												<span>100%银行无条件兑付</span>
											</p>
											<a class="knowbtn" href="">了解详情</a>
										</li>
										<li>
											<a class="u-title">【新手加息】滚盈票</a>
											<p class="u-per">
												<span class="i">9</span>.50%
											</p>
											<p class="u-zq">
												<span>总额：<i>34,500</i>元</span>
												<span>期限：<i>27</i>天</span>
											</p>
											<p class="u-sure">
												<i></i>
												<span>100%银行无条件兑付</span>
											</p>
											<a class="knowbtn" href="">了解详情</a>
										</li>
									</ul>
								</div>
								<div class="tab-bd-bottom">
									<div class="bo">
										<div class="bo-left">
											<em class="bo-img"></em>
											<span>投资分析</span>
										</div>
										<div class="bo-right">
											<ul class="analysis_list">
												<li>
													<span class="tit">收益系数</span>
													<div class="uc_fivestar_wrap">
														<div class="star_bar">
															<p class="star_b"></p>
															<p class="star_f" style="width:70%"></p>
														</div>
													</div>
													<span class="analysis">高收益</span>
												</li>
												<li>
													<span class="tit">安全系数</span>
													<div class="uc_fivestar_wrap">
														<div class="star_bar">
															<p class="star_b"></p>
															<p class="star_f" style="width:100%"></p>
														</div>
													</div>
													<span class="analysis">较低风险</span>
												</li>
												<li>
													<span class="tit">投资门槛</span>
													<div class="uc_fivestar_wrap">
														<div class="star_bar">
															<p class="star_b"></p>
															<p class="star_f" style="width:100%"></p>
														</div>
													</div>
													<span class="analysis">超低门槛</span>
												</li>
											</ul>
										</div>	
									</div>
									<div class="bo">
										<div class="bo-left">
											<em class="bos-img"></em>
											<span>小贴士</span>
										</div>
										<div class="bo-right">
											<ul class="analysis_list">
												<li>
													<a target="_blank" href="">
														<em class="idx_ico idx_ico_8"></em>
														<span class="txt">什么是银行票据？</span>
													</a>
												</li>
												<li>
													<a target="_blank" href="">
														<em class="idx_ico idx_ico_8"></em>
														<span class="txt">什么是银行票据？</span>
													</a>
												</li>
												<li>
													<a target="_blank" href="">
														<em class="idx_ico idx_ico_8"></em>
														<span class="txt">什么是银行票据？</span>
													</a>
												</li>
											</ul>
										</div>	
									</div>
								</div>
							</div>
						</div>
					</li>
				</ul>
			</div>
			<div class="f5">
				<h3 class="f-title"><span class="red">5F</span>我要开户</h3>
				<div class="f5con">
					<ul>
						<li>
							<div class="f5item">
								<span class="f5-hd">股票开户</span>
								<div class="f5-icon f501"></div>
								<div class="f5-one">万三佣金</div>
								<div class="f5-two">网上开户</div>
								<p class="f5-lit">16043346已成功开户</p>
								<a class="f5-op" href="">我要开户</a>
							</div>
						</li>
						<li>
							<div class="f5item">
								<span class="f5-hd">股票开户</span>
								<div class="f5-icon f502"></div>
								<div class="f5-one">万三佣金</div>
								<div class="f5-two">网上开户</div>
								<p class="f5-lit">16043346已成功开户</p>
								<a class="f5-op" href="">我要开户</a>
							</div>
						</li>
						<li>
							<div class="f5item">
								<span class="f5-hd">股票开户</span>
								<div class="f5-icon f503"></div>
								<div class="f5-one">万三佣金</div>
								<div class="f5-two">网上开户</div>
								<p class="f5-lit">16043346已成功开户</p>
								<a class="f5-op" href="">我要开户</a>
							</div>
						</li>
						<li>
							<div class="f5item">
								<span class="f5-hd">股票开户</span>
								<div class="f5-icon f504"></div>
								<div class="f5-one">万三佣金</div>
								<div class="f5-two">网上开户</div>
								<p class="f5-lit">16043346已成功开户</p>
								<a class="f5-op" href="">我要开户</a>
							</div>
						</li>
					</ul>
				</div>
			</div>
			<div class="f6">
				<h3 class="f-title"><span class="red">6F</span>问答社区</h3>
				<div class="f6-con">
					<div class="f6-left">
						
					</div>
					<div class="f6-mid"></div>
					<div class="f6-right"></div>
				</div>
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