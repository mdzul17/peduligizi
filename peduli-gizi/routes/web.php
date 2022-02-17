<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', 'HomeController@index')->name('home');
Route::get('/article', 'ArticleController@index')->name('article');
Route::get('/article/{id}', 'ArticleController@detail')->name('detail_article');
Route::get('/rekomendasi', 'RekomendasiController@index')->name('rekomendasi');
Route::get('/rekomendasi/{id}', 'RekomendasiController@detail')->name('detail_rekomendasi');

Route::post('hitung','RekomendasiController@hitung')->name('hitung');

Route::prefix('admin')
    ->namespace('Admin')
    ->middleware(['auth','admin'])
    ->group(function(){
        Route::get('/', 'DashboardController@index')->name('dashboard');
        Route::resource('artikel', 'ArtikelController');
        Route::resource('menu', 'MenuController');
});
Auth::routes();

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
