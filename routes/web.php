<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', 'FrontPage\PagesController@index')->name('index');
Route::get('/how-it-works', 'FrontPage\PagesController@works')->name('works');
Route::get('/about', 'FrontPage\PagesController@about')->name('about');
Route::get('/blog', 'FrontPage\PagesController@blog')->name('blog');
Route::get('/contact', 'FrontPage\PagesController@contact')->name('contact');
Route::get('/tos', 'FrontPage\PagesController@tos')->name('tos');
Route::get('/privacy', 'FrontPage\PagesController@privacy')->name('privacy');
Route::get('/faq', 'FrontPage\PagesController@faq')->name('faq');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group([ 'as'=>'admin.', 'prefix'=>'admin', 'namespace' => 'Admin', 'middleware' => ['auth','admin'] ],
function(){
    Route::get('dashboard', 'DashboardController@index')->name('dashboard');
    Route::resource('sell', 'SellController');
});

Route::group([ 'as'=>'user.', 'prefix'=>'user', 'namespace' => 'User', 'middleware' => ['auth','user'] ],
function(){
    Route::get('dashboard', 'DashboardController@index')->name('dashboard');
    Route::get('transactions', 'TransactionController@transaction')->name('transaction');
    Route::get('profile', 'ProfileController@profile')->name('profile');
});

