<?php namespace TrendLive\Http\Requests;

use TrendLive\Http\Requests\Request;

class ChangePasswordFormRequest extends Request {


    public function authorize()
    {
       return true;
    }

    public function rules()
    {
        return [
            'password' => 'required|min:6|same:re_password',
            're_password' => 'required'
        ];
    }


}
