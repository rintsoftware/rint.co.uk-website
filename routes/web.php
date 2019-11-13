<?php

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
    return view('welcome', ['pageTitle' => 'Homepage']);
})->name('home');

Route::get('/services', function () {
    return view('services', ['pageTitle' => 'Services']);
})->name('services');

Route::get('/about', function () {
    return view('about', ['pageTitle' => 'About']);
})->name('about');

Route::get('/contact', function () {
    return view('contact', ['pageTitle' => 'Contact']);
})->name('contact');
