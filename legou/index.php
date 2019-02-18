<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
	<meta name="viewport" content="width=750,target-densitydpi=device-dpi,maximum-scale=1.0, user-scalable=no">
    <script type="text/javascript">
    function setWidth(e){if(/Andriod/i.test(navigator.userAgent)){var f,d=window.innerWidth;(d!=e)&&(f=d/e),document.addEventListener("DOMContentLoaded",function(){var a=document.getElementsByTagName("body")[0];a.style.webkitTransformOrigin="left top";a.style.webkitTransform="scale("+f+")"},!1)}}setWidth(750);
    </script>
	<title>首页 - 乐购</title>
	<link rel="stylesheet" href="css/reset.css">	<!-- 重置样式 -->
	<link rel="stylesheet" href="css/index.css">	<!-- 加载首页样式文件 -->
	<link rel="stylesheet" href="css/swiper.min.css">	<!-- 加载首页样式文件 -->
	<style>
		.swiper-container {
			width: 100%;
			height: 100%;
		}
		.swiper-slide {
			text-align: center;
			font-size: 18px;
			background: #fff;

			/* Center slide text vertically */
			display: -webkit-box;
			display: -ms-flexbox;
			display: -webkit-flex;
			display: flex;
			-webkit-box-pack: center;
			-ms-flex-pack: center;
			-webkit-justify-content: center;
			justify-content: center;
			-webkit-box-align: center;
			-ms-flex-align: center;
			-webkit-align-items: center;
			align-items: center;
		}
		.swiper-pagination-fraction{
			width: 50px;
			display: inline;
			font-size: .36rem;
			padding:2px 5px;
			color: #fff;
			border-radius: 20px;
			left:auto;
			right: 10px;
			background: rgba(0,0,0,.3);
		}
	</style>
</head>
<body>
	<!-- 最大容器 -->                          <!---->
