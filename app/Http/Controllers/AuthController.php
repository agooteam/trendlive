<?php namespace TrendLive\Http\Controllers;

use Artdarek\OAuth\Facade\OAuth;
use TrendLive\Http\Requests;
use TrendLive\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller {

    public function PostOnWallVk($response,Request $request){
        return $request->path();
        $code = $request->get('code');//Получаем код
        $collection_id = $request->get('state');//ID коллекции
        $request->all();
        return $request->url();
        $vk = \OAuth::consumer('Vkontakte');
        if ( !is_null($code)){
            $token = $vk->requestAccessToken($code); // получаем ответ
            $access_token = $token->getAccessToken();//токен access
            $param = $token-> getExtraParams();//получаем параметры ответа
            $vk_id = $param['user_id'];//получаем id пользователя
            $message = "Hello, my friend";
            $link = "http://trendlive.ru";
             $result = json_decode($vk->request('https://api.vk.com/method/wall.post?owner_id='.$vk_id.'&access_token='.$access_token), true);
            return dd($result);


        }
        else{
            $url = $vk->getAuthorizationUri();
            return redirect((string)$url);
        }
    }

}
