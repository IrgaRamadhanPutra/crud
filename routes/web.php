<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\App;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/barang/destroy/{id}', 'sg_barang@destroy');
Route::resource('/barang', 'sg_barang');
Route::get('/pegawai/list', 'sg_pegawai@list');
Route::get('/pegawai/destroy/{id}', 'sg_pegawai@destroy');
Route::resource('/pegawai', 'sg_pegawai');

Route::resource('/posts', 'PostController');
Route::group(['prefix' => '{locale}'], function () {
    if (in_array(Request::segment(1), config('app.locales'))) {
        App::setLocale(Request::segment(1));

        Route::get('/multi-bahasa', function () {
            return view('multi-bahasa');
        });
    }
});
