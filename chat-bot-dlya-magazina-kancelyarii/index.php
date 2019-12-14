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

    <!--====== TITLE TAG ======-->
    <title>JoinChat - Чат бот для продажи канцелярии</title>

    <!--====== FAVICON ICON =======-->
    <link rel="shortcut icon" type="image/ico" href="/assets/img/favicon.png" />

    <!--====== STYLESHEETS ======-->
    <link href="/assets/css/plugins.css" rel="stylesheet">
    <link href="/assets/css/icons.css" rel="stylesheet">
    <link href="/assets/css/typography.css" rel="stylesheet">
    <link href="/assets/css/header.css" rel="stylesheet">
    <link href="/assets/css/blog-and-pages.css" rel="stylesheet">
    <link href="/assets/css/footer.css" rel="stylesheet">

    <!--====== MAIN STYLESHEETS ======-->
    <link href="/style.css" rel="stylesheet">
    <link href="/assets/css/responsive.css" rel="stylesheet">

    <!-- <script src="/assets/js/vendor/modernizr-2.8.3.min.js"></script> -->
    <!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
		
		<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(55160251, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/55160251" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
		
<!-- Yandex.Metrika counter --><script type="text/javascript" >(function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})(window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

ym(53342236, "init", {clickmap:true,trackLinks:true,accurateTrackBounce:true,webvisor:true});</script><noscript><div><img src="https://mc.yandex.ru/watch/53342236" style="position:absolute; left:-9999px;" alt="" /></div></noscript><!-- /Yandex.Metrika counter -->

<!-- Global site tag (gtag.js) - Google Analytics --><script async src="https://www.googletagmanager.com/gtag/js?id=UA-137853582-1"></script><script>window.dataLayer = window.dataLayer || [];function gtag(){dataLayer.push(arguments);}gtag('js', new Date());

gtag('config', 'UA-137853582-1');</script>




<script src="https://kit.fontawesome.com/172c54f5cf.js"></script>
</head>

<body class="overflow-xhidden home-four demo" data-spy="scroll" data-target=".mainmenu-area" data-offset="90">

    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <!--- PRELOADER -->
    <!-- <div class="preeloader">
        <div class="preloader-spinner"></div>
    </div> -->

    <!--SCROLL TO TOP-->
    <a href="#scroolup" class="scrolltotop"><i class="fa fa-long-arrow-up"></i></a>

    <!--START TOP AREA-->
    <header class="top-area" id="home">
        <div class="header-top-area" id="scroolup">
            <!--MAINMENU AREA-->
            <div class="mainmenu-area is-sticky" id="mainmenu-area">
                <div class="mainmenu-area-bg"></div>
                <nav class="navbar">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 flex-v-center">
                                <div class="navbar-header">
                                    <a href="/" class="custom-logo-link default-logo"><img src="/assets/img/logo.svg" alt="logo"></a>
                                    <a href="/" class="custom-logo-link sticky-logo"><img src="/assets/img/sticky_logo.svg" alt="logo"></a>
                                </div>
                                <svg class="ham hamRotate ham8" viewBox="0 0 100 100" width="50">
                                    <path class="line top" d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20" />
                                    <path class="line middle" d="m 30,50 h 40" />
                                    <path class="line bottom" d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20" />
                                </svg>
                                <div id="main-nav" class="stellarnav">
                                    <ul id="nav" class="nav navbar-nav pull-right">
                                        <li><a href="/#pricing">Цены</a></li>
                                        <li><a href="/#features">Для кого</a></li>
                                        <li><a href="/#examples">Примеры</a></li>
                                        <li><a href="/#func">Функционал</a></li>
                                        <li><a href="/#faqs">FAQ</a></li>
                                        <li><a href="/#contact">Связаться</a></li>
                                        </li>
                                    </ul>
                                </div>
                                <div class="header-call-to-action hidden-sm hidden-xs hidden-md">
                                    <a href="https://app.joinchat.us/ru/signup" target="_blank" class="main-action action-button">Попробовать бесплатно</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
            <!--END MAINMENU AREA END-->
        </div>

        <!--SCREENSHOT AREA-->
        <section class="screenshot-area fix section-padding xs-padding-top-100 padding-bottom-10" id="screenshots">
            <div class="area-bg"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="area-content xs-center xs-mb50">
                            <h4 class="subtitle">Доставка</h4>
                            <h1>Бот для магазина канцелярии</h1>
                            <ul class="no-padding">
                                <li class="display-block mb10"><i class="dripicons-checkmark"></i> Возможность оформить заказ в боте</li>
                                <li class="display-block mb10"><i class="dripicons-checkmark"></i> Viber + Telegram</li>
                                <li class="display-block mb10"><i class="dripicons-checkmark"></i> Оплата картой</li>
                                <li class="display-block mb10"><i class="dripicons-checkmark"></i> Удобное редактирование товаров</li>
                                <li class="display-block mb10"><i class="dripicons-checkmark"></i> CRM система</li>
                                <li class="display-block mb10"><i class="dripicons-checkmark"></i> Информативный Dashboard</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-6 col-xs-12">
                        <div class="screenshot-slider">
                            <div class="single-screenshot">
                                <img src="/assets/img/demo/su1.png" alt="">
                            </div>
                            <div class="single-screenshot">
                                <img src="/assets/img/demo/su2.png" alt="">
                            </div>
                            <div class="single-screenshot">
                                <img src="/assets/img/demo/su3.png" alt="">
                            </div>
                            <div class="single-screenshot">
                                <img src="/assets/img/demo/su4.png" alt="">
                            </div>
                            <div class="single-screenshot">
                                <img src="/assets/img/demo/su5.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--SCREENSHOT AREA END-->
        <!--PROCESS AREA-->
        <section class="process-area" id="process">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="process-content">
                            <div class="area-bg"></div>
                            <div class="row">
                                <div class="col-md-4 col-sm-6 col-xs-6">
                                    <div class="single-process-box xs-mb50 wow fadeInLeft viber" data-wow-delay="0.3s">
                                      <a href="viber://pa/info?uri=demojoincans" target="_blank">
                                        <div class="process-icon demo-icon"><i class="fab fa-viber"></i></div>
                                        <span>DEMO Viber</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-xs-6">
                                    <div class="single-process-box xs-mb50 wow fadeInLeft telegram" data-wow-delay="0.6s">
                                      <a href="https://t.me/demojoincans_bot" target="_blank">
                                        <div class="process-icon demo-icon"><i class="fab fa-telegram-plane"></i></div>
                                        <span>DEMO Telegram</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="single-process-box hidden-sm wow fadeInLeft web" data-wow-delay="0.9s">
                                      <a href="https://app.joinchat.us/" target="_blank">
                                        <div class="process-icon demo-icon"><i class="fas fa-user-edit"></i></div>
                                        <span>DEMO Admin panel</span>
                                        </a>
                                        <p><!--Логин: cans@amemory.pro<br> Пароль: 123123--></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--PROCESS AREA END-->


            <!--ABOUT AREA-->
            <section class="about-area section-padding gray-bg" id="about">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7 col-lg-7 col-sm-12 col-xs-12">
                            <div class="area-image-content sm-mb50 xs-mb50 wow fadeInRight" data-wow-delay="0.3s">
                                <img src="/assets/img/about/about-mockup.png" alt="">
                            </div>
                        </div>
                        <div class="col-md-5  col-lg-5 col-sm-12 col-xs-12">
                            <div class="area-content">
                                <h3 class="wow fadeInRight" data-wow-delay="0.3s">Почему это работает?</h3>
                                <div class="text-icon-box wow fadeInRight" data-wow-delay="0.6s">
                                    <p>Данный чат бот станет находкой для вас. Клиент сможет скинуть заранее фаил который нужно распечатать, выбрать время, формат страницы, и оплатить онлайн через бота. Это станет удобно и для вас, ведь все будет автоматизированно и помимо этого у вас появится возможность рассылки акций, скидок и других нововведений каждому пользователю.</p>
                                    <a href="https://app.joinchat.us/ru/signup" target="_blank" class="add-adaptive read-more active">Попробовать бесплатно</a>
                                    <p class="ml40">14 дней бесплатно</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--ABOUT AREA END-->

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
    <script src="/assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="/assets/js/vendor/bootstrap.min.js"></script>

    <!--====== PLUGINS JS ======-->
    <script src="/assets/js/vendor/jquery.easing.1.3.js"></script>
    <script src="/assets/js/vendor/jquery-migrate-1.2.1.min.js"></script>
    <script src="/assets/js/vendor/jquery.appear.js"></script>

    <script src="/assets/js/owl.carousel.min.js"></script>
    <script src="/assets/js/isotope.pkgd.min.js"></script>
    <script src="/assets/js/stellar.js"></script>
    <script src="/assets/js/jquery.parallax-layer-scroll.js"></script>
    <script src="/assets/js/chaffle.min.js"></script>
    <script src="/assets/js/anime.min.js"></script>
    <script src="/assets/js/jquery-modal-video.min.js"></script>
    <script src="/assets/js/venobox.min.js"></script>
    <script src="/assets/js/stellarnav.min.js"></script>
    <script src="/assets/js/jquery.sticky.js"></script>
    <script src="/assets/js/wow.min.js"></script>
    <script src="/assets/js/placeholdem.min.js"></script>
    <script src="/assets/js/odometer.min.js"></script>
    <script src="/assets/js/contact-form.js"></script>
    <script src="/assets/js/footer-reveal.min.js"></script>
    <script src="/assets/js/ResizeSensor.min.js"></script>
    <script src="/assets/js/theia-sticky-sidebar.min.js"></script>

    <!--===== ACTIVE JS=====-->
    <script src="/assets/js/main.js"></script>

</body>

</html>
