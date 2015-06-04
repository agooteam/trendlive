@extends('Index.template')

@section('content')
<div class="block1">
    <div class="block1_content">
        <div class="slide_block">
            <ul id="slider">
                <li><img src="/img/slider/1.jpg" alt="" /></li>
                <li><img src="/img/slider/1.jpg" alt="" /></li>
            </ul>
        </div>
        <div class="btn_reg" onclick="location.href='/registration';">Регистрация</div>
        <div class="btn_reg" onclick="location.href='/catalog';">Смотреть видео</div>
        <div class="btn_reg" onclick="location.href='http://trendlive.reformal.ru/';">Оставить отзыв</div>
    </div>
</div>
<div class="block2">
    <div class="block2_content">
        <div class="block2_header">Удобство в каждом действии</div>
        <div class="block2_punkt">
            <div class="block2_punkt_icon"><img src="/img/punkt_ud_1.png"></div>
            <div class="block2_punkt_header">Только лучшее</div>
            <div class="block2_punkt_txt">Создавайте коллекции  <br>
                самостоятельно</div>
        </div>
        <div class="block2_punkt">
            <div class="block2_punkt_icon"><img src="/img/punkt_ud_2.png"></div>
            <div class="block2_punkt_header">Ваш выбор оценят</div>
            <div class="block2_punkt_txt">Расскажите друзьям, им должно<br>
                понравиться</div>
        </div>
        <div class="block2_punkt">
            <div class="block2_punkt_icon"><img src="/img/punkt_ud_3.png"></div>
            <div class="block2_punkt_header">Все просто</div>
            <div class="block2_punkt_txt">У вас возникли вопросы?<br>
                Мы вам поможем!</div>
        </div>
        <div class="block2_punkt">
            <div class="block2_punkt_icon"><img src="/img/punkt_ud_4.png"></div>
            <div class="block2_punkt_header">Только вверх</div>
            <div class="block2_punkt_txt">Добавив видео вы увеличиваете <br> количество
                просмотров</div>
        </div>
    </div>
</div>
<div class="block3">
    <div class="block3_content">
        <div class="block3_header">Лидеры просмотров</div>
        @foreach($liders as $lider)
        <div class="block3_position1">
            @if($lider -> image_url == null)
            <div class="block3_position_img"><img src="/assets/collections/default_collection.png"/></div>
            @else
            <div class="block3_position_img"><img src="{{$lider -> image_url}}"/></div>
            @endif
            <div class="block3_position_txt">{{$lider-> collection_name}}</div>
            <div class="block3_position_btn" onclick="location.href='{{$url}}/collection/view/{{$lider-> id}}';">Подробнее</div>
        </div>
        @endforeach
    </div>
</div>
<div class="block3_line"></div>
<div class="block4">
    <div class="block4_content">
        <div class="block4_header">Самое интересное</div>
        @foreach($interesteds as $interested)
        <div class="block3_position1">
            @if($interested -> image_url == null)
            <div class="block3_position_img"><img src="/assets/collections/default_collection.png"/></div>
            @else
            <div class="block3_position_img"><img src="{{$interested -> image_url}}"/></div>
            @endif
            <div class="block3_position_txt">{{$interested-> collection_name}}</div>
            <div class="block3_position_btn" onclick="location.href='{{$url}}/collection/view/{{$interested-> id}}';">Подробнее</div>
        </div>
        @endforeach
    </div>
</div>
@stop