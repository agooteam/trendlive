<?php namespace TrendLive\Http\Requests;
use TrendLive\Http\Requests\Request;
use Auth;
class RegistrationFormRequest extends Request {
    public function authorize(){
        return true;
    }
    public function rules(){
        return [
            'email' => 'required|email|unique:users', //обязательное поле, соответсвие email адресу
            'password' => 'required|min:6|max:30|same:re_password',//обязательное поле, минимум 6 символов
            're_password' => 'required',
        ];
    }
}