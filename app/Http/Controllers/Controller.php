<?php namespace TrendLive\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesCommands;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Auth;
abstract class Controller extends BaseController {

	use DispatchesCommands, ValidatesRequests;

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
