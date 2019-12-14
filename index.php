<?php
//var_dump($_COOKIE);
$logged_in = isset($_COOKIE['logged_in']);
?>
<!doctype html>
<html class="no-js" lang="ru">

<head>
    <!--====== USEFULL META ======-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Сервис JoinChat Group позволяет автоматизировать получение, обработки заявки в кафе и ресторанах" />
	<meta name="yandex-verification" content="bee7c36519b92d1a" />

    <!--====== TITLE TAG ======-->
    <title>JoinChat - Чат Бот для Доставки Еды Рестораны Кафе</title>

    <!--====== FAVICON ICON =======-->
    <link rel="shortcut icon" type="image/ico" href="assets/img/favicon.png" />

    <!--====== STYLESHEETS ======-->
<!--    <link media="all" href="assets/css/plugins.css" rel="stylesheet">-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/3.0.3/normalize.min.css" integrity="sha256-/O+WvT2Eeb1RIU6iMItEhi5xlHTCLHg2HgLmVGFWyW8=" crossorigin="anonymous" /><!-- assets/css/plugins/normalize.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.1/animate.min.css" integrity="sha256-1hIhSlowg4vqaFZ/bikPMfEGwSgM0FtIs7mx1PADHCk=" crossorigin="anonymous" /><!-- assets/css/plugins/animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/odometer.js/0.4.8/themes/odometer-theme-default.min.css" integrity="sha256-K2yDiYk0B1WE0j4NbUVdkEYt5GYBvLwptIlUkg3RLhk=" crossorigin="anonymous" /><!-- assets/css/plugins/odometer.css -->
    <link media="all" href="assets/css/plugins/modal-video.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/venobox/1.8.3/venobox.min.css" integrity="sha256-aIUopUhulONZ3xR+zS2HnUF+pTbxAXIYuzd//lwefvk=" crossorigin="anonymous" /><!--assets/css/plugins/venobox.css-->
    <link media="all" href="assets/css/plugins/owl.carousel.css" rel="stylesheet">
    <link media="all" href="assets/css/plugins/stellarnav.min.css" rel="stylesheet">
    <!-- https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css --  integrity="sha256-916EbMg70RQy9LHiGkXzG8hSg9EdNy97GazNG/aiY1w=" crossorigin="anonymous" -->
    <link rel="stylesheet" href="assets/css/plugins/bootstrap.min.css" /> <!--assets/css/plugins/bootstrap.min.css-->

    <link media="all" href="assets/css/" rel="stylesheet">
    <link media="all" href="assets/css/icons.css" rel="stylesheet">
    <link media="all" href="assets/css/typography.css" rel="stylesheet">
    <link media="all" href="assets/css/app.css" rel="stylesheet">



    <!--====== MAIN STYLESHEETS ======-->
    <link media="all" href="style.css" rel="stylesheet">
    <!-- ======   responsive ======  -->
    <style type="text/css">
        /*responsive*/
        @media only screen and (min-width: 992px) and (max-width: 1200px) {

            .area-title h2,
            .area-content h3 {
                font-size: 38px;
            }

            .faqs-mockup-1 img {
                max-width: 86%;
            }

            .screenshot-area .owl-nav {
                bottom: -30px;
                left: 0;
                position: absolute;
            }

            .single-fun-fact h3 {
                font-size: 62px;
            }

            .single-price {
                padding: 40px 20px;
            }

            .price-thumb-hidding {
                padding-left: 100px;
            }

            .price-thumb-hidding img {
                width: 80px;
            }
        }

        @media (min-width: 768px) and (max-width: 991px) {
            .video-promo-area .area-content {
                padding: 0;
            }

            .area-title h2,
            .area-content h3 {
                font-size: 38px;
            }

            .single-fun-fact h3 {
                font-size: 52px;
            }

        }


        @media only screen and (max-width: 767px) {

            .area-content h3,
            .area-title h2 {
                font-size: 24px;
            }

            .video-promo-area .area-content {
                padding: 0;
            }

            .screenshot-slider,
            .features-slider {
                width: 100%;
            }

            .single-screenshot img {
                margin: 0 auto;
                max-height: 450px;
                max-width: 100%;
                text-align: center;
            }

            .screenshot-slider .owl-dots,
            .features-slider .owl-dots {
                margin-top: 0;
            }

            .single-fun-fact h3 {
                font-size: 38px;
            }

        }

        @media only screen and (min-width: 480px) and (max-width: 767px) {

            .area-content h3,
            .area-title h2 {
                font-size: 32px;
            }
        }
    </style>

    <!-- <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script> -->
    <!--[if lt IE 9]>
        <script defer src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script defer  src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

<!-- Yandex.Metrika counter -->
<script defer="defer" type="text/javascript" src="assets/js/analitycs/yandex-metrika-counter.js">

</script>
<noscript><div><img src="https://mc.yandex.ru/watch/55160251" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

<script defer="defer" src="https://www.googletagmanager.com/gtag/js?id=UA-137853582-1"></script>
<script defer="defer" type="text/javascript" src="assets/js/analitycs/gtag.js" defer="defer"></script>
<!-- Google Tag Manager -->
<script defer="defer" src="assets/js/analitycs/google-tag-manager.js"></script>
<!-- End Google Tag Manager -->

<!--lazyload-->
<script type="text/javascript" async>
    /*! lazysizes - v5.2.0-beta1  jinsike*/
    document.addEventListener("DOMContentLoaded", function () {

        var lazyloadImages;

        if ("IntersectionObserver" in window) {
            lazyloadImages = document.querySelectorAll(".lazy");
            var imageObserver = new IntersectionObserver(function (entries, observer) {
                entries.forEach(function (entry) {
                    if (entry.isIntersecting) {
                        var image = entry.target;
                        image.src = image.dataset.src;
                        image.classList.remove("lazy");
                        imageObserver.unobserve(image);
                    }
                });
            });

            lazyloadImages.forEach(function (image) {
                imageObserver.observe(image);
            });
        } else {
            var lazyloadThrottleTimeout;
            lazyloadImages = document.querySelectorAll(".lazy");

            function lazyload() {
                if (lazyloadThrottleTimeout) {
                    clearTimeout(lazyloadThrottleTimeout);
                }

                lazyloadThrottleTimeout = setTimeout(function () {
                    var scrollTop = window.pageYOffset;
                    lazyloadImages.forEach(function (img) {
                        if (img.offsetTop < (window.innerHeight + scrollTop)) {
                            img.src = img.dataset.src;
                            img.classList.remove('lazy');
                        }
                    });
                    if (lazyloadImages.length == 0) {
                        document.removeEventListener("scroll", lazyload);
                        window.removeEventListener("resize", lazyload);
                        window.removeEventListener("orientationChange", lazyload);
                    }
                }, 20);
            }

            document.addEventListener("scroll", lazyload);
            window.addEventListener("resize", lazyload);
            window.addEventListener("orientationChange", lazyload);
        }
    })

