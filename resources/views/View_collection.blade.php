@extends('View_collection.template')

@section('content')
<div class="block3">
<div class="block3_content">
<div class="block3_content_header">
    <div class="block3_content_header_txt">{{$category_cur_name}}</div>
</div>
<div class="left_menu">
    <div class="left_menu_header">Выберите категорию:</div>
    @foreach($categories as $category)
    @if($category-> id == $collection->category_id)
    <div class="left_menu_punkt_active" onclick="location.href='/catalog/{{$category -> id}}';">{{$category -> category_name}}</div>
    @else
    <div class="left_menu_punkt" onclick="location.href='/catalog/{{$category -> id}}';">{{$category -> category_name}}</div>
    @endif
    @endforeach
</div>
<div class="kurs_content">
    <div class="left">
        @if($collection -> image_preview_url == null)
        <div class="img"><img src="/assets/collections/preview/default_collection.png"/></div>
        @else
        <div class="img"><img src="{{$collection -> image_preview_url}}"/></div>
        @endif
        <div class="l-name">Всего видео:</div>
        <div class="number">{{$collection->count_videos}}</div>
        @if($collection -> image_preview_url == null)
        <div class="number"><br><a href="http://vk.com/share.php?url={{$vk['CURRENT_URL']}}/collection/view/{{$collection-> id}}&title={{$collection-> collection_name}}&description={{$collection->description}}&image={{$vk['CURRENT_URL']}}/assets/collections/preview/default_collection.png">Поделиться</a></div>
        @else
        <div class="number"><br><a href="http://vk.com/share.php?url={{$vk['CURRENT_URL']}}/collection/view/{{$collection-> id}}&title={{$collection-> collection_name}}&description={{$collection->description}}&image={{$collection -> image_preview_url}}">Поделиться</a></div>
        @endif
     </div>
    <div class="right">
        <div class="head">{{$collection-> collection_name}}</div>
        <div class="about">Описание подборки:</div>
        <div class="about_txt">
            <p>{{$collection->description}}</p>
        </div>
        <div class="head2">Список видео:</div>
        <div class="lessons">
            <div id="css3-animated-example">
                @foreach($videos as $video)
                <h3>{{$video-> video_name}}</h3>
                <div>
                    <div class="content">
                        <iframe width="390" height="250" src="https://www.youtube.com/embed/{{$video->youtube_link}}" frameborder="0" allowfullscreen></iframe>
                    </div>
                </div>
                @endforeach
            </div>
        </div>



    </div>
</div>

</div>
</div>
@stop