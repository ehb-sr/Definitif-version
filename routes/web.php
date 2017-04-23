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

Route::get('about', 'CitaatController@getAll');

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

Route::get('adminHome', function() {
    return view('Admin/admin');
});

//citaat

Route::get('adminCreateCitaat', function() {
    return view('Admin/citaatAanmaken');
});
Route::post('adminCreateCitaat', array('uses'=>'CitaatAdminController@create'));
Route::get('/deletecitaat/{ID}','CitaatAdminController@delete');
Route::get('adminOverzichtCitaat', 'CitaatAdminController@getAll');
Route::delete('adminOverzichtCitaat/{id}', array('uses' => 'CitaatAdminController@destroy'));



//Stuvers

Route::get('adminCreateStuver', function() {
    return view('Admin/stuversAanmaken');
});
Route::post('adminCreateStuver', array('uses'=>'StuversAdminController@create'));
Route::get('adminOverzichtStuver', 'StuversAdminController@getAll');

//Raden

Route::get('adminCreateRaden', function() {
    return view('Admin/radenAanmaken');
});
Route::get('adminOverzichtRaden', 'RadenAdminController@getAll');

//dossiers

Route::get('adminCreateDossier', function() {
    return view('Admin/dossierAanmaken');
});

Route::post('adminCreateDossier', array('uses'=>'DossierAdminController@create'));

Route::get('adminOverzichtDossier', 'DossierAdminController@getAll');