</script>
<script type="text/javascript">
    $(function(){ParallaxScroll.init()});var ParallaxScroll={showLogs:!1,round:1e3,init:function(){if(this._log("init"),this._inited)return this._log("Already Inited"),void(this._inited=!0);this._requestAnimationFrame=window.requestAnimationFrame||window.webkitRequestAnimationFrame||window.mozRequestAnimationFrame||window.oRequestAnimationFrame||window.msRequestAnimationFrame||function(a,t){window.setTimeout(a,1e3/60)},this._onScroll(!0)},_inited:!1,_properties:["x","y","z","rotateX","rotateY","rotateZ","scaleX","scaleY","scaleZ","scale"],_requestAnimationFrame:null,_log:function(a){this.showLogs&&console.log("Parallax Scroll / "+a)},_onScroll:function(X){var Y=$(document).scrollTop(),Z=$(window).height();this._log("onScroll "+Y),$("[data-parallax]").each($.proxy(function(a,t){var i=$(t),o=[],c=!1,e=i.data("style");null==e&&(e=i.attr("style")||"",i.data("style",e));var l,n=[i.data("parallax")];for(l=2;i.data("parallax"+l);l++)n.push(i.data("parallax-"+l));var s=n.length;for(l=0;l<s;l++){var u=n[l],d=u["from-scroll"];null==d&&(d=Math.max(0,$(t).offset().top-Z)),d|=0;var r=u.distance,m=u["to-scroll"];null==r&&null==m&&(r=Z),r=Math.max(0|r,1);var h=u.easing,p=u["easing-return"];if(null!=h&&$.easing&&$.easing[h]||(h=null),null!=p&&$.easing&&$.easing[p]||(p=h),h){var v=u.duration;null==v&&(v=r),v=Math.max(0|v,1);var w=u["duration-return"];null==w&&(w=v),r=1;var x=i.data("current-time");null==x&&(x=0)}null==m&&(m=d+r),m|=0;var g=u.smoothness;null==g&&(g=30),g|=0,!X&&0!=g||(g=1),g|=0;var f=Y;f=Math.max(f,d),f=Math.min(f,m),h&&(null==i.data("sens")&&i.data("sens","back"),d<f&&("back"==i.data("sens")?(x=1,i.data("sens","go")):x++),f<m&&("go"==i.data("sens")?(x=1,i.data("sens","back")):x++),X&&(x=v),i.data("current-time",x)),this._properties.map($.proxy(function(a){var t=0,e=u[a];if(null!=e){"scale"==a||"scaleX"==a||"scaleY"==a||"scaleZ"==a?t=1:e|=0;var l=i.data("_"+a);null==l&&(l=t);var n=(f-d)/(m-d)*(e-t)+t,s=l+(n-l)/g;if(h&&0<x&&x<=v){var r=t;"back"==i.data("sens")&&(e=-(r=e),h=p,v=w),s=$.easing[h](null,x,r,e,v)}(s=Math.ceil(s*this.round)/this.round)==l&&n==e&&(s=e),o[a]||(o[a]=0),o[a]+=s,l!=o[a]&&(i.data("_"+a,o[a]),c=!0)}},this))}if(c){if(null!=o.z){var _=u.perspective;null==_&&(_=800);var y=i.parent();y.data("style")||y.data("style",y.attr("style")||""),y.attr("style","perspective:"+_+"px; -webkit-perspective:"+_+"px; "+y.data("style"))}null==o.scaleX&&(o.scaleX=1),null==o.scaleY&&(o.scaleY=1),null==o.scaleZ&&(o.scaleZ=1),null!=o.scale&&(o.scaleX*=o.scale,o.scaleY*=o.scale,o.scaleZ*=o.scale);var A="translate3d("+(o.x?o.x:0)+"px, "+(o.y?o.y:0)+"px, "+(o.z?o.z:0)+"px)"+" "+("rotateX("+(o.rotateX?o.rotateX:0)+"deg) rotateY("+(o.rotateY?o.rotateY:0)+"deg) rotateZ("+(o.rotateZ?o.rotateZ:0)+"deg)")+" "+("scaleX("+o.scaleX+") scaleY("+o.scaleY+") scaleZ("+o.scaleZ+")")+";";this._log(A),i.attr("style","transform:"+A+" -webkit-transform:"+A+" "+e)}},this)),window.requestAnimationFrame?window.requestAnimationFrame($.proxy(this._onScroll,this,!1)):this._requestAnimationFrame($.proxy(this._onScroll,this,!1))}};
</script> <!-- old src -- assets/js/jquery.parallax-layer-scroll.js -->
<script type="text/javascript">
    (function(root,factory){if(typeof define==="function"&&define.amd){define([],factory)}else if(typeof exports==="object"){module.exports=factory()}else{root.Chaffle=factory()}})(this,function(){"use strict";function extend(){var extended={};var deep=false;if(Object.prototype.toString.call(arguments[0])==="[object Boolean]"){deep=arguments[0];i++}function merge(obj){for(var prop in obj){if(Object.prototype.hasOwnProperty.call(obj,prop)){if(deep&&Object.prototype.toString.call(obj[prop])==="[object Object]"){extended[prop]=extend(true,extended[prop],obj[prop])}else{extended[prop]=obj[prop]}}}}for(var i=0;i<arguments.length;i++){var obj=arguments[i];merge(obj)}return extended}function Chaffle(element,options){var data={};var dataLang=element.getAttribute("data-chaffle");var dataSpeed=element.getAttribute("data-chaffle-speed");var dataDelay=element.getAttribute("data-chaffle-delay");if(dataLang.length!==0)data.lang=dataLang;if(dataSpeed!==null)data.speed=Number(dataSpeed);if(dataDelay!==null)data.delay=Number(dataDelay);this.options={lang:"en",speed:20,delay:100};this.options=extend(this.options,options,data);this.element=element;this.text=this.element.textContent;this.substitution="";this.state=false;this.shuffleProps=[];this.reinstateProps=[]}Chaffle.prototype={constructor:Chaffle,init:function(){var self=this;if(self.state)return;self.clearShuffleTimer();self.clearReinstateTimer();self.state=true;self.substitution="";self.shuffleProps=[];self.reinstateProps=[];var shuffleTimer=setInterval(function(){self.shuffle()},self.options.speed);var reinstateTimer=setInterval(function(){self.reinstate()},self.options.delay);self.shuffleProps=shuffleTimer;self.reinstateProps=reinstateTimer},shuffle:function(){this.element.textContent=this.substitution;var textLength=this.text.length;var substitutionLength=this.substitution.length;if(textLength-substitutionLength>0){for(var i=0;i<=textLength-substitutionLength;i++){this.element.textContent=this.element.textContent+this.randomStr()}}else{this.clearShuffleTimer()}},reinstate:function(){var textLength=this.text.length;var substitutionLength=this.substitution.length;if(substitutionLength<textLength){this.element.textContent=this.substitution=this.text.substr(0,substitutionLength+1)}else{this.clearReinstateTimer()}this.state=false},clearShuffleTimer:function(){return clearInterval(this.shuffleProps)},clearReinstateTimer:function(){return clearInterval(this.reinstateProps)},randomStr:function(){var str;switch(this.options.lang){case"en":str=String.fromCharCode(33+Math.round(Math.random()*99));break;case"ja":str=String.fromCharCode(19968+Math.round(Math.random()*80));break;case"ja-hiragana":str=String.fromCharCode(12352+Math.round(Math.random()*50));break;case"ja-katakana":str=String.fromCharCode(12448+Math.round(Math.random()*84));break;case"ua":str=String.fromCharCode(1040+Math.round(Math.random()*55));break}return str}};return Chaffle});
