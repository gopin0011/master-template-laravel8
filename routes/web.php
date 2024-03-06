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

Route::group(['middleware' => ['auth']], function () {
    Route::get('/', function () {
        return view('layouts.base');
    })->name('app.home');

    Route::get('/pages', function () {
        return view('pages.home');
    });

    // Route::get('/test', function () {
    //     return view('pages.test');
    // });

    Route::post('broadcasting/auth', [\App\Http\Controllers\PusherController::class, 'auth']);
});

Auth::routes();


Route::get('test', [\App\Http\Controllers\PusherController::class, 'test']);

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
