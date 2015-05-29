<?php namespace TrendLive\Http\Controllers;

use TrendLive\Http\Requests;
use TrendLive\Http\Controllers\Controller;
use TrendLive\Http\Requests\RegistrationFormRequest;
use TrendLive\User;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Mail;
use Auth;

class RegistrationController extends Controller {

	public function index(){//Страница регистрации
        if(Auth::check()) return redirect('/profile');
        return view('Registration');
	}

    public function registration_user(RegistrationFormRequest $request){//Регистрация пользователя метод post
        $data = $request->all();//получаем данные
        $user = User::registration($data);//регистрируем пользователя
        if($user instanceof Model){ // если нам вернулась модель, то все хорошо
            $activate_code = $user-> activation_code;
            $url = $request->fullUrl();
            $pos = strrpos($url, '/');
            $url = substr($url,0,$pos);
            $url = $url.'/activation/'.$activate_code;
            $to_mail = [//собираем все в единый массив для отправки в функцию send
                'email' => $user->email,
                'password' => $request->password,
                'url' => $url
            ];
            Mail::send('emails.registration', $to_mail, function($message) use ($user){//отправляем письмо
                $message->to($user->email,'Новый пользователь')->subject('Регистрация на сайте  TrendLive.ru');//указываем адресата и тему письма
            });
            return redirect('/registration')->with('success','Вы успешно зарегистрировались. На указанный E-Mail выслана ссылка для подтверждения адреса электронной почты');//возвращаем пользователя на страницу регистрации и уведомляем об успешной регистрации
        }
        else{//иначе плохо, произошла ошибка
            return redirect('/registration') -> withErrors('Ошибка регистрации, попробуйте заново.');//Сообщаем об ошибках
        }
    }

    public function activation($hash){
        $result = User::activation($hash);
        if($result) return redirect('/profile/login')->with('success','Адрес электронной почты подтвержден. Для входа в профиль используйте данные указанные при регистрации.');
        else return redirect('/profile/login') -> withErrors('Вы уже подтвердили адрес электронной почты');//Сообщаем об ошибках;
    }

}
