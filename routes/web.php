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
        Route::get('/fertilizer', 'IndexController')->name('admin.fertilizer.index');
        Route::get('/fertilizer/create', 'CreateController')->name('admin.fertilizer.create');
        Route::post('/fertilizer/store', 'StoreController')->name('admin.fertilizer.store');
        Route::get('/fertilizer/{fertilizer}', 'ShowController')->name('admin.fertilizer.show');
        Route::get('/fertilizer/{fertilizer}/edit', 'EditController')->name('admin.fertilizer.edit');
        Route::patch('/fertilizer/{fertilizer}', 'UpdateController')->name('admin.fertilizer.update');
        Route::delete('/fertilizer/{fertilizer}', 'DestroyController')->name('admin.fertilizer.destroy');
    });
    Route::group(['namespace' => 'Client'], function() {
        Route::get('/clients', 'IndexController@index')->name('admin.client.index');
    });
});
