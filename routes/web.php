<?php

use App\Http\Controllers\BatimentController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\Site\SiteController;
use App\Http\Controllers\TypepouletController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth']], function() {
    Route::resource('users', UserController::class);
    Route::resource('roles', RoleController::class);
    Route::resource('permissions', PermissionController::class);
});

Route::group(['prefix' => 'parametrages', 'middleware' => 'auth'], function(){
    Route::get('site', [SiteController::class, 'page'])->name('parametrages.site');
    Route::get('batiment', [BatimentController::class, 'page'])->name('parametrages.batiments');
    Route::get('type_poulet', [TypepouletController::class, 'page'])->name('parametrages.type_poulets');
});