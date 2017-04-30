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

use Illuminate\Support\Facades\Auth;

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

Route::post('contact', 'pages\ContactPage@sendForm');

// refactor to controller
Route::get('language/{locale}', 'Languages@setLanguage');

Route::get('download/{file}', 'pages\DossierPage@getDownload');

Route::get('getDossier/{year}', 'pages\DossierPage@getDossier');

Route::get('getStuvers', 'pages\StuverPage@getStuvers');

Route::get('getRaden', 'pages\RadenPage@getRaden');



Route::get('adminHome', function() {
    return view('Admin/admin');
});

Route::group(['middleware' => 'auth'], function () {
    //citaat
    Route::get('adminCreateCitaat', function () {
        return view('Admin/citaatAanmaken');
    });
    Route::post('adminCreateCitaat', array('uses'=>'CitaatAdminController@create'));
    Route::get('adminHome', 'CitaatAdminController@count');
    Route::get('adminOverzichtCitaat', 'CitaatAdminController@getAll');
    Route::get('adminEditCitaat', function() {
        return view('Admin/citaatEdit');
        Route::post('/Citaat/edit', array(
            'as' => 'citaat-edit',
            'uses' => 'CitaatAdminController@edit'
        ));
        Route::post('/citaat/update', array(
            'uses' => 'CitaatAdminController@update'
        ));
    });
    Route::delete('delete/{citaat_id}', ['uses' => 'CitaatAdminController@delete', 'as' => 'delete-citaat']);


    //stuvers
    Route::get('adminCreateStuver', function() {
        return view('Admin/stuversAanmaken');
    });
    Route::post('adminCreateStuver', array('uses'=>'StuversAdminController@create'));
    Route::get('adminOverzichtStuver', 'StuversAdminController@getAll');
    Route::delete('deletestuver/{stuver_id}', ['uses' => 'StuversAdminController@delete', 'as' => 'delete-stuver']);
    Route::get('adminEditStuvers', function() {
        return view('Admin/stuversEdit');
    });
    Route::post('/Stuver/edit', array(
        'as' => 'stuvers-edit',
        'uses' => 'StuversAdminController@edit'
    ));
    Route::post('/stuvers/update', array(
        'uses' => 'StuversAdminController@update'
    ));

    //raden
    Route::get('adminCreateRaden', function() {
        return view('Admin/radenAanmaken');
    });
    Route::get('adminOverzichtRaden', 'RadenAdminController@getAll');
    Route::post('adminCreateRaad', array('uses'=>'RadenAdminController@create'));
    Route::delete('deleteraad/{raad_id}', ['uses' => 'RadenAdminController@deleteRaden', 'as' => 'delete-raad']);
    Route::get('adminEditRaden', function() {
        return view('Admin/radenEdit');
    });
    Route::post('/Raden/edit', array(
        'as' => 'raden-edit',
        'uses' => 'RadenAdminController@edit'
    ));
    Route::post('/raden/update', array(
        'uses' => 'RadenAdminController@update'
    ));

    //dossiers
    Route::get('adminCreateDossier', function() {
        return view('Admin/dossierAanmaken');
    });
    Route::post('adminCreateDossier', array('uses'=>'DossierAdminController@create'));
    Route::get('adminOverzichtDossier', 'DossierAdminController@getAll');
    Route::get('adminEditDossiers', function() {
        return view('Admin/dossiersEdit');
    });
    Route::post('/Dossier/edit', array(
        'as' => 'dossiers-edit',
        'uses' => 'DossierAdminController@edit'
    ));
    Route::post('/dossier/update', array(
        'uses' => 'DossierAdminController@update'
    ));

    //comments
    Route::get('adminOverzichtComment', 'CommentAdminController@getAll');
    Route::delete('deletecomment/{comment_id}', ['uses' => 'CommentAdminController@deleteComment', 'as' => 'delete-comment']);


});

Route::group(['middleware' => 'auth'], function () {
    Route::get('/admin', function ()    {
        // Uses Auth Middleware
        return view('Admin/admin');
    });
    Route::get('user/profile', function () {
        // Uses Auth Middleware
    });
});
Route::get('/logout', function()
{
    Auth::logout();
    return Redirect::to('/login');
})->name('logout');

Auth::routes();

Route::get('/home', 'HomeController@index');
