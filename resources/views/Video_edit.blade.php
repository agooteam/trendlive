@extends('Video_edit.template')

@section('content')
<div class="block3">
    <div class="block3_content">
        <div class="block3_content_header">
            <div class="block3_content_header_txt">Редактирование видео</div>
        </div>
        <div class="left_menu">
            <div class="left_menu_header">Профиль</div>
            <div class="left_menu_punkt" onclick="location.href='/profile/my_collection';">Мои коллекции</div>
            <div class="left_menu_punkt" onclick="location.href='/profile/change_password';">Изменить пароль</div>
            <div class="left_menu_punkt_end" onclick="location.href='/logout';">Выход</div>
        </div>
        <div class="create_content">
            <div class="back_btn" onclick="location.href='/profile/collection/edit/{{$collection_id}}';">Вернуться на страницу редактирования коллекции</div>
            <div class="create_right">

                <form action="/profile/video/edit/{{$video-> id}}" method="post">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    Название видео:</br>
                    <input type="text" name="video_name" class="input" maxlength="100" value="{{$video-> video_name}}"></br>
                    Ссылка на видео youtube :</br>
                    <input type="text" name="youtube_link" class="input" maxlength="255" value="https://youtu.be/{{$video-> youtube_link}}">

                    <div style="margin-top: 20px;">
                        <input type="submit" value="Сохранить" class="btn" />
                        <div class="kurs_btn_delete" id="delete_button">Удалить</div>
                    </div>
                </form>
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
                    <div class="ura_head">Видео сохранено</div>
                </div>
                @endif
                <ul class="block3_content_info">
                    <h3>Как правильно получить ссылку на видео youtube</h3>
                    <li>Под выбранным видео нажмите на кнопу &laquo; Поделиться &raquo;</li>
                    <li>Немного ниже вы увидите ссылку в формате<br> &laquo; https://youtu.be/код_видео &raquo;</li>
                    <li>Выделите ссылку и скопируйте ( Ctrl + C )</li>
                    <li>Вставьте скопированную ссылку ( Ctrl + V ) в поле <br>&laquo; Ссылка на видео youtube &raquo;</li>
                </ul>
            </div>
        </div>

    </div>
</div>
@stop