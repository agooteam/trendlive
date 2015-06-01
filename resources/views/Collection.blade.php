@extends('Collection.template')

@section('content')
<div class="block3">
    <div class="block3_content">
        <div class="block3_content_header">
            <div class="block3_content_header_txt">Подборки видео</div>
        </div>
        <div class="left_menu">
            <div class="left_menu_header">Выберите категорию:</div>
            @foreach($categories as $category)
                @if($category-> id == $category_id)
                <div class="left_menu_punkt_active" onclick="location.href='/catalog/{{$category -> id}}';">{{$category -> category_name}}</div>
                @else
                <div class="left_menu_punkt" onclick="location.href='/catalog/{{$category -> id}}';">{{$category -> category_name}}</div>
                @endif
            @endforeach
        </div>
        <div class="catalog_content">
            @if(count($collections) == 0)
            <div class="catalog_none">Для этой категории не найдено подборок. <a href="/profile/new_collection">Перейти к созданию</a></div>
            @endif
            @foreach($collections as $collection)
            @if($collection-> count_videos > 0)
            <div class="catalog_prod">
                @if($collection -> image_preview_url == null)
                <div class="prod_img"><img src="/assets/collections/preview/default_collection.png"/></div>
                @else
                <div class="prod_img"><img src="{{$collection -> image_preview_url}}"/></div>
                @endif
                <div class="prod_name">{{$collection -> collection_name}}</div>
                <div class="prod_btn" onclick="location.href='/collection/view/{{$collection -> id}}';">Подробнее</div>
            </div>
            @endif
            @endforeach
        </div>
        @include('pagination.custom', ['paginator' => $collections])
    </div>
</div>
@stop