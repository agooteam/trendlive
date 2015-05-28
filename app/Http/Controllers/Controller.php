<?php namespace TrendLive\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesCommands;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Auth;
abstract class Controller extends BaseController {

	use DispatchesCommands, ValidatesRequests;

    public function check_auth($to){
        if(!Auth::check()) return redirect($to);//редирект на профиль
        return redirect('/');
    }

}
