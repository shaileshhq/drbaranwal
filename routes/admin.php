<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\LogoController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\AwardController;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\EnquiryController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\MissionController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\SuperDoctorController;
use App\Http\Controllers\WebsiteSetupController;
use App\Http\Controllers\ServiceEnquiryController;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Auth::routes();
Route::group(['middleware' => ['admin']], function(){
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('/slider', SliderController::class);
Route::resource('/gallery', GalleryController::class);
Route::resource('/award', AwardController::class);
Route::resource('/blog',BlogController::class);
Route::resource('/media', MediaController::class);
Route::resource('/service', ServiceController::class);
Route::resource('/enquiry', EnquiryController::class);
Route::resource('/service-enquiry', ServiceEnquiryController::class);
Route::resource('/appointment', AppointmentController::class);
Route::resource('/website_setup', WebsiteSetupController::class);
Route::resource('/team', TeamController::class);
Route::resource('/doctor', DoctorController::class);
Route::resource('/superdoctor', SuperDoctorController::class);
Route::resource('/mission', MissionController::class);

});