</script><!-- old src -- assets/js/chaffle.min.js -->
</head>

<body class="overflow-xhidden home-four" data-spy="scroll" data-target=".mainmenu-area" data-offset="90">
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PR8HVH4"
	height="0" width="0"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->

    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <!--- PRELOADER -->
    <!-- div class="preeloader">
        <div class="preloader-spinner"></div>
    </div> -->

    <!--SCROLL TO TOP-->
    <a href="#scroolup" class="scrolltotop"><i class="fa fa-long-arrow-up"></i></a>

    <!--START TOP AREA-->
    <header class="top-area" id="home">
        <div class="header-top-area" id="scroolup">
            <!--MAINMENU AREA-->
            <div class="mainmenu-area" id="mainmenu-area">
                <div class="mainmenu-area-bg"></div>
                <nav class="navbar">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 flex-v-center">
                                <div class="navbar-header">
                                    <a href="" class="custom-logo-link default-logo"><img src="assets/img/logo.svg" alt="logo"></a>
                                    <a href="" class="custom-logo-link sticky-logo"><img src="assets/img/sticky_logo.svg" alt="logo"></a>
                                </div>
                                <svg class="ham hamRotate ham8" viewBox="0 0 100 100" width="50">
                                    <path class="line top" d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20" />
                                    <path class="line middle" d="m 30,50 h 40" />
                                    <path class="line bottom" d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20" />
                                </svg>
                                <div id="main-nav" class="stellarnav">
                                    <ul id="nav" class="nav navbar-nav pull-right">
                                        <li><a href="#pricing">Цены</a></li>
                                        <li><a href="#features">Для кого</a></li>
                                        <li><a href="#examples">Примеры</a></li>
                                        <li><a href="#func">Функционал</a></li>                                        
                                        <li><a href="#contact">Связаться</a></li>
					<li><a href="/blog/ru/">Блог</a></li>
                                        </li>
                                    </ul>
                                </div>
                                <div class="header-call-to-action hidden-sm hidden-xs hidden-md">
                                    <a href="//app.joinchat.us/ru/signup" class="action-button main-action add-glare" target="_blank" rel="nofollow noopenner">Попробовать бесплатно</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
            <!--END MAINMENU AREA END-->
        </div>
        <!--WELCOME TEXT AREA-->
