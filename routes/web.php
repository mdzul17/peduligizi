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
Route::get('/rekomendasi', 'RekomendasiController@index')->name('rekomendasi');

Route::prefix('admin')
    ->namespace('Admin')
    ->middleware(['auth','admin'])
    ->group(function(){
        Route::get('/', 'DashboardController@index')->name('dashboard');
        Route::resource('artikel', 'ArtikelController');
        Route::resource('galeri-artikel', 'GaleriArtikelController');
        Route::resource('menu', 'MenuController');
        Route::resource('galeri-menu', 'GaleriMenuController');
});
Auth::routes();
