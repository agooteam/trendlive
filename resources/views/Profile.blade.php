@extends('Profile.template')

@section('content')
<div class="block3">
    <div class="block3_content">
        <div class="block3_content_header">
            <div class="block3_content_header_txt">Мои коллекции</div>
        </div>
        <div class="left_menu">
            <div class="left_menu_header">Профиль</div>
            <div class="left_menu_punkt_active" onclick="location.href='/profile/my_collection';">Мои коллекции</div>
            <div class="left_menu_punkt" onclick="location.href='/profile/change_password';">Изменить пароль</div>
            <div class="left_menu_punkt_end" onclick="location.href='/logout';">Выход</div>
            <div class="left_menu_punkt_add" onclick="location.href='/profile/new_collection';">Новая коллекция</div>
        </div>
        <div class="catalog_content">
            @if(count($collections) == 0)
            <div class="catalog_none">Вы еще не создали ни одной коллекции. <a href="/profile/new_collection">Перейти к созданию.</a></div>
            @endif
            @foreach($collections as $collection)
            <div class="catalog_prod">
                @if($collection -> image_preview_url == null)
                <div class="prod_img"><img src="/assets/collections/preview/default_collection.png"/></div>
                @else
                <div class="prod_img"><img src="{{$collection -> image_preview_url}}"/></div>
                @endif
                <div class="prod_info">
                    <div class="prod_header">{{$collection-> collection_name}}</div>
                    <div class="prod_txt">{{$collection-> description}}</div>
                    <div class="btn_edit" onclick="location.href='/profile/collection/edit/{{$collection-> id}}';" style="width: 100%;margin-bottom: 20px;">
                        Редактировать</div><br>
                    <div class="prod_btn" onclick="location.href='/collection/view/{{$collection-> id}}';">Подробнее</div>
                </div>
            </div>
            @endforeach
        </div>
        @include('pagination.custom', ['paginator' => $collections])
    </div>
</div>

@stop