<!--        bafore remove delay-->
        <div class="welcome-text-area font16 white">
            <div class="area-bg"></div>
            <div class="welcome-area section-padding">
                <div class="container">
                    <div class="row flex-v-center">
                        <div class="col-md-7 col-lg-7 col-sm-12 col-xs-12">
                            <div class="welcome-text">
                                <h4 class="wow fadeInUp">Сервис Joinchat </h4>
                                <h1 class="wow fadeInUp font38 xs-font32">Начните продавать Ваши товары в мессенджерах уже через 2-а часа. <span class="font18 mt30">Без навыком программирования.</span></h1>
                                <div class="haeder-subscribe-form wow fadeInUp hidden-xs">
                                    <form class="subscribe-form" action="https://app.joinchat.us/ru/signup">
                                        <input type="email" name="email" id="sub_email" placeholder="Введите вашу почту">
					<?php if($logged_in){ ?>
                                        <button type="submit">Войти</button>
					<?php }else{ ?>
                                        <button type="submit">Получить доступ</button>
					<?php } ?>
                                    </form>
                                </div>
                                <div class="home-button mt40 xs-mt40 wow fadeInUp visible-xs">
                                    <a class="xs-mb20 white-btn" href="//app.joinchat.us/ru/signup" target="_blank" rel="nofollow noopenner">Получить доступ</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="top-sponsors wow fadeInLeft hidden-sm hidden-xs" data-wow-delay="1.3s">
                    <p>Платформы</p>
                    <div class="sponsor-slider">
                        <div class="sngle-sponsor"><img src="assets/img/join/telegram.svg" alt=""></div>
                        <div class="sngle-sponsor"><img src="assets/img/join/viber.svg" alt=""></div>
                    </div>
                </div> -->
                <div class="welcome-layer-4 hidden-sm hidden-xs">
                    <div class="home4-layer-1">
                        <img src="assets/img/join/home.webp" alt="">
                        <div class="video-button item-center"><button class="video-popup" data-video-id="0YiPqNrXs7w"><i class="fa fa-play"></i></button></div>
                    </div>
                </div>
            </div>
        </div>
        <!--WELCOME TEXT AREA END-->

    </header>
    <!--END TOP AREA-->

    <!--ABOUT AREA-->
    <section class="about-area section-padding gray-bg" id="about">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-lg-7 col-sm-12 col-xs-12">
                    <div class="area-image-content sm-mb50 xs-mb50 wow fadeInRight" data-wow-delay="0.3s">
                        <img class="lazy" data-src="assets/img/about/about-mockup.webp" alt="">
                    </div>
                </div>
                <div class="col-md-5  col-lg-5 col-sm-12 col-xs-12">
                    <div class="area-content">
                        <h3 class="wow fadeInRight" data-wow-delay="0.3s">Что такое JoinChat?</h3>
                        <div class="text-icon-box wow fadeInRight" data-wow-delay="0.6s">
                            <p>JoinChat – готовые чат-боты для разных сфер бизнеса (ресторана, кафе, пиццерии, доставки еды, интернет-магазины). Он поможет клиенту с легкостью получить доступ ко всем сервисам/продуктам вашего бизнеса,
                                совершить заказ/бронирование и узнать полезную информацию у себя в мессенджере!<br><br>Не нужны никакие приложения, сайты и прочее – общайтесь с клиентами там, где он уже есть. И увеличивайте доход :)</p>
                            <a href="//app.joinchat.us/ru/signup" target="_blank" rel="noopener norefferer" style="background-color: rgb(77, 131, 1460);" class="read-more active add-adaptive add-glare" id="add-glare">Попробовать бесплатно</a>
                            <p class="ml40">14 дней бесплатно</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--ABOUT AREA END-->

    <!--FEATURES AREA-->
    <section class="features-area section-padding fix" id="features">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-lg-8 col-sm-12 col-xs-12">
                    <div class="area-title sm-center xs-center">
                        <h4 class="subtitle">НАШИ ЧАТ-БОТЫ ПОДХОДЯТ</h4>
                        <h2>Кому Подходит Cервис JoinChat?</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="zone-slider">
                        <div class="text-icon-box single-features">
                            <div class="box-icon"><i class="dripicons-direction"></i></div>
                            <h3>Доставка <br> еды</h3>
                        </div>
                        <div class="text-icon-box single-features">
                            <div class="box-icon"><i class="dripicons-cutlery"></i></div>
                            <h3>Интернет <br> магазин</h3>
                        </div>
                        <div class="text-icon-box single-features">
                            <div class="box-icon"><i class="dripicons-map"></i></div>
                            <h3>Доставка <br> воды</h3>
                        </div>
                        <div class="text-icon-box single-features">
                            <div class="box-icon"><i class="dripicons-lifting"></i></div>
                            <h3>Доставка <br> суши</h3>
                        </div>
                        <div class="text-icon-box single-features">
                            <div class="box-icon"><i class="dripicons-brush"></i></div>
                            <h3>Доставка <br> пиццы</h3>
                        </div>
                        <div class="text-icon-box single-features">
                            <div class="box-icon"><i class="dripicons-home"></i></div>
                            <h3>Заказ <br> услуг</h3>
                        </div>                
                        <!-- <div class="text-icon-box single-features">
                            <div class="box-icon"><i class="dripicons-medical"></i></div>
                            <h3> <br> Медицина</h3>
                        </div> -->
                        <!-- <div class="text-icon-box single-features">
                            <div class="box-icon"><i class="dripicons-pulse"></i></div>
                            <h3>Медицинский <br> центр</h3>
                        </div> -->                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--FEATURES AREA END-->
    <!--TEAM AREA-->
    <section class="team-area padding-100-50 gray-bg" id="examples">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-lg-10 col-sm-12 col-xs-12">
                    <div class="area-title">
                        <h4 class="subtitle">ПОСМОТРИТЕ ГОТОВЫЕ ЧАТ-БОТЫ </h4>
                        <h2>Посмотрите 20+ Готовых Чат-Ботов Созданных в JoinChat</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                        <div class="single-team col-md-4">
                            <div class="member-thumb mb0 text-left">
                                <ul class="no-padding">
                                    <li class="display-block mb10"><a href="/chat-bot-dlya-sushi-restorana/" target="_blank"><i class="dripicons-checkmark"></i> Чат Бот для доставки суши</a></li>
                                    <li class="display-block mb10"><a href="/chat-bot-dlya-dostavki-pizza/" target="_blank"><i class="dripicons-checkmark"></i> Чат Бот для доставки пиццы</a></li>
                                    <li class="display-block mb10"><a href="/chat-bot-dlya-zakaza-pitevoi-vodi/" target="_blank"><i class="dripicons-checkmark"></i> Чат Бот для Доставки воды</a></li>
                                    <li class="display-block mb10"><a href="/chat-bot-dlya-apteki" target="_blank"><i class="dripicons-checkmark"></i> Чат Бот для Аптеки</a></li>
                                    <li class="display-block mb10"><a href="/chat-bot-dlya-zakaza-obuvi" target="_blank"><i class="dripicons-checkmark"></i> Чат Бот для Покупки обуви</a></li>
                                    <li class="display-block mb10"><a href="/chat-bot-dlya-magazina-stroitelnih-materialov" target="_blank"><i class="dripicons-checkmark"></i> Чат Бот для Магазина строй. материалов</a></li>
                                    <li class="display-block mb10"><a href="/chat-bot-dlya-magazina-cifrovoi-tehniki" target="_blank"><i class="dripicons-checkmark"></i> Чат Бот для Магазина техники</a></li>
                                    <li class="display-block mb10"><a href="/chat-bot-dlya-kliningovoi-kompanii" target="_blank"><i class="dripicons-checkmark"></i> Чат Бот для Клининговой компании</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="single-team col-md-4">
                            <div class="member-thumb mb0 text-left">
                                <ul class="no-padding">
                                    <li class="display-block mb10"><a href="/chat-bot-dlya-zakaza-portretov" target="_blank"><i class="dripicons-checkmark"></i> Чат Бот для заказа картин</a></li>
                                    <li class="display-block mb10"><a href="/chat-bot-dlya-magazina-kancelyarii" target="_blank"><i class="dripicons-checkmark"></i> Чат Бот для Продажи канселярии</a></li>
                                    <li class="display-block mb10"><a href="/chat-bot-dlya-magazina-kuritelnih-smesey" target="_blank"><i class="dripicons-checkmark"></i> Чат Бот для Табачных изделия</a></li>
                                    <li class="display-block mb10"><a href="/chat-bot-dlya-magazina-sportivnogo-pitania" target="_blank"><i class="dripicons-checkmark"></i> Чат Бот для Магазина Спортивного питание</a></li>
                                    <li class="display-block mb10"><a href="/chat-bot-dlya-magazina-odegdy" target="_blank"><i class="dripicons-checkmark"></i> Чат Бот для Магазина одежды</a></li>
                                    <li class="display-block mb10"><a href="/chat-bot-dlya-magazina-chasov" target="_blank"><i class="dripicons-checkmark"></i> Чат Бот для Продажи наручных часов</a></li>
                                    <li class="display-block mb10"><a href="/chat-bot-zakaza-korva-dlya-domachnih-givotnih" target="_blank"><i class="dripicons-checkmark"></i> Чат Бот для Продажи корма для животных</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="single-team col-md-4">
                            <div class="member-thumb mb0 text-left">
                                <ul class="no-padding">
                                    <li class="display-block mb10"><a href="/chat-bot-dlya-magazina-parfumerii" target="_blank"><i class="dripicons-checkmark"></i> Чат Бот для Магазина Парфюмерии</a></li>
                                    <li class="display-block mb10"><a href="/chat-bot-dlya-magazina-rastenii" target="_blank"><i class="dripicons-checkmark"></i> Чат Бот для Магазина домашних растений</a></li>
                                    <li class="display-block mb10"><a href="/chat-bot-dlya-magazina-ribalki" target="_blank"><i class="dripicons-checkmark"></i> Чат Бот для Магазина рыбалки</a></li>
                                    <li class="display-block mb10"><a href="/chat-bot-dlya-magazina-santehniki" target="_blank"><i class="dripicons-checkmark"></i> Чат Бот для Покупки сантехники</a></li>
                                    <li class="display-block mb10"><a href="/chat-bot-dlya-magazina-seks-igrushek" target="_blank"><i class="dripicons-checkmark"></i> Чат Бот для Магазина ХХХ сексуальне игрушки</a></li>
                                    <li class="display-block mb10"><a href="/chat-bot-dlya-prodagi-avtomobilnh-zapchastey" target="_blank"><i class="dripicons-checkmark"></i> Чат Бот для Магазина авто запчастей</a></li>
                                    <li class="display-block mb10"><a href="/chat-bot-dlya-dostavki-pizza" target="_blank"><i class="dripicons-checkmark"></i> Чат Бот для Сервис доставки еды</a></li>
                                </ul>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </section>
    <!--TEAM AREA END-->


        <!--SCREENSHOT AREA-->
        <section class="screenshot-area fix section-padding" id="screenshots">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="area-content xs-center xs-mb50">
                            <h4 class="subtitle">Удобно клиентам</h4>
                            <h3>Покупать еще проще</h3>
                            <p>Продажи не стоят на месте. Чат-боты уже в который год захватывают рынок как умелые помощники. <br><br>Самое удивительное, что многие клиенты даже не знают, что такое чат-боты, но когда узнают, 93 человека из 100 делают
                                покупку.</p>
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-6 col-xs-12">
                        <div class="screenshot-slider">
                            <div class="single-screenshot">
                                <img class="lazy" data-src="assets/img/screenshots/screenshot-1.webp" alt="">
                            </div>
                            <div class="single-screenshot">
                                <img class="lazy" data-src="assets/img/screenshots/screenshot-2.webp" alt="">
                            </div>
                            <div class="single-screenshot">
                                <img class="lazy" data-src="assets/img/screenshots/screenshot-3.webp" alt="">
                            </div>
                            <div class="single-screenshot">
                                <img class="lazy" data-src="assets/img/screenshots/screenshot-4.webp" alt="">
                            </div>
                            <div class="single-screenshot">
                                <img class="lazy" data-src="assets/img/screenshots/screenshot-5.webp" alt="">
                            </div>
                            <div class="single-screenshot">
                                <img class="lazy" data-src="assets/img/screenshots/screenshot-6.webp" alt="">
                            </div>
                            <div class="single-screenshot">
                                <img class="lazy" data-src="assets/img/screenshots/screenshot-7.webp" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--SCREENSHOT AREA END-->


            <!--FEATURES AREA-->
            <section class="features-area section-padding fix" id="func">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                            <div class="area-title sm-center xs-center">
                                <h4 class="subtitle">Какой функционал имеет сервис</h4>
                                <h2>Функции для бизнеса & продаж</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="features-slider">
                                <div class="text-icon-box single-features">
                                    <div class="box-icon"><i class="dripicons-device-desktop"></i></div>
                                    <h3>Виджет <br> на сайт</h3>
                                </div>
                                <div class="text-icon-box single-features">
                                    <div class="box-icon"><i class="dripicons-align-justify"></i></div>
                                    <h3>Навигация  <br> по каталогу</h3>
                                </div>
                                <div class="text-icon-box single-features">
                                    <div class="box-icon"><i class="dripicons-shopping-bag"></i></div>
                                    <h3>Оформление <br> заказа</h3>
                                </div>
                                <div class="text-icon-box single-features">
                                    <div class="box-icon"><i class="dripicons-message"></i></div>
                                    <h3>Рассылка <br> Уведомлений</h3>
                                </div>
                                <div class="text-icon-box single-features">
                                    <div class="box-icon"><i class="dripicons-to-do"></i></div>
                                    <h3>Управление <br> Заказами</h3>
                                </div>
                                <div class="text-icon-box single-features">
                                    <div class="box-icon"><i class="dripicons-user-id"></i></div>
                                    <h3>CRM <br> Система</h3>
                                </div>
                                <div class="text-icon-box single-features">
                                    <div class="box-icon"><i class="dripicons-user-group"></i></div>
                                    <h3>Список <br> Клиентов</h3>
                                </div>
                                <div class="text-icon-box single-features">
                                    <div class="box-icon"><i class="dripicons-device-mobile"></i></div>
                                    <h3>Две <br> платформы</h3>
                                </div>
                                <div class="text-icon-box single-features">
                                    <div class="box-icon"><i class="dripicons-cloud"></i></div>
                                    <h3>Интеграции <br> с сервисами</h3>
                                </div>
                                <div class="text-icon-box single-features">
                                    <div class="box-icon"><i class="dripicons-suitcase"></i></div>
                                    <h3>Создание <br> доставки</h3>
                                </div>

                                <div class="text-icon-box single-features">
                                    <div class="box-icon"><i class="dripicons-pencil"></i></div>
                                    <h4>Редактирование <br> сообщений</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--FEATURES AREA END-->


                <!--VIDEO PROMO AREA-->
                <section class="video-promo-area section-padding white" id="video">
                    <div class="area-bg"></div>
                    <div class="container">
                        <div class="row flex-v-center">
                            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                                <div class="area-image-content sm-center xs-center sm-mb50 xs-mb50 wow fadeInRight" data-wow-delay="0.3s">
                                    <div class="video-bg-layer" data-parallax='{"x": -50,"y": -50}'><img class="lazy" dara-src="assets/img/video/dots-layer.png" alt=""></div>
                                    <img class="lazy" data-src="assets/img/video/video-bg.jpg" alt="">
                                    <div class="video-button item-center"><button class="video-popup" data-video-id="4-yDwqCV3Mc"><i class="fa fa-play"></i></button></div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                                <div class="area-content sm-center xs-center wow fadeInRight" data-wow-delay="0.6s">
                                    <h4 class="subtitle">Лучше посмотреть</h4>
                                    <h3>Видео демонстрация</h3>
                                    <p>Мы понимаем что лучше 100 раз увидеть чем 100 раз услышать. По этому подготовили для Вас Видео с подробной ексукрсией по нашему сервису.</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3 col-sm-6 col-xs-6">
                                <div class="single-fun-fact mt50 wow fadeInRight" data-wow-delay="0.3s">
                                    <h3><span class="odometer" data-count="22">00</span>тыс</h3>
                                    <p>Пользуються<br>ботами</p>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-6">
                                <div class="single-fun-fact mt50 wow fadeInRight" data-wow-delay="0.6s">
                                    <h3><span class="odometer" data-count="28">00</span>+</h3>
                                    <p>Готовых<br>примеров</p>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-6">
                                <div class="single-fun-fact mt50 wow fadeInRight" data-wow-delay="0.9s">
                                    <h3><span class="odometer" data-count="62">00</span>+</h3>
                                    <p>Аккаунтов</p>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-6">
                                <div class="single-fun-fact mt50 wow fadeInRight" data-wow-delay="1.2s">
                                    <h3><span class="odometer" data-count="2">00</span></h3>
                                    <p>Платформы</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--VIDEO PROMO AREA END-->


    <!--PROCESS AREA-->
    <section class="process-area padding-top" id="process">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-6 col-md-offset-3 col-lg-offset-3 col-sm-12 col-xs-12">
                    <div class="area-title center">
                        <h4 class="subtitle">Как начать работать</h4>
                        <h2>Через сколько у меня будет чат-бот?</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="process-content">
                        <div class="area-bg"></div>
                        <div class="row">
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="single-process-box text-icon-box xs-mb50 wow fadeInLeft" data-wow-delay="0.3s">
                                    <div class="process-icon"><i class="dripicons-user"></i></div>
                                    <h3>Регистрация</h3>
                                    <p>Бесплатная регистрация занимает несколько секунд</p>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="single-process-box text-icon-box xs-mb50 wow fadeInLeft" data-wow-delay="0.6s">
                                    <div class="process-icon"><i class="dripicons-photo-group"></i></div>
                                    <h3>Наполнение</h3>
                                    <p>Товары можно удобно наполнить через админку, либо подгрузить <br>из CSV, EXEL</p>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="single-process-box text-icon-box hidden-sm wow fadeInLeft" data-wow-delay="0.9s">
                                    <div class="process-icon"><i class="dripicons-graph-line"></i></div>
                                    <h3>Продажи</h3>
                                    <p>Дайте ссылку на чат-бота своим клиентам через сайт либо по <br>рекламным каналам</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--PROCESS AREA END-->

    <!--GOAL AREA-->
    <section class="goal-area section-padding" id="goal">
        <div class="container">
            <div class="row flex-v-center">
                <div class="col-md-7 col-lg-7 col-sm-12 col-xs-12">
                    <div class="area-content sm-center xs-center wow fadeInLeft" data-wow-delay="0.3s">
                        <h3>Идеальное решение для среднего и малого бизнеса</h3>
                        <p>Создать хорошего и удобного бота сейчас не дешево. И я уже не говорю про несколько мессенджеров. <br><br>Наш сервис позволяет удобно и сразу создать нескольких чат-ботов для дополнительных продаж без больших финансовых
                            вложений и трудозатрат</p>
			<?php if($logged_in){ ?>
			    <a href="//app.joinchat.us/ru/signup" target="_blank" rel="noopener norefferer" class="read-more active">Войти</a>
			<?php }else{ ?>
			    <a href="//app.joinchat.us/ru/signup" target="_blank" rel="noopener norefferer" class="read-more active">Старт сейчас</a>
			<?php } ?>
                        <a href="#contact" class="read-more">Связаться</a>
                    </div>
                </div>
                <div class="col-md-5 col-lg-5 col-md-offset-1 col-lg-offset-1 col-sm-12 col-xs-12">
                    <div class="area-image-content hidden-sm hidden-xs wow fadeIn" data-wow-delay="0.6s">
                        <div class="goal-layers">
                            <div class="goal-layer-1"><img class="lazy" data-src="assets/img/mockups/goal-mockup-2.png" alt=""></div>
                            <div class="goal-layer-2" data-parallax='{"y": 180}'><img class="lazy" data-src="assets/img/mockups/goal-mockup-1.webp" alt=""></div>
                            <div class="goal-layer-3" data-parallax='{"y": 70}'><img class="lazy" data-src="assets/img/mockups/goal-dots-shape.png" alt=""></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--GOAL AREA END-->

    <!--TESTMONIAL AREA-->
    <section class="testmonial-area section-padding gray-bg fix" id="process">
        <div class="testmonial-layers">
            <div class="testmonial-layer-1" data-parallax='{"y": 200, "smoothness": 100}'><img class="lazy" data-src="assets/img/bg-layers/layers-1.png" alt=""></div>
            <div class="testmonial-layer-2" data-parallax='{"x": 80}'><img class="lazy" data-src="assets/img/bg-layers/layers-2.png" alt=""></div>
            <div class="testmonial-layer-3" data-parallax='{"x": -200, "smoothness": 100}'><img class="lazy" data-src="assets/img/bg-layers/layers-3.png" alt=""></div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-6 col-md-offset-3 col-lg-offset-3 col-sm-12 col-xs-12">
                    <div class="area-title center">
                        <h4 class="subtitle">Отзывы наших клиентов</h4>
                        <h2>Что о нас говорят</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="testmonial-slider">
                        <div class="single-testmonial">
                            <div class="author-content">
                                <p>Вытянул товары со своего магазина и быстро загрузил в чатботов. И уже люди заходят и интересуются.</p>
                            </div>
                            <div class="author-name-and-thumb">
                                <div class="author-tumb"><img src="assets/img/testmonial/author-1.png" alt=""></div>
                                <h4>Игорь</h4>
                                <p>Маркетолог</p>
                            </div>
                        </div>
                        <div class="single-testmonial">
                            <div class="author-content">
                                <p>Я сначала сомневался, но подсчитав, что 1 продажа через чат-бота полностью его окупает, плохие мысли отпали.</p>
                            </div>
                            <div class="author-name-and-thumb">
                                <div class="author-tumb"><img class="lazy" data-src="assets/img/testmonial/author-3.png" alt=""></div>
                                <h4>Иван</h4>
                                <p>Владелец</p>
                            </div>
                        </div>
                        <div class="single-testmonial">
                            <div class="author-content">
                                <p>Не с первого раза разобралась. Спасибо ребятам, помогли переместить товары и уже через пару дней была первая продажа.</p>
                            </div>
                            <div class="author-name-and-thumb">
                                <div class="author-tumb"><img src="assets/img/testmonial/author-2.png" alt=""></div>
                                <h4>Екатерина</h4>
                                <p>Владелица</p>
                            </div>
                        </div>
                        <div class="single-testmonial">
                            <div class="author-content">
                                <p>Сейчас, каждый второй разработчик делает чат-ботов для Telegram. Подписался исключительно ради Viber. Мои клиенты передают спасибо!</p>
                            </div>
                            <div class="author-name-and-thumb">
                                <div class="author-tumb"><img src="assets/img/testmonial/author-4.png" alt=""></div>
                                <h4>Дмитрий</h4>
                                <p>Директор</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--TESTMONIAL AREA END-->

    <!--PRICEING AREA-->
    <section class="pricing-area padding-100-50" id="pricing">
        <div class="container">
            <div class="row flex-v-center">
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    <div class="area-title sm-center xs-center text-center">
                        <h4 class="subtitle">Стоимость использования JoinChat</h4>
                        <h2>Выбирете для себя подходящий тарифы</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="tab-content">
                        <div class="row row-flex">
                            <div class="col-xs-12 col-sm-10 col-md-4 col-center">
                                <div class="single-price mb50">
                                    <div class="price-header">
                                        <div class="price-thumb-hidding">
                                            <img src="assets/img/join/basic.png" alt="">
                                            <div class="price-rate"><span class="currency">$</span>15<span class="currency">/Мес</span></div>
                                            <div class="price-title">Тариф Basic</div>
                                        </div>
                                    </div>
                                    <div class="price-details">
                                        <ul>
                                            <li><i class="dripicons-checkmark"></i><strong>Доступно один чат-бот — Telegram или Viber</strong></li>
                                            <li><i class="dripicons-checkmark"></i> Полный функционал платформы </li>
                                            <li><i class="dripicons-checkmark"></i> Контент менеджер 5 часов работы </li>
                                            <li><i class="dripicons-checkmark"></i> Безлимитное количество пользователей </li>
                                            <li><i class="dripicons-checkmark"></i> Промо-страница Link на чат-боты</li>
                                            <li><i class="dripicons-checkmark"></i> Push-уведомление/Рассылка</li>
                                            <li><i class="dripicons-checkmark"></i> Уведомление о заказах в общий чат Telegram </li>
                                            <li><i class="dripicons-checkmark"></i> CRM система внутренняя</li>
                                            <li><i class="dripicons-checkmark"></i> Виджет на Ваш сайт</li>
                                            <li><i class="dripicons-cross"></i> Чек-листы для запуска чат-бота</li>
                                            <li><i class="dripicons-cross"></i> Есть брендинг JoinСhat </li>
                                            <li><i class="dripicons-cross"></i> Личный проектный менеджер </li>
                                            <li><i class="dripicons-cross"></i> Поддержка 24/7</li>
                                        </ul>
                                    </div>
                                    <div class="price-footer">
                                        <a href="//app.joinchat.us/ru/signup" target="_blank" rel="noopener norefferer"  class="purchase-button">Выбрать</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-10 col-md-4 col-center">
                                <div class="single-price mb50 active">
                                    <div class="sale-promo">Популярный</div>
                                    <div class="price-header">
                                        <div class="price-thumb-hidding">
                                            <img src="assets/img/join/business.svg" alt="">
                                            <div class="price-rate"><span class="currency">$</span>20<span class="currency">/Мес</span></div>
                                            <div class="price-title">Тариф Business</div>
                                        </div>
                                    </div>
                                    <div class="price-details">
                                        <ul>
                                            <li><i class="dripicons-checkmark"></i><strong>Доступено 2-а чат-бота Telegram и Viber</strong></li>
                                            <li><i class="dripicons-checkmark"></i> Полный функционал платформы </li>
                                            <li><i class="dripicons-checkmark"></i> Контент менеджер 5 часов работы </li>
                                            <li><i class="dripicons-checkmark"></i> Безлимитное количество пользователей </li>
                                            <li><i class="dripicons-checkmark"></i> Промо-страница Link на чат-боты</li>
                                            <li><i class="dripicons-checkmark"></i> Push-уведомление/Рассылка</li>
                                            <li><i class="dripicons-checkmark"></i> Уведомление о заказах в общий чат Telegram </li>
                                            <li><i class="dripicons-checkmark"></i> CRM система внутренняя</li>
                                            <li><i class="dripicons-checkmark"></i> Виджет на Ваш сайт</li>
                                            <li><i class="dripicons-checkmark"></i> Чек-листы для запуска чат-бота</li>
                                            <li><i class="dripicons-checkmark"></i> Есть брендинг JoinСhat </li>
                                            <li><i class="dripicons-checkmark"></i> Личный проектный менеджер </li>
                                            <li><i class="dripicons-checkmark"></i> Поддержка 24/7</li>
                                        </ul>
                                    </div>
                                    <div class="price-footer">
                                        <a href="//app.joinchat.us/ru/signup" target="_blank" rel="noopener norefferer"  class="purchase-button">Выбрать</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-10 col-md-4 col-center">
                                <div class="single-price mb50 active">
                                    <div class="price-header">
                                        <div class="price-thumb-hidding">
                                            <img src="assets/img/join/motocycle.png" alt="">
                                            <div class="price-rate"><span class="currency">$</span>300<span class="currency">/Мес</span><span class="currency"> + $ Price</span> </div>
                                            <div class="price-title">⚙ Докрутка</div>
                                        </div>
                                    </div>
                                    <div class="price-details">
                                        <ul>
                                            <li><i class="dripicons-checkmark"></i> Персональная доработка чат-бота разработчиками под ваши потребности </li>
                                            <li><i class="dripicons-checkmark"></i> Как пример – любые интеграции: от CRM-системы до сервиса email-рассылок </li>
                                        </ul>
                                    </div>
                                    <div class="price-footer">
                                        <a href="//app.joinchat.us/ru/signup" target="_blank" rel="noopener norefferer"  class="purchase-button">Выбрать</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--PRICEING AREA END-->

    <!--FAQS AREA-->
    <section class="faqs-area padding-top gray-bg" id="faqs">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-6 col-xs-12">
                    <div class="area-image-content hidden-sm hidden-xs">
                        <div class="faqs-mockup-1" data-parallax='{"y": 150, "smoothness": 100}'><img class="lazy" data-src="assets/img/faqs/faqs-mockup.png" alt=""></div>
                        <div class="faqs-mockup-2"><img class="lazy" data-src="assets/img/faqs/faqs-question.png" alt=""></div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xs-12">
                    <div class="area-content sm-mb80 xs-mb50">
                        <h4 class="subtitle font500 alt-font uppercase">FAQ</h4>
                        <h2>Ответы на ваши вопросы</h2>
                        <div class="panel-group sm-mt50 xs-mt50" id="accordion-main">

                            <!-- start tab content -->
                            <div class="panel panel-default active">
                                <div class="panel-heading">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion-main" href="#collapseOne">
                                        <div class="panel-title">
                                            <span>01</span>
                                            <span>Что такое чат-боты?</span>
                                            <i class="pull-right fa fa-angle-down"></i>
                                        </div>
                                    </a>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse in">
                                    <div class="panel-body">Попробуйте пообщаться с ботом Joinchat</a>, и вы увидите, как именно ваш бизнес может увеличить количество потенциальных клиентов и продажи</div>
                                </div>
                            </div>
                            <!-- end tab content -->

                            <!-- start tab content -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion-main" href="#collapseTwo">
                                        <div class="panel-title">
                                            <span>02</span>
                                            <span>Я могу вернуть средства более через 14 дней?</span>
                                            <i class="pull-right fa fa-angle-down"></i>
                                        </div>
                                    </a>
                                </div>
                                <div id="collapseTwo" class="panel-collapse collapse">
                                    <div class="panel-body">Да, вы сможете вернуть свои средства. Все возвраты либо же неудобства рассматриваются в индивидуальном порядке нашей поддержкой.</div>
                                </div>
                            </div>
                            <!-- end tab content -->

                            <!-- start tab content -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion-main" href="#collapseThree">
                                        <div class="panel-title">
                                            <span>03</span>
                                            <span>За мной будет закреплен менеджер?</span>
                                            <i class="pull-right fa fa-angle-down"></i>
                                        </div>
                                    </a>
                                </div>
                                <div id="collapseThree" class="panel-collapse collapse">
                                    <div class="panel-body">Когда Вы покупаете максимальный тариф, наш менеджер подсказывает как правильно наполнить чат-бота и отвечает на все Ваши вопросы, которые у Вас возникают.</div>
                                </div>
                            </div>
                            <!-- end tab content -->

                            <!-- start tab content -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion-main" href="#collapseFour">
                                        <div class="panel-title">
                                            <span>04</span>
                                            <span>Куда мне писать если что-то не работает?</span>
                                            <i class="pull-right fa fa-angle-down"></i>
                                        </div>
                                    </a>
                                </div>
                                <div id="collapseFour" class="panel-collapse collapse">
                                    <div class="panel-body">Наш сервис предпологает отправку заявок в поддержку. Если неисправности критические наши разработчики быстро все поправят</div>
                                </div>
                            </div>
                            <!-- end tab content -->

                            <!-- start tab content -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion-main" href="#collapseFive">
                                        <div class="panel-title">
                                            <span>05</span>
                                            <span>У Вас есть реферальная программа?</span>
                                            <i class="pull-right fa fa-angle-down"></i>
                                        </div>
                                    </a>
                                </div>
                                <div id="collapseFive" class="panel-collapse collapse">
                                    <div class="panel-body">На данный момент реферальной программы нету, но мы создадим публичную дорожную карту, чтобы вы знали какая функция будет следующей</div>
                                </div>
                            </div>
                            <!-- end tab content -->

                            <!-- start tab content -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion-main" href="#collapseSix">
                                        <div class="panel-title">
                                            <span>06</span>
                                            <span>В сервисе есть боты Facebook Messenger?</span>
                                            <i class="pull-right fa fa-angle-down"></i>
                                        </div>
                                    </a>
                                </div>
                                <div id="collapseSix" class="panel-collapse collapse">
                                    <div class="panel-body">На данный момент сервис не поддерживает чат-ботов Messenger. Мы обязательно всех оповестим когда они станут доступны</div>
                                </div>
                            </div>
                            <!-- end tab content -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--FAQS AREA END-->

    <!--CONTACT AREA-->
    <section class="contact-area padding-100-50 gray-bg" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-lg-8 col-md-offset-2 col-lg-offset-2 col-sm-12 col-xs-12">
                    <div class="area-title center">
                        <h4 class="subtitle">Связаться</h4>
                        <h2>Нужна консультация?</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5 col-lg-5 col-sm-12 col-xs-12">
                    <div class="contact-content padding50 mb50 xs-padding20">
                        <div class="single-contact">
                            <div class="contact-icon"><i class="dripicons-mail"></i></div>
                            <h3>Написать в Telegram</h3>
                            <p><a href="https://t.me/joinchat_support" target="_blank" rel="noopener noreferrer">
                            Нажмите на иконку<img class="lazy" data-src="assets/img/icons/telegram.svg">
                            </a></p>
                        </div>
                        <div class="single-contact">
                            <div class="contact-icon"><i class="dripicons-mail"></i></div>
                            <h3>Контакты</h3>
                            <p>joinchat.us@gmail.com</p>
                            <p>aMemory.Pro</p>
                        </div>
                        
                    </div>
                </div>
                <div class="col-md-5 col-lg-5 col-md-offset-1 col-lg-offset-1 col-sm-12 col-xs-12">
                    <div class="contact-form mb50">
                        <form action="send.php" id="contact-form" method="post">
                            <div class="row">
                                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                    <div class="form-group" id="name-field">
                                        <div class="form-input">
                                            <label for="form-name">Ваше имя</label>
                                            <input type="text" class="form-control" id="form-name" name="form-name" placeholder="Иван Иванов" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                    <div class="form-group" id="email-field">
                                        <div class="form-input">
                                            <label for="form-email">Ваш E-Mail</label>
                                            <input type="email" class="form-control" id="form-email" name="form-email" placeholder="client@mail.com" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                    <div class="form-group" id="phone-field">
                                        <div class="form-input">
                                            <label for="form-phone">Тема письма</label>
                                            <input type="text" class="form-control" id="form-phone" name="form-phone" placeholder="Предложение...">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                    <div class="form-group" id="message-field">
                                        <div class="form-input">
                                            <label for="form-message">Сообщение</label>
                                            <textarea class="form-control" rows="6" id="form-message" name="form-message" placeholder="Хочу с Вами посотрудничать..." required></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                    <div class="form-group mb0">
                                        <button class="read-more active" name="submit" type="submit">Отправить</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--CONTACT AREA END-->

    <!--FOOER AREA-->
    <footer class="footer-area white relative">
        <div class="area-bg"></div>
        <div class="footer-bottom-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                        <div class="footer-copyright text-center">
                            <p> &copy; JoinChat</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                        <div class="footer-copyright text-center">
                                <a href="/terms">Правила использования</a>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                        <div class="footer-copyright text-center">
                                <a href="/public-offer">Публичная оферта</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--FOOER AREA END-->

    <!--====== SCRIPTS JS ======-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
    <!--    old src assets/js/vendor/jquery-1.12.4.min.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.js" integrity="sha256-Cr6N6zNN4bp0OwTQOZ6Z66M2r+2dpy/EwKMCyZ+SOMg=" crossorigin="anonymous"></script>    <!--    old src assets/js/vendor/bootstrap.min.js -->

    <!--====== PLUGINS JS ======-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.js" integrity="sha256-B1f3/25falgZIqXi1CxeDPdHXYgIhamALovdXkGI3TQ=" crossorigin="anonymous"></script>
    <!--old src assets/js/vendor/jquery.easing.1.3.js-->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-migrate/3.1.0/jquery-migrate.min.js" integrity="sha256-91c9XEM8yFH2Mn9fn8yQaNRvJsEruL7Hctr6JiIY7Uw=" crossorigin="anonymous"></script>
    <!-- old src assets/js/vendor/jquery-migrate-1.2.1.min.js  -->
    <script src="assets/js/vendor/jquery.appear.js"></script>
    <!--    old src assets/js/vendor/jquery.appear.js -->


    <script src="assets/js/owl.carousel.min.js"></script>
