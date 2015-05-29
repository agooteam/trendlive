<?php namespace TrendLive\Http\Controllers;

use TrendLive\Http\Requests;
use TrendLive\Http\Controllers\Controller;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use TrendLive\User;
use Illuminate\Support\Str;
use TrendLive\Http\Requests\RecoveryPasswordFormRequest;

class ProfileController extends Controller {

    public function index(){//Стартовая страница профиля
        if(!Auth::check()) return redirect('/profile/login');
    }

    public function get_login(){//страница авторизации
        if(Auth::check()) return redirect('/profile');
        else return view('Login');
    }

    public function get_recovery_password(){//страница восстановления пароля
        if(Auth::check()) return redirect('/profile');
        else return view('Recovery_password');
    }

    public  function post_recovery_password(RecoveryPasswordFormRequest $request){//на вход подается чистый запрос
        $data = $request->all();//получаем все данные
        $email = $data['email'];//вытаскиваем email
        $new_password = Str::random(6);//генерация строки из 6 символов
        $result = User::set_new_password($email,$new_password);//установка нового пароля
        if($result){//если пользователь существует и пароль сменен
            $user = User::get_user_for_email($email);//получаем модель пользователя
            $to_mail = [//формируем массив данных
                'password' => $new_password
            ];
            Mail::send('emails.recovery_password', $to_mail, function($message) use ($user){//отправляем письмо
                $message->to($user->email, 'Пользователь')->subject('Восстановление пароля');//указываем адресата и тему письма
            });
            return redirect('/recovery_password')->with('success','Ты успешно восстановил пароль. Новый пароль выслан на E-mail.');//сообщение об успехе
        }
        else{//если пользователя не существует
            return redirect('/recovery_password')->withErrors('Пользователя с таким E-mail не существует.');//сообщение об ошибке
        }
    }

}
