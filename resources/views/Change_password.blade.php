@extends('Change_password.template')

@section('content')
<div class="block3">
    <div class="block3_content">
        <div class="block3_content_header">
            <div class="block3_content_header_txt">Смена пароля</div>
        </div>
        <div class="left_menu">
            <div class="left_menu_header">Профиль</div>
            <div class="left_menu_punkt" onclick="location.href='/profile';">Мои подборки</div>
            <div class="left_menu_punkt_active" onclick="location.href='/profile/change_password';">Изменить пароль</div>
            <div class="left_menu_punkt_end" onclick="location.href='/profile/logout';">Выход</div>
        </div>
        <div class="profile_content">
            <div class="profile_content_info">
                <form class="form" method="post" action="/profile/change_password">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    Новый пароль:<font color="red">*</font></br>
                    <input type="password" name="password" class="input" maxlength="30"></br>
                    Подтверждение пароля:<font color="red">*</font></br>
                    <input type="password" name="re_password" class="input" maxlength="30">
                    <input type="submit" value="Сохранить" class="btn" />
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
                    <div class="ura_txt">{{Session::get('success')}}</div>
                </div>
                @endif

            </div>
        </div>

    </div>
</div>
@stop