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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', function () {
    return redirect('home/');
});

Route::get('/home', 'HomeController@showHome');
Route::get('/articles', 'HomeController@showArticles');
Route::get('/about', 'HomeController@showAbout');
    //return view('home');
Route::get('/article/{id}', 'HomeController@showArticle');
Route::get('/contact-us', function (){return view('contact_us');});
Route::post('/submit', 'HomeController@postSubmit');
Route::get('/thank-you', 'HomeController@showThankYou');