<?php namespace TrendLive\Http\Controllers;

use Illuminate\Support\Facades\View;
use TrendLive\Http\Requests;
use TrendLive\Http\Controllers\Controller;

use Illuminate\Http\Request;

class IndexController extends Controller {


	public function index(){
        return view('Index');
	}



}
