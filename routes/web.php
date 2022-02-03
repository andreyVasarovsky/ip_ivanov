<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\IndexController;
use App\Http\Controllers\HomeController;

Auth::routes();


Route::get('/', 'HomeController@index');
Route::get('/home', [HomeController::class, 'index'])->name('home');


Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'middleware' => ['auth', 'admin']], function() {
    Route::get('/', 'IndexController@index')->name('admin.index');
    Route::group(['namespace' => 'Fertilizer'], function() {
        Route::get('/fertilizer', 'IndexController@index')->name('admin.fertilizer.index');
    });
    Route::group(['namespace' => 'Client'], function() {
        Route::get('/clients', 'IndexController@index')->name('admin.client.index');
    });
});
