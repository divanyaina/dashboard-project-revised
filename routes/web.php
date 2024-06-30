<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\MetabaseController;
use App\Http\Controllers\TestingController;
use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Route;


Route::get('/login',[LoginController::class, 'index'])->name('login');
Route::post('/loginprocess',[LoginController::class, 'loginprocess'])->name('loginprocess');
Route::get('/logout',[LoginController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function(){
    Route::get('/home',[MetabaseController::class, 'home']) ->name('home');
});

Route::middleware('auth')->group(function(){

    Route::get('/vpp-its',[MetabaseController::class, 'dashboard_vpp_its']);

    Route::get('/der1-its',[MetabaseController::class, 'dashboard_der1_its']);

    Route::get('/der2-its',[MetabaseController::class, 'dashboard_der2_its']);

    Route::get('/der3-its',[MetabaseController::class, 'dashboard_der3_its']);

    Route::get('/vpp-bawean',[MetabaseController::class, 'dashboard_vpp_bawean']);

    Route::get('/balaidesa-bawean',[MetabaseController::class, 'dashboard_balaidesa']);

    Route::get('/pesantren-bawean',[MetabaseController::class, 'dashboard_pesantren']);

    Route::get('/masjidalkautsar-bawean',[MetabaseController::class, 'dashboard_masjidalkautsar']);

    Route::get('/its',[MetabaseController::class, 'dashboard_vpp_its']);

    Route::get('/bawean',[MetabaseController::class, 'dashboard_vpp_bawean']);

})->middleware('level:admin, pengelola');

Route::middleware('auth')->group(function(){

    Route::get('/its',[MetabaseController::class, 'dashboard_vpp_its']);

    Route::get('/bawean',[MetabaseController::class, 'dashboard_vpp_bawean']);

})->middleware('level:admin, eksekutif');

Route::middleware('auth')->group(function(){

    Route::get('/home-pemilik',[MetabaseController::class, 'dashboard_home_pemilik']) ->name('home-pemilik');

    Route::get('/der1-its',[MetabaseController::class, 'dashboard_der1_its']);

    Route::get('/der2-its',[MetabaseController::class, 'dashboard_der2_its']);

    Route::get('/der3-its',[MetabaseController::class, 'dashboard_der3_its']);

})->middleware('level:admin, pemilik');



