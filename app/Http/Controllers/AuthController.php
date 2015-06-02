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
            return dd($token);
            $param = $token-> getExtraParams();
            $vk_id = $param['user_id'];
           return $result = json_decode($vk->request('/method/getProfiles?uid='.$vk_id.'&access_token='.$token), true);


        }
        else{
            $url = $vk->getAuthorizationUri();
            return redirect((string)$url);
        }
    }

}
