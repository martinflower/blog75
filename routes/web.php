<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
}
);*/
Route::get('/', 'PagesController@home');
Route::get('/about', 'PagesController@about');
Route::get('/contact', 'PagesController@contact');

Route::get('/file',function() {
    $file= 'iso.pdf';
    return Response::file($file);
});

Route::get('/{squirrel}',function ($squirrel) {
    $data['squirrel']=$squirrel;
    return View::make('simple',$data);
}
);

Route::resource('tasks','TaskController');
