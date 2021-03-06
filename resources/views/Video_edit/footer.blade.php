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
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.0/jquery.min.js"></script>
<div id="modal_form">
    <div class="modal_txt">Вы действительно хотите удалить видео?</div>
    <div class="modal_btns">
        <div class="modal_btn_yes" onclick="">Да</div>
        <div id="modal_close">Нет</div>
    </div>
</div>
<div id="overlay"></div>

<form id="DeleteCollectionForm" method="POST" action="/profile/video/delete/{{$video -> id}}">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
</form>

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.0/jquery.min.js"></script>
<script type="text/javascript">
    $( "#save_button" ).click(function() {
        $( "#EditFormRequest" ).submit();
    });
</script>

<script type="text/javascript">
    $(document).ready(function() {
        var id_modal = "#modal_form";
        function ShowModal()  {
            $('#overlay').fadeIn(400,
                function(){
                    $(id_modal).css('display', 'block')
                        .animate({opacity: 1, top: '50%'}, 200);
                });
        }

        function HideModal() {
            $(id_modal).animate({opacity: 0, top: '45%'}, 200,
                function(){
                    $(this).css('display', 'none');
                    $('#overlay').fadeOut(400);
                }
            );
        }

        $('#delete_button').click( function(event){
            ShowModal();
        })

        $('#modal_close, #overlay').click( function(){
            HideModal();
        })


        $('.modal_btn_yes').click(function() {
            HideModal();
            $( "#DeleteCollectionForm" ).submit();
        })
    });
</script>
@include('include.YandexStats')

</body>
</html>
