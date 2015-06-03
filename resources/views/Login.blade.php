@extends('Login.template')

@section('content')
<div class="block3">
    <div class="block3_content">
        <div class="block3_header">Профиль</div>
        <div class="block3_content_left">
            <form role="form" method="POST" action="/profile/login" class="form">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                E-mail<font color="red">*</font></br>
                <input type="text" name="email" class="input"></br>
                Пароль<font color="red">*</font></br>
                <input type="password" name="password" class="input2">
                <p>Запомнить меня<input type="checkbox" name="remember" value="ok" class="check"></p>
                <input type="submit" value="Войти" class="btn" />
            </form>
            <div class="account">Ты еще не регистрировался? <a href="/registration">Зарегистрироваться</a></div>
            <div class="account">Забыл пароль? <a href="/recovery_password">Восстановить</a></div>
        </div>
        <div class="block3_content_right">
            <div class="head1">Обязательно к прочтению</div>
            <div class="block3_content_right_txt">Перед входом в профиль убедитесь что вы подтвердили адрес электронной почты</div>
            <div class="block3_content_right_txt">Проверьте не включен ли Caps Lock</div>
            <div class="block3_content_right_txt">Допустимые символы для пароля: кириллица, латиница, цифры.</div>
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
                <div class="ura_head">Почта подтверждена</div>
                <div class="ura_txt">{{Session::get('success')}}</div>
            </div>
            @endif

        </div>
    </div>
</div>
@stop