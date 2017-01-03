<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>旅烨公开课</title>
	<link rel="stylesheet" href="/Public/css/style.css">
	<link rel="stylesheet" href="/Public/css/reset.css">
	<link rel="stylesheet" type="text/css" href="/Public/css/idangerous.swiper.css"/>
	<!--[if lt IE 9]>
	<script src="/public/js/html5shiv.min.js"></script>
	<![endif]-->
</head>
<body>
<div class="container-center">
	<div class="container-center2">
		<!---------------------heder部分开始------------------>
		<div class="header">
			<div class="header-left">
				<div class="logo">
					<a href="/"><img src="/Public/images/logo.png" /></a>
				</div>
				<ul class="mynav">
					<li><a href="/">首页</a></li>
					<li><a href="shizhan.html">实战</a></li>
					<li><a href="lujing.html">路径</a></li>
					<li><a href="">问答</a></li>
					<li><a href="">手记</a></li>
				</ul>
			</div>
			<div class="header-right">
				<div class="search">
					<input class="search-input" data-suggest-trigger="suggest-trigger"
					       placeholder="请输入想搜索的内容..." type="text" autocomplete="off">
					<a>搜索</a>
				</div>
				<div class="app">
					APP
				</div>
				<div class="erweima">
					二维码
				</div>
				<div class="user">
					<a href="javascript:;" class="login">登录</a>
					<a href="javascript:;" class="register login">注册</a>
				</div>
			</div>
		</div>
		<!---------------------heder部分结束------------------>
		<div class="bk"></div>
		<!---------------------banner部分开始------------------>
		<div class="banner clear">
			<div class="content">
				<div class="swiper-container">
					<div class="swiper-wrapper">
						<div class="swiper-slide"><img src="/Public/images/1.jpg"></div>
						<div class="swiper-slide"> <img src="/Public/images/2.jpg"></div>
						<div class="swiper-slide"><img src="/Public/images/3.jpg"></div>
					</div>
					<div class="swiper-button-prev" id="btn1"> <img src="/Public/images/prev.png"/></div>
					<div class="swiper-button-next" id="btn2"><img src="/Public/images/next.png"/></div>
					<div class="pagination"></div>
				</div>
				<div class="sideNav">
					<ul>
						<?php if(is_array($topCategory)): $i = 0; $__LIST__ = $topCategory;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="<?php echo U('Course/Index/index',array('catid'=>$vo['c_id']));?>"><?php echo ($vo["c_name"]); ?> <i class="glyphicon glyphicon-chevron-right"></i></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
					</ul>
					<?php if(is_array($childCategory)): $k = 0; $__LIST__ = $childCategory;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?><div class="box box<?php echo ($k); ?>" >
							<div>
								<h1 class="fenlei">分类目录</h1>
								<p>
									<?php if(is_array($vo)): $i = 0; $__LIST__ = $vo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vvo): $mod = ($i % 2 );++$i;?><a href="<?php echo U('Course/Index/index',array('cid'=>$vvo['c_id']));?>"><?php echo ($vvo["c_name"]); ?></a>/<?php endforeach; endif; else: echo "" ;endif; ?>
								</p>
								<h1 class="fenlei">推荐</h1>
								<p>课程 | 前端工程师必备的PS技能--切图</p>
								<p>课程 | 拍摄与剪辑“怀孕日记”</p>
								<p>课程 | PS入门（二）--进阶篇-图层、矢量、路径</p>
							</div>
						</div><?php endforeach; endif; else: echo "" ;endif; ?>



				</div>
			</div>
		</div>
		<!---------------------banner部分结束------------------>

		<!----------------实战推荐、免费好课开始--------------->
		<div class="main clear">
			<h3 class="main-title clearfix">
				<span class="box-left">实战推荐</span>
				<span class="box-right"><a href="">更多 ></a></span>
			</h3>
			<div class="clearfix">
				<div class="content1">
					<img src="/Public/images/pic.jpg" style="width: 100%; height: 124px;"/>
					<div class="text1">
						<h3>贯穿全栈 React Native开发</h3>
						<p>18小时纯干货讲解前沿技术React Native,以全栈角度学习前端到后端</p>
					</div>
					<h3 class="bottom_text">
						<span class="box-left">￥: 368.00</span>
						<span class=" box-right">255人在学</span>
					</h3>
				</div>
				<div class="content1">
					<img src="/Public/images/pic.jpg" style="width: 100%; height: 124px;"/>
					<div class="text1">
						<h3>贯穿全栈 React Native开发</h3>
						<p>18小时纯干货讲解前沿技术React Native,以全栈角度学习前端到后端</p>
					</div>
					<h3 class="bottom_text">
						<span class="box-left">￥: 368.00</span>
						<span class=" box-right">255人在学</span>
					</h3>
				</div>
				<div class="content1">
					<img src="/Public/images/pic.jpg" style="width: 100%; height: 124px;"/>
					<div class="text1">
						<h3>贯穿全栈 React Native开发</h3>
						<p>18小时纯干货讲解前沿技术React Native,以全栈角度学习前端到后端</p>
					</div>
					<h3 class="bottom_text">
						<span class="box-left">￥: 368.00</span>
						<span class=" box-right">255人在学</span>
					</h3>
				</div>
				<div class="content1">
					<img src="/Public/images/pic.jpg" style="width: 100%; height: 124px;"/>
					<div class="text1">
						<h3>贯穿全栈 React Native开发</h3>
						<p>18小时纯干货讲解前沿技术React Native,以全栈角度学习前端到后端</p>
					</div>
					<h3 class="bottom_text">
						<span class="box-left">￥: 368.00</span>
						<span class=" box-right">255人在学</span>
					</h3>
				</div>
				<div class="content1">
					<img src="/Public/images/pic.jpg" style="width: 100%; height: 124px;"/>
					<div class="text1">
						<h3>贯穿全栈 React Native开发</h3>
						<p>18小时纯干货讲解前沿技术React Native,以全栈角度学习前端到后端</p>
					</div>
					<h3 class="bottom_text">
						<span class="box-left">￥: 368.00</span>
						<span class=" box-right">255人在学</span>
					</h3>
				</div>
			</div>
			<h3 class="main-title clearfix">
				<span class="box-left">免费好课</span>
				<span class="box-right"><a href="">更多 ></a></span>
			</h3>
			<div class="clearfix">
				<div class="content1">
					<img src="/Public/images/pic2.jpg" style="width: 100%; height: 124px;"/>
					<div class="text1">
						<h3><span>初</span>JavaScript入门篇</h3>
						<p>18小时纯干货讲解前沿技术React Native,以全栈角度学习前端到后端</p>
					</div>
					<h3 class="bottom_text">
						<span class="study">255123人在学</span>
					</h3>
				</div>
				<div class="content1">
					<img src="/Public/images/pic2.jpg" style="width: 100%; height: 124px;"/>
					<div class="text1">
						<h3><span>初</span>JavaScript入门篇</h3>
						<p>18小时纯干货讲解前沿技术React Native,以全栈角度学习前端到后端</p>
					</div>
					<h3 class="bottom_text">
						<span class="study">255123人在学</span>
					</h3>
				</div>
				<div class="content1">
					<img src="/Public/images/pic2.jpg" style="width: 100%; height: 124px;"/>
					<div class="text1">
						<h3><span>初</span>JavaScript入门篇</h3>
						<p>18小时纯干货讲解前沿技术React Native,以全栈角度学习前端到后端</p>
					</div>
					<h3 class="bottom_text">
						<span class="study">255123人在学</span>
					</h3>
				</div>
				<div class="content1">
					<img src="/Public/images/pic2.jpg" style="width: 100%; height: 124px;"/>
					<div class="text1">
						<h3><span>初</span>JavaScript入门篇</h3>
						<p>18小时纯干货讲解前沿技术React Native,以全栈角度学习前端到后端</p>
					</div>
					<h3 class="bottom_text">
						<span class="study">255123人在学</span>
					</h3>
				</div>
				<div class="content1">
					<img src="/Public/images/pic2.jpg" style="width: 100%; height: 124px;"/>
					<div class="text1">
						<h3><span>初</span>JavaScript入门篇</h3>
						<p>18小时纯干货讲解前沿技术React Native,以全栈角度学习前端到后端</p>
					</div>
					<h3 class="bottom_text">
						<span class="study">255123人在学</span>
					</h3>
				</div>
			</div>
			<br />
		</div>
		<!----------------实战推荐、免费好课结束--------------->

		<!---------------- 职业路径板块开始-------------------->
		<div class="main2 clearfix">
			<!--板块一开始-->
			<div class="clearfix main2-center">
				<div class="box-left box-part1 box-part1-1">
					<p class="title">
						Web<br/>前端工程师
					</p>
					<a href="" class="career-path"><span>职业路径 </span> > </a>
					<div class="raise-weapon raise-weapon1">
						<a target="_blank" href="" class="item">jQuery源码探索之旅</a>
						<a target="_blank" href="" class="item">响应式布局那些事</a>
						<a target="_blank" href="" class="item">前端经典案例集萃之“图片、信息展示”</a>
					</div>
				</div>
				<div class="box-left box-part2">
					<div class="box-left margin-bottom pic1 pic1-1">
						<p>组件式开发Web App 全站</p>
					</div>
					<div class="content1 box-right margin-bottom float-right">
						<img src="/Public/images/pic2.jpg" style="width: 100%; height: 124px;"/>
						<div class="text1">
							<h3><span>初</span>JavaScript入门篇</h3>
							<p>18小时纯干货讲解前沿技术React Native,以全栈角度学习前端到后端</p>
						</div>
						<h3 class="bottom_text">
							<span class="study">255123人在学</span>
						</h3>
					</div>
					<div class="box-left margin-bottom pic1 pic1-2">
						前端经典案例集萃之“网页常用特效”
					</div>
					<div class="content1 box-right margin-bottom float-right">
						<img src="/Public/images/pic2.jpg" style="width: 100%; height: 124px;"/>
						<div class="text1">
							<h3><span>初</span>JavaScript入门篇</h3>
							<p>18小时纯干货讲解前沿技术React Native,以全栈角度学习前端到后端</p>
						</div>
						<h3 class="bottom_text">
							<span class="study">255123人在学</span>
						</h3>
					</div>
				</div>
				<div class="box-right box-part3">
					<div class="content1 content1-1">
						<img src="/Public/images/pic2.jpg" style="width: 100%; height: 124px;"/>
						<div class="text1">
							<h3><span>初</span>JavaScript入门篇</h3>
							<p>18小时纯干货讲解前沿技术React Native,以全栈角度学习前端到后端</p>
						</div>
						<h3 class="bottom_text">
							<span class="study">255123人在学</span>
						</h3>
					</div>
					<div class="list clearfix">
						<ul class="clearfix">
							<li><a target="_blank" href=""><p class="">手风琴效果</p></a></li>
							<li><a target="_blank" href=""><p class="">网页定位导航特效</p></a></li>
							<li><a target="_blank" href=""><p class="">前端性能优化-基础知识认知</p></a></li>
							<li><a target="_blank" href=""><p class="">Canvas 绘制时钟</p></a></li>
							<li><a target="_blank" href=""><p class="">H5+JS+CSS3 实现圣诞情缘</p></a></li>
						</ul>
					</div>
				</div>
			</div>
			<!--板块一结束-->

			<!--板块二开始-->
			<div class="clearfix main2-center">
				<div class="box-left box-part1 box-part1-2">
					<p class="title">
						Java<br/>工程师
					</p>
					<a href="" class="career-path"><span>职业路径 </span> > </a>
					<div class="raise-weapon raise-weapon2">
						<a target="_blank" href="" class="item">模式宗师养成宝典之Java版</a>
						<a target="_blank" href="" class="item">搞定Java加解密</a>
						<a target="_blank" href="" class="item">Hibernate开发宝典</a>
					</div>
				</div>
				<div class="box-left box-part2 mybox1">
					<div class="pic2 margin-bottom">
						JAVA新手快速入门攻略
					</div>
					<div class="content1 box-left margin-left0">
						<img src="/Public/images/pic2.jpg" style="width: 100%; height: 124px;"/>
						<div class="text1">
							<h3><span>初</span>JavaScript入门篇</h3>
							<p>18小时纯干货讲解前沿技术React Native,以全栈角度学习前端到后端</p>
						</div>
						<h3 class="bottom_text">
							<span class="study">255123人在学</span>
						</h3>
					</div>
					<div class="content1 box-left">
						<img src="/Public/images/pic2.jpg"/>
						<div class="text1">
							<h3><span>初</span>JavaScript入门篇</h3>
							<p>18小时纯干货讲解前沿技术React Native,以全栈角度学习前端到后端</p>
						</div>
						<h3 class="bottom_text">
							<span class="study">255123人在学</span>
						</h3>
					</div>
					<div class="content1 float-right ">
						<img src="/Public/images/pic2.jpg" style="width: 100%; height: 124px;"/>
						<div class="text1">
							<h3><span>初</span>JavaScript入门篇</h3>
							<p>18小时纯干货讲解前沿技术React Native,以全栈角度学习前端到后端</p>
						</div>
						<h3 class="bottom_text">
							<span class="study">255123人在学</span>
						</h3>
					</div>
				</div>
				<div class="box-right box-part3">
					<div class="content1 content1-1 ">
						<img src="/Public/images/pic2.jpg" style="width: 100%; height: 124px;"/>
						<div class="text1">
							<h3><span>初</span>JavaScript入门篇</h3>
							<p>18小时纯干货讲解前沿技术React Native,以全栈角度学习前端到后端</p>
						</div>
						<h3 class="bottom_text">
							<span class="study">255123人在学</span>
						</h3>
					</div>
					<div class="list clearfix">
						<ul class="clearfix">
							<li><a target="_blank" href=""><p class="">手风琴效果</p></a></li>
							<li><a target="_blank" href=""><p class="">网页定位导航特效</p></a></li>
							<li><a target="_blank" href=""><p class="">前端性能优化-基础知识认知</p></a></li>
							<li><a target="_blank" href=""><p class="">Canvas 绘制时钟</p></a></li>
							<li><a target="_blank" href=""><p class="">H5+JS+CSS3 实现圣诞情缘</p></a></li>
						</ul>
					</div>
				</div>
			</div>
			<!--板块二结束-->

			<!--板块三开始-->
			<div class="clearfix main2-center">
				<div class="box-left box-part1 box-part1-3">
					<p class="title">
						PHP<br/>工程师
					</p>
					<a href="" class="career-path"><span>职业路径 </span> > </a>
					<div class="raise-weapon raise-weapon3">
						<a target="_blank" href="" class="item">模式宗师养成宝典之Java版</a>
						<a target="_blank" href="" class="item">搞定Java加解密</a>
						<a target="_blank" href="" class="item">Hibernate开发宝典</a>
					</div>
				</div>
				<div class="box-left box-part2 mybox1">
					<div class="block3-pic box-left">
						<p class="title">PHP开发工程师闯关记--初识PHP</p>
						<div class="line"></div>
						<div class="subtitle">掌握基础知识、功能模块、面向对象等技能</div>
					</div>
					<div class="content1 box-right margin-bottom float-right">
						<img src="/Public/images/pic2.jpg"/>
						<div class="text1">
							<h3><span>初</span>JavaScript入门篇</h3>
							<p>18小时纯干货讲解前沿技术React Native,以全栈角度学习前端到后端</p>
						</div>
						<h3 class="bottom_text">
							<span class="study">255123人在学</span>
						</h3>
					</div>
					<div class="content1 box-right float-right">
						<img src="/Public/images/pic2.jpg"/>
						<div class="text1">
							<h3><span>初</span>JavaScript入门篇</h3>
							<p>18小时纯干货讲解前沿技术React Native,以全栈角度学习前端到后端</p>
						</div>
						<h3 class="bottom_text">
							<span class="study">255123人在学</span>
						</h3>
					</div>
				</div>
				<div class="box-right box-part3">
					<div class="content1 content1-1">
						<img src="/Public/images/pic2.jpg" style="width: 100%; height: 124px;"/>
						<div class="text1">
							<h3><span>初</span>JavaScript入门篇</h3>
							<p>18小时纯干货讲解前沿技术React Native,以全栈角度学习前端到后端</p>
						</div>
						<h3 class="bottom_text">
							<span class="study">255123人在学</span>
						</h3>
					</div>
					<div class="list clearfix">
						<ul class="clearfix">
							<li><a target="_blank" href=""><p class="">手风琴效果</p></a></li>
							<li><a target="_blank" href=""><p class="">网页定位导航特效</p></a></li>
							<li><a target="_blank" href=""><p class="">前端性能优化-基础知识认知</p></a></li>
							<li><a target="_blank" href=""><p class="">Canvas 绘制时钟</p></a></li>
							<li><a target="_blank" href=""><p class="">H5+JS+CSS3 实现圣诞情缘</p></a></li>
						</ul>
					</div>
				</div>
			</div>
			<!--板块三结束-->

			<!--板块四开始-->
			<div class="clearfix main2-center ">
				<div class="box-left box-part1 box-part11 box-part1-4">
					<p class="title">
						Linux<br/>运维工程师
					</p>
					<a href="" class="career-path"><span>职业路径 </span> > </a>
				</div>
				<div class="content1 box-left box2">
					<img src="/Public/images/pic2.jpg"/>
					<div class="text1">
						<h3><span>初</span>JavaScript入门篇</h3>
						<p>18小时纯干货讲解前沿技术React Native,以全栈角度学习前端到后端</p>
					</div>
					<h3 class="bottom_text">
						<span class="study">255123人在学</span>
					</h3>
				</div>
				<div class="content1 box-left box2">
					<img src="/Public/images/pic2.jpg"/>
					<div class="text1">
						<h3><span>初</span>JavaScript入门篇</h3>
						<p>18小时纯干货讲解前沿技术React Native,以全栈角度学习前端到后端</p>
					</div>
					<h3 class="bottom_text">
						<span class="study">255123人在学</span>
					</h3>
				</div>
				<div class="content1 box-left box2">
					<img src="/Public/images/pic2.jpg"/>
					<div class="text1">
						<h3><span>初</span>JavaScript入门篇</h3>
						<p>18小时纯干货讲解前沿技术React Native,以全栈角度学习前端到后端</p>
					</div>
					<h3 class="bottom_text">
						<span class="study">255123人在学</span>
					</h3>
				</div>
				<div class="content1 box-left box2" style="margin-right: 0!important;">
					<img src="/Public/images/pic2.jpg"/>
					<div class="text1">
						<h3><span>初</span>JavaScript入门篇</h3>
						<p>18小时纯干货讲解前沿技术React Native,以全栈角度学习前端到后端</p>
					</div>
					<h3 class="bottom_text">
						<span class="study">255123人在学</span>
					</h3>
				</div>

			</div>

			<!--板块四结束-->

			<!--板块五开始-->
			<div class="clearfix main2-center ">
				<div class="box-left box-part1 box-part1 box-part1-5">
					<p class="title">
						手记&猿问
					</p>
					<p class="title2">IT知识和答疑</p>
					<ul>
						<li><a href="" class="linkbtn">手记</a></li>
						<li><a href="" class="linkbtn">猿问</a></li>
						<li><a href="" class="linkbtn">积分商城</a></li>
					</ul>
				</div>
				<div class="box-left  box-part2-2">
					<div class="longer longer1 margin-bottom">
						<p>杭州云栖大会探索“变”与“不变”</p>
					</div>
					<div class="longer1-2">
						<div class="box-left">热门手记</div>
						<div class="float-right ss">
							<a href="" target="_blank" ><p class="h32">【聚划算技术团队】JavaScript内存管理和优化</p></a>
							<a href="" target="_blank" ><p class="h32">Linux操作系统内存浅析</p></a>
							<a href="" target="_blank" ><p class="h32">零碎笔记：移动Web特别样式处理 </p></a>
							<a href="" target="_blank" ><p class="h32">Cookie 防伪造 防修改</p></a>
						</div>
					</div>
				</div>
				<div class="box-right box-part2-2">
					<div class="longer longer2  margin-bottom">
						<p>学习编程语言的正确姿势？</p>
					</div>
					<div class="longer1-2">
						<div class="box-left">猿问推荐</div>
						<div class="float-right ss">
							<a href="" target="_blank" ><p class="h32">getter方法没有得到setter所赋值？</p></a>
							<a href="" target="_blank" ><p class="h32">Linux操作系统内存浅析</p></a>
							<a href="" target="_blank" ><p class="h32">零碎笔记：移动Web特别样式处理 </p></a>
							<a href="" target="_blank" ><p class="h32">Cookie 防伪造 防修改</p></a>
						</div>
					</div>
				</div>

			</div>
			<!--板块五结束-->

		</div>
		<!---------------- 职业路径板结束----------------------->

		<!--footer	-->
		<div class="footer bg-white idx-minwidth ">
			<div class="footer-main">
				<div class="footer-wrap idx-width">
					<div class="footer-sns">
						<a href="http://weibo.com/u/3306361973" class="footer-sns-weibo hide-text" target="_blank" title="新浪微博">新浪微博</a>
						<a href="javascript:void(0);" class="footer-sns-weixin" target="_blank" title="微信">
							<i class="footer-sns-weixin-expand"></i>
						</a>
						<a href="http://t.qq.com/mukewang999" class="footer-sns-qqweibo hide-text" target="_blank" title="腾讯微博">腾讯微博</a>
						<a href="http://user.qzone.qq.com/1059809142/" class="footer-sns-qzone hide-text" target="_blank" title="QQ空间">QQ空间</a>
					</div>
				</div>
				<div class="footer-link">
					<a href="" target="_blank" title="关于我们">关于我们</a>
					<a href="" target="_blank" title="企业合作">企业合作</a>
					<a href="" target="_blank" title="人才招聘">人才招聘</a>
					<a href="" target="_blank" title="讲师招募">讲师招募</a>
					<a href="" target="_blank" title="联系我们">联系我们</a>
					<a href="" target="_blank" title="意见反馈">意见反馈</a>
					<a href="" target="_blank">友情链接</a>
				</div>
				<div class="footer-copyright">
					<p>版权所有 © 2011-2016 上海旅烨网络科技有限公司，严禁抄袭复制</p>
				</div>
			</div>
		</div>
		<!--footer	-->
	</div>
</div>
</body>
</html>
<script src="/Public/js/jquery.min.js"></script>
<!--轮播-->
<script src="/Public/js/idangerous.swiper.min.js"></script>
<script src="/Public/js/main.js"></script>
<script src="/Public/layer/layer.js"></script>
<script type="text/javascript">
	$(document).ready(function () {
		var mySwiper = new Swiper ('.swiper-container', {
			autoplay: 5000,
			loop: true,
			pagination : '.pagination',
			paginationClickable :true,
		})

		$('#btn1').click(function(){
			mySwiper.swipePrev();
		})
		$('#btn2').click(function(){
			mySwiper.swipeNext();
		})
	})
</script>