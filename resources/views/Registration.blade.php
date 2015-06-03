@extends('Registration.template')

@section('content')
<div class="block3">
    <div class="block3_content">
        <div class="block3_header">Регистрация</div>
        <div class="lk">Вы уже зарегистрированы? <a href="/profile">Перейти на страницу профиля.</a></div>
        <div class="block3_content_left">
                <form role="form" method="POST" action="/registration">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    E-mail<font color="red">*</font></br>
                    <input type="text" name="email" class="input"></br>
                    Пароль<font color="red">*</font></br>
                    <input type="password" name="password" class="input"></br>
                    Подтверждение пароля<font color="red">*</font></br>
                    <input type="password" name="re_password" class="input"></br>
                    <input type="submit" value="Зарегистрироваться" class="btn" />
                </form>
        </div>
        <div class="block3_content_right">
            <div class="head1">Обязательно к прочтению</div>
            <div class="block3_content_right_txt">Все поля обязательны для заполнения.</div>
            <div class="block3_content_right_txt">Допустимые символы для пароля: кириллица, латиница, цифры.</div>
            <div class="block3_content_right_txt">Длина пароля от 6 символов.</div>
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
            <div class="ura_txt">{{Session::get('success')}}</div>
        </div>
        @endif
    </div>
</div>
@stop