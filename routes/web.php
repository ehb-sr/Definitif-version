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
    return view('base');
});

Route::get('about', function() {
   return view('about/content');
});

Route::get('stuvers', function() {
    return view('stuvers/content');
});

Route::get('raden', function () {
    return view('raden/content');
});

Route::get('dossier', function () {
    return view('dossier/content');
});

Route::get('verkiezing', function() {
   return view('verkiezing/content');
});

Route::get('contact', function() {
    return view('contact/content');
});