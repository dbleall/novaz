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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::get('/', function(){
    return view('home');
});

Route::get('/brand', function(){
    return view('services/brand');
});

Route::get('/webdesign', function(){
    return view('services/webdesign');
});

Route::get('/social_media', function(){
    return view('services/social_media');
});


Route::post('/send-message',[ContactController::class, 'sendEmail'])->name('contact.send'); 