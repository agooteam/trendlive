<?php namespace TrendLive\Http\Controllers;

use TrendLive\Http\Requests;
use TrendLive\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Collective\Remote\RemoteFacade as SSH;

class WebhooksController extends Controller {

    public function github_pull(){
        $branch = $_ENV['GIT_BRANCH'];
        SSH::into('production')->run(array(
            'cd ~',
            'git pull origin test/'.$branch
        ), function($line) {
            echo $line.PHP_EOL; // outputs server feedback
        });
    }

}