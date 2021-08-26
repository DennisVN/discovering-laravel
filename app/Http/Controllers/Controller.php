<?php

namespace App\Http\Controllers;

use App\Models\Learner;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;



class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function home () {
        //DONCE : model
        //TODO : query
        /*$learners = Learner::get();*/
        return view ('home');
    }

    public function helloSjaakie()
    {
        return view('hello');
    }

    public function form ()
    {
        return view('form');

    }

    public function postView()
    {
        $fergie = Learner::get('fergie');
        //$attributes=(request()->input('Fergie'));
        $attributes = request()->only($fergie);
        $learner = Learner::create($attributes);
        return request()->only($fergie);
    }
}
