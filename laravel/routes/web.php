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
Route::get('/test/', function () {
   return ('Мяу');
});

Route::get('/dir/test/', function () {
   return ('Хасовское сообщение');
});

Route::get('/post/{id}', function ($id) {
   return 'пост ' . $id; // Пост выводит под любым номером 
});


Route::get('/post/{name}/{surname}', function ($name, $surname) {
		return $name . ' ' . $surname; // обрабатывает параметра входных данных имя и фамилии юзера
});


Route::get('/city/city/{city?}', function ($city = 'hasvegas') {
	return 'Название города' . $city;                              // Необязательный параметры маршрута
});


Route::get('/posts/{id}', function ($id) {
		return 'Проверка айди ' . $id;
	})->where('id', '[0-9]+');                             // Ограниченные параметра маршрута

   
Route::get('/postik/{name}/{id}', function ($name, $id) {
		return 'имя нефора ' . $name . ' ' . $id;
	})->where('name', '[a-z0-9_-]+')->where('id', '[0-9]+');  // Ограничение нескольких параметров

   
Route::get('/post/{id}', function ($id) {
		//
	})->whereNumber('id');                  // Метод ограничывает параметры цифрами

Route::get('/post/{name}', function ($name) {
		
	})->whereAlpha('name');                    // Метод ограничывает параметр только буквами

Route::get('/post/{name}', function ($name) {
		//
	})->whereAlphaNumeric('name');             // Метод ограничывает параметры цифрами и буквами (Это были шаблонные ограничение)

