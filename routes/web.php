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
        Route::get('/fertilizers', 'IndexController')->name('admin.fertilizer.index');
        Route::get('/fertilizers/create', 'CreateController')->name('admin.fertilizer.create');
        Route::post('/fertilizers/store', 'StoreController')->name('admin.fertilizer.store');
        Route::get('/fertilizers/{fertilizer}', 'ShowController')->name('admin.fertilizer.show');
        Route::get('/fertilizers/{fertilizer}/edit', 'EditController')->name('admin.fertilizer.edit');
        Route::patch('/fertilizers/{fertilizer}', 'UpdateController')->name('admin.fertilizer.update');
        Route::delete('/fertilizers/{fertilizer}', 'DestroyController')->name('admin.fertilizer.destroy');
    });
    Route::group(['namespace' => 'Client'], function() {
        Route::get('/clients', 'IndexController')->name('admin.client.index');
        Route::get('/clients/create', 'CreateController')->name('admin.client.create');
        Route::post('/clients/store', 'StoreController')->name('admin.client.store');
        Route::get('/clients/{client}', 'ShowController')->name('admin.client.show');
        Route::get('/clients/{client}/edit', 'EditController')->name('admin.client.edit');
        Route::patch('/clients/{client}', 'UpdateController')->name('admin.client.update');
        Route::delete('/clients/{client}', 'DestroyController')->name('admin.client.destroy');
    });
    Route::group(['namespace' => 'CultureGroup'], function() {
        Route::get('/culture_group', 'IndexController')->name('admin.culture_group.index');
        Route::get('/culture_group/create', 'CreateController')->name('admin.culture_group.create');
        Route::post('/culture_group/store', 'StoreController')->name('admin.culture_group.store');
        Route::get('/culture_group/{group}', 'ShowController')->name('admin.culture_group.show');
        Route::get('/culture_group/{group}/edit', 'EditController')->name('admin.culture_group.edit');
        Route::patch('/culture_group/{group}', 'UpdateController')->name('admin.culture_group.update');
        Route::delete('/culture_group/{group}', 'DestroyController')->name('admin.culture_group.destroy');
    });
});
