<?php namespace TrendLive;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Illuminate\Support\Facades\Hash;

class User extends Model implements AuthenticatableContract{

    use Authenticatable;

    protected $table = 'users';
    protected $hidden = ['password', 'remember_token'];
    public static $unguarded = true;

    public static function login($data,$remember){//функция авторизации пользователя
        if($remember){
            if (Auth::attempt(['email' => $data['email'], 'password' => $data['password']],true)){//запоминать пользователя
                return Auth::user();
            }
            else return false;
        }
        else{
            if (Auth::attempt(['email' => $data['email'], 'password' => $data['password']])){//не запоминать пользователя
                return Auth::user();
            }
            else  return false;
        }
    }

    public static function activation($hash){//активация аккаунта
        $user = User::where('activation_code','=',$hash)->first();
        if($user instanceof Model){//если получили модель пользователя
            if($user-> is_active == 0){//и он не активирован
                $user-> is_active = 1;//делаем активным
                $user->save();//сохраняем
                return true;
            }
            else return false;
        }
        return false;
    }

    public static function registration($data){ // регистрация нового пользователя

        $user = User::create([ //создаем пользователя
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'activation_code' => md5($data['email'])
        ]);

        return $user; // возвращаем пользователя
    }

}
