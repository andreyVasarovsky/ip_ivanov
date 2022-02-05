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
        Route::get('/culture_groups', 'IndexController')->name('admin.culture_group.index');
        Route::get('/culture_groups/create', 'CreateController')->name('admin.culture_group.create');
        Route::post('/culture_groups/store', 'StoreController')->name('admin.culture_group.store');
        Route::get('/culture_groups/{group}', 'ShowController')->name('admin.culture_group.show');
        Route::get('/culture_groups/{group}/edit', 'EditController')->name('admin.culture_group.edit');
        Route::patch('/culture_groups/{group}', 'UpdateController')->name('admin.culture_group.update');
        Route::delete('/culture_groups/{group}', 'DestroyController')->name('admin.culture_group.destroy');
    });
    Route::group(['namespace' => 'User'], function() {
        Route::get('/users', 'IndexController')->name('admin.user.index');
        Route::get('/users/create', 'CreateController')->name('admin.user.create');
        Route::post('/users/store', 'StoreController')->name('admin.user.store');
        Route::get('/users/{group}', 'ShowController')->name('admin.user.show');
        Route::get('/users/{group}/edit', 'EditController')->name('admin.user.edit');
        Route::patch('/users/{group}', 'UpdateController')->name('admin.user.update');
        Route::delete('/users/{group}', 'DestroyController')->name('admin.user.destroy');
    });
});
