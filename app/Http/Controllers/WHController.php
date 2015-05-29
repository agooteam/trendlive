<?php namespace TrendLive\Http\Controllers;

use TrendLive\Http\Requests;
use TrendLive\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Collective\Remote\RemoteFacade as SSH;

class WHController extends Controller {

    public function pull(){
        $branch = $_ENV['GIT_BRANCH'];
        SSH::into('production')->run(array(
            'cd ~',
            'git pull origin '.$branch
        ), function($line) {
            echo $line.PHP_EOL; // outputs server feedback
        });
    }

}