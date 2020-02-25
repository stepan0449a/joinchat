<?php
//var_dump($_COOKIE);
header("Cache-Control: public");
header("Expires: " . date("r", time() + 120));
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
    <!-- assets/css/plugins/normalize.css -->
    <!-- assets/css/plugins/animate.css -->
    <!-- assets/css/plugins/odometer.css -->

    <!--assets/css/plugins/venobox.css-->
<!--    <link media="all" rel="stylesheet" href="assets/css/plugins/bootstrap.min.css" /> assets/css/plugins/bootstrap.min.css-->
    <!--    <link media="all" href="assets/css/plugins/owl.carousel.css" rel="stylesheet">-->
<!--    <link media="all" href="assets/css/plugins/stellarnav.min.css" rel="stylesheet">-->
    <!-- https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css --  integrity="sha256-916EbMg70RQy9LHiGkXzG8hSg9EdNy97GazNG/aiY1w=" crossorigin="anonymous" -->

<!--    <link media="all" href="assets/css/icons.css" rel="stylesheet">-->
    <style type="text/css" media="all">
        /*!
        * Bootstrap v3.3.7 (http://getbootstrap.com)
        * Copyright 2011-2016 Twitter, Inc.
        * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
        *//*! normalize.css v3.0.3 | MIT License | github.com/necolas/normalize.css */html{font-family:sans-serif;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%}body{margin:0}article,aside,details,figcaption,figure,footer,header,hgroup,main,menu,nav,section,summary{display:block}a{background-color:transparent}a:active,a:hover{outline:0}b,strong{font-weight:700}h1{margin:.67em 0;font-size:2em}img{border:0}svg:not(:root){overflow:hidden}button,input,optgroup,select,textarea{margin:0;font:inherit;color:inherit}button{overflow:visible}button,select{text-transform:none}button,html input[type=button],input[type=reset],input[type=submit]{-webkit-appearance:button;cursor:pointer}button[disabled],html input[disabled]{cursor:default}button::-moz-focus-inner,input::-moz-focus-inner{padding:0;border:0}input{line-height:normal}input[type=checkbox],input[type=radio]{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;padding:0}input[type=number]::-webkit-inner-spin-button,input[type=number]::-webkit-outer-spin-button{height:auto}input[type=search]{-webkit-box-sizing:content-box;-moz-box-sizing:content-box;box-sizing:content-box;-webkit-appearance:textfield}input[type=search]::-webkit-search-cancel-button,input[type=search]::-webkit-search-decoration{-webkit-appearance:none}fieldset{padding:.35em .625em .75em;margin:0 2px;border:1px solid silver}textarea{overflow:auto}table{border-spacing:0;border-collapse:collapse}td,th{padding:0}*{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}:after,:before{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}html{font-size:10px;-webkit-tap-highlight-color:transparent}body{font-family:"Helvetica Neue",Helvetica,Arial,sans-serif;font-size:14px;line-height:1.42857143;color:#333;background-color:#fff}button,input,select,textarea{font-family:inherit;font-size:inherit;line-height:inherit}a{color:#337ab7;text-decoration:none}a:focus,a:hover{color:#23527c;text-decoration:underline}a:focus{outline:5px auto -webkit-focus-ring-color;outline-offset:-2px}img{vertical-align:middle}.carousel-inner>.item>a>img,.carousel-inner>.item>img,.img-responsive,.thumbnail a>img,.thumbnail>img{display:block;max-width:100%;height:auto}.h1,.h2,.h3,.h4,.h5,.h6,h1,h2,h3,h4,h5,h6{font-family:inherit;font-weight:500;line-height:1.1;color:inherit}.h1 .small,.h1 small,.h2 .small,.h2 small,.h3 .small,.h3 small,.h4 .small,.h4 small,.h5 .small,.h5 small,.h6 .small,.h6 small,h1 .small,h1 small,h2 .small,h2 small,h3 .small,h3 small,h4 .small,h4 small,h5 .small,h5 small,h6 .small,h6 small{font-weight:400;line-height:1;color:#777}.h1,.h2,.h3,h1,h2,h3{margin-top:20px;margin-bottom:10px}.h1 .small,.h1 small,.h2 .small,.h2 small,.h3 .small,.h3 small,h1 .small,h1 small,h2 .small,h2 small,h3 .small,h3 small{font-size:65%}.h4,.h5,.h6,h4,h5,h6{margin-top:10px;margin-bottom:10px}.h4 .small,.h4 small,.h5 .small,.h5 small,.h6 .small,.h6 small,h4 .small,h4 small,h5 .small,h5 small,h6 .small,h6 small{font-size:75%}.h1,h1{font-size:36px}.h2,h2{font-size:30px}.h3,h3{font-size:24px}.h4,h4{font-size:18px}.h5,h5{font-size:14px}.h6,h6{font-size:12px}p{margin:0 0 10px}.text-left{text-align:left}.text-right{text-align:right}.text-center{text-align:center}.text-justify{text-align:justify}.text-nowrap{white-space:nowrap}.text-lowercase{text-transform:lowercase}.text-uppercase{text-transform:uppercase}.text-capitalize{text-transform:capitalize}ol,ul{margin-top:0;margin-bottom:10px}ol ol,ol ul,ul ol,ul ul{margin-bottom:0}.container{padding-right:15px;padding-left:15px;margin-right:auto;margin-left:auto}@media (min-width:768px){.container{width:750px}}@media (min-width:992px){.container{width:970px}}@media (min-width:1200px){.container{width:1170px}}.container-fluid{padding-right:15px;padding-left:15px;margin-right:auto;margin-left:auto}.row{margin-right:-15px;margin-left:-15px}.col-lg-1,.col-lg-10,.col-lg-11,.col-lg-12,.col-lg-2,.col-lg-3,.col-lg-4,.col-lg-5,.col-lg-6,.col-lg-7,.col-lg-8,.col-lg-9,.col-md-1,.col-md-10,.col-md-11,.col-md-12,.col-md-2,.col-md-3,.col-md-4,.col-md-5,.col-md-6,.col-md-7,.col-md-8,.col-md-9,.col-sm-1,.col-sm-10,.col-sm-11,.col-sm-12,.col-sm-2,.col-sm-3,.col-sm-4,.col-sm-5,.col-sm-6,.col-sm-7,.col-sm-8,.col-sm-9,.col-xs-1,.col-xs-10,.col-xs-11,.col-xs-12,.col-xs-2,.col-xs-3,.col-xs-4,.col-xs-5,.col-xs-6,.col-xs-7,.col-xs-8,.col-xs-9{position:relative;min-height:1px;padding-right:15px;padding-left:15px}.col-xs-1,.col-xs-10,.col-xs-11,.col-xs-12,.col-xs-2,.col-xs-3,.col-xs-4,.col-xs-5,.col-xs-6,.col-xs-7,.col-xs-8,.col-xs-9{float:left}.col-xs-12{width:100%}.col-xs-11{width:91.66666667%}.col-xs-10{width:83.33333333%}.col-xs-9{width:75%}.col-xs-8{width:66.66666667%}.col-xs-7{width:58.33333333%}.col-xs-6{width:50%}.col-xs-5{width:41.66666667%}.col-xs-4{width:33.33333333%}.col-xs-3{width:25%}.col-xs-2{width:16.66666667%}.col-xs-1{width:8.33333333%}@media (min-width:768px){.col-sm-1,.col-sm-10,.col-sm-11,.col-sm-12,.col-sm-2,.col-sm-3,.col-sm-4,.col-sm-5,.col-sm-6,.col-sm-7,.col-sm-8,.col-sm-9{float:left}.col-sm-12{width:100%}.col-sm-11{width:91.66666667%}.col-sm-10{width:83.33333333%}.col-sm-9{width:75%}.col-sm-8{width:66.66666667%}.col-sm-7{width:58.33333333%}.col-sm-6{width:50%}.col-sm-5{width:41.66666667%}.col-sm-4{width:33.33333333%}.col-sm-3{width:25%}.col-sm-2{width:16.66666667%}.col-sm-1{width:8.33333333%}.col-sm-pull-12{right:100%}.col-sm-pull-11{right:91.66666667%}.col-sm-pull-10{right:83.33333333%}.col-sm-pull-9{right:75%}.col-sm-pull-8{right:66.66666667%}.col-sm-pull-7{right:58.33333333%}.col-sm-pull-6{right:50%}.col-sm-pull-5{right:41.66666667%}.col-sm-pull-4{right:33.33333333%}.col-sm-pull-3{right:25%}.col-sm-pull-2{right:16.66666667%}.col-sm-pull-1{right:8.33333333%}.col-sm-pull-0{right:auto}.col-sm-push-12{left:100%}.col-sm-push-11{left:91.66666667%}.col-sm-push-10{left:83.33333333%}.col-sm-push-9{left:75%}.col-sm-push-8{left:66.66666667%}.col-sm-push-7{left:58.33333333%}.col-sm-push-6{left:50%}.col-sm-push-5{left:41.66666667%}.col-sm-push-4{left:33.33333333%}.col-sm-push-3{left:25%}.col-sm-push-2{left:16.66666667%}.col-sm-push-1{left:8.33333333%}.col-sm-push-0{left:auto}}@media (min-width:992px){.col-md-1,.col-md-10,.col-md-11,.col-md-12,.col-md-2,.col-md-3,.col-md-4,.col-md-5,.col-md-6,.col-md-7,.col-md-8,.col-md-9{float:left}.col-md-12{width:100%}.col-md-11{width:91.66666667%}.col-md-10{width:83.33333333%}.col-md-9{width:75%}.col-md-8{width:66.66666667%}.col-md-7{width:58.33333333%}.col-md-6{width:50%}.col-md-5{width:41.66666667%}.col-md-4{width:33.33333333%}.col-md-3{width:25%}.col-md-2{width:16.66666667%}.col-md-1{width:8.33333333%}}@media (min-width:1200px){.col-lg-1,.col-lg-10,.col-lg-11,.col-lg-12,.col-lg-2,.col-lg-3,.col-lg-4,.col-lg-5,.col-lg-6,.col-lg-7,.col-lg-8,.col-lg-9{float:left}.col-lg-12{width:100%}.col-lg-11{width:91.66666667%}.col-lg-10{width:83.33333333%}.col-lg-9{width:75%}.col-lg-8{width:66.66666667%}.col-lg-7{width:58.33333333%}.col-lg-6{width:50%}.col-lg-5{width:41.66666667%}.col-lg-4{width:33.33333333%}.col-lg-3{width:25%}.col-lg-2{width:16.66666667%}.col-lg-1{width:8.33333333%}}table{background-color:transparent}caption{padding-top:8px;padding-bottom:8px;color:#777;text-align:left}th{text-align:left}label{display:inline-block;max-width:100%;margin-bottom:5px;font-weight:700}input[type=search]{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}input[type=checkbox],input[type=radio]{margin:4px 0 0;line-height:normal}input[type=file]{display:block}input[type=range]{display:block;width:100%}select[multiple],select[size]{height:auto}input[type=checkbox]:focus,input[type=file]:focus,input[type=radio]:focus{outline:5px auto -webkit-focus-ring-color;outline-offset:-2px}output{display:block;padding-top:7px;font-size:14px;line-height:1.42857143;color:#555}.form-control{display:block;width:100%;height:34px;padding:6px 12px;font-size:14px;line-height:1.42857143;color:#555;background-color:#fff;background-image:none;border:1px solid #ccc;border-radius:4px;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.075);box-shadow:inset 0 1px 1px rgba(0,0,0,.075);-webkit-transition:border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;-o-transition:border-color ease-in-out .15s,box-shadow ease-in-out .15s;transition:border-color ease-in-out .15s,box-shadow ease-in-out .15s}.form-control:focus{border-color:#66afe9;outline:0;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgba(102,175,233,.6);box-shadow:inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgba(102,175,233,.6)}.form-control::-moz-placeholder{color:#999;opacity:1}.form-control:-ms-input-placeholder{color:#999}.form-control::-webkit-input-placeholder{color:#999}.form-control::-ms-expand{background-color:transparent;border:0}.form-control[disabled],.form-control[readonly],fieldset[disabled] .form-control{background-color:#eee;opacity:1}.form-control[disabled],fieldset[disabled] .form-control{cursor:not-allowed}textarea.form-control{height:auto}input[type=search]{-webkit-appearance:none}@media screen and (-webkit-min-device-pixel-ratio:0){input[type=date].form-control,input[type=datetime-local].form-control,input[type=month].form-control,input[type=time].form-control{line-height:34px}.input-group-sm input[type=date],.input-group-sm input[type=datetime-local],.input-group-sm input[type=month],.input-group-sm input[type=time],input[type=date].input-sm,input[type=datetime-local].input-sm,input[type=month].input-sm,input[type=time].input-sm{line-height:30px}.input-group-lg input[type=date],.input-group-lg input[type=datetime-local],.input-group-lg input[type=month],.input-group-lg input[type=time],input[type=date].input-lg,input[type=datetime-local].input-lg,input[type=month].input-lg,input[type=time].input-lg{line-height:46px}}.form-group{margin-bottom:15px}.checkbox,.radio{position:relative;display:block;margin-top:10px;margin-bottom:10px}.checkbox label,.radio label{min-height:20px;padding-left:20px;margin-bottom:0;font-weight:400;cursor:pointer}.checkbox input[type=checkbox],.checkbox-inline input[type=checkbox],.radio input[type=radio],.radio-inline input[type=radio]{position:absolute;margin-left:-20px}.checkbox+.checkbox,.radio+.radio{margin-top:-5px}.checkbox-inline,.radio-inline{position:relative;display:inline-block;padding-left:20px;margin-bottom:0;font-weight:400;vertical-align:middle;cursor:pointer}.checkbox-inline+.checkbox-inline,.radio-inline+.radio-inline{margin-top:0;margin-left:10px}fieldset[disabled] input[type=checkbox],fieldset[disabled] input[type=radio],input[type=checkbox].disabled,input[type=checkbox][disabled],input[type=radio].disabled,input[type=radio][disabled]{cursor:not-allowed}.checkbox-inline.disabled,.radio-inline.disabled,fieldset[disabled] .checkbox-inline,fieldset[disabled] .radio-inline{cursor:not-allowed}.checkbox.disabled label,.radio.disabled label,fieldset[disabled] .checkbox label,fieldset[disabled] .radio label{cursor:not-allowed}.form-control-static{min-height:34px;padding-top:7px;padding-bottom:7px;margin-bottom:0}.form-control-static.input-lg,.form-control-static.input-sm{padding-right:0;padding-left:0}.input-sm{height:30px;padding:5px 10px;font-size:12px;line-height:1.5;border-radius:3px}select.input-sm{height:30px;line-height:30px}select[multiple].input-sm,textarea.input-sm{height:auto}.form-group-sm .form-control{height:30px;padding:5px 10px;font-size:12px;line-height:1.5;border-radius:3px}.form-group-sm select.form-control{height:30px;line-height:30px}.form-group-sm select[multiple].form-control,.form-group-sm textarea.form-control{height:auto}.form-group-sm .form-control-static{height:30px;min-height:32px;padding:6px 10px;font-size:12px;line-height:1.5}.input-lg{height:46px;padding:10px 16px;font-size:18px;line-height:1.3333333;border-radius:6px}select.input-lg{height:46px;line-height:46px}select[multiple].input-lg,textarea.input-lg{height:auto}.form-group-lg .form-control{height:46px;padding:10px 16px;font-size:18px;line-height:1.3333333;border-radius:6px}.form-group-lg select.form-control{height:46px;line-height:46px}.form-group-lg select[multiple].form-control,.form-group-lg textarea.form-control{height:auto}.form-group-lg .form-control-static{height:46px;min-height:38px;padding:11px 16px;font-size:18px;line-height:1.3333333}.has-feedback{position:relative}.has-feedback .form-control{padding-right:42.5px}.form-control-feedback{position:absolute;top:0;right:0;z-index:2;display:block;width:34px;height:34px;line-height:34px;text-align:center;pointer-events:none}.form-group-lg .form-control+.form-control-feedback,.input-group-lg+.form-control-feedback,.input-lg+.form-control-feedback{width:46px;height:46px;line-height:46px}.form-group-sm .form-control+.form-control-feedback,.input-group-sm+.form-control-feedback,.input-sm+.form-control-feedback{width:30px;height:30px;line-height:30px}.fade{opacity:0;-webkit-transition:opacity .15s linear;-o-transition:opacity .15s linear;transition:opacity .15s linear}.fade.in{opacity:1}.collapse{display:none}.collapse.in{display:block}tr.collapse.in{display:table-row}tbody.collapse.in{display:table-row-group}.collapsing{position:relative;height:0;overflow:hidden;-webkit-transition-timing-function:ease;-o-transition-timing-function:ease;transition-timing-function:ease;-webkit-transition-duration:.35s;-o-transition-duration:.35s;transition-duration:.35s;-webkit-transition-property:height,visibility;-o-transition-property:height,visibility;transition-property:height,visibility}.caret{display:inline-block;width:0;height:0;margin-left:2px;vertical-align:middle;border-top:4px dashed;border-right:4px solid transparent;border-left:4px solid transparent}.btn .caret{margin-left:0}.btn-lg .caret{border-width:5px 5px 0;border-bottom-width:0}.dropup .btn-lg .caret{border-width:0 5px 5px}.btn-group-vertical>.btn,.btn-group-vertical>.btn-group,.btn-group-vertical>.btn-group>.btn{display:block;float:none;width:100%;max-width:100%}.btn-group-vertical>.btn-group>.btn{float:none}.btn-group-vertical>.btn+.btn,.btn-group-vertical>.btn+.btn-group,.btn-group-vertical>.btn-group+.btn,.btn-group-vertical>.btn-group+.btn-group{margin-top:-1px;margin-left:0}.btn-group-vertical>.btn:not(:first-child):not(:last-child){border-radius:0}.btn-group-vertical>.btn:first-child:not(:last-child){border-top-left-radius:4px;border-top-right-radius:4px;border-bottom-right-radius:0;border-bottom-left-radius:0}.btn-group-vertical>.btn:last-child:not(:first-child){border-top-left-radius:0;border-top-right-radius:0;border-bottom-right-radius:4px;border-bottom-left-radius:4px}.btn-group-vertical>.btn-group:not(:first-child):not(:last-child)>.btn{border-radius:0}.btn-group-vertical>.btn-group:first-child:not(:last-child)>.btn:last-child,.btn-group-vertical>.btn-group:first-child:not(:last-child)>.dropdown-toggle{border-bottom-right-radius:0;border-bottom-left-radius:0}.btn-group-vertical>.btn-group:last-child:not(:first-child)>.btn:first-child{border-top-left-radius:0;border-top-right-radius:0}.btn-group-justified{display:table;width:100%;table-layout:fixed;border-collapse:separate}.btn-group-justified>.btn,.btn-group-justified>.btn-group{display:table-cell;float:none;width:1%}.btn-group-justified>.btn-group .btn{width:100%}.btn-group-justified>.btn-group .dropdown-menu{left:auto}[data-toggle=buttons]>.btn input[type=checkbox],[data-toggle=buttons]>.btn input[type=radio],[data-toggle=buttons]>.btn-group>.btn input[type=checkbox],[data-toggle=buttons]>.btn-group>.btn input[type=radio]{position:absolute;clip:rect(0,0,0,0);pointer-events:none}.input-group{position:relative;display:table;border-collapse:separate}.input-group[class*=col-]{float:none;padding-right:0;padding-left:0}.input-group .form-control{position:relative;z-index:2;float:left;width:100%;margin-bottom:0}.input-group .form-control:focus{z-index:3}.input-group-lg>.form-control,.input-group-lg>.input-group-addon,.input-group-lg>.input-group-btn>.btn{height:46px;padding:10px 16px;font-size:18px;line-height:1.3333333;border-radius:6px}select.input-group-lg>.form-control,select.input-group-lg>.input-group-addon,select.input-group-lg>.input-group-btn>.btn{height:46px;line-height:46px}select[multiple].input-group-lg>.form-control,select[multiple].input-group-lg>.input-group-addon,select[multiple].input-group-lg>.input-group-btn>.btn,textarea.input-group-lg>.form-control,textarea.input-group-lg>.input-group-addon,textarea.input-group-lg>.input-group-btn>.btn{height:auto}.input-group-sm>.form-control,.input-group-sm>.input-group-addon,.input-group-sm>.input-group-btn>.btn{height:30px;padding:5px 10px;font-size:12px;line-height:1.5;border-radius:3px}select.input-group-sm>.form-control,select.input-group-sm>.input-group-addon,select.input-group-sm>.input-group-btn>.btn{height:30px;line-height:30px}select[multiple].input-group-sm>.form-control,select[multiple].input-group-sm>.input-group-addon,select[multiple].input-group-sm>.input-group-btn>.btn,textarea.input-group-sm>.form-control,textarea.input-group-sm>.input-group-addon,textarea.input-group-sm>.input-group-btn>.btn{height:auto}.input-group .form-control,.input-group-addon,.input-group-btn{display:table-cell}.input-group .form-control:not(:first-child):not(:last-child),.input-group-addon:not(:first-child):not(:last-child),.input-group-btn:not(:first-child):not(:last-child){border-radius:0}.input-group-addon,.input-group-btn{width:1%;white-space:nowrap;vertical-align:middle}.input-group-addon{padding:6px 12px;font-size:14px;font-weight:400;line-height:1;color:#555;text-align:center;background-color:#eee;border:1px solid #ccc;border-radius:4px}.input-group-addon.input-sm{padding:5px 10px;font-size:12px;border-radius:3px}.input-group-addon.input-lg{padding:10px 16px;font-size:18px;border-radius:6px}.input-group-addon input[type=checkbox],.input-group-addon input[type=radio]{margin-top:0}.input-group .form-control:first-child,.input-group-addon:first-child,.input-group-btn:first-child>.btn,.input-group-btn:first-child>.btn-group>.btn,.input-group-btn:first-child>.dropdown-toggle,.input-group-btn:last-child>.btn-group:not(:last-child)>.btn,.input-group-btn:last-child>.btn:not(:last-child):not(.dropdown-toggle){border-top-right-radius:0;border-bottom-right-radius:0}.input-group-addon:first-child{border-right:0}.input-group .form-control:last-child,.input-group-addon:last-child,.input-group-btn:first-child>.btn-group:not(:first-child)>.btn,.input-group-btn:first-child>.btn:not(:first-child),.input-group-btn:last-child>.btn,.input-group-btn:last-child>.btn-group>.btn,.input-group-btn:last-child>.dropdown-toggle{border-top-left-radius:0;border-bottom-left-radius:0}.input-group-addon:last-child{border-left:0}.input-group-btn{position:relative;font-size:0;white-space:nowrap}.input-group-btn>.btn{position:relative}.input-group-btn>.btn+.btn{margin-left:-1px}.input-group-btn>.btn:active,.input-group-btn>.btn:focus,.input-group-btn>.btn:hover{z-index:2}.input-group-btn:first-child>.btn,.input-group-btn:first-child>.btn-group{margin-right:-1px}.input-group-btn:last-child>.btn,.input-group-btn:last-child>.btn-group{z-index:2;margin-left:-1px}.nav{padding-left:0;margin-bottom:0;list-style:none}.nav>li{position:relative;display:block}.nav>li>a{position:relative;display:block;padding:10px 15px}.nav>li>a:focus,.nav>li>a:hover{text-decoration:none;background-color:#eee}.nav>li.disabled>a{color:#777}.nav>li.disabled>a:focus,.nav>li.disabled>a:hover{color:#777;text-decoration:none;cursor:not-allowed;background-color:transparent}.nav .open>a,.nav .open>a:focus,.nav .open>a:hover{background-color:#eee;border-color:#337ab7}.nav .nav-divider{height:1px;margin:9px 0;overflow:hidden;background-color:#e5e5e5}.nav>li>a>img{max-width:none}.nav-tabs{border-bottom:1px solid #ddd}.nav-tabs>li{float:left;margin-bottom:-1px}.nav-tabs>li>a{margin-right:2px;line-height:1.42857143;border:1px solid transparent;border-radius:4px 4px 0 0}.nav-tabs>li>a:hover{border-color:#eee #eee #ddd}.nav-tabs>li.active>a,.nav-tabs>li.active>a:focus,.nav-tabs>li.active>a:hover{color:#555;cursor:default;background-color:#fff;border:1px solid #ddd;border-bottom-color:transparent}.nav-tabs.nav-justified{width:100%;border-bottom:0}.nav-tabs.nav-justified>li{float:none}.nav-tabs.nav-justified>li>a{margin-bottom:5px;text-align:center}.nav-tabs.nav-justified>.dropdown .dropdown-menu{top:auto;left:auto}@media (min-width:768px){.nav-tabs.nav-justified>li{display:table-cell;width:1%}.nav-tabs.nav-justified>li>a{margin-bottom:0}}.nav-tabs.nav-justified>li>a{margin-right:0;border-radius:4px}.nav-tabs.nav-justified>.active>a,.nav-tabs.nav-justified>.active>a:focus,.nav-tabs.nav-justified>.active>a:hover{border:1px solid #ddd}@media (min-width:768px){.nav-tabs.nav-justified>li>a{border-bottom:1px solid #ddd;border-radius:4px 4px 0 0}.nav-tabs.nav-justified>.active>a,.nav-tabs.nav-justified>.active>a:focus,.nav-tabs.nav-justified>.active>a:hover{border-bottom-color:#fff}}.nav-pills>li{float:left}.nav-pills>li>a{border-radius:4px}.nav-pills>li+li{margin-left:2px}.nav-pills>li.active>a,.nav-pills>li.active>a:focus,.nav-pills>li.active>a:hover{color:#fff;background-color:#337ab7}.nav-stacked>li{float:none}.nav-stacked>li+li{margin-top:2px;margin-left:0}.nav-justified{width:100%}.nav-justified>li{float:none}.nav-justified>li>a{margin-bottom:5px;text-align:center}.nav-justified>.dropdown .dropdown-menu{top:auto;left:auto}@media (min-width:768px){.nav-justified>li{display:table-cell;width:1%}.nav-justified>li>a{margin-bottom:0}}.nav-tabs-justified{border-bottom:0}.nav-tabs-justified>li>a{margin-right:0;border-radius:4px}.nav-tabs-justified>.active>a,.nav-tabs-justified>.active>a:focus,.nav-tabs-justified>.active>a:hover{border:1px solid #ddd}@media (min-width:768px){.nav-tabs-justified>li>a{border-bottom:1px solid #ddd;border-radius:4px 4px 0 0}.nav-tabs-justified>.active>a,.nav-tabs-justified>.active>a:focus,.nav-tabs-justified>.active>a:hover{border-bottom-color:#fff}}.tab-content>.tab-pane{display:none}.tab-content>.active{display:block}.nav-tabs .dropdown-menu{margin-top:-1px;border-top-left-radius:0;border-top-right-radius:0}.navbar{position:relative;min-height:50px;margin-bottom:20px;border:1px solid transparent}@media (min-width:768px){.navbar{border-radius:4px}}@media (min-width:768px){.navbar-header{float:left}}.navbar-collapse{padding-right:15px;padding-left:15px;overflow-x:visible;-webkit-overflow-scrolling:touch;border-top:1px solid transparent;-webkit-box-shadow:inset 0 1px 0 rgba(255,255,255,.1);box-shadow:inset 0 1px 0 rgba(255,255,255,.1)}.navbar-collapse.in{overflow-y:auto}@media (min-width:768px){.navbar-collapse{width:auto;border-top:0;-webkit-box-shadow:none;box-shadow:none}.navbar-collapse.collapse{display:block!important;height:auto!important;padding-bottom:0;overflow:visible!important}.navbar-collapse.in{overflow-y:visible}.navbar-fixed-bottom .navbar-collapse,.navbar-fixed-top .navbar-collapse,.navbar-static-top .navbar-collapse{padding-right:0;padding-left:0}}.navbar-fixed-bottom .navbar-collapse,.navbar-fixed-top .navbar-collapse{max-height:340px}@media (max-device-width:480px) and (orientation:landscape){.navbar-fixed-bottom .navbar-collapse,.navbar-fixed-top .navbar-collapse{max-height:200px}}.container-fluid>.navbar-collapse,.container-fluid>.navbar-header,.container>.navbar-collapse,.container>.navbar-header{margin-right:-15px;margin-left:-15px}@media (min-width:768px){.container-fluid>.navbar-collapse,.container-fluid>.navbar-header,.container>.navbar-collapse,.container>.navbar-header{margin-right:0;margin-left:0}}.navbar-static-top{z-index:1000;border-width:0 0 1px}@media (min-width:768px){.navbar-static-top{border-radius:0}}.navbar-fixed-bottom,.navbar-fixed-top{position:fixed;right:0;left:0;z-index:1030}@media (min-width:768px){.navbar-fixed-bottom,.navbar-fixed-top{border-radius:0}}.navbar-fixed-top{top:0;border-width:0 0 1px}.navbar-fixed-bottom{bottom:0;margin-bottom:0;border-width:1px 0 0}.navbar-brand{float:left;height:50px;padding:15px 15px;font-size:18px;line-height:20px}.navbar-brand:focus,.navbar-brand:hover{text-decoration:none}.navbar-brand>img{display:block}@media (min-width:768px){.navbar>.container .navbar-brand,.navbar>.container-fluid .navbar-brand{margin-left:-15px}}.navbar-toggle{position:relative;float:right;padding:9px 10px;margin-top:8px;margin-right:15px;margin-bottom:8px;background-color:transparent;background-image:none;border:1px solid transparent;border-radius:4px}.navbar-toggle:focus{outline:0}.navbar-toggle .icon-bar{display:block;width:22px;height:2px;border-radius:1px}.navbar-toggle .icon-bar+.icon-bar{margin-top:4px}@media (min-width:768px){.navbar-toggle{display:none}}.navbar-nav{margin:7.5px -15px}.navbar-nav>li>a{padding-top:10px;padding-bottom:10px;line-height:20px}@media (max-width:767px){.navbar-nav .open .dropdown-menu{position:static;float:none;width:auto;margin-top:0;background-color:transparent;border:0;-webkit-box-shadow:none;box-shadow:none}.navbar-nav .open .dropdown-menu .dropdown-header,.navbar-nav .open .dropdown-menu>li>a{padding:5px 15px 5px 25px}.navbar-nav .open .dropdown-menu>li>a{line-height:20px}.navbar-nav .open .dropdown-menu>li>a:focus,.navbar-nav .open .dropdown-menu>li>a:hover{background-image:none}}@media (min-width:768px){.navbar-nav{float:left;margin:0}.navbar-nav>li{float:left}.navbar-nav>li>a{padding-top:15px;padding-bottom:15px}}.label{display:inline;padding:.2em .6em .3em;font-size:75%;font-weight:700;line-height:1;color:#fff;text-align:center;white-space:nowrap;vertical-align:baseline;border-radius:.25em}a.label:focus,a.label:hover{color:#fff;text-decoration:none;cursor:pointer}.label:empty{display:none}.btn .label{position:relative;top:-1px}.label-default{background-color:#777}.label-default[href]:focus,.label-default[href]:hover{background-color:#5e5e5e}.label-primary{background-color:#337ab7}.label-primary[href]:focus,.label-primary[href]:hover{background-color:#286090}.label-success{background-color:#5cb85c}.label-success[href]:focus,.label-success[href]:hover{background-color:#449d44}.label-info{background-color:#5bc0de}.label-info[href]:focus,.label-info[href]:hover{background-color:#31b0d5}.label-warning{background-color:#f0ad4e}.label-warning[href]:focus,.label-warning[href]:hover{background-color:#ec971f}.label-danger{background-color:#d9534f}.label-danger[href]:focus,.label-danger[href]:hover{background-color:#c9302c}.panel{margin-bottom:20px;background-color:#fff;border:1px solid transparent;border-radius:4px;-webkit-box-shadow:0 1px 1px rgba(0,0,0,.05);box-shadow:0 1px 1px rgba(0,0,0,.05)}.panel-body{padding:15px}.panel-heading{padding:10px 15px;border-bottom:1px solid transparent;border-top-left-radius:3px;border-top-right-radius:3px}.panel-heading>.dropdown .dropdown-toggle{color:inherit}.panel-title{margin-top:0;margin-bottom:0;font-size:16px;color:inherit}.panel>.table-responsive{margin-bottom:0;border:0}.panel-group{margin-bottom:20px}.panel-group .panel{margin-bottom:0;border-radius:4px}.panel-group .panel+.panel{margin-top:5px}.panel-group .panel-heading{border-bottom:0}.panel-group .panel-heading+.panel-collapse>.list-group,.panel-group .panel-heading+.panel-collapse>.panel-body{border-top:1px solid #ddd}.panel-group .panel-footer{border-top:0}.panel-group .panel-footer+.panel-collapse .panel-body{border-bottom:1px solid #ddd}.panel-default{border-color:#ddd}.panel-default>.panel-heading{color:#333;background-color:#f5f5f5;border-color:#ddd}.panel-default>.panel-heading+.panel-collapse>.panel-body{border-top-color:#ddd}.panel-default>.panel-heading .badge{color:#f5f5f5;background-color:#333}.panel-default>.panel-footer+.panel-collapse>.panel-body{border-bottom-color:#ddd}.panel-primary{border-color:#337ab7}.panel-primary>.panel-heading{color:#fff;background-color:#337ab7;border-color:#337ab7}.panel-primary>.panel-heading+.panel-collapse>.panel-body{border-top-color:#337ab7}.panel-primary>.panel-heading .badge{color:#337ab7;background-color:#fff}.panel-primary>.panel-footer+.panel-collapse>.panel-body{border-bottom-color:#337ab7}.panel-success{border-color:#d6e9c6}.panel-success>.panel-heading{color:#3c763d;background-color:#dff0d8;border-color:#d6e9c6}.panel-success>.panel-heading+.panel-collapse>.panel-body{border-top-color:#d6e9c6}.panel-success>.panel-heading .badge{color:#dff0d8;background-color:#3c763d}.panel-success>.panel-footer+.panel-collapse>.panel-body{border-bottom-color:#d6e9c6}.panel-info{border-color:#bce8f1}.panel-info>.panel-heading{color:#31708f;background-color:#d9edf7;border-color:#bce8f1}.panel-info>.panel-heading+.panel-collapse>.panel-body{border-top-color:#bce8f1}.panel-info>.panel-heading .badge{color:#d9edf7;background-color:#31708f}.panel-info>.panel-footer+.panel-collapse>.panel-body{border-bottom-color:#bce8f1}.panel-warning{border-color:#faebcc}.panel-warning>.panel-heading{color:#8a6d3b;background-color:#fcf8e3;border-color:#faebcc}.panel-warning>.panel-heading+.panel-collapse>.panel-body{border-top-color:#faebcc}.panel-warning>.panel-heading .badge{color:#fcf8e3;background-color:#8a6d3b}.panel-warning>.panel-footer+.panel-collapse>.panel-body{border-bottom-color:#faebcc}.panel-danger{border-color:#ebccd1}.panel-danger>.panel-heading{color:#a94442;background-color:#f2dede;border-color:#ebccd1}.panel-danger>.panel-heading+.panel-collapse>.panel-body{border-top-color:#ebccd1}.panel-danger>.panel-heading .badge{color:#f2dede;background-color:#a94442}.panel-danger>.panel-footer+.panel-collapse>.panel-body{border-bottom-color:#ebccd1}.embed-responsive{position:relative;display:block;height:0;padding:0;overflow:hidden}.embed-responsive .embed-responsive-item,.embed-responsive embed,.embed-responsive iframe,.embed-responsive object,.embed-responsive video{position:absolute;top:0;bottom:0;left:0;width:100%;height:100%;border:0}.embed-responsive-16by9{padding-bottom:56.25%}.embed-responsive-4by3{padding-bottom:75%}.well{min-height:20px;padding:19px;margin-bottom:20px;background-color:#f5f5f5;border:1px solid #e3e3e3;border-radius:4px;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.05);box-shadow:inset 0 1px 1px rgba(0,0,0,.05)}.well blockquote{border-color:#ddd;border-color:rgba(0,0,0,.15)}.well-lg{padding:24px;border-radius:6px}.well-sm{padding:9px;border-radius:3px}.close{float:right;font-size:21px;font-weight:700;line-height:1;color:#000;text-shadow:0 1px 0 #fff;opacity:.2}.close:focus,.close:hover{color:#000;text-decoration:none;cursor:pointer;opacity:.5}button.close{-webkit-appearance:none;padding:0;cursor:pointer;background:0 0;border:0}.btn-group-vertical>.btn-group:after,.btn-group-vertical>.btn-group:before,.btn-toolbar:after,.btn-toolbar:before,.clearfix:after,.clearfix:before,.container-fluid:after,.container-fluid:before,.container:after,.container:before,.dl-horizontal dd:after,.dl-horizontal dd:before,.form-horizontal .form-group:after,.form-horizontal .form-group:before,.modal-footer:after,.modal-footer:before,.modal-header:after,.modal-header:before,.nav:after,.nav:before,.navbar-collapse:after,.navbar-collapse:before,.navbar-header:after,.navbar-header:before,.navbar:after,.navbar:before,.pager:after,.pager:before,.panel-body:after,.panel-body:before,.row:after,.row:before{display:table;content:" "}.btn-group-vertical>.btn-group:after,.btn-toolbar:after,.clearfix:after,.container-fluid:after,.container:after,.dl-horizontal dd:after,.form-horizontal .form-group:after,.modal-footer:after,.modal-header:after,.nav:after,.navbar-collapse:after,.navbar-header:after,.navbar:after,.pager:after,.panel-body:after,.row:after{clear:both}.center-block{display:block;margin-right:auto;margin-left:auto}.pull-right{float:right!important}.pull-left{float:left!important}.hide{display:none!important}.show{display:block!important}.invisible{visibility:hidden}.text-hide{font:0/0 a;color:transparent;text-shadow:none;background-color:transparent;border:0}.hidden{display:none!important}.affix{position:fixed}@-ms-viewport{width:device-width}.visible-lg,.visible-md,.visible-sm,.visible-xs{display:none!important}.visible-lg-block,.visible-lg-inline,.visible-lg-inline-block,.visible-md-block,.visible-md-inline,.visible-md-inline-block,.visible-sm-block,.visible-sm-inline,.visible-sm-inline-block,.visible-xs-block,.visible-xs-inline,.visible-xs-inline-block{display:none!important}@media (max-width:767px){.visible-xs{display:block!important}table.visible-xs{display:table!important}tr.visible-xs{display:table-row!important}td.visible-xs,th.visible-xs{display:table-cell!important}}@media (max-width:767px){.visible-xs-block{display:block!important}}@media (max-width:767px){.visible-xs-inline{display:inline!important}}@media (max-width:767px){.visible-xs-inline-block{display:inline-block!important}}@media (min-width:768px) and (max-width:991px){.visible-sm{display:block!important}table.visible-sm{display:table!important}tr.visible-sm{display:table-row!important}td.visible-sm,th.visible-sm{display:table-cell!important}}@media (min-width:768px) and (max-width:991px){.visible-sm-block{display:block!important}}@media (min-width:768px) and (max-width:991px){.visible-sm-inline{display:inline!important}}@media (min-width:768px) and (max-width:991px){.visible-sm-inline-block{display:inline-block!important}}@media (min-width:992px) and (max-width:1199px){.visible-md{display:block!important}table.visible-md{display:table!important}tr.visible-md{display:table-row!important}td.visible-md,th.visible-md{display:table-cell!important}}@media (min-width:992px) and (max-width:1199px){.visible-md-block{display:block!important}}@media (min-width:992px) and (max-width:1199px){.visible-md-inline{display:inline!important}}@media (min-width:992px) and (max-width:1199px){.visible-md-inline-block{display:inline-block!important}}@media (min-width:1200px){.visible-lg{display:block!important}table.visible-lg{display:table!important}tr.visible-lg{display:table-row!important}td.visible-lg,th.visible-lg{display:table-cell!important}}@media (min-width:1200px){.visible-lg-block{display:block!important}}@media (min-width:1200px){.visible-lg-inline{display:inline!important}}@media (min-width:1200px){.visible-lg-inline-block{display:inline-block!important}}@media (max-width:767px){.hidden-xs{display:none!important}}@media (min-width:768px) and (max-width:991px){.hidden-sm{display:none!important}}@media (min-width:992px) and (max-width:1199px){.hidden-md{display:none!important}}@media (min-width:1200px){.hidden-lg{display:none!important}}.visible-print{display:none!important}@media print{.visible-print{display:block!important}table.visible-print{display:table!important}tr.visible-print{display:table-row!important}td.visible-print,th.visible-print{display:table-cell!important}}.visible-print-block{display:none!important}@media print{.visible-print-block{display:block!important}}.visible-print-inline{display:none!important}@media print{.visible-print-inline{display:inline!important}}.visible-print-inline-block{display:none!important}@media print{.visible-print-inline-block{display:inline-block!important}}@media print{.hidden-print{display:none!important}}
        .stellarnav,.stellarnav li {position: relative;line-height: normal}.stellarnav {width: 100%;z-index: 9900}.stellarnav ul {margin: 0;padding: 0;text-align: center}.stellarnav li {list-style: none;display: block;margin: 0;padding: 0;vertical-align: middle}.stellarnav li a {padding: 15px;display: block;text-decoration: none;color: #777;font-size: inherit;font-family: inherit;-webkit-box-sizing: border-box;box-sizing: border-box;-webkit-transition: all .3s ease-out;transition: all .3s ease-out}.stellarnav > ul > li {display: inline-block}.stellarnav > ul > li > a {padding: 20px 40px}.stellarnav ul ul {top: auto;width: 220px;position: absolute;z-index: 9900;text-align: left;display: none;background: #ddd}.stellarnav li li {display: block}.stellarnav ul ul ul {top: 0;left: 220px}.stellarnav > ul > li:hover > ul > li:hover > ul {opacity: 1;visibility: visible;top: 0}.stellarnav > ul > li.drop-left > ul {right: 0}.stellarnav li.drop-left ul ul {left: auto;right: 220px}.stellarnav.light,.stellarnav.light ul ul {background: rgba(255, 255, 255, 1)}.stellarnav.light li a {color: #000}.stellarnav.light .call-btn-mobile,.stellarnav.light .close-menu,.stellarnav.light .location-btn-mobile,.stellarnav.light .menu-toggle {color: rgba(0, 0, 0, 1)}.stellarnav.dark,.stellarnav.dark ul ul {background: rgba(0, 0, 0, 1)}.stellarnav.dark li a {color: #FFF}.stellarnav.dark .call-btn-mobile,.stellarnav.dark .close-menu,.stellarnav.dark .location-btn-mobile,.stellarnav.dark .menu-toggle {color: rgba(255, 255, 255, 1)}.stellarnav.fixed {position: fixed;width: 100%;top: 0;left: 0;z-index: 9999}body.stellarnav-noscroll-x {overflow-x: hidden}/*.stellarnav li.has-sub > a:after {content: '\f0d7';font-family: FontAwesome;margin-left: 10px}*/.stellarnav li.has-sub > a:after {content: "\e61a";font-family: themify;margin-left: 5px;font-size: 10px;}.stellarnav li li.has-sub > a:after {content: '\f0da';font-family: FontAwesome;margin-left: 10px}.stellarnav li.drop-left li.has-sub > a:after {float: left;content: '\f0d9';font-family: FontAwesome;margin-right: 10px}.stellarnav.hide-arrows li li.has-sub > a:after,.stellarnav.hide-arrows li.drop-left li.has-sub > a:after,.stellarnav.hide-arrows li.has-sub > a:after {display: none}.stellarnav .dd-toggle {display: none;position: absolute;top: 0;right: 0;padding: 0;width: 48px;height: 48px;text-align: center;z-index: 9999;border: 0}.stellarnav .dd-toggle i {position: absolute;margin: auto;top: 33%;left: 0;right: 0;-webkit-transition: transform .3s ease-out;-webkit-transition: -webkit-transform .3s ease-out;transition: -webkit-transform .3s ease-out;transition: transform .3s ease-out;transition: transform .3s ease-out, -webkit-transform .3s ease-out}.stellarnav.mobile > ul > li > a.dd-toggle {padding: 0}.stellarnav li.call-btn-mobile,.stellarnav li.location-btn-mobile {display: none}.stellarnav li.open > a.dd-toggle i {-webkit-transform: rotate(135deg);transform: rotate(135deg)}.stellarnav .call-btn-mobile,.stellarnav .close-menu,.stellarnav .location-btn-mobile,.stellarnav .menu-toggle {display: none;text-transform: uppercase;text-decoration: none;color: #777;padding: 15px;-webkit-box-sizing: border-box;box-sizing: border-box}.stellarnav .full {width: 100%}.stellarnav .half {width: 50%}.stellarnav .third {width: 33%;text-align: center}.stellarnav .location-btn-mobile.third {text-align: center}.stellarnav .location-btn-mobile.half {text-align: right}.stellarnav.light .half,.stellarnav.light .third {border-left: 1px solid rgba(0, 0, 0, .15)}.stellarnav.light.left .half,.stellarnav.light.left .third,.stellarnav.light.right .half,.stellarnav.light.right .third {border-bottom: 1px solid rgba(0, 0, 0, .15)}.stellarnav.light .half:first-child,.stellarnav.light .third:first-child {border-left: 0}.stellarnav.dark .half,.stellarnav.dark .third {border-left: 1px solid rgba(255, 255, 255, .15)}.stellarnav.dark.left .half,.stellarnav.dark.left .third,.stellarnav.dark.right .half,.stellarnav.dark.right .third {border-bottom: 1px solid rgba(255, 255, 255, .15)}.stellarnav.dark.left .menu-toggle,.stellarnav.dark.right .menu-toggle,.stellarnav.light.left .menu-toggle,.stellarnav.light.right .menu-toggle {border-bottom: 0}.stellarnav.dark .half:first-child,.stellarnav.dark .third:first-child {border-left: 0}.stellarnav.mobile,.stellarnav.mobile.fixed {position: static}.stellarnav.mobile ul {position: relative;display: none;text-align: left;background: rgba(221, 221, 221, 1)}.stellarnav.mobile.active > ul,.stellarnav.mobile > ul > li {display: block}.stellarnav.mobile.active {padding-bottom: 0}.stellarnav.mobile > ul > li > a {padding: 15px}.stellarnav.mobile ul ul {position: relative;opacity: 1;visibility: visible;width: auto;display: none;-webkit-transition: none;transition: none}.stellarnav.mobile ul ul ul {left: auto;top: auto}.stellarnav.mobile li.drop-left ul ul {right: auto}.stellarnav.mobile li a {border-bottom: 1px solid rgba(255, 255, 255, .15)}.stellarnav.mobile li.has-sub a {padding-right: 50px}.stellarnav.mobile > ul {border-top: 1px solid rgba(255, 255, 255, .15)}.stellarnav.mobile.light li a {border-bottom: 1px solid rgba(0, 0, 0, .15)}.stellarnav.mobile.light > ul {border-top: 1px solid rgba(0, 0, 0, .15)}.stellarnav.mobile li a.dd-toggle,.stellarnav.mobile.light li a.dd-toggle {border: 0}.stellarnav.mobile .call-btn-mobile,.stellarnav.mobile .close-menu,.stellarnav.mobile .dd-toggle,.stellarnav.mobile .location-btn-mobile,.stellarnav.mobile .menu-toggle {display: inline-block}.stellarnav.mobile li.call-btn-mobile {border-right: 1px solid rgba(255, 255, 255, .1);-webkit-box-sizing: border-box;box-sizing: border-box}.stellarnav.mobile li.call-btn-mobile,.stellarnav.mobile li.location-btn-mobile {display: inline-block;width: 50%;text-transform: uppercase;text-align: center}.stellarnav.mobile li.call-btn-mobile.full,.stellarnav.mobile li.location-btn-mobile.full {display: block;width: 100%;text-transform: uppercase;border-right: 0;text-align: left}.stellarnav.mobile li.call-btn-mobile i,.stellarnav.mobile li.location-btn-mobile i {margin-right: 5px}.stellarnav.mobile.light ul {background: rgba(255, 255, 255, 1)}.stellarnav.mobile.dark ul {background: rgba(0, 0, 0, 1)}.stellarnav.mobile.dark ul ul {background: rgba(255, 255, 255, .08)}.stellarnav.mobile.light li.call-btn-mobile {border-right: 1px solid rgba(0, 0, 0, .1)}.stellarnav.mobile.top {position: absolute;width: 100%;top: 0;left: 0;z-index: 9999}.stellarnav.mobile li li.has-sub > a:after,.stellarnav.mobile li.drop-left li.has-sub > a:after,.stellarnav.mobile li.has-sub > a:after {display: none}.stellarnav.mobile.left > ul,.stellarnav.mobile.right > ul {position: absolute;top: 0;bottom: 0;width: 100%;max-width: 280px;overflow-x: hidden;overflow-y: auto;-webkit-overflow-scrolling: touch}.stellarnav.mobile.right > ul {right: 0}.stellarnav.mobile.left .close-menu,.stellarnav.mobile.right .close-menu {display: inline-block;text-align: right}.stellarnav.mobile.left > ul {left: 0}.stellarnav.mobile.left .call-btn-mobile.half,.stellarnav.mobile.left .call-btn-mobile.third,.stellarnav.mobile.left .close-menu.half,.stellarnav.mobile.left .close-menu.third,.stellarnav.mobile.left .location-btn-mobile.half,.stellarnav.mobile.left .location-btn-mobile.third,.stellarnav.mobile.right .call-btn-mobile.half,.stellarnav.mobile.right .call-btn-mobile.third,.stellarnav.mobile.right .close-menu.half,.stellarnav.mobile.right .close-menu.third,.stellarnav.mobile.right .location-btn-mobile.half,.stellarnav.mobile.right .location-btn-mobile.third {text-align: center}.stellarnav.mobile.left .menu-toggle.half,.stellarnav.mobile.left .menu-toggle.third,.stellarnav.mobile.right .menu-toggle.half,.stellarnav.mobile.right .menu-toggle.third {text-align: left}.stellarnav.mobile.left .close-menu.third span,.stellarnav.mobile.right .close-menu.third span {display: none}@media only screen and (max-width :768px) {.stellarnav {overflow: hidden;display: block}.stellarnav ul {position: relative;display: none}}@media only screen and (max-width :420px) {.stellarnav.mobile .call-btn-mobile.third span,.stellarnav.mobile .location-btn-mobile.third span {display: none}}
        @font-face {
            font-family: 'Montserrat';
            src: url('assets/fonts/montserrat/Montserrat-Light.eot');
            src: local('sans-serif'), local('sans-serif'),
            url('assets/fonts/montserrat/Montserrat-Light.eot?#iefix') format('embedded-opentype'),
            url('assets/fonts/montserrat/Montserrat-Light.woff') format('woff'),
            url('assets/fonts/montserrat/Montserrat-Light.ttf') format('truetype');
            font-weight: 300;
            font-style: normal;
        }

        @font-face {
            font-family: 'Montserrat';
            src: url('assets/fonts/montserrat/Montserrat-ExtraBold.eot');
            src: local('Montserrat ExtraBold'), local('Montserrat-ExtraBold'),
            url('assets/fonts/montserrat/Montserrat-ExtraBold.eot?#iefix') format('embedded-opentype'),
            url('assets/fonts/montserrat/Montserrat-ExtraBold.woff') format('woff'),
            url('assets/fonts/montserrat/Montserrat-ExtraBold.ttf') format('truetype');
            font-weight: 800;
            font-style: normal;
        }
        body {
            color: #6e6e6e;
            font-family: 'Montserrat', sans-serif;
            font-size: 16px;
            font-weight: 400;
            letter-spacing: 0.3px;
            line-height: 1.7em;
            -ms-word-wrap: break-word;
            word-wrap: break-word;
        }

        a {
            color: #252525;
            -webkit-transition: 0.3s;
            transition: 0.3s;
        }

        a:hover {
            color: #5368fd;
        }

        a:focus,
        a:hover {
            text-decoration: none;
            outline: 0;
        }

        img {
            max-width: 100%;
            height: auto;
        }
        h1,
        h2
        {
            color: #252525 ;
            font-weight: 900;
            line-height: 1.3;
            margin: 0 0 15px;
            font-family: 'Montserrat',  sans-serif;
        }
        h3,
        h4,
        h5,
        h6
        {
            color: #252525 ;
            font-weight: 700;
            line-height: 1.3;
            margin: 0 0 15px;
            font-family: 'Montserrat',  sans-serif;
        }

        body,
        html {
            height: 100%;
        }

        body {
            color: #6e6e6e;
            font-family: 'Montserrat', sans-serif;
            font-size: 16px;
            font-weight: 400;
            letter-spacing: 0.3px;
            line-height: 1.7em;
            -ms-word-wrap: break-word;
            word-wrap: break-word;
        }
        .font16 {
            font-size: 16px;
        }

        .font18 {
            font-size: 18px;
        }

        .font38 {
            font-size: 38px!important;
        }

        .center,
        .left,
        .right {
            position: relative;
        }

        .center {
            text-align: center;
        }
        .uppercase {
            text-transform: uppercase;
        }
        .black,
        .black a,
        .black h1,
        .black h2,
        .black h3,
        .black h4,
        .black h5,
        .black h6,
        .black small,
        .red,
        .red a,
        .red h1,
        .red h2,
        .red h3,
        .red h4,
        .red h5,
        .red h6,
        .red small,
        .white,
        .white a,
        .white h1,
        .white h2,
        .white h3,
        .white h4,
        .white h5,
        .white h6,
        .white small {
            color: #ffffff;
        }
        @media (min-width: 768px) and (max-width: 991px) {
            .sm-center {
                text-align: center;
            }
        }

        @media only screen and (max-width: 767px) {
            .xs-center {
                text-align: center;
            }

            .xs-font32 {
                font-size: 32px!important;
            }
        }
        .flex-v-center {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
        }
        .display-block {
            display: block;
        }

        .flex-v-center {
            /*display: inherit;*/
        }
        .mt50 {
            margin-top: 50px;
        }

        .mt40 {
            margin-top: 40px;
        }

        .mt30 {
            margin-top: 30px;
        }

        .mb50 {
            margin-bottom: 50px;
        }

        .mb10 {
            margin-bottom: 10px;
        }

        .mb0 {
            margin-bottom: 0;
        }

        .ml40{
            margin-left: 40px;
        }
        .section-padding {
            padding: 100px 0;
        }

        .padding-top {
            padding-top: 100px;
        }

        .padding-100-50 {
            padding-top: 100px;
            padding-bottom: 50px;
        }

        .padding50 {
            padding: 50px;
        }

        .no-padding {
            padding: 0!important;
        }
        .fix {
            overflow: hidden;
        }
        /* end style */
        .main-action {
            width: 333px;
            font-size: 14px;
            text-transform: none!important;
        }
        /* add_app.css */

        .mainmenu-area svg {
            display: none;
            position: absolute;
            right: 15px;
            top: 15px;
        }

        .menu-toggle.full {
            text-indent: -999px;
        }
        .stellarnav.mobile li a {
            border-bottom: 1px solid rgba(0, 0, 0, 0.15) !important;
        }

        .ham {
            cursor: pointer;
            -webkit-tap-highlight-color: transparent;
            -webkit-transition: -webkit-transform 400ms;
            transition: -webkit-transform 400ms;
            transition: transform 400ms;
            transition: transform 400ms, -webkit-transform 400ms;
            -moz-user-select: none;
            -webkit-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        .hamRotate.active {
            -webkit-transform: rotate(45deg);
            transform: rotate(45deg);
        }

        .line {
            fill: none;
            -webkit-transition: stroke-dasharray 400ms, stroke-dashoffset 400ms;
            transition: stroke-dasharray 400ms, stroke-dashoffset 400ms;
            stroke: #000;
            stroke-width: 5.5;
            stroke-linecap: round;
        }

        .ham8 .top {
            stroke-dasharray: 40 160;
        }

        .ham8 .middle {
            stroke-dasharray: 40 142;
            -webkit-transform-origin: 50%;
            transform-origin: 50%;
            -webkit-transition: -webkit-transform 400ms;
            transition: -webkit-transform 400ms;
            transition: transform 400ms;
            transition: transform 400ms, -webkit-transform 400ms;
        }

        .ham8 .bottom {
            stroke-dasharray: 40 85;
            -webkit-transform-origin: 50%;
            transform-origin: 50%;
            -webkit-transition: stroke-dashoffset 400ms, -webkit-transform 400ms;
            transition: stroke-dashoffset 400ms, -webkit-transform 400ms;
            transition: transform 400ms, stroke-dashoffset 400ms;
            transition: transform 400ms, stroke-dashoffset 400ms, -webkit-transform 400ms;
        }

        .ham8.active .top {
            stroke-dashoffset: -64px;
        }

        .ham8.active .middle {
            /*stroke-dashoffset: -20px;*/
            -webkit-transform: rotate(90deg);
            transform: rotate(90deg);
        }

        .ham8.active .bottom {
            stroke-dashoffset: -64px;
        }

        .stellarnav.light {
            background: inherit;
        }

        .header-top-area {
            left: 0;
            position: absolute;
            top: 0;
            width: 100%;
            z-index: 999;
        }

        .mainmenu-area {
            border-bottom: 1px solid rgba(255, 255, 255, 0.15);
            position: relative;
            -webkit-transition: all 0.3s ease 0s;
            transition: all 0.3s ease 0s;
            z-index: 9999;
        }

        .mainmenu-area-bg {
            background: #ffffff none repeat scroll 0 0;
            height: 100%;
            left: 0;
            opacity: 0;
            position: absolute;
            top: 0;
            -webkit-transition: all 0.3s ease 0s;
            transition: all 0.3s ease 0s;
            width: 100%;
        }

        .is-sticky .mainmenu-area-bg {
            opacity: .8;
        }

        .navbar {
            border-bottom: 0 none;
            border-top: 0 none;
            margin-bottom: 0;
        }

        .header-top-area .navbar > .container {
            width: 90%;
        }

        .navbar-header {
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            left: 0;

            -webkit-transition: all 0.3s ease 0s;
            transition: all 0.3s ease 0s;
            z-index: 9999;
        }

        .is-sticky .navbar-header {
            margin-top: 0;
        }



        .custom-logo-link {
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            min-height: 100px;
            position: relative;

        }

        .is-sticky .custom-logo-link {
            min-height: 80px;
            margin: 0;
            padding: 0;
        }

        .custom-logo-link img {
            max-width: 150px;
            -webkit-transition: all 0.3s ease 0s;
            transition: all 0.3s ease 0s;
        }

        .is-sticky .custom-logo-link img {
            max-width: 150px;
        }

        ul#nav {
            float: right;
        }
        ul#nav li a {
            background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
            color: #ffffff;
            font-weight: 400;
            font-size: 14px;
            letter-spacing: 1px;
            padding: 40px 10px;
            text-transform: capitalize;
            -webkit-transition: all 0.3s ease 0s;
            transition: all 0.3s ease 0s;
        }
        .is-sticky ul#nav li a {
            padding: 30px 10px;
            color: #252525;
        }



        .is-sticky .mainmenu-area {
            background: #ffffff none repeat scroll 0 0;
            -webkit-box-shadow: 0 2px 4px rgba(0, 0, 0, 0.03), 0 3px 6px rgba(0, 0, 0, 0.06);
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.03), 0 3px 6px rgba(0, 0, 0, 0.06);
            z-index: 99999;
        }

        .menu-toggle.full {
            border: 2px solid;
            font-size: 20px;
            height: 40px;
            letter-spacing: 2px;
            line-height: 1;
            padding-top: 8px;
            position: absolute;
            right: 15px;
            text-align: center;
            top: 20px;
            -webkit-transition: all 0.3s ease 0s;
            transition: all 0.3s ease 0s;
            width: 50px;
            z-index: 9999;
        }

        .is-sticky .menu-toggle.full {
            color: #292929;
            border-color: #292929;
        }
        ul#nav li > a::after {
            background: #ffffff none repeat scroll 0 0;
            bottom: 0;
            content: "";
            height: 3px;
            left: 0;
            position: absolute;
            -webkit-transition: all 0.3s ease 0s;
            transition: all 0.3s ease 0s;
            width: 0;
        }

        ul#nav li.active > a::after {
            width: 100%;
        }


        @media only screen and (min-width: 1920px) {
            .header-top-area .navbar > .container {
                width: 90%;
            }

            .is-sticky .mainmenu-area {
                padding-top: 0;
            }

            ul#nav li a {
                padding: 40px 20px;
            }

            .is-sticky ul#nav li a {
                padding: 30px 20px;
            }
        }


        @media only screen and (min-width: 992px) and (max-width: 1200px) {
            .is-sticky .navbar-header {
                margin-top: 2px;
            }

            ul#nav li a {
                padding: 40px 15px;
                font-size: 16px;
            }

            .is-sticky ul#nav li a {
                padding: 25px 15px;
            }
        }

        @media (min-width: 768px) and (max-width: 991px) {
            .mainmenu-area {
                background: rgba(0, 0, 0, 0) linear-gradient(135deg, #584bfb 0%, #45aafd 99%) repeat scroll 0 0;
            }

            .mainmenu-area svg {
                display: block;
                position: absolute;
                right: 15px;
                top: 15px;
            }

            .menu-toggle.full,
            .navbar-header h3 a {
                color: #ffffff !important;
            }

            .line {
                stroke: #ffffff;
            }

            .is-sticky .line {
                stroke: #292929;
            }
            .navbar-header {
                float: none;
            }

            .navbar-header {
                height: 80px;
                margin: 0;
                padding: 0;
                position: static;
            }

            .custom-logo-link,
            .is-sticky .custom-logo-link {
                left: 0;
                margin-top: 0;
                padding: 0;
            }

            .custom-logo-link img {
                max-width: 150px;
            }

            ul#nav {
                background: #ffffff none repeat scroll 0 0;
                border: 1px solid #e4eaf3;
                width: 100%;
                max-height: 350px;
                overflow-x: hidden;
                overflow-y: auto;
            }
            .is-sticky .navbar-header {
                margin: 0;
                padding: 5px 0;
            }
        }


        @media only screen and (max-width: 767px) {

            .mainmenu-area {
                background: rgba(0, 0, 0, 0) linear-gradient(135deg, #584bfb 0%, #45aafd 99%) repeat scroll 0 0;
            }

            .mainmenu-area svg {
                display: block;
                position: absolute;
                right: 15px;
                top: 15px;
            }

            .menu-toggle.full,
            .navbar-header h3 a {
                color: #ffffff !important;
            }

            .line {
                stroke: #ffffff;
            }

            .is-sticky .line {
                stroke: #292929;
            }



            .navbar-header {
                height: 80px;
                margin: 0;
                padding: 0;
                position: static;
            }

            .custom-logo-link,
            .is-sticky .custom-logo-link {
                left: 0;
                margin-top: 0;
                padding: 0;
            }

            .custom-logo-link img {
                max-width: 150px;
            }

            ul#nav {
                background: #fff none repeat scroll 0 0;
                width: 100%;
                max-height: 350px;
                overflow-x: hidden;
                overflow-y: auto;
            }

            ul#nav li {
                float: none;
            }

            ul#nav li a {
                height: 40px;
                color: #5368fd !important;
                font-weight: 400 !important;
            }



            .is-sticky ul#nav li a,
            ul#nav li a {
                color: #fff;
                padding: 10px 15px;
            }

            ul#nav li a::after {
                display: none;
            }


            .stellarnav > ul > li:last-child {
                margin-right: inherit;
            }


        }
        .header-call-to-action {
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            float: right;
            margin-left: 60px;
            min-height: 100px;
            -webkit-transition: all 0.3s ease 0s;
            transition: all 0.3s ease 0s;
            min-width: 300px;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
        }

        .is-sticky .header-call-to-action {
            min-height: 80px;
        }

        .custom-logo-link.sticky-logo {
            opacity: 0;
            position: absolute;
            visibility: hidden;
            left: 15px !important;
        }

        .is-sticky .custom-logo-link.sticky-logo {
            opacity: 1;
            visibility: visible;
        }

        .is-sticky .custom-logo-link.default-logo {
            opacity: 0;
            visibility: hidden;
        }

        .header-call-to-action .action-button {
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            background: #5368fd none repeat scroll 0 0;
            border-radius: 50px;
            color: #ffffff;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            font-weight: 400;
            height: 45px;
            letter-spacing: 1px;
            padding: 15px 50px;
            text-transform: uppercase;
        }
        .header-call-to-action .action-button,
        .header-call-to-action .search-button {
            -webkit-box-shadow: 0 16px 32px rgba(0, 0, 0, 0.1);
            box-shadow: 0 16px 32px rgba(0, 0, 0, 0.1);
        }
        @media (min-width: 768px) and (max-width: 991px) {
            .home-four .mainmenu-area {
                background: rgba(0, 0, 0, 0) linear-gradient(135deg, #0143ff 0%, #ad9ff7 99%) repeat scroll 0 0;
            }
        }

        @media only screen and (max-width: 767px) {
            .home-four .mainmenu-area {
                background: none;
            }

            .home-four ul#nav li a {
                height: 40px;
                color: #0143ff !important;
                font-weight: 400 !important;
            }

            .home-four .is-sticky ul#nav li a,
            .home-four ul#nav li a {
                color: #fff;
                padding: 10px 15px;
            }

            .home-four .current-menu-parent > a,
            .home-four ul#nav li.has-sub.open > a,
            .home-four ul#nav li a:hover,
            .home-four ul#nav li.active > a,
            .home-four ul#nav li.current-menu-item > a,
            .home-four ul#nav li.hover > a,
            .home-four ul#nav li.open.menu-item-has-children > a {
                background: #0143ff !important;
                color: #ffffff !important;
            }
        }
        /* footer */
        @media (max-width: 376px) {
            .add-adaptive {
                padding: 14px 20px!important;
                font-size: 11px!important
            }
        }

        .footer-area .area-bg {
            background: rgba(0, 0, 0, 0) linear-gradient(135deg, #584bfb 0%, #45aafd 99%) repeat scroll 0 0;
        }

        .footer-area .area-bg::after {
            background: rgba(0, 0, 0, 0) url("../img/bg-layers/map-layer.png") repeat scroll 0 0;
        }


        .footer-bottom-area {
            border-top: 1px solid rgba(255, 255, 255, 0.14);
            position: relative;
        }

        .footer-copyright {
            padding: 30px 0;
        }
        @media only screen and (max-width: 767px) {
            .xs-width100p {
                width: 100%;
            }

            .flex-v-center {
                -webkit-box-align: inherit;
                -ms-flex-align: inherit;
                align-items: inherit;
                display: inherit;
            }
        }



        /* end_app.css */

        /* bagin_style.css */
        /*
    1. THEME BG COLOR
    2. PRELOADER
    3. SCROLL TO TOP
    4. AREA BACKGROUND
    5. TOP AERA
    6. SECTION TITLE
    7. SLIDER CONTROL BUTTONS
    8. SERVICE BOX
    9. READ MORE BUTTON
    10. WELCOME TEXT AREA
    11. FEATURES AREA
    12. ABOUT AREA
    13. PROCESS AREA
    14. GOAL AREA
    15. VIDEO PROMO AREA
    16. SCREENSHOT SLIDER
    17. TESTMONIAL AREA
    18. PRICE AREA
    19. FAQS AREA
    20. BLOG AREA
    21. CONTACT AREA
    22. HOME TWO LAYERS
    23. HOME THREE
    24. HOME FOUR
    25. SINGLE PAGE
    26. PRODUCT PAGE
    27. SINGE PRODUCT PAGE
----------------------------------------------------------------------------------------*/
        /*---------------------------
            1. THEME BG COLOR
        -----------------------------*/

        .overflow-xhidden {
            overflow-x: hidden;
            overflow-y: inherit;
        }

        section,
        header {
            background: #ffffff none repeat scroll 0 0;
        }

        .area-image-content,
        .area-content {
            position: relative;
            z-index: 9;
        }
        @media only screen and (max-width: 767px) {
            .welcome-text {
                text-align: center;
            }
            .welcome-text h1 {
                font-size: 26px;
            }
            .top-area {
                height: auto;
            }
        }

        /*--------------------------
            BUTTONS & BACKGROUND
        ----------------------------*/


        /*---------------------------
            2. PRELOADER
        -----------------------------*/


        /*---------------------------------
            3. SCROLL TO TOP
        ----------------------------------*/

        .scrolltotop {
            background: rgba(0, 0, 0, 0) linear-gradient(135deg, #5179fc 0%, #45aafd 99%) repeat scroll 0 0;
            border-radius: 50%;
            bottom: 20px;
            box-shadow: 0 16px 32px rgba(0, 0, 0, 0.2);
            color: #ffffff;
            display: none;
            font-size: 24px;
            height: 60px;
            padding-top: 17px;
            position: fixed;
            right: 20px;
            text-align: center;
            width: 60px;
            z-index: 99;
        }

        .scrolltotop:hover,
        .scrolltotop:focus {
            background: #ffffff none repeat scroll 0 0;
            color: #5179fc;
        }
        /*---------------------------------
            4. AREA BACKGROUND
        ----------------------------------*/

        .area-bg {
            height: 100%;
            left: 0;
            position: absolute;
            top: 0;
            width: 100%;
        }

        .area-bg::after,
        .area-bg::before {
            content: "";
            height: 100%;
            left: 0;
            position: absolute;
            top: 0;
            width: 100%;
        }
        /*---------------------------------
            5. TOP AERA
        ----------------------------------*/

        .top-area {
            position: relative;
            width: 100%;
            height: 100%;
        }

        .welcome-text-area {
            height: 100%;
            padding-top: 100px;
            width: 100%;
        }
        /*---------------------------------
            6. SECTION TITLE
        ----------------------------------*/

        .area-title {
            margin-bottom: 80px;
            position: relative;
        }

        .subtitle {
            color: #5368fd;
            font-size: 16px;
            font-weight: 700;
            letter-spacing: 3px;
            margin-bottom: 30px;
            overflow: hidden;
            text-transform: uppercase;
        }

        .subtitle .letter {
            -webkit-transform-origin: 0 100%;
            transform-origin: 0 100%;
            display: inline-block;
            line-height: 1em;
        }

        .area-title h2 {
            font-size: 48px;
            line-height: 1.2;
            margin-bottom: 20px;
            text-transform: capitalize;
            font-weight: 600;
        }

        .area-title h2 span {
            color: #5368fd;
        }




        /*---------------------------------
            7. SLIDER CONTROL BUTTONS
        ---------------------------------*/

        .owl-carousel .owl-item img {
            max-width: 100%;
            width: auto!important;
        }

        .owl-carousel .owl-nav>div {
            display: inline-block;
            font-size: 24px;
            height: 30px;
            padding-top: 3px;
            text-align: center;
            transition: all 0.3s ease 0s;
            width: 60px;
        }


        .owl-carousel .owl-dots {
            margin-top: 40px;
            text-align: center;
        }

        .owl-carousel .owl-dots>div {
            background: #bdc0f3 none repeat scroll 0 0;
            display: inline-block;
            height: 3px;
            margin: 0 5px;
            transition: all 0.3s ease 0s;
            width: 20px;
        }

        .owl-carousel .owl-dots>div.active {
            background: #ff911d none repeat scroll 0 0;
            width: 30px;
        }
        /*---------------------------------
            8. SERVICE BOX
        ----------------------------------*/

        .text-icon-box {
            position: relative;
            -webkit-transition: all 0.3s ease 0s;
            transition: all 0.3s ease 0s;
            z-index: 1;
        }

        .box-icon {
            font-size: 36px;
            line-height: 1;
            margin-bottom: 20px;
            -webkit-transition: all 0.3s ease 0s;
            transition: all 0.3s ease 0s;
        }


        /* ----------------------------
            BOX DEFAULT STYLE
        ------------------------------- */


        /* ---------------------------
            BOX STYLE
        ---------------------------- */


        /* ---------------------------
            BOX HOVER STYLE
        ------------------------------ */


        /*--------------------------
            BOX HOVER
        ----------------------------*/

        /* -----------------
            BOX HOVER 6
        -------------------- */


        /* ---------------
            BOX HOVER 7
        ------------------ */


        /* ---------------
        BOX HOVER 8
        ------------------- */


        /* ------------------
            BOX HOVER 9
        -------------------- */


        /* --------------------------
            BOX HOVER 10 TO 17
        ---------------------------- */



        /* ----------------------
            HOVER 18 & 19
        ----------------------- */

        /* ---------------------------
            BOX HOVER 22
        ---------------------------- */


        /*----------------------------
            9. READ MORE BUTTON
        ----------------------------*/


        .read-more {
            background: #f0f1ff none repeat scroll 0 0;
            border: 0 none;
            border-radius: 50px;
            color: #252525;
            display: inline-block;
            font-size: 14px;
            font-weight: 700;
            height: 55px;
            letter-spacing: 3px;
            margin-top: 50px;
            overflow: hidden;
            padding: 14px 40px;
            position: relative;
            text-transform: uppercase;
            transition: all 0.3s ease 0s;
            z-index: 1;
        }

        .read-more:hover,
        .read-more:focus,
        .read-more.active {
            color: #ffffff;
        }

        .read-more::before {

            content: "";
            height: 100%;
            left: 0;
            opacity: 0;
            position: absolute;
            top: 0;
            transition: all 0.3s ease 0s;
            width: 100%;
            z-index: -1;
        }

        .read-more.active:before,
        .read-more:hover::before {
            opacity: 1;
        }

        .read-more.active:hover::before {
            background: rgba(0, 0, 0, 0) linear-gradient(135deg, #45aafd 0%, #5179fc 99%) repeat scroll 0 0
        }
        /*----------------------------
            10. WELCOME TEXT AREA
        ------------------------------*/

        .welcome-text-area .area-bg {
            background: url(assets/img/background/blue_bg.png) no-repeat scroll center center / 100% 100%;
        }

        .welcome-area {
            -webkit-box-align: end;
            -ms-flex-align: end;
            align-items: flex-end;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            height: 100%;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            width: 100%;
        }

        .welcome-text h4 {
            font-size: 16px;
            font-weight: 600;
            letter-spacing: 2px;
            text-transform: uppercase;
        }

        .welcome-text h1 {
            font-size: 60px;
            margin-bottom: 30px;
            font-weight: 900;
        }

        .welcome-text h1 span {
            display: block;
            font-weight: 300;
        }

        .home-button a {
            background: #4d84fc none repeat scroll 0 0;
            border-radius: 50px;
            box-shadow: 0 16px 32px rgba(0, 0, 0, 0.1);
            color: #ffffff;
            display: inline-block;
            font-size: 14px;
            font-weight: 400;
            letter-spacing: 1px;
            margin-right: 15px;
            padding: 15px 40px;
            position: relative;
            text-transform: uppercase;
        }



        /*jock*/
        /*-------------------------------
            HOME ONE WELCOME LAYERS
        --------------------------------*/

        .welcome-text {
            position: relative;
            z-index: 9;
        }


        /*--------------------------
            11. FEATURES AREA
        ---------------------------*/

        .features-slider {
            width: 100vw;
        }

        .zone-slider {
            width: 100vw;
        }

        .single-features {
            box-shadow: 0 16px 32px rgba(199, 199, 199, 0.3);
            margin: 30px 20px;
            padding: 50px 20px;
            text-align: center;
        }

        .single-features .box-icon {
            background: rgba(0, 0, 0, 0) linear-gradient(135deg, #5179fc 0%, #45aafd 99%) repeat scroll 0 0;
            border-radius: 50%;
            color: #fff;
            font-size: 28px;
            height: 80px;
            margin: 0 auto 20px;
            padding-top: 26px;
            width: 80px;
        }

        .single-features::after {
            background: #e4e7ff none repeat scroll 0 0;
            bottom: 50px;
            content: "";
            height: 3px;
            left: 50%;
            position: absolute;
            transform: translateX(-50%);
            width: 50px;
        }

        .single-features h3 {
            margin-bottom: 30px;
        }

        .features-slider .owl-nav {
            position: absolute;
            right: 30%;
            top: -170px;
        }
        @media only screen and (max-width: 600px) {
            .single-features {
                margin: 10px;
                padding: 50px 10px;
            }
            .single-features h3 {
                font-size: 14px;
            }
        }


        /*-----------------------------
            12. ABOUT AREA
        -------------------------------*/



        .area-content h3 {
            font-size: 48px;
            margin-bottom: 50px;
        }
        /*------------------------------
            13. PROCESS AREA
        ------------------------------*/

        .process-content {
            counter-reset: process;
            position: relative;
        }

        .process-content .area-bg {
            background: rgba(0, 0, 0, 0) url("assets/img/process/process-bg.png") no-repeat scroll center center / contain;
        }

        .process-icon i {
            background: rgba(0, 0, 0, 0) linear-gradient(135deg, rgb(88, 75, 251) 0%, rgb(69, 170, 253) 99%);
            color: transparent;
            -webkit-text-fill-color: transparent;
            -webkit-background-clip: text;

        }

        .process-icon {
            align-items: center;
            background: rgba(0, 0, 0, 0) url("assets/img/process/process-icon-bg.png") no-repeat scroll center center / 100% 100%;
            display: flex;
            font-size: 45px;
            height: 90px;
            justify-content: center;
            line-height: 1;
            margin: 0 auto 40px;
            position: relative;
            width: 100px;
        }

        .single-process-box {
            padding-top: 30px;
            position: relative;
            text-align: center;
        }

        .single-process-box::after {
            background: #e6e8fe none repeat scroll 0 0;
            bottom: 0;
            content: "";
            display: block;
            height: 3px;
            margin: 40px auto 0;
            transition: all 0.3s ease 0s;
            width: 50px;
        }

        .process-icon::before {
            background: #f29c1f;
            border-radius: 50%;
            box-shadow: 0 16px 32px rgba(127, 143, 255, 0.54);
            color: #ffffff;
            content: "0"counter(process, decimal) "";
            counter-increment: process;
            font-size: 14px;
            font-weight: 700;
            height: 40px;
            left: 0;
            letter-spacing: 2px;
            padding-top: 12px;
            position: absolute;
            top: -30px;
            width: 40px;
        }


        /*---------------------------------
            14. GOAL AREA
        ---------------------------------*/

        .goal-area .read-more {
            margin-right: 20px;
        }



        .goal-layers {
            position: relative;
            z-index: 9;
        }

        .goal-layer-2 {
            position: absolute;
            right: 0;
            top: -100px;
        }

        .goal-layer-3 {
            bottom: -35px;
            position: absolute;
            z-index: -1;
        }
        /*--------------------------------
            15. VIDEO PROMO AREA
        ---------------------------------*/

        .video-promo-area {
            position: relative;
        }

        .area-image-content>img {
            filter: drop-shadow(0px 16px 32px rgba(0, 0, 0, 0.1));
        }

        .video-promo-area .area-bg {
            background: rgba(0, 0, 0, 0) url("assets/img/background/blue_bg.png") no-repeat scroll center center / cover;
        }

        .video-bg-layer {
            left: 0;
            position: absolute;
            top: 0;
            z-index: -1;
        }

        .item-center {
            left: 50%;
            position: absolute;
            top: 50%;
            transform: translateX(-50%) translateY(-50%);
            z-index: 1;
        }

        .video-button button {
            background: #ffffff none repeat scroll 0 0;
            border: 0 none;
            border-radius: 50%;
            color: #5368fd;
            font-size: 16px;
            height: 80px;
            transition: all 0.3s ease 0s;
            width: 80px;
        }

        .video-button button:hover {
            background: rgba(0, 0, 0, 0) linear-gradient(135deg, #5179fc 0%, #45aafd 99%) repeat scroll 0 0;
            box-shadow: 0 16px 32px rgba(199, 199, 199, 0.3);
            color: #ffffff;
        }

        .video-promo-area .area-content {
            padding-left: 50px;
        }

        .single-fun-fact {
            text-align: center;
        }

        .single-fun-fact h3 {
            font-size: 80px;
            line-height: 1;
            margin-bottom: 0;
        }
        /*------------------------------
            16. SCREENSHOT SLIDER
        ------------------------------*/

        .screenshot-slider {
            width: calc(100% + 200px);
        }

        .single-screenshot {
            margin: 20px 20px 40px;
            transition: 0.3s;
        }

        .single-screenshot img {
            filter: drop-shadow(0px 20px 8px rgba(212, 212, 212, 0.56));
        }

        .screenshot-area .owl-nav {
            bottom: 80px;
            left: -150px;
            position: absolute;
        }
        /*-----------------------------
            17. TESTMONIAL AREA
        ------------------------------*/

        .testmonial-area {
            position: relative;
        }

        .testmonial-layers {
            height: 100%;
            left: 0;
            position: absolute;
            top: 0;
            width: 100%;
        }

        .testmonial-layers>div {
            position: absolute;
        }

        .testmonial-layer-1 {
            left: 5%;
            position: absolute;
            top: 50px;
        }

        .testmonial-layer-2 {
            right: 0;
            top: 0;
        }

        .testmonial-layer-3 {
            bottom: 12%;
            right: 5%;
        }

        .single-testmonial {
            box-shadow: 0 16px 32px rgba(221, 221, 221, 0.82);
            margin: 20px 20px 40px;
            padding: 40px 30px;
            position: relative;
            background: #ffffff;
            z-index: 1;
        }

        .single-testmonial::after {
            bottom: 30px;
            content: url("assets/img/testmonial/quote.png");
            position: absolute;
            right: 40px;
            z-index: -1;
        }

        .author-name-and-thumb {
            display: flex;
            flex-direction: column;
            height: 80px;
            justify-content: center;
            margin-top: 20px;
            padding-left: 60px;
            position: relative;
        }

        .author-tumb {
            border-radius: 50%;
            height: 50px;
            left: 0;
            overflow: hidden;
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            width: 50px;
        }

        .author-name-and-thumb h4 {
            margin-bottom: 0;
        }

        .author-name-and-thumb p {
            color: #ff911d;
        }
        /*------------------------------
            18. PRICE AREA
        ------------------------------*/

        .col-center {
            margin: 0 auto;
        }





        .single-price {
            border: 1px solid #ebecff;
            padding: 50px 40px;
            transition: all 0.3s ease 0s;
            position: relative;
            z-index: 1;
        }

        .single-price:before {
            background: rgba(0, 0, 0, 0) linear-gradient(135deg, #5179fc 0%, #45aafd 99%) repeat scroll 0 0;
            content: "";
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            transition: all 0.5s ease 0s;
            opacity: 0;
        }

        .price-header {
            border-bottom: 1px solid #e6f1f9;
            margin-bottom: 60px;
            padding-bottom: 60px;
        }

        .sale-promo {
            background: #ff911d none repeat scroll 0 0;
            border-radius: 50px;
            color: #ffffff;
            display: inline-block;
            font-weight: 500;
            letter-spacing: 3px;
            padding: 10px 30px;
            position: absolute;
            right: 53px;
            text-transform: uppercase;
            top: -24px;
        }

        .price-thumb-hidding {
            display: flex;
            flex-direction: column;
            height: 110px;
            justify-content: center;
            padding-left: 120px;
            position: relative;
        }

        .price-thumb-hidding img {
            left: 0;
            position: absolute;
            top: 0;
            width: 100px;
        }

        .price-rate {
            color: #5368fd;
            font-size: 30px;
            margin-bottom: 10px;
            text-transform: uppercase;
            font-weight: 600;
        }

        .price-rate .currency {
            font-size: 20px;
        }

        .price-title {
            letter-spacing: 2px;
            text-transform: uppercase;
        }

        .price-details {
            min-height: 650px;
        }



        .price-details ul {
            list-style: outside none none;
            margin: 0;
            padding: 0;
        }

        .price-details ul li {
            display: block;
            margin-bottom: 10px;
        }

        .price-details ul li i {
            margin-right: 10px;
        }

        .single-price .dripicons-cross {
            color: #ff911d;
        }

        .price-footer {
            margin-top: 40px;
        }

        .purchase-button {
            background: #f0f1ff none repeat scroll 0 0;
            border-radius: 50px;
            color: #252525;
            display: inline-block;
            font-size: 14px;
            letter-spacing: 3px;
            padding: 15px 40px;
            text-transform: uppercase;
            font-weight: 600;
            z-index: 1;
            overflow: hidden;
            position: relative;
        }
        .purchase-button:before {
            background: rgba(0, 0, 0, 0) linear-gradient(135deg, #5179fc 0%, #45aafd 99%) repeat scroll 0 0;
            content: "";
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            transition: all 0.3s ease 0s;
            opacity: 0;
        }

        @media (max-width: 991px) {
            .single-price.active {
                color: #ffffff;
            }
        }

        @media (min-width: 991px) {
            .single-price:hover,
            .single-price.active {
                color: #ffffff;
            }
        }

        .single-price.active:before,
        .single-price.active:before {
            opacity: 1;
        }
        .single-price:hover .price-rate,
        .single-price.active .price-rate {
            color: #ffffff;
        }

        @media (max-width: 991px) {
            .single-price.active .price-rate {
                color: #ffffff;
            }
        }
        @media (min-width: 991px) {
            .single-price:hover .price-rate,
            .single-price.active .price-rate {
                color: #ffffff;
            }
        }



        .row-flex {
            display: flex;
            flex-flow: row wrap;
        }
        /*--------------------------------
            19. FAQS AREA
        ---------------------------------*/

        .faqs-mockup-1 {
            position: relative;
            text-align: center;
            top: -100px;
        }

        .faqs-mockup-1 img {
            max-width: 70%;
        }

        .faqs-mockup-2 {
            animation: 5s ease 0s normal none infinite running zbounce;
            position: absolute;
            right: 50px;
            top: 50%;
            transform: translateY(-50%);
            transition: 0.5s;
        }

        .panel.panel-default {
            border: 0 none;
            border-radius: 0;
            margin-bottom: 20px;
            position: relative;
            z-index: 1;
        }

        .panel.panel-default:before {
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            content: "";
            background: rgba(0, 0, 0, 0) linear-gradient(135deg, #5179fc 0%, #45aafd 99%) repeat scroll 0 0;
            transition: 0.3s;
            opacity: 0;
            z-index: -1;
        }

        .panel.panel-default.active {
            color: #ffffff;
        }

        .panel.panel-default.active:before {
            opacity: 1;
        }

        .panel-default>.panel-heading {
            background: transparent;
        }

        .accordion-toggle {
            font-weight: 600;
        }

        .active .accordion-toggle {
            color: #fff;
        }

        .panel-body {
            border-top: 0 none;
        }

        .accordion-toggle .panel-title .fa-angle-down {
            margin-top: 5px;
            -webkit-transition: all 0.3s ease 0s;
            transition: all 0.3s ease 0s;
        }

        .accordion-toggle.collapsed .panel-title .fa-angle-down {
            -webkit-transform: rotate(-180deg);
            transform: rotate(-180deg);
        }

        @keyframes zbounce {
            0% {
                transform: scale(0.9)translateY(-50%);
            }
            50% {
                transform: scale(1)translateY(-60%);
            }
            100% {
                transform: scale(0.9)translateY(-50%);
            }
        }
        /*-------------------------------
            20. BLOG AREA
        --------------------------------*/


        /*-------------------------------
            21. CONTACT AREA
        --------------------------------*/

        .contact-content {
            background: #ffffff none repeat scroll 0 0;
        }

        .single-contact {
            border-bottom: 1px solid #e3e5fe;
            margin-bottom: 50px;
            padding-bottom: 50px;
            padding-left: 60px;
            position: relative;
        }

        .single-contact .contact-icon {
            color: #5368fd;
            font-size: 40px;
            left: 0;
            position: absolute;
            top: 0;
        }

        .single-contact:last-child {
            border: 0 none;
            margin-bottom: 0;
            padding-bottom: 0;
        }

        .single-contact>p img {
            width: 60px;
            height: 60px;
        }

        .contact-form label {
            color: #252525;
            text-transform: capitalize;
        }

        .contact-form input,
        .contact-form textarea {
            background: #ffffff none repeat scroll 0 0;
            border: 0 none;
            border-radius: 0;
            font-size: 16px;
            margin-bottom: 18px;
            max-height: 140px;
            min-height: 60px;
            padding: 10px 30px;
        }
        /*---------------------------------
            22. HOME TWO LAYERS
        ----------------------------------*/
        /*---------------------------------
            COLOR VARIANT
        ----------------------------------*/


        /*---------------------------------
            HOME TWO LAYERS
        ----------------------------------*/


        /*--------------------------------
            ABOUT AREA
        ----------------------------------*/


        /*--------------------------------
            VIDEO
        ---------------------------------*/


        /*---------------------------------
            SCREENSHOT TWO
        ---------------------------------*/


        .owl-item.active.center .single-screenshot {
            transform: rotate(10deg);
            transition-delay: 0.2s;
            z-index: 9;
        }




        /*-------------------------------------
            23. HOME THREE
        --------------------------------------*/

        /*---------------------------------
            COLOR VARIANT
        ----------------------------------*/


        /*----------------------------
            ABOUT AREA
        ------------------------------*/



        .about-area .area-image-content>img {
            margin-left: -50px;
            width: 100%;
        }

        .owl-item.active.center .single-screen img {
            transform: scale(1.3);
            z-index: 9;
        }

        .single-screen>img {
            margin-bottom: 60px;
            margin-top: 60px;
            transition: all 0.3s ease 0s;
        }
        /*---------------------------*/

        .features-list {
            list-style: outside none none;
            margin: 30px 0 0;
            padding: 0;
        }

        .features-list li {
            margin-bottom: 10px;
        }

        .features-list li:last-child {
            margin-bottom: 0;
        }
        /*---------------------------*/



        /*---------------------------------
            24. HOME FOUR
        ----------------------------------*/
        /*---------------------------------
            COLOR VARIANT
        ----------------------------------*/

        .home-four .welcome-text-area .area-bg {
            background: rgba(0, 0, 0, 0) url("assets/img/background/blue_bg.png") no-repeat scroll center center / cover;
        }

        .home-four .header-call-to-action .action-button,
        .home-four .header-call-to-action .search-button {
            background: #fff none repeat scroll 0 0;
            color: #5179fc;
        }

        .home-four .header-call-to-action .action-button:hover,
        .home-four .header-call-to-action .search-button:hover {
            background: #5179fc none repeat scroll 0 0;
            color: #fff;
        }

        .home-four .is-sticky .header-call-to-action .action-button,
        .home-four .is-sticky .header-call-to-action .search-button {
            background: #5179fc none repeat scroll 0 0;
            color: #fff;
        }

        .home-four .is-sticky .header-call-to-action .action-button:hover,
        .home-four .is-sticky .header-call-to-action .search-button:hover {
            background: #ffffff none repeat scroll 0 0;
            color: #5179fc;
        }

        .home-four .home-button a {
            background: #5179fc none repeat scroll 0 0;
        }



        .home-four .single-features .box-icon {
            background: linear-gradient(135deg, #5179fc 0%, #3b00ff 99%);
        }

        .home-four .read-more::before {
            background: linear-gradient(135deg, #5179fc 0%, #3b00ff 99%);
        }

        .home-four .read-more.active:hover::before {
            background: rgba(0, 0, 0, 0) linear-gradient(135deg, #3b00ff 0%, #5179fc 99%) repeat scroll 0 0;
        }

        .home-four .video-button button:hover {
            background: linear-gradient(135deg, #5179fc 0%, #3b00ff 99%);
        }

        .home-four .price-menu li.active a {
            background: linear-gradient(135deg, #5179fc 0%, #3b00ff 99%);
        }

        .home-four .single-price:before {
            background: linear-gradient(135deg, #5179fc 0%, #3b00ff 99%);
        }

        .home-four .purchase-button:before {
            background: linear-gradient(135deg, #5179fc 0%, #8573e7 99%);
        }

        .home-four .panel.panel-default:before {
            background: linear-gradient(135deg, #5179fc 0%, #3b00ff 99%);
        }

        .home-four .footer-area .area-bg {
            background: linear-gradient(135deg, #5179fc 0%, #3b00ff 99%);
        }



        .welcome-layer-4 {
            align-items: center;
            display: flex;
            height: 100%;
            position: absolute;
            width: 40%;
        }

        .home-four .top-area .video-button button {
            background: #5179fc none repeat scroll 0 0;
            box-shadow: 0 0 0 20px rgba(85, 63, 191, 0.3);
            color: #ffffff;
        }



        .haeder-subscribe-form .subscribe-form {
            background: #ffffff none repeat scroll 0 0;
            border-radius: 50px;
            height: 80px;
            position: relative;
        }

        .haeder-subscribe-form .subscribe-form input {
            background: #ffffff none repeat scroll 0 0;
            border: 0 none;
            border-radius: 50px;
            height: 60px;
            color: #5179fc;
            left: 10px;
            padding: 20px;
            position: absolute;
            top: 10px;
            width: calc(100% - 200px);
        }

        .haeder-subscribe-form .subscribe-form button {
            background: #5179fc none repeat scroll 0 0;
            border: 0 none;
            border-radius: 50px;
            font-size: 14px;
            height: 60px;
            letter-spacing: normal;
            padding: 12px 50px;
            position: absolute;
            right: 10px;
            text-transform: uppercase;
            top: 10px;
            transition: all 0.3s ease 0s;
        }

        .haeder-subscribe-form .subscribe-form button:hover {
            background: #ffffff none repeat scroll 0 0;
            color: #5179fc;
            -webkit-box-shadow: 0 16px 32px rgba(0, 0, 0, 0.1);
            box-shadow: 0 16px 32px rgba(0, 0, 0, 0.1);
        }

        @media only screen and (min-width: 1920px) {}

        @media only screen and (min-width: 992px) and (max-width: 1200px) {
            .top-sponsors {
                left: 5%;
            }
        }

        .home-four .video-promo-area .area-bg {
            background: rgba(0, 0, 0, 0) url("assets/img/background/blue_bg.png") no-repeat scroll center center / cover;
        }

        .screenshot-slider-4 .single-screenshot {
            margin: 0;
        }

        .single-team {
            text-align: center;
        }

        .member-thumb {

            position: relative;
        }


        /*============================
            25. SINGLE PAGE
        ===============================*/


        /*----------------------------
            26. PRODUCT PAGE
        -----------------------------*/



        /*--------------------------
            PRODUCT PAGINATION
        ----------------------------*/


        /*-----------------------------
            27. SINGE PRODUCT PAGE
        -----------------------------*/

        .white-btn {
            background: #fff none repeat scroll 0 0!important;
            color: #5179fc!important;
        }


        /* anton */
        .process-icon+span {
            font-weight: 700;
            font-size: 20px;
        }
        a[href^="viber"] .process-icon+span {
            color: #8f5db7;
        }
        a[href*="t.me"] .process-icon+span {
            color: #0088cc;
        }
        a[href*="joinchat"] .process-icon+span {
            color: #34BF4B;
        }
        /* добавление блика */
        .add-glare {
            position: relative;
            display: inline-block;
            text-decoration: none;




            overflow: hidden;
        }
        .add-glare:before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 1.5em;
            height: 100%;
            background-color: rgba(255, 255, 255, 0.51)!important;
            transform: translateX(-4em) skewX(-45deg);
            animation: move-light 3s infinite;
            animation-duration: 4s;
        }
        @keyframes move-light {
            from {
                transform: translate(-600px, 0) skewX(-45deg);
            }
            to {
                transform: translate(600px, 0 )skewX(-45deg);
            }

        }
        @media only screen
        and (min-device-width : 768px)
        and (max-device-width : 1024px)
        and (orientation : portrait) { /* STYLES GO HERE */

            ul#nav li a {
                color: black;
            }

        }
        #add-glare::before {
            background: none;
        }
        @media only screen and (max-width: 767px) {
            .about-area .area-image-content>img {
                margin-left: 0;
            }

        }

        /* end_style.css */

    </style>

<!--    <link media="all" href="assets/css/app.css" rel="stylesheet">-->



    <!--====== MAIN STYLESHEETS ======-->
<!--    <link media="all" href="style.css" rel="stylesheet">-->
    <!-- ======   responsive ======  -->
    <style media="all" type="text/css">
        @media only screen and (min-width:992px) and (max-width:1200px){.area-content h3,.area-title h2{font-size:38px}.faqs-mockup-1 img{max-width:86%}.screenshot-area .owl-nav{bottom:-30px;left:0;position:absolute}.single-fun-fact h3{font-size:62px}.single-price{padding:40px 20px}.price-thumb-hidding{padding-left:100px}.price-thumb-hidding img{width:80px}}@media (min-width:768px) and (max-width:991px){.video-promo-area .area-content{padding:0}.area-content h3,.area-title h2{font-size:38px}.single-fun-fact h3{font-size:52px}}@media only screen and (max-width:767px){.area-content h3,.area-title h2{font-size:24px}.video-promo-area .area-content{padding:0}.features-slider,.screenshot-slider{width:100%}.single-screenshot img{margin:0 auto;max-height:450px;max-width:100%;text-align:center}.features-slider .owl-dots,.screenshot-slider .owl-dots{margin-top:0}.single-fun-fact h3{font-size:38px}}@media only screen and (min-width:480px) and (max-width:767px){.area-content h3,.area-title h2{font-size:32px}}
    </style>

    <!-- <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script> -->
    <!--[if lt IE 9]>
        <script defer src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script defer  src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

<!-- Yandex.Metrika counter -->
<script defer="defer" type="text/javascript" src="assets/js/analitycs/yandex-metrika-counter.js"></script>
 <noscript><div><img src="https://mc.yandex.ru/watch/55160251" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

<script defer="defer" src="https://www.googletagmanager.com/gtag/js?id=UA-137853582-1"></script>
<script defer="defer" type="text/javascript" src="assets/js/analitycs/gtag.js"></script>
<!-- Google Tag Manager-->
<script defer="defer" src="assets/js/analitycs/google-tag-manager.js"></script>
<!-- End Google Tag Manager-->

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
				<a href="https://fondy.ua/uk?utm_source=google&utm_medium=cpc&utm_campaign=1735791091&utm_term=68634004235&utm_content=&gclid=CjwKCAiA1L_xBRA2EiwAgcLKAxCKY452WTn6v6V2vFzn76OZvxO-Nik4eXx8IGI3K8Q2vhzMZiJPQhoCXEMQAvD_BwE">
					<img width="300" class="mt40" src="https://fondy.eu/static/image/master_visa_fondy.png">
				</a>
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
                        <picture>
                            <source srcset="assets/img/join/home.webp" type="image/webp">
                            <img src="assets/img/join/home.png" alt="админ панель joinchat">
                        </picture>
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
                        <picture>
                            <source srcset="assets/img/about/about-mockup.webp" type="image/webp">
                            <img class="lazy" data-src="assets/img/about/about-mockup.png" alt="чат-бот для доставки еды">
                        </picture>
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
                                <picture>
                                    <source srcset="assets/img/screenshots/screenshot-1.webp" type="image/webp">
                                    <img class="lazy" data-src="assets/img/screenshots/screenshot-1.png" alt="сервис доставки пиццы">
                                </picture>
                            </div>
                            <div class="single-screenshot">
                                <picture>
                                    <source srcset="assets/img/screenshots/screenshot-2.webp" type="image/webp">
                                    <img class="lazy" data-src="assets/img/screenshots/screenshot-2.png" alt="выбор способа доставки пиццы">
                                </picture>
                            </div>
                            <div class="single-screenshot">
                                <picture>
                                    <source srcset="assets/img/screenshots/screenshot-3.webp" type="image/webp">
                                    <img class="lazy" data-src="assets/img/screenshots/screenshot-3.png" alt="адрес доставки пиццы">
                                </picture>
                            </div>
                            <div class="single-screenshot">
                                <picture>
                                    <source srcset="assets/img/screenshots/screenshot-4.webp" type="image/webp">
                                    <img class="lazy" data-src="assets/img/screenshots/screenshot-4.png" alt="чат-бот доставка пиццы">
                                </picture>
                            </div>
                            <div class="single-screenshot">
                                <picture>
                                    <source srcset="assets/img/screenshots/screenshot-5.webp" type="image/webp">
                                    <img class="lazy" data-src="assets/img/screenshots/screenshot-5.png" alt="чат-бот магазин домашней техники">
                                </picture>
                            </div>
                            <div class="single-screenshot">
                                <picture>
                                    <source srcset="assets/img/screenshots/screenshot-6.webp" type="image/webp">
                                    <img class="lazy" data-src="assets/img/screenshots/screenshot-6.png" alt="чат-бот способ оплаты">
                                </picture>
                            </div>
                            <div class="single-screenshot">
                                <picture>
                                    <source srcset="assets/img/screenshots/screenshot-7.webp" type="image/webp">
                                    <img class="lazy" data-src="assets/img/screenshots/screenshot-7.png" alt="чат-бот магазина бытовой техники">
                                </picture>
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
                                    <div class="video-bg-layer" data-parallax='{"x": -50,"y": -50}'><
                                        class="lazy" dara-src="assets/img/video/dots-layer.png" alt=""></div>
                                    <img class="lazy" data-src="assets/img/video/video-bg.jpg" alt="заставка видео демонстрации">
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
                            <div class="goal-layer-2" data-parallax='{"y": 180}'><img class="lazy" data-src="assets/img/mockups/goal-mockup-1.png" alt="пицца Шпинат и Фета"></div>
                            <div class="goal-layer-3" data-parallax='{"y": 70}'><img class="lazy" data-src="assets/img/mockups/goal-dots-shape.png" alt="чат-бот домашних растений"></div>
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
            <div class="testmonial-layer-1" data-parallax='{"y": 200, "smoothness": 100}'><img class="lazy" data-src="assets/img/bg-layers/layers-1.png" alt="декорации  сайта"></div>
            <div class="testmonial-layer-2" data-parallax='{"x": 80}'><img class="lazy" data-src="assets/img/bg-layers/layers-2.png" alt="декорации"></div>
            <div class="testmonial-layer-3" data-parallax='{"x": -200, "smoothness": 100}'><img class="lazy" data-src="assets/img/bg-layers/layers-3.png" alt="декорации"></div>
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
                                <div class="author-tumb"><img src="assets/img/testmonial/author-1.png" alt="Игорь Маркетолог"></div>
                                <h4>Игорь</h4>
                                <p>Маркетолог</p>
                            </div>
                        </div>
                        <div class="single-testmonial">
                            <div class="author-content">
                                <p>Я сначала сомневался, но подсчитав, что 1 продажа через чат-бота полностью его окупает, плохие мысли отпали.</p>
                            </div>
                            <div class="author-name-and-thumb">
                                <div class="author-tumb"><img src="assets/img/testmonial/author-3.png" alt="Иван Владелец"></div>
                                <h4>Иван</h4>
                                <p>Владелец</p>
                            </div>
                        </div>
                        <div class="single-testmonial">
                            <div class="author-content">
                                <p>Не с первого раза разобралась. Спасибо ребятам, помогли переместить товары и уже через пару дней была первая продажа.</p>
                            </div>
                            <div class="author-name-and-thumb">
                                <div class="author-tumb"><img src="assets/img/testmonial/author-2.png" alt="Екатерина Владелица"></div>
                                <h4>Екатерина</h4>
                                <p>Владелица</p>
                            </div>
                        </div>
                        <div class="single-testmonial">
                            <div class="author-content">
                                <p>Сейчас, каждый второй разработчик делает чат-ботов для Telegram. Подписался исключительно ради Viber. Мои клиенты передают спасибо!</p>
                            </div>
                            <div class="author-name-and-thumb">

                                <div class="author-tumb"><img src="assets/img/testmonial/author-4.png" alt="Дмитрий Директор"></div>
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
                                            <img class="lazy" data-src="assets/img/join/basic.png" alt="самокат">
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
                                            <img class="lazy" data-src="assets/img/join/business.svg" alt="скутер">
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
                                            <img class="lazy" data-src="assets/img/join/motocycle.png" alt="спортивный мотоцикл">
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
                        <div class="faqs-mockup-1" data-parallax='{"y": 150, "smoothness": 100}'><img class="lazy" data-src="assets/img/faqs/faqs-mockup.png" alt="знак вопроса"></div>
                        <div class="faqs-mockup-2"><img class="lazy" data-src="assets/img/faqs/faqs-question.png" alt="сервис доставки"></div>
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
    <section class="contact-area padding-100-50 gray-bg">
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
                            Нажмите на иконку<img class="lazy" data-src="assets/img/icons/telegram.svg" alt="telegram">
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
                                        <div class="form-input" id="contact">
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
                                <a href="#">Публичная оферта</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--FOOER AREA END-->

    <!--====== SCRIPTS JS ======-->
    <script  src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
    <!--    old src assets/js/vendor/jquery-1.12.4.min.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha256-Cr6N6zNN4bp0OwTQOZ6Z66M2r+2dpy/EwKMCyZ+SOMg=" crossorigin="anonymous"></script>    <!--    old src assets/js/vendor/bootstrap.min.js -->

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
    <script src="assets/js/jquery.parallax-layer-scroll.js"></script>
<!--    <script src="assets/js/chaffle.min.js"></script>-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js" integrity="sha256-eBPyH/yKtanEgIozyunmI0tKs7FCRaiQC91ih5ZCB3w=" crossorigin="anonymous"></script> <!-- old src -- assets/js/anime.min.js -->
    <script src="assets/js/jquery-modal-video.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/venobox/1.8.3/venobox.min.js" integrity="sha256-vD6deUu3WkP35ZI4Cw5cBRFo787G6/UNCDsnQJ1+aFk=" crossorigin="anonymous"></script><!-- assets/js/venobox.min.js -- src old -->
    <script src="assets/js/stellarnav.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.sticky/1.0.4/jquery.sticky.min.js" integrity="sha256-9p9wUORIjnIRp9PAyZGxql6KgJRNiH04y+8V4JjUhn0=" crossorigin="anonymous"></script><!-- assets/js/jquery.sticky.js  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js" integrity="sha256-z6FznuNG1jo9PP3/jBjL6P3tvLMtSwiVAowZPOgo56U=" crossorigin="anonymous"></script><!-- assets/js/wow.min.js -->
    <script src="assets/js/placeholdem.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/odometer.js/0.4.8/odometer.min.js" integrity="sha256-65R1G5irU1VT+k8L4coqgd3saSvO/Wufson/w+v2Idw=" crossorigin="anonymous"></script><!-- assets/js/odometer.min.js -->
    <script src="assets/js/contact-form.js"></script>
    <script src="assets/js/footer-reveal.min.js"></script>
    <script src="assets/js/ResizeSensor.min.js"></script>
    <script src="assets/js/theia-sticky-sidebar.min.js"></script>

    <!--===== ACTIVE JS=====-->
    <script src="assets/js/main.js"></script>

</body>

</html>
