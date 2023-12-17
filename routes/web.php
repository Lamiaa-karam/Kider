<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('index', fn () => view('index'));
Route::get('about', fn () => view('about'));
Route::get('classes', fn () => view('classes'));
Route::get('facilities', fn () => view('facilities'));
Route::get('team', fn () => view('team'));
Route::get('call-to-action', fn () => view('call-to-action'));
Route::get('appointment', fn () => view('appointment'));
Route::get('testimonial', fn () => view('testimonial'));
Route::fallback(fn () => view('404'));
Route::get('contact', fn () => view('contact'));