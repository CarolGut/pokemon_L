<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('name/{name}', function ($name) {
    return 'Hola soy '.$name;
});

Route::get('/my_first_route', function () {
    return 'Hello World.';
});

Route::get('prueba/{name}', 'tsController@prueba');

Route::resource('trainers', 'TrainerController');
