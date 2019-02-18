<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <meta name="viewport" content="width=750,target-densitydpi=device-dpi,maximum-scale=1.0, user-scalable=no">
    <script type="text/javascript">
        function setWidth(e) { if (/Andriod/i.test(navigator.userAgent)) { var f, d = window.innerWidth; (d != e) && (f = d / e), document.addEventListener("DOMContentLoaded", function () { var a = document.getElementsByTagName("body")[0]; a.style.webkitTransformOrigin = "left top"; a.style.webkitTransform = "scale(" + f + ")" }, !1) } } setWidth(750);
    </script>
    <title>用户 - 乐购</title>
    <link rel="stylesheet" href="css/reset.css"> <!-- 重置样式 -->
    <link rel="stylesheet" href="css/user.css"> <!-- 加载用户页样式文件 -->
</head>

<body>
    <!-- 最大容器 -->
    <div class="container">
        <!-- header section footer nav article 这些H5的标签，主要作用是用来标识（不是用来布局） -->

        <!-- 用H5定义结构 -->
        <!-- 头部 -->
        <section>
            <div class="top">
               <img src="images/user-bg.jpg" alt="">
               <div class="per fl">
                    <span><img src="images/user_03.jpg" alt=""></span>
                    <p>我的爱鲜蜂:</p>
                    <b>15622205895</b>
               </div>
            </div>
        </section>

        <!-- 信息行 -->
        <section>
            <div class="car">
                <ul>
                    <li>
                        <span class="col1">&#xe680;</span>
                        <p>我的订单</p>
                    </li>
                    <li>
                        <span class="col2">&#xe722;</span>
                        <p>优惠券</p>
                    </li>
                    <li>
                        <span class="col3">&#xe623;</span>
                        <p>我的信息</p>
                    </li>
                </ul>
            </div>
        </section>

        <section>
            <div class="cards">
                <div class="tex">
                    <p><span class="bg1">&#xe600;</span>我的收货地址</p>
                </div>
                <div class="tex">
                    <p><span class="bg2">&#xe6ad;</span>把爱鲜蜂分享给朋友</p>
                </div>
                <div class="tex not">
                    <p><span class="bg3">&#xe68a;</span>客服帮助</p>
                </div>
                <div class="tex">
                    <p><span class="bg4">&#xe604;</span>客服电话 : 400-8484-842</p>
                </div>
                <div class="tex">
                    <p><span class="bg5">&#xe663;</span>设置</p>
                </div>
            </div>
        </section>

        
        
        <!-- 文章标识 -->
        <!-- <article></article> -->

        <!-- 底部 -->
        <footer>
            <div class="footer">版权 2018 归 xxx公司所有</p>
        </footer>

        <!-- 导航  -->
        <nav>
            <div class="nav">
                <ul>
                    <li>
                        <a href="">
                            <i class="icon mbg1">&#xe61e;</i>
                            <p>首页</p>
                        </a>
                    </li>
                    <li>
                        <a href=""  >
                            <i class="icon mbg2">&#xe65c;</i>
                            <p>闪送超市</p>
                        </a>
                    </li>
                    <li>
                        <a href="" class="focus">
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
            </div>
        </nav>
    </div>
</body>

</html>