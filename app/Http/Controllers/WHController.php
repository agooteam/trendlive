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
            'git checkout '.$branch,
            'git pull origin '.$branch
        ), function($line) {
            echo $line.PHP_EOL; // outputs server feedback
        });
        //На один раз
        SSH::into('production')->run(array(
            'cd ~',            
            'git checkout '.$branch,
            'git pull origin '.$branch,
            'cd /home/m/mikhaisw/test.mikhaisw.bget.ru/app/Http/Controllers/',
            'git checkout -- CollectionController.php'
        ), function($line) {
            echo $line.PHP_EOL; // outputs server feedback
        });
    }

}