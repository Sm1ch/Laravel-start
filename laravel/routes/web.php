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

Route::get('/', function () {
//    return view ('welcome');
    return  ('welcome slish rabotat');
});

Route::get('/post/1', function () {
    return view('Пост №1');
});
//Route::get('/test/', function () {
//    return ('Мяу');
//});
//
//Route::get('/dir/test/', function () {
//    return ('Хасовское сообщение');
//});
//
//Route::get('/post/{id}', function ($id) {
//    return 'пост ' . $id;
//});


