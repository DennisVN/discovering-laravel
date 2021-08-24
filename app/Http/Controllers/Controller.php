<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function helloSjaakie()
    {
        return view('hello');
    }
    public function header() {
        return view('header');
    }
    public function form() {
        return view('form');
    }
    public function footer() {
        return view('footer');
    }
}
