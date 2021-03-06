<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChannelController;

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

Route::get('/test',function(){
    return view('test');
});

Route::middleware('auth')->group(function(){
        /*Route::get('/channel/{channel}/edit','ChannelController@edit')->name('channel.edit');*/

        Route::get('/channel/{channel}/edit', [ChannelController::class, 'edit'])->name('channel.edit');
});