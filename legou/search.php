<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <meta name="viewport" content="width=750,target-densitydpi=device-dpi,maximum-scale=1.0, user-scalable=no">
    <script type="text/javascript">
        function setWidth(e) { if (/Andriod/i.test(navigator.userAgent)) { var f, d = window.innerWidth; (d != e) && (f = d / e), document.addEventListener("DOMContentLoaded", function () { var a = document.getElementsByTagName("body")[0]; a.style.webkitTransformOrigin = "left top"; a.style.webkitTransform = "scale(" + f + ")" }, !1) } } setWidth(750);
    </script>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>搜索 - 乐购</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/search.css"> <!-- 加载搜索页样式文件 -->
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
        .swiper-pagination-bullet{
            background: #fff;
            border:2px solid #a3a3a3;
            width: 20px;
            height: 20px;
        }
        .swiper-pagination-bullet-active{
            background: #fe9002;
            border:2px solid #a3a3a3;
            width: 20px;
            height: 20px;
        }
        .swiper-container-horizontal>.swiper-pagination-bullets{
            top:388px;
        }

    </style>
</head>
<body>
    <!-- 最大的容器  -->
    <div class="container">
        <header>
            <div class="header">
                <i class="icon-s">&#xe601;</i>
                <img class="logo-s" src="images/logo.png" alt="">
                <div class="search">
                    <i class="icon fl">&#xe6cf;</i>
                    <input type="text" placeholder="输入商家、分类或商圈 ">
                    <div class="clear"></div>
                </div>
            </div>
        </header>

        <section>

            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="search-list">
                            <div class="list-1">
                                <a class="list-de"  href="">热门搜索</a>
                                <a class="list-de" href="">其美烤肉自助火锅城</a>
                                <a href="">新聚点量版ktv</a>
                                <div class="clear"></div>
                                <span></span>
                                <a class="list-de l-2"  href="">新聚点量版ktv</a>
                                <a class="l-2" href="">新聚点量版ktv</a>
                                <div class="clear"></div>
                                <span></span>
                                <a class="list-de l-2"  href="">新聚点量版ktv</a>
                                <div class="clear"></div>
                                <span></span>
                                <div class="dian">
                                    <i></i> <i></i> <i></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="search-list">
                            <div class="list-1">
                                <a class="list-de"  href="">热门搜索</a>
                                <a class="list-de" href="">其美烤肉自助火锅城</a>
                                <a href="">新聚点量版ktv</a>
                                <div class="clear"></div>
                                <span></span>
                                <a class="list-de l-2"  href="">新聚点量版ktv</a>
                                <a class="l-2" href="">新聚点量版ktv</a>
                                <div class="clear"></div>
                                <span></span>
                                <a class="list-de l-2"  href="">新聚点量版ktv</a>
                                <div class="clear"></div>
                                <span></span>
                                <div class="dian">
                                    <i></i> <i></i> <i></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="search-list">
                            <div class="list-1">
                                <a class="list-de"  href="">热门搜索</a>
                                <a class="list-de" href="">其美烤肉自助火锅城</a>
                                <a href="">新聚点量版ktv</a>
                                <div class="clear"></div>
                                <span></span>
                                <a class="list-de l-2"  href="">新聚点量版ktv</a>
                                <a class="l-2" href="">新聚点量版ktv</a>
                                <div class="clear"></div>
                                <span></span>
                                <a class="list-de l-2"  href="">新聚点量版ktv</a>
                                <div class="clear"></div>
                                <span></span>
                                <div class="dian">
                                    <i></i> <i></i> <i></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination"></div>
                <!-- Add Arrows -->
                <!--<div class="swiper-button-next"></div>-->
                <!--<div class="swiper-button-prev"></div>-->
            </div>

        </section>


        <section>
            <div class="lisi">
                <a href=""><span>&#xe781;</span>联通流量充值</a>
                <a href=""><span>&#xe781;</span>联通流量充值</a>
                <a href=""><span>&#xe781;</span>联通流量充值</a>
                <a href=""><span>&#xe781;</span>联通流量充值</a>
                <a href=""><span>&#xe660;</span>清除历史记录</a>
            </div>
        </section>
    </div>
    <script src="js/swiper.min.js"></script>
    <script>
        var swiper = new Swiper('.swiper-container', {
            autoplay :	{
                delay: 3000,
                stopOnLastSlide: false,//是否停在第一张
                disableOnInteraction: false,//当用户拖动后还会轮播
            },
//            loop:true,
            pagination: {
                el: '.swiper-pagination',
//                type: 'fraction', //显示页码
                type: 'bullets',   //显示页点
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
        </script>
</body>
</html>