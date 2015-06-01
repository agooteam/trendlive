@extends('New_collection.template')

@section('content')
<div class="block3">
    <div class="block3_content">
        <div class="block3_content_header">
            <div class="block3_content_header_txt">Новая подборка</div>
        </div>
        <div class="left_menu">
            <div class="left_menu_header">Профиль</div>
            <div class="left_menu_punkt" onclick="location.href='/profile/my_collection';">Мои подборки</div>
            <div class="left_menu_punkt" onclick="location.href='/profile/change_password';">Изменить пароль</div>
            <div class="left_menu_punkt_end" onclick="location.href='/logout';">Выход</div>
        </div>
        <div class="create_content">
            <form id="SaveFormRequest" action="/profile/new_collection" method="POST" enctype="multipart/form-data">
                <div class="create_left">
                    <div class="kurs_img_none">
                        <input id="upload" type="file" name="image" />
                    </div>
                    <div class="kurs_btn_save" id="save_button">Cохранить</div>
                </div>
                <div class="create_right">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    Название (не более 150 символов):</br>
                    <input type="text" name="collection_name" class="input" maxlength="150"></br>
                    Описание (не более 400 символов):</br>
                    <textarea name="description" class="area" maxlength="400"></textarea></br>
                    Выберите категорию:</br>
                    <select name="category" class="category">
                        @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->category_name}}</option>
                        @endforeach
                    </select><br>
                    @if(count($errors) > 0)
                    <div class="block3_content_err">
                        <div class="err_head">Внимание, произошла ошибка!</div>
                        @foreach($errors->all() as $error)
                        <div class="err_txt">{{$error}}</div>
                        @endforeach
                    </div>
                    @endif
                </div>
            </form>
        </div>
    </div>
</div>
@stop