<?php namespace TrendLive\Http\Controllers;

use Artdarek\OAuth\Facade\OAuth;
use TrendLive\Http\Requests;
use TrendLive\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller {

    public function PostOnWallVk(Request $request){
        $code = $request->get('code');//Получаем код
        $collection_id = $request->get('state');//ID коллекции
        $request->all();
        $vk = \OAuth::consumer('Vkontakte');
        if ( !is_null($code)){
            $token = $vk->requestAccessToken($code); // получаем токен
            $param = $token-> getExtraParams();
            return dd($param);
            $result = json_decode($vk->request('/me'), true);
            $message = 'Your unique facebook user id is: ' . $result['id'] . ' and your name is ' . $result['name'];
            return $message. "<br/>";
        }
        else{
            $url = $vk->getAuthorizationUri();
            return redirect((string)$url);
        }
    }

}
