<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <meta name="viewport" content="width=750,target-densitydpi=device-dpi,maximum-scale=1.0, user-scalable=no">
    <script type="text/javascript">
        function setWidth(e) { if (/Andriod/i.test(navigator.userAgent)) { var f, d = window.innerWidth; (d != e) && (f = d / e), document.addEventListener("DOMContentLoaded", function () { var a = document.getElementsByTagName("body")[0]; a.style.webkitTransformOrigin = "left top"; a.style.webkitTransform = "scale(" + f + ")" }, !1) } } setWidth(750);
    </script>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>详情页-乐购</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/detail.css">
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

        /*分享链接样式*/

        .but-share:active{border:1px solid #adadab;}
        .list{position: relative;overflow: hidden;}
        #cover{display:none;position:absolute;left:0;top:0;z-index:18888;background-color:#000000;opacity:0.7;}
        #guide{display:none;position:absolute;right:18px;top:5px;z-index:19999;}
        #guide img{width:260px;height:180px;}
    </style>
</head>
<body>
    <!-- 最大容器 -->
    <div class="container">
        <div class="list">
            <div id="mess_share">
                <!-- 头部 -->
                <header>
                    <div class="top-bg">
                        <div class="top">
                            <i>&#xe601;</i>
                            <h1>合味道XO酱海鲜风味面</h1>
                            <div id="shar_1">
                                <i class="but-share" id="share_1" onclick="_system._guide(true)">&#xe6ad;</i> <!--分享链接-->
                            </div>
                        </div>
                    </div>
                </header>
                <!-- 食品 -->
                <section>
                    <div class="pic">
                        <!--<img src="images/pro_detail_03.jpg" alt="">-->
                        <!-- Swiper -->
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide"><img src="images/pro_detail_03.jpg" alt=""></div>
                                <div class="swiper-slide"><img src="images/pro_detail_03.jpg" alt=""></div>
                                <div class="swiper-slide"><img src="images/pro_detail_03.jpg" alt=""></div>
                            </div>
                            <!-- Add Pagination -->
                            <div class="swiper-pagination"></div>
                            <!-- Add Arrows -->
                            <!--<div class="swiper-button-next"></div>-->
                            <!--<div class="swiper-button-prev"></div>-->
                        </div>

                    </div>
                    <div class="price">
                        <p>合味道XO酱海鲜风味面</p>
                        <p>￥5<del>￥6</del></p>
                    </div>
                    <div class="text">
                        <p>品&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;牌<span>日清</span></p>
                    </div>
                    <div class="text">
                        <p>产品规格<span>87g</span></p>
                    </div>
                    <div class="back">
                        <div class="img">
                            <img src="images/pro_detail_08.jpg" alt="">
                        </div>
                    </div>
                </section>

                <footer>
                    <div class="foot">
                        <p><span>添加商品 ：</span><i id="sub">&#xe617;</i><span class="num" id="num">0</span><i id="sup">&#xe64e;</i></p>
                        <div class="clear"></div>
                        <div class="max-circle"></div>
                        <div class="side"></div>
                        <div class="min-circle">
                            <i class="song">&#xe60c;</i>
                            <b>￥0起送</b>
                        </div>
                    </div>
                </footer>
            </div>
            <div id="cover"></div>
            <div id="guide"><img src="images/guide1.png"></div>
        </div>
    </div>
    <script>
        // 分享链接
        var _system={
            $:function(id){return document.getElementById(id);},
            _client:function(){
                return {w:document.documentElement.scrollWidth,h:document.documentElement.scrollHeight,bw:document.documentElement.clientWidth,bh:document.documentElement.clientHeight};
            },
            _scroll:function(){
                return {x:document.documentElement.scrollLeft?document.documentElement.scrollLeft:document.body.scrollLeft,y:document.documentElement.scrollTop?document.documentElement.scrollTop:document.body.scrollTop};
            },
            _cover:function(show){
                if(show){
                    this.$("cover").style.display="block";

                    this.$("cover").style.width=(this._client().bw>this._client().w?this._client().bw:this._client().w)+"px";
                    this.$("cover").style.height=(this._client().bh>this._client().h?this._client().bh:this._client().h)+"px";
                }else{
                    this.$("cover").style.display="none";
                }
            },
            _guide:function(click){
                this._cover(true);
                this.$("guide").style.display="block";
                this.$("guide").style.top=(_system._scroll().y+5)+"px";
                window.onresize=function(){_system._cover(true);_system.$("guide").style.top=(_system._scroll().y+5)+"px";};
                if(click){_system.$("cover").onclick=function(){
                    _system._cover();
                    _system.$("guide").style.display="none";
                    _system.$("cover").onclick=null;
                    window.onresize=null;
                };}
            },
            _zero:function(n){
                return n<0?0:n;
            }
        }
    </script>
    <!-- Swiper JS -->
    <script src="js/swiper.min.js"></script>
    <script>
        var swiper = new Swiper('.swiper-container', {
            autoplay :	{
                delay: 3000,
                stopOnLastSlide: false,//是否停在第一张
                disableOnInteraction: false,//当用户拖动后还会轮播
            },
            loop:true,
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

        // 获得 标签的 id
        var sup = document.getElementById('sup');
        var num = document.getElementById('num');
        var sub = document.getElementById('sub');

        // 增加
        sup.onclick = function(){
            var number = num.innerHTML;
            number++;
            num.innerHTML = number;
        }

        //减少
        sub.onclick = function(){
            var number = num.innerHTML;
            if(number==0){
                return;
            }
            number--;
            num.innerHTML = number;
        }
    </script>
</body>
</html>