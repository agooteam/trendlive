<div class="footer">
    <div class="footer_content">
        <div class="footer_block1">
            <div class="footer_header">Контакты</div>
            <div class="footer_txt">Администратор:<br>admin<font color="57c5a0">@trendlive.ru</font><br><br>
                Техническая поддержка:<br>support<font color="57c5a0">@trendlive.ru</font></div>
            <div class="footer_header">Мы в социальных сетях</div>
            <div class="fb"></div>
            <div class="tw"></div>
            <div class="vk" onclick="location.href='http://vk.com/TrendLive'"></div>
        </div>
        <div class="footer_block2">
            <div class="footer_header">Навигация</div>
            <div class="footer_navi" onclick="location.href='/';">Главная</div>
            <div class="footer_navi" onclick="location.href='/catalog';">Коллекции</div>
            <div class="footer_navi" onclick="location.href='/profile';">Профиль</div>
            <div class="footer_header">TrendLive.ru | © 2015</div>
        </div>
        <div class="footer_block2">
            <div class="footer_header">О нас</div>
            <div class="footer_txt">TrendLive - это инструмент для создания коллекций видео . Мы работаем для вас, создавайте и делитесь самым интересным.</div>
        </div>
    </div>
</div>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
<script type="text/javascript" src="/js/rhinoslider-1.05.min.js"></script>
<script type="text/javascript" src="/js/mousewheel.js"></script>
<script type="text/javascript" src="/js/easing.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#slider').rhinoslider({
            showTime: 8000,
            effectTime: 700,
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
@include('include.YandexStats')
</body>
</html>
