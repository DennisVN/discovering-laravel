<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function home () {
        //TODO : model
        //TODO : query

        return view ('home');
    }

    public function helloSjaakie()
    {
        return view('hello');
    }

    public function postView()
    {
        dd(request()->input('Fergie'));
        return view('home');
    }
}
