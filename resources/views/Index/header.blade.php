<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>TrendLive - Главная страница</title>
    <link rel="stylesheet" type="text/css" href="/css/index.css">
    <link href='http://fonts.googleapis.com/css?family=Scada:400italic,700italic,400,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
    <link type="text/css" rel="stylesheet" href="/css/rhinoslider-1.05.css" />
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
    <script type="text/javascript" src="/js/rhinoslider-1.05.min.js"></script>
    <script type="text/javascript" src="/js/mousewheel.js"></script>
    <script type="text/javascript" src="/js/easing.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#slider').rhinoslider({
                showTime: 3000,
                effectTime: 500,
                controlsMousewheel: false,
                controlsKeyboard: false,
                controlsPrevNext: true,
                controlsPlayPause: false,
                autoPlay: true,
                pauseOnHover: false,
                showBullets: 'never'
            });
        });
    </script>
</head>
<body>
<div class="top_menu_bg">
    <div class="top_menu">
        <div class="logo"></div>
        <div class="menu_punkt" onclick="location.href='/profile';">Профиль</div>
        <div class="menu_punkt" onclick="location.href='/catalog';">Подборки видео</div>
        <div class="menu_punkt" onclick="location.href='/';">Главная</div>
    </div>
</div>