<div class="container">
	<!-- header section footer nav article 这些H5的标签，主要作用是用来标识（不是用来布局） -->
	
	<!-- 用H5定义结构 -->
	<!-- 头部 -->
	<header>
		<div class="header">
			<img class="logo" src="images/logo.png" alt="">
			<div class="search">
				<i class="icon fl">&#xe6cf;</i>
				<input type="text" placeholder="输入商家、分类或商圈 ">
			</div>
			<i class="icon saoma">&#xe604;</i>
			<i class="icon ring">&#xe6b0;</i>
		</div>
	</header>

	<!-- 广告位 -->
	<section>
		<div class="ad">
			<!--<img src="images/banner1.jpg" alt="">-->
			<!-- Swiper -->
			<div class="swiper-container">
				<div class="swiper-wrapper">
					<div class="swiper-slide"><img src="images/banner1.jpg" class="img" alt=""></div>
					<div class="swiper-slide"><img src="images/banner2.jpg" class="img" alt=""></div>
					<div class="swiper-slide"><img src="images/banner3.jpg" class="img" alt=""></div>
				</div>
				<!-- Add Pagination -->
				<div class="swiper-pagination"></div>
				<!-- Add Arrows -->
				<!--<div class="swiper-button-next"></div>-->
				<!--<div class="swiper-button-prev"></div>-->
			</div>
		</div>
	</section>

	<!-- 广告位下面的子菜单 -->
	<section>
		<div class="menu">
			<ul>
				<li>
					<a href="">
						<i class="icon mbg1">&#xe649;</i>
						<p>抽奖</p>
					</a>
				</li>
				<li>
					<a href="">
						<i class="icon mbg2">&#xe6d8;</i>
						<p>兑换</p>
					</a>
				</li>
				<li>
					<a href="">
						<i class="icon mbg3">&#xe600;</i>
						<p>促销</p>
						<span>hot</span>
					</a>
				</li>
				<li>
					<a href="">
						<i class="icon mbg4">&#xe65c;</i>
						<p>闪送超市</p>
					</a>
				</li>
			</ul>
			<div class="clear"></div>
		</div>
	</section>

	<!-- 商品列表 -->
	<section>
	<div class="good-all">
		<div class="goods">
			<div class="pics1">
				<img class="lazy" data-original="images/goods1.jpg" alt="">	<!-- 图片右浮动 -->
			</div>
			<h3>Fresh奶</h3>
			<!-- pirce 价格 -->
			<p>光明畅优乳杆菌<span class="pirce">6</span>元/<span>2</span>瓶</p>
			<p>更多优惠 低至5折</p>
			<div class="clear"></div>
		</div>
		<div class="goods">
			<div class="pics1">
				<img class="lazy" data-original="images/goods1.jpg" alt="">	<!-- 图片右浮动 -->
			</div>
			<h3>Fresh奶</h3>
			<!-- pirce 价格 -->
			<p>光明畅优乳杆菌<span class="pirce">6</span>元/<span>2</span>瓶</p>
			<p>更多优惠 低至5折</p>
			<div class="clear"></div>
		</div>
		<div class="goods">
			<div class="pics1">
				<img class="lazy" data-original="images/goods1.jpg" alt="">	<!-- 图片右浮动 -->
			</div>
			<h3>Fresh奶</h3>
			<!-- pirce 价格 -->
			<p>光明畅优乳杆菌<span class="pirce">6</span>元/<span>2</span>瓶</p>
			<p>更多优惠 低至5折</p>
			<div class="clear"></div>
		</div>
		<div class="goods">
			<div class="pics1">
				<img class="lazy" data-original="images/goods1.jpg" alt="">	<!-- 图片右浮动 -->
			</div>
			<h3>Fresh奶</h3>
			<!-- pirce 价格 -->
			<p>光明畅优乳杆菌<span class="pirce">6</span>元/<span>2</span>瓶</p>
			<p>更多优惠 低至5折</p>
			<div class="clear"></div>
		</div>
		<div class="goods">
			<div class="pics1">
				<img class="lazy" data-original="images/goods1.jpg" alt="">	<!-- 图片右浮动 -->
			</div>
			<h3>Fresh奶</h3>
			<!-- pirce 价格 -->
			<p>光明畅优乳杆菌<span class="pirce">6</span>元/<span>2</span>瓶</p>
			<p>更多优惠 低至5折</p>
			<div class="clear"></div>
		</div>
		<div class="goods">
			<div class="pics1">
				<img class="lazy" data-original="images/goods1.jpg" alt="">	<!-- 图片右浮动 -->
			</div>
			<h3>Fresh奶</h3>
			<!-- pirce 价格 -->
			<p>光明畅优乳杆菌<span class="pirce">6</span>元/<span>2</span>瓶</p>
			<p>更多优惠 低至5折</p>
			<div class="clear"></div>
		</div>
		<div class="goods">
			<div class="pics1">
				<img class="lazy" data-original="images/goods1.jpg" alt="">	<!-- 图片右浮动 -->
			</div>
			<h3>Fresh奶</h3>
			<!-- pirce 价格 -->
			<p>光明畅优乳杆菌<span class="pirce">6</span>元/<span>2</span>瓶</p>
			<p>更多优惠 低至5折</p>
			<div class="clear"></div>
		</div>
		<div class="goods">
			<div class="pics1">
				<img class="lazy" data-original="images/goods1.jpg" alt="">	<!-- 图片右浮动 -->
			</div>
			<h3>Fresh奶</h3>
			<!-- pirce 价格 -->
			<p>光明畅优乳杆菌<span class="pirce">6</span>元/<span>2</span>瓶</p>
			<p>更多优惠 低至5折</p>
			<div class="clear"></div>
		</div>
	</div>
	</section>


	<!-- 文章标识 -->
	<!-- <article></article> -->

	<!-- 底部 -->
	<footer>
		<div class="footer">版权 2018 归 xxx公司所有</p></div>
	</footer>
	
	<!-- 导航  -->
	<nav>
		<div class="nav">
			<ul>
				<li>
					<a href="" class="focus">
						<i class="icon mbg1">&#xe61e;</i>
						<p>首页</p>
					</a>
				</li>
				<li>
					<a href="">
						<i class="icon mbg2">&#xe65c;</i>
						<p>闪送超市</p>
					</a>
				</li>
				<li>
					<a href="">
						<i class="icon mbg3">&#xe64a;</i>
						<p>我的</p>
					</a>
				</li>
				<li>
					<a href="">
						<i class="icon mbg4">&#xe60c;</i>
						<p>￥0起送</p>
					</a>
				</li>
			</ul>
			<div class="clear"></div>
		</div>
	</nav>
		
</div>

	<!--图片懒加载-->
	<script src="js/jquery-1.11.0.min.js"></script>
	<script src="js/jquery.lazyload.js?v=1.9.1"></script>
	<script type="text/javascript" charset="utf-8">

        $(function() {
            $("img.lazy").lazyload({effect: "fadeIn"}).parent().css('background','#eeeeee');
        });



	</script>
	<script src="js/swiper.min.js"></script>
	<script>
        <!-- Swiper JS -->
        var swiper = new Swiper('.swiper-container', {
            autoplay :	{
                delay: 3000,
                stopOnLastSlide: false,//是否停在第一张
                disableOnInteraction: false,//当用户拖动后还会轮播
			},
			loop:true,
            pagination: {
                el: '.swiper-pagination',
                type: 'fraction',
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
	</script>
</body>
</html>