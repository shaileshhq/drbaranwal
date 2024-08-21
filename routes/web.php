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

Route::get('/', 'App\Http\Controllers\FrontController@index')->name('index');
Route::get('/about-us', 'App\Http\Controllers\FrontController@about')->name('about');
Route::get('/services', 'App\Http\Controllers\FrontController@service')->name('service');
Route::get('/gallery', 'App\Http\Controllers\FrontController@gallery')->name('gallery');
Route::get('/awards/{type}', 'App\Http\Controllers\FrontController@award')->name('award');
Route::get('/blog', 'App\Http\Controllers\FrontController@blog')->name('blog');
Route::get('/blog/{slug}', 'App\Http\Controllers\FrontController@blogDetail')->name('blog.detail');
Route::get('/contact-us', 'App\Http\Controllers\FrontController@contact')->name('contact');
Route::post('/contact-store', 'App\Http\Controllers\FrontController@contactStore')->name('front.contact.store');
Route::post('/appointment-store', 'App\Http\Controllers\FrontController@appointment')->name('front.appointment.store');
Route::get('/privacy-policy', 'App\Http\Controllers\FrontController@privacy')->name('privacy');
Route::get('/terms-condition', 'App\Http\Controllers\FrontController@terms')->name('terms');
Route::get('/our-mission', 'App\Http\Controllers\FrontController@mission')->name('mission');
Route::get('/our-team', 'App\Http\Controllers\FrontController@team')->name('team');

