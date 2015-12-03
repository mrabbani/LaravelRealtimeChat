<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {

    return 'go to /fire';
//    return view('welcome');
});
Route::get('/t', function () {

//    return 'go to /fire';
    return view('sample');
});

Route::get('fire', function() {
//   return asset('js');
    event(new \App\Events\NotificationEvent());
    return 'event fired';
});

Route::get('test', function() {
   return view('test');
});