<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [\App\Http\Controllers\Controller::class, 'home']);
Route::get('/hello-sjaakie', [\App\Http\Controllers\Controller::class, 'helloSjaakie']);
Route::get('form', [\App\Http\Controllers\Controller::class, 'form']);
Route::post('register', [\App\Http\Controllers\Controller::class, 'postView']);
