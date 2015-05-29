<?php namespace TrendLive\Http\Requests;

use TrendLive\Http\Requests\Request;
use Auth;

class RecoveryPasswordFormRequest extends Request {


    public function authorize(){
       return true;//иначе разрешить
    }

    public function rules()
    {
        return [
            'email' => 'required|email', //обязательное поле, соответсвие email адресу
        ];
    }


}
