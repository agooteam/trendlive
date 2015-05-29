<?php namespace TrendLive\Http\Requests;

use TrendLive\Http\Requests\Request;
use Auth;

class LoginFormRequest extends Request {

	public function authorize(){
        return true;
	}

	public function rules()
	{
		return [
            'email' => 'required|email', //обязательное поле, соответсвие email адресу
            'password' => 'required|min:6'//обязательное поле, минимум 6 символов
		];
	}

}
