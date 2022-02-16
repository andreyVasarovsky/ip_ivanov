<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Auth::routes();


Route::get('/', 'HomeController@index');
Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::group(['namespace' => 'FastRegistration', 'prefix' => 'fast_registration'], function() {
    Route::get('/', 'IndexController')->name('fast_registration.index');
    Route::get('/create', 'CreateController')->name('fast_registration.create');
});

Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'middleware' => ['auth', 'admin']], function() {
    Route::get('/', 'IndexController@index')->name('admin.index');
    Route::group(['namespace' => 'Fertilizer', 'prefix' => 'fertilizers'], function() {
        Route::get('/', 'IndexController')->name('admin.fertilizer.index');
        Route::post('/', 'IndexController')->name('admin.fertilizer.index');
        Route::get('/create', 'CreateController')->name('admin.fertilizer.create');
        Route::get('/deleted', 'DeletedListController')->name('admin.fertilizer.deleted');
        Route::post('/import', 'ImportController')->name('admin.fertilizer.import');
        Route::get('/{fertilizer}', 'ShowController')->name('admin.fertilizer.show');
        Route::get('/{fertilizer}/edit', 'EditController')->name('admin.fertilizer.edit');
        Route::post('/store', 'StoreController')->name('admin.fertilizer.store');
        Route::patch('/{fertilizer}', 'UpdateController')->name('admin.fertilizer.update');
        Route::delete('/{fertilizer}', 'DestroyController')->name('admin.fertilizer.destroy');

    });
    Route::group(['namespace' => 'Client', 'prefix' => 'clients'], function() {
        Route::get('/', 'IndexController')->name('admin.client.index');
        Route::post('/', 'IndexController')->name('admin.client.index');
        Route::get('/create', 'CreateController')->name('admin.client.create');
        Route::get('/deleted', 'DeletedListController')->name('admin.client.deleted');
        Route::post('/import', 'ImportController')->name('admin.client.import');
        Route::post('/store', 'StoreController')->name('admin.client.store');
        Route::get('/{client}', 'ShowController')->name('admin.client.show');
        Route::get('/{client}/edit', 'EditController')->name('admin.client.edit');
        Route::patch('/{client}', 'UpdateController')->name('admin.client.update');
        Route::delete('/{client}', 'DestroyController')->name('admin.client.destroy');
    });
    Route::group(['namespace' => 'CultureGroup', 'prefix' => 'culture_groups'], function() {
        Route::get('/', 'IndexController')->name('admin.culture_group.index');
        Route::get('/create', 'CreateController')->name('admin.culture_group.create');
        Route::get('/deleted', 'DeletedListController')->name('admin.culture_group.deleted');
        Route::post('/store', 'StoreController')->name('admin.culture_group.store');
        Route::get('/{group}', 'ShowController')->name('admin.culture_group.show');
        Route::get('/{group}/edit', 'EditController')->name('admin.culture_group.edit');
        Route::patch('/{group}', 'UpdateController')->name('admin.culture_group.update');
        Route::delete('/{group}', 'DestroyController')->name('admin.culture_group.destroy');
    });
    Route::group(['namespace' => 'User', 'prefix' => 'users'], function() {
        Route::get('/', 'IndexController')->name('admin.user.index');
        Route::get('/create', 'CreateController')->name('admin.user.create');
        Route::get('/deleted', 'DeletedListController')->name('admin.user.deleted');
        Route::post('/store', 'StoreController')->name('admin.user.store');
        Route::get('/{user}', 'ShowController')->name('admin.user.show');
        Route::get('/{user}/edit', 'EditController')->name('admin.user.edit');
        Route::patch('/{user}', 'UpdateController')->name('admin.user.update');
        Route::delete('/{user}', 'DestroyController')->name('admin.user.destroy');
    });
});
