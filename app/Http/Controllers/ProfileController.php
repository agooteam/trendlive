<?php namespace TrendLive\Http\Controllers;

use TrendLive\Http\Requests;
use TrendLive\Http\Controllers\Controller;
use Auth;
use Illuminate\Http\Request;

class ProfileController extends Controller {

    public function index(){//Стартовая страница профиля
        $this->check_auth('/profile/login');
    }

    public function get_login(){//страница авторизации
        if(Auth::check())Redirect::to('/profile');
        else return view('Login');
    }
}
