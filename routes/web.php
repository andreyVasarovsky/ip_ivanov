<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Hash; //ToDo remove after tests.

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

Route::get('/user', function (){
    $users = \App\Models\User::all();
    if (!empty($users)){
        foreach ($users AS $user){
            dump($user->id.': '.$user->name);
        }
    }
    return;
});

Route::get('create_user_test', function (){
    $userData = [
        'name' => 'Andrej',
        'email' => 'andrej.vasarovskij@gmail.com',
        'password' => Hash::make('123456789'),
        'role_fk' => 1,
    ];

    $user = \App\Models\User::firstOrCreate([
        'email' => 'andrej.vasarovskij@gmail.com'
    ], $userData);

    //ToDo!
    //Questions:
    //1. Тестил тут создание юзеров. Подключил softDelete, поймал ошибку: если запись считается удаленной (deleted_at != null),
    //   то при вызове firstOrCreate он не найдет этого пользователя и кинет ошибку Duplicate entry. Как правильно такое обходить?
    //   try, catch или есть метод, который сделает restore, если найдет, использовать withTrashed?

    return 'Test User Created. ID:'.$user->id;
});
