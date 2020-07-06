<?php


namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class HomeController extends  BaseController
{
    public function showWelcome(){
        /*return 'Home Controller Nguyen Dac Dat';*/
            /*return view('hello');*/
        return view('index');
    }
}