<!--    https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/2.1.0/isotope.pkgd.js  --integrity="sha256-sbGc//JgEOwalULNvDFBySfaM4CIVAPh2amXzDid4d0=" crossorigin="anonymous"-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/2.1.0/isotope.pkgd.min.js" integrity="sha256-FMeghMcnGpnpncZZGzVhmKZeSJonV408+2z2js3Veg4=" crossorigin="anonymous"></script> <!-- assets/js/isotope.pkgd.min.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/stellar.js/0.6.2/jquery.stellar.min.js" integrity="sha256-aQ6KGDKk7w8XQNZsQaQnbfeC//XPUIphSp/X/ZEwtV0=" crossorigin="anonymous"></script><!-- assets/js/stellar.js -->
<!--    <script src="assets/js/jquery.parallax-layer-scroll.js"></script>-->
<!--    <script src="assets/js/chaffle.min.js"></script>-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js" integrity="sha256-eBPyH/yKtanEgIozyunmI0tKs7FCRaiQC91ih5ZCB3w=" crossorigin="anonymous"></script> <!-- old src -- assets/js/anime.min.js -->
    <script  src="assets/js/jquery-modal-video.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/venobox/1.8.3/venobox.min.js" integrity="sha256-vD6deUu3WkP35ZI4Cw5cBRFo787G6/UNCDsnQJ1+aFk=" crossorigin="anonymous"></script><!-- assets/js/venobox.min.js -- src old -->
    <script  src="assets/js/stellarnav.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.sticky/1.0.4/jquery.sticky.min.js" integrity="sha256-9p9wUORIjnIRp9PAyZGxql6KgJRNiH04y+8V4JjUhn0=" crossorigin="anonymous"></script><!-- assets/js/jquery.sticky.js  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js" integrity="sha256-z6FznuNG1jo9PP3/jBjL6P3tvLMtSwiVAowZPOgo56U=" crossorigin="anonymous"></script><!-- assets/js/wow.min.js -->
    <script  src="assets/js/placeholdem.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/odometer.js/0.4.8/odometer.min.js" integrity="sha256-65R1G5irU1VT+k8L4coqgd3saSvO/Wufson/w+v2Idw=" crossorigin="anonymous"></script><!-- assets/js/odometer.min.js -->
    <script  src="assets/js/contact-form.js"></script>
    <script  src="assets/js/footer-reveal.min.js"></script>
    <script  src="assets/js/ResizeSensor.min.js"></script>
    <script  src="assets/js/theia-sticky-sidebar.min.js"></script>

    <!--===== ACTIVE JS=====-->
    <script src="assets/js/main.js"></script>

</body>

</html>
