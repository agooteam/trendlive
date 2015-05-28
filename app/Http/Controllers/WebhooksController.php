<?php namespace TrendLive\Http\Controllers;

use TrendLive\Http\Requests;
use TrendLive\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Collective\Remote\RemoteFacade as SSH;

class WebhooksController extends Controller {

    public function gihub_pull(){
        SSH::into('production')->run(array(
            'cd ~',
            'git pull origin master'
        ), function($line) {
            echo $line.PHP_EOL; // outputs server feedback
        });
    }

}