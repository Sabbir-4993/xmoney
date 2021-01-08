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

Route::get('/', function () { return view('frontend.index'); });
Route::get('/how-it-works', function () { return view('frontend.works'); });
Route::get('/about', function () { return view('frontend.about'); });
Route::get('/blog', function () { return view('frontend.blog'); });
Route::get('/contact', function () { return view('frontend.contact'); });
Route::get('/tos', function () { return view('frontend.tos'); });
Route::get('/privacy', function () { return view('frontend.privacy'); });
Route::get('/faq', function () { return view('frontend.faq'); });


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
