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

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();

Route::get('/products', 'sendingCat@select')->name('ultime')->middleware('auth');
Route::get('/categories','sendingCat@selectByCategories')->name('ultimax')->middleware('auth');
Route::get('/add', 'HomeController@index')->name('home')->middleware('auth');
Route::post('/sendingProduct', 'sendingCat@insert')->middleware('auth');
Route::get('/productsByCategories', 'sendingCat@selectByCategories')->middleware('auth');
Route::get('/deleteUnique/{id}', 'sendingCat@deleteUnique')->middleware('auth');
Route::get('/redirectmodify/{id}', 'sendingCat@redirectmodify')->middleware('auth');
Route::get('/updateProduct/{id}', 'sendingCat@updateProduct')->middleware('auth');