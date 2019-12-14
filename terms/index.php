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





</head>

<body class="overflow-xhidden home-four" data-spy="scroll" data-target=".mainmenu-area" data-offset="90">

    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <!--- PRELOADER -->
    <div class="preeloader">
        <div class="preloader-spinner"></div>
    </div>

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
                                    <a href="" class="custom-logo-link default-logo"><img src="/assets/img/logo.svg" alt="logo"></a>
                                    <a href="" class="custom-logo-link sticky-logo"><img src="/assets/img/sticky_logo.svg" alt="logo"></a>
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
                                        <li><a href="#faqs">FAQ</a></li>
                                        <li><a href="#contact">Связаться</a></li>
                                        </li>
                                    </ul>
                                </div>
                                <div class="header-call-to-action hidden-sm hidden-xs hidden-md">
                                    <a href="https://app.joinchat.us" class="action-button">Создать бота</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
            <!--END MAINMENU AREA END-->
        </div>
        <!--WELCOME TEXT AREA-->
        <div class="welcome-text-area font16 white">
            <div class="area-bg"></div>
            <div class="welcome-area section-padding">
                <div class="container">
                    <div class="row flex-v-center">
                        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                            <div class="welcome-text">
                                <h1 class="wow fadeInUp" data-wow-delay="0.3s">Условия использования сервиса </h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--WELCOME TEXT AREA END-->
        <!--ABOUT AREA-->
        <section class="about-area section-padding gray-bg" id="about">
            <div class="container">
                <div class="row">
                    <div class="col-md-12  col-lg-12 col-sm-12 col-xs-12">
                        <div class="area-content">
                            Настоящее пользовательское соглашение (далее — Соглашение)  является публичной офертой ФОП Сук Дмитрий Александрович, и адресовано любому дееспособному лицу (далее — Пользователю) на изложенных ниже условиях.
                            <br>
                                Регистрация в специальной форме, размещенной по адресу: <a href="https://app.joinchat.us/signup/">https://app.joinchat.us/signup/</a>, является безусловным и безоговорочным принятием (акцептом) Пользователем условий Соглашения.
                                <br> <strong>Термины
                                    и определения </strong>
                                    <br> Платформа – программный комплекс Администрации, расположенный по адресу https://joinchat.us.
                                    <br> Аккаунт — учетная запись Пользователя на Платформе. 
                                    <br> Личный кабинет — раздел Платформы, с помощью которого
                                Пользователь может реализовывать функционал Платформы, в том числе создавать чат-ботов.
                                <br> Чат-бот (далее — Бот) — специальная автоматизированная программа, которая в автоматическом режиме может принимать, обрабатывать и отправлять сообщения,
                                созданная Пользователем с помощью Платформы.
                                <br> Библиотека компонентов (далее — Библиотека) — база данных с Блоками и Компонентами. Является составной частью Платформы и принадлежит Администрации. 
                                <br> Блок — готовый к использованию элемент
                                для создания Бота, спроектированный и запрограммированный Администрацией.
                                <br> Шаблон — готовый к использованию набор Блоков для создания Ботов, спроектированный и запрограммированный Администрацией. 
                                <br> Контент — информация, документы и иные
                                объекты, размещаемые Пользователем в Боте.
                                <br> Тариф — объем предоставляемых прав и услуг Пользователю. 
                                <br> <strong>1. Предмет</strong> 
                                <br> 1.1. Администрация предоставляет неисключительную лицензию на использование Платформы и элементов
                                Библиотеки, а также оказывает сопутствующие услуги.
                                <br> 1.2. Пользователь использует Платформу и элементы Библиотеки согласно условиям Соглашения и выбранного Тарифа, а также уплачивает вознаграждение, если иное не предусмотрено Тарифом. 
                                <br>
                                <strong>2. Общие положения </strong>
                                <br> 2.1. Для использования Платформы Пользователь проходит регистрацию по адресу <a href="https://app.joinchat.us/signup/">https://app.joinchat.us/signup/</a>. 
                                <br> 2.2. После регистрации Пользователь
                                получает уникальный Аккаунт и доступ в Личный кабинет.
                                <br> 2.3. Все действия, совершаемые в Личном кабинете, считаются совершенными Пользователем лично. 
                                <br> 2.4. Пользователь самостоятельно несет ответственность за: 
                                <br> a) сохранность своего
                                логина и пароля;
                                <br> b) последствия в случае утери и/или разглашения логина и пароля третьим лицам. 
                                <br> 2.5. Администрация не рекомендует Пользователю передавать третьим лицам данные своего Аккаунта. В случае передачи данных Аккаунта
                                Пользователь должен ознакомить третьих лиц с Соглашением и несет всю ответственность за их действия.
                                <br> <strong>3. Условия использования </strong>
                                <br> 3.1. Пользователь вправе использовать Платформу согласно Соглашению и действующему
                                законодательству Российской Федерации.
                                <br> 3.2. Администрация не обязана оказывать консультационную и техническую поддержку Пользователю. 
                                <br> 3.3. Платформа интегрирована с различными сервисами, в том числе с сервисами аналитики, платежей,
                                рассылок. Платформа обеспечивает только возможность доступа к сервисам. Все вопросы, связанные с использованием сервиса, регулируются документами сервиса и решаются между владельцем сервиса и Пользователем самостоятельно.
                                <br> 3.4. Платформа и
                                услуги предоставляются на условиях «как есть».
                                <br> 3.5. Пользователь принимает на себя все риски, связанные с использованием Платформы и услуг. 
                                <br> 3.6. Администрация не дает Пользователю никаких явно выраженных или предполагаемых гарантий в
                                отношении Платформы и услуг, в том числе, не гарантирует (включая, но не ограничиваясь): пригодность для конкретных целей, безопасность и защищенность, точность, полноту, производительность, системную интеграцию, бесперебойное функционирование,
                                отсутствие ошибок, исправление неполадок, отсутствие вирусов, законность использования на любых территориях за пределами Российской Федерации.
                                <br> 3.7. Администрация не несет ответственности за: 
                                <br> a) невозможность использования Платформы по
                                причинам, не зависящим от Администрации;
                                <br> b) любые действия и/или бездействия поставщиков услуг, сервисов, сетей, программного обеспечения или оборудования; 
                                <br> c) искажение, изменение, утрату Контента; 
                                <br> d) безопасность логина и/или
                                пароля Пользователя;
                                <br> e) несанкционированное и/или неправомерное использования третьими лицами логина и/или пароля Пользователя; 
                                <br> f) ущерб, который может быть нанесен любым устройствам и носителям информации и/или программному
                                обеспечению Пользователя в результате использования Платформы и/или услуг;
                                <br> g) последствия передачи Ботов между Аккаунтами. 
                                <br> <strong>4. Интеллектуальная собственность </strong>
                                <br> 4.1. Администрация является правообладателем Платформы и
                                ее составных частей (код, дизайн, базы данных, ноу-хау, Библиотеки, Блоки, Шаблоны).
                                <br> 4.2. Неисключительная лицензия ограничена «правом на использование», и ни одно из положений Соглашения не означает передачи Пользователю исключительного
                                права на Платформу, Библиотеки, Блоки и Шаблоны.
                                <br> 4.3. Неисключительная лицензия предоставляется на срок действия Соглашения на территорию всего мира. 
                                <br><strong>Платформа и Библиотека</strong> 
                                <br>4.4. Пользователь вправе с помощью
                                Платформы:
                                <br> a) создавать Ботов, в том числе с помощью Блоков и Шаблонов; 
                                <br> b) изменять и дорабатывать Ботов; 
                                <br> c) подключать собственные токены страницы в Мессенджерах и различные сервисы к Ботам. 
                                <br>4.5. Пользователь вправе
                                использовать элементы Библиотеки (Блоки и Шаблоны) для создания Ботов только с помощью Платформы.
                                <br> <strong>Боты </strong>
                                <br> 4.6. Права на программный код Ботов принадлежат Администрации. 
                                <br> 4.7. Пользователь вправе изменять и
                                дорабатывать Ботов только с помощью Платформы.
                                <br> 4.8. Пользователь должен сохранять в Ботах идентификатор Администрации «Powered by botmother», если иное не предусмотрено Тарифом. 
                                <br> <strong>Контент</strong> 
                                <br> 4.9. При создании Бота
                                Пользователь должен заменить изображения, иконки, тексты, находящиеся в Блоках и Шаблонах. Данные объекты используются исключительно в демонстрационных целях. Использование объектов в качестве Контента в Боте возможно только в случае достижения
                                Пользователем соответствующих договоренностей с правообладателями.
                                <br> 4.10. Пользователь гарантирует, что Контент не нарушает права третьих лиц на результаты интеллектуальной деятельности и приравненные к ним средства индивидуализации, права
                                на информацию, составляющую коммерческую тайну, не наносит вреда чести, деловой репутации и достоинству третьих лиц, не нарушает национальное и международное законодательство.
                                <br> 4.11. Пользователь предоставляет Администрации право на
                                использование Контента в любой форме и любым способом в рамках Платформы. Право на использование предоставляется на условиях простой (неисключительной) лицензии и без выплаты авторского вознаграждения на весь срок действия авторского права на
                                территории всего мира. Прекращение действия Соглашения между Сторонами не отменяет настоящее положение.
                                <br> <strong>5. Экспорт </strong>
                                <br> 5.1. Пользователь не вправе копировать программный код Бота. 
                                <br> 5.2. Пользователь не вправе
                                экспортировать и использовать элементы Библиотеки (Блоки и Шаблоны) отдельно от Бота.
                                <br> <strong>6. Услуги </strong>
                                <br> 6.1. Администрация оказывает Пользователю услуги по предоставлению места на сервере для размещения Бота. 
                                <br> 6.2.
                                Публичный адрес Бота генерируется Платформой автоматически.
                                <br> 6.3. Администрация не дает никаких гарантий в отношении работоспособности и сохранности сервера, на котором предоставляется место для Бота. Пользователь принимает на себя риски
                                потери, связанные с перебоями в работе Бота и потерей Контента.
                                <br> <strong>7. Запрещенные действия </strong>
                                <br> Пользователь не вправе: 
                                <br> 7.1. Использовать Платформу, Библиотеки, Блоки и Шаблоны способами, прямо не предусмотренными
                                Соглашением.
                                <br> 7.2. Изменять, настраивать, переводить или создавать производные продукты, основанные на Боте и элементах Библиотеки, а также интегрировать Бота или элементы Библиотеки в другие результаты интеллектуальной деятельности. 
                                <br>
                                7.3. Предпринимать попытки обойти технические ограничения, установленные Платформой.
                                <br> 7.4. Декомпилировать, дизассемблировать, дешифровать и производить иные действия с исходным кодом Платформы. 
                                <br> 7.5. Экспортировать Бота в нарушении
                                положений Соглашения.
                                <br> 7.6. Удалять из Бота идентификатор «Powered by botmother», если иное не предусмотрено Тарифом. 
                                <br> 7.7. Осуществлять любые действия по скрытию идентификатора «Powered by botmother». 
                                <br> 7.8. Использовать Платформу и
                                Бота для публикации, распространения, хранения, передачи в любой форме Контента, который:
                                <br> a) является незаконным, вредоносным, угрожающим, клеветническим, подстрекающим к насилию над каким-либо лицом или группой лиц, либо к бесчеловечному
                                обращению с животными, призывает к совершению противоправной деятельности, в том числе разъясняет порядок применения взрывчатых веществ и иного оружия, нарушает общепринятые правила приличия и морально-этические нормы, пропагандирует ненависть
                                и/или дискриминацию, а также содержит негативные и критические высказывания, касающиеся религии, политики, расовых, этнических, гендерных признаков, личных качеств, способностей, сексуальной ориентации и внешнего вида третьих лиц, содержит
                                оскорбления в адрес конкретных лиц или организаций;
                                <br> b) может быть воспринят как пропаганда определенных политических и религиозных взглядов, нетрадиционной сексуальной ориентации, насилия, употребления наркотических средств, алкоголя и
                                табакокурения;
                                <br> c) нарушает права несовершеннолетних лиц; 
                                <br> d) нарушает права третьих лиц на результаты интеллектуальной деятельности и приравненные к ним средства индивидуализации, права на информацию, составляющую коммерческую тайну,
                                наносящего вред чести, деловой репутации и достоинству третьих лиц, нарушающего национальное и международное законодательство;
                                <br> e) содержит не разрешенную к разглашению информацию; 
                                <br> f) содержит вредоносное программное обеспечение
                                (вирусы, черви, трояны или другие компьютерные коды, файлы или программы), предназначенное для нарушения, уничтожения либо ограничения функциональности любого компьютерного или телекоммуникационного оборудования (их частей), для осуществления
                                несанкционированного доступа, для получения доступа к коммерческим программным продуктам, путем предоставления серийных номеров логинов, паролей, программ для их генерации и прочих средств для получения несанкционированного доступа к платным
                                ресурсам, а также размещения ссылок на вышеуказанную информацию;
                                <br> g) представляет собой Спам, т.е. рассылку без согласия получателя сообщений коммерческого и некоммерческого характера в форме (включая, но не ограничиваясь): рекламы товаров,
                                оборот которых запрещен или ограничен согласно законодательству РФ; сообщений социального и/или религиозно-мистического содержания с призывом о дальнейшем распространении таких сообщений («писем счастья»); списков чужих адресов электронной
                                почты; схем «пирамид», многоуровневого (сетевого) маркетинга (MLM); реферальных ссылок; систем Интернет-заработка и онлайн-бизнесов.;
                                <br> h) нарушает законодательство Российской Федерации, а также нормы международного права; 
                                <br> i) может
                                использоваться для незаконного сбора, хранения и обработки персональных данных других лиц.
                                <br> 7.9. Использовать Платформу и (или) Бота для: 
                                <br> a) нарушения работы Платформы, в том числе размещения элементов, затрудняющих обмен информацией в
                                реальном времени, открывающих дополнительные окна браузера или мобильного приложения, подменяющих функциональные элементы интерфейса и т.п.;
                                <br> b) размещения ссылок на ресурсы, содержание которых противоречит действующему законодательству РФ и
                                нормам международного права;
                                <br> c) распространения не соответствующих действительности сведений относительно своей причастности к Администрации и /или ее партнерам; 
                                <br> d) содействия любым мероприятиям, направленным на нарушение ограничений и
                                запретов, налагаемых Соглашением, а также на нарушение норм действующего законодательства.
                                <br> <strong>8. Блокировка и удаление</strong> 
                                <br> 8.1. Администрация вправе незамедлительно осуществить блокировку Бота в случае: 
                                <br> a) выявления
                                нарушения Пользователем положений Соглашения;
                                <br> b) выявления нарушения Пользователем положений действующего законодательства Российской Федерации; 
                                <br> c) получения от третьих лиц претензии о нарушении Пользователем их прав; 
                                <br> d) получения
                                соответствующих требований от государственных органов.
                                <br> 8.2. Блокировка означает невозможность пользователей сети Интернет ознакомиться с содержанием Бота. 
                                <br> 8.3. Пользователь обязуется самостоятельно предпринять все действия для
                                прекращения нарушения.
                                <br> 8.4. В случае блокировки в связи получением от третьих лиц претензии о нарушении Пользователем их прав, Пользователь вправе использовать в дальнейшем Бота только при соблюдении условия полного удаления информации и
                                (или) материалов, вызвавших претензии третьих лиц.
                                <br> 8.5. В случае блокировки в связи с получением требований от государственных органов, в том числе Роскомнадзора, разблокировка Бота не производится. 
                                <br> 8.6. Пользователь не вправе
                                публиковать на Платформе каким-либо способом Контент, размещенный в заблокированном Бота.
                                <br> 8.6. В случае отказа прекратить нарушение или неоднократных блокировок Ботов, Администрация вправе в одностороннем порядке удалить Аккаунт со всеми
                                Ботами, Контентом и данными.
                                <br> <strong>9. Тарифы </strong>
                                <br> 9.1. Виды Тарифов доступны по ссылке <a href="http://joinchat.us/ru#price">http://joinchat.us/ru#price</a>. 
                                <br> 9.2. Тарифы могут изменяться по одностороннему решению
                                Администрации. Стоимость оплаченного периода при этом изменению не подлежит.
                                <br> 9.3. После регистрации Пользователь вправе использовать Платформу на бесплатном Тарифе. Администрация может предоставить Пользователю пробный период на платном
                                Тарифе.
                                <br> 9.4. Для перехода на платный Тариф на постоянной основе Пользователь оплачивает его способами, предложенными функционалом Платформы. Переход между платными Тарифами возможен в случае оплаты стоимости нового Тарифа в полном объеме.

                                <br> 9.5. Оплата Тарифа осуществляется на условиях cтопроцентной предоплаты. 
                                <br> 9.6. Датой оплаты является дата зачисления денежных средств на расчетный счет Администрации. 
                                <br> 9.7. Обязательства по оплате считаются неисполненными в случае
                                возврата денежных средств по требованию платежной организации.
                                <br> 9.8. Размер тарифа складывается из лицензионного вознаграждения (90%) и стоимости услуг (10%). 
                                <br> 9.9. Неиспользование Пользователем услуг не освобождает Пользователя от их
                                оплаты.
                                <br> 9.10. По истечении срока действия Тарифа он автоматически продлевается на период, аналогичный предыдущему. Администрация осуществляет автоматическое списание соответствующей суммы с платежной карты Пользователя согласно действующим
                                Тарифам.
                                <br> 9.11. Пользователь вправе отменить функцию автоплатежа или уведомить Администрацию о нежелании продлевать платный Тариф не позднее чем за 3 (три) дня до окончания срока его действия. 
                                <br> 9.12. При переходе с платного Тарифа на
                                бесплатный Тариф Пользователь обязан привести Личный кабинет в соответствии с условиями, на которых предоставляется бесплатный Тариф.
                                <br> 9.13. При первой оплате Тарифа Пользователь дает Администрации и её партнёрам согласие на хранение
                                информации о его платежной карте и соглашается с тем, что Администрация уполномочена взимать плату с платежной карты для:
                                <br> a) реализации функции автоплатежа; 
                                <br> b) списания иных платежей, связанных с Соглашением; 
                                <br> c) погашения
                                задолженности Пользователя по Соглашению.
                                <br> 9.14. Условия оплаты банковской картой, банка партнера и другие условия оплаты размещены по адресу <a href="http://joinchat.us/ru/payment-terms">http://joinchat.us/ru/payment-terms</a>.
                                <br>
                                <strong>10. Права Администрации </strong>
                                <br> 10.1. Изменять, дорабатывать и обновлять Платформу без согласия и уведомления Пользователя. 
                                <br> 10.2. Устанавливать любые ограничения на использование Платформы. 
                                <br> 10.3. Удалять Аккаунт
                                Пользователя, который к моменту удаления в течение шести и более календарных месяцев:
                                <br> a) находится на бесплатном Тарифе; 
                                <br> b) не используется Пользователем. 
                                <br> 10.4. Направлять Пользователю сообщения, уведомления, запросы, сведения
                                рекламного и информационного характера.
                                <br> 10.5. Направлять Пользователю информацию о вебинарах, видео и другую информацию о Платформе. 
                                <br> 10.6. Самостоятельно размещать идентификатор «Powered by botmother» в Боте. 
                                <br> 10.7. Получать доступ
                                к Личному кабинету Пользователя для мониторинга работы Платформы.
                                <br> 10.8. Проводить профилактические работы, влекущие приостановление работы Платформы. 
                                <br> 10.9. Возвращать Пользователю доступ к Аккаунту в случае его взлома, утери или смены
                                логина/пароля при одновременном соблюдении следующих условий:
                                <br> a) аккаунт использовался на условиях платного Тарифа; 
                                <br> b) пользователь назвал достоверную информацию о платежной карте, с которой осуществлялась оплата Тарифа. 
                                <br> 10.10.
                                Возвращать под управление первоначального Пользователя Бота, переданный им на другой Аккаунт, в случае если:
                                <br> a) аккаунт используется на условиях платного Тарифа; 
                                <br> b) администрация посчитает действия Пользователя — получателя Бота
                                недобросовестными.
                                <br> <strong>11. Персональные данные </strong>
                                <br> 11.1. Платформа выполняет обработку персональных данных Пользователя в целях исполнения Соглашения согласно требованиям, установленным Федеральным законом «О персональных
                                данных» от 27.07.2006 N 152-ФЗ.
                                <br> 11.2. Порядок обработки и защита персональных данных определяется Политикой в области обработки и защиты персональных данных, расположенной по адресу <a href="http://joinchat.us/ru/privacy">http://joinchat.us/ru/privacy</a>.
                                <br>
                                11.3. Платформа не выполняет обработку персональных данных, собираемых Пользователем в Ботах, и лишь предоставляет вычислительные мощности, которые могут использоваться Пользователем для сбора персональных данных.
                                <br> 11.4. В случае
                                осуществления Пользователем обработки персональных данных третьих лиц, Пользователь самостоятельно несет ответственность за соблюдение надлежащих мер по защите персональных данных согласно требованиям 152-ФЗ и иных законов и подзаконных актов, в
                                том числе в части получения соответствующих разрешений, размещения в Боте необходимых документов и информации.
                                <br> <strong>12. Ответственность </strong>
                                <br> 12.1. Администрация не несет ответственности за прямую или косвенную упущенную выгоду
                                Пользователя.
                                <br> 12.2. Ответственность Администрации по Соглашению не может превышать стоимости оплаченного Пользователем Тарифа. 
                                <br> 12.3. В случае предъявления Администрации претензий, требований и/или исков о нарушении прав третьих лиц,
                                связанных с нарушением данных Пользователем гарантий, Пользователь принимает на себя обязательства по их урегулированию и возмещению ущерба Администрации в случае его возникновения.
                                <br> <strong>13. Срок Соглашения </strong>
                                <br> 13.1. Соглашение
                                действует с момент акцепта до момента удаления Аккаунта Пользователя.
                                <br> 13.2. Аккаунт может быть удален: 
                                <br> a) по заявке Пользователя; 
                                <br> b) по основаниям, предусмотренным разделом 8. 
                                <br> 13.3. В случае удаления Аккаунта с действующим
                                платным Тарифом, лицензионная часть вознаграждения возврату не подлежит. Пользователь вправе потребовать возврата за оплаченный, но не оказанный период оказания услуг.
                                <br> 13.4. После удаления Аккаунта Пользователь не вправе каким-либо образом
                                использовать Ботов, Блоки и Шаблоны.
                                <br> <strong>14. Разрешение споров и разногласий </strong>
                                <br> 14.1. Все споры или разногласия, возникающие между Сторонами в связи с исполнением Соглашения, разрешаются ими путем переговоров. 
                                <br> 14.2. При
                                недостижении Сторонами соглашения, споры и разногласия подлежат разрешению в претензионном порядке. Срок ответа на претензию — 30 дней.
                                <br> 14.3. При невозможности прийти к соглашению спор может быть передан на разрешение Арбитражного суда
                                Курской области.
                                <br> 14.4. Применимым правом является право Российской Федерации. 
                                <br> <strong>15. Заключительные положения </strong>
                                <br> 15.1. Соглашение может быть изменено или дополнено Администрацией без уведомления Пользователя в любое
                                время. Новая редакция Соглашения вступает в силу с момента ее размещения на Платформе.
                                <br> 15.2. Продолжение использования Платформы после внесения изменений и/или дополнений в Соглашение означает принятие и согласие Пользователя с такими
                                изменениями и/или дополнениями.
                                <br> 15.3. Соглашение регулируется и толкуется в соответствии с законодательством Российской Федерации. Вопросы, не урегулированные Соглашением, подлежат разрешению в соответствии с законодательством РФ. 
                                <br>
                                15.4. В случае, если какое-либо из положений Соглашения окажется ничтожным в соответствии с законодательством Российской Федерации, остальные положения останутся в силе, а Соглашение будет исполняться Сторонами в полном объеме без учета такого
                                положения.
                                <br> 15.5. Настоящее Соглашение составлено на русском языке и может предоставлено Пользователю для ознакомления на английском языке по адресу <a href="http://joinchat.us/en/terms">http://joinchat.us/en/terms</a>. В случае
                                расхождения русскоязычной версии Соглашения и версии Соглашения на ином языке, применяются положения русскоязычной версии Соглашения.
                                <br>
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
