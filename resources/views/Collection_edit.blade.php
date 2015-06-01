@extends('Collection_edit.template')

@section('content')
<div class="block3">
    <div class="block3_content">
        <div class="block3_content_header">
            <div class="block3_content_header_txt">Редактирование подборки</div>
        </div>
        <div class="left_menu">
            <div class="left_menu_header">Профиль</div>
            <div class="left_menu_punkt" onclick="location.href='/profile/my_collection';">Мои подборки</div>
            <div class="left_menu_punkt" onclick="location.href='/profile/change_password';">Изменить пароль</div>
            <div class="left_menu_punkt_end" onclick="location.href='/logout';">Выход</div>
        </div>
        <div class="create_content">
            <form id="EditFormRequest" action="/profile/collection/edit/{{$collection-> id}}" method="POST" enctype="multipart/form-data">
                <div class="create_left">
                    @if($collection->image_preview_url != null)
                    <div class="mosaic-block bar">
                        <a href="#" class="mosaic-overlay">
                            <div class="details">
                                <input id="upload" type="file" name="image" />
                                <p>Загрузить новое изображение</p>
                            </div>
                        </a>
                        <div class="mosaic-backdrop"><img src="{{$collection->image_preview_url}}"/></div>
                    </div>
                    @else
                    <div class="kurs_img_none">
                        <input id="upload" type="file" name="image" />
                    </div>
                    @endif
                    <div class="kurs_btn_save" id="save_button">Cохранить</div>
                    <div class="kurs_btn_delete" id="delete_button" >Удалить</div>
                </div>
                <div class="create_right">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    Название:</br>
                    <input type="text" name="collection_name" class="input" maxlength="150" value="{{$collection-> collection_name}}"></br>
                    Описание (не более 400 символов):</br>
                    <textarea name="description" class="area" maxlength="400">{{$collection->description}}</textarea></br>
                    Выберите категорию:</br>
                    <select name="category" class="category">
                        @foreach($categories as $category)
                        @if($category->id == $collection->category_id)
                        <option value="{{$category->id}}" selected >{{$category-> category_name}}</option>
                        @else
                        <option value="{{$category->id}}">{{$category->category_name}}</option>
                        @endif
                        @endforeach
                    </select><br>
                    <div class="lessons">
                        @if(count($videos) > 0) Список видео:
                        @endif
                        @foreach($videos as $video)
                            <div class="lesson">
                                <div class="lesson_name">{{ $video-> video_name}}</div>
                                <div class="lesson_btn_edit" onclick="location.href='/profile/video/edit/{{ $video-> id }}';"></div>
                            </div>
                        @endforeach
                        <div class="add_lesson" onclick="location.href='/profile/new_video/{{$collection->id}}';">Добавить видео</div>

                    </div>
                    @if(count($errors) > 0)
                    <div class="block3_content_err">
                        <div class="err_head">Внимание, произошла ошибка!</div>
                        @foreach($errors->all() as $error)
                        <div class="err_txt">{{$error}}</div>
                        @endforeach
                    </div>
                    @endif
                    @if(Session::has('success'))
                    <div class="block3_content_ura">
                        <div class="ura_head">Изменения сохранены</div>
                    </div>
                    @endif
                </div>
            </form>
        </div>
    </div>
</div>
@stop