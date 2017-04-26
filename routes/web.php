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

use Illuminate\Support\Facades\App;

Route::get('/', 'pages\HomePage@getContent');
//Route::get('/', function () {
//    return view('base');
//});

Route::get('about', 'pages\AboutPage@getContent');
//Route::get('about', function() {
//   return view('about/content');
//});

Route::get('stuvers', 'pages\StuverPage@getContent');
//Route::get('stuvers', function() {
//    return view('stuvers/content');
//});

Route::get('raden', 'pages\RadenPage@getContent');
//Route::get('raden', function () {
//    return view('raden/content');
//});

Route::get('dossier', 'pages\DossierPage@getContent');
//Route::get('dossier', function () {
//    return view('dossier/content');
//});

Route::get('verkiezing', function() {
   return view('verkiezing/content');
});

Route::get('contact', function() {
    return view('contact/content');
});

Route::post('addComment', 'pages\DossierPage@AddComment');

Route:: post('contact', 'pages\ContactPage@sendForm');

// refactor to controller
Route::get('language/{locale}', function ($locale) {
    session(['applocale' => $locale]);
    App::setLocale($locale);
    return redirect()->back();
});