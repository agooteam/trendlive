@extends('Recovery_password.template')

@section('content')
<div class="block3">
    <div class="block3_content">
        <div class="block3_header">Восстановление пароля</div>
        <div class="block3_content_left">
            <form role="form" method="POST" action="/recovery_password" class="form">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                E-mail<font color="red">*</font></br>
                <input type="text" name="email" class="input"></br>
                <input type="submit" value="Восстановить" class="btn" />
            </form>
            <div class="account">Ты еще не регистрировался? <a href="/registration">Зарегистрироваться</a></div>
        </div>
        <div class="block3_content_right">
            <div class="head1">Как восстановить пароль</div>
            <div class="block3_content_right_txt">Для восстановления пароля введите свой E-mail в форму и нажмите кнопку &laquo; Восстановить &raquo;.</div>
            <div class="block3_content_right_txt">После чего на ваш E-mail будет выслан новый пароль.</div>
            <div class="block3_content_right_txt">Войдите в профиль с новым паролем, если нужно смените его на новый.</div>
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
                <div class="ura_head">Успешное восстановление</div>
                <div class="ura_txt">{{Session::get('success')}}</div>
            </div>
            @endif

        </div>
    </div>
</div>

@stop