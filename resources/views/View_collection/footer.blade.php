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

<script>document.documentElement.className = "js";</script>
<script src="/js/jquery-1.9.1.js"></script>
<script src="/js/jquery.collapse.js"></script>

<script>
    $("#css3-animated-example").collapse({
        accordion: true,
        open: function() {
            this.addClass("open");
            this.css({ height: this.children().outerHeight() });
        },
        close: function() {
            this.css({ height: "0px" });
            this.removeClass("open");
        }
    });
</script>

@include('include.YandexStats')
</body>
</html>
