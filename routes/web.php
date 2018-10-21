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
    return view('welcome');
});
Route::resource('post','PostController');
Auth::routes();
Route::get("/logout","Auth\loginController@logout");
Route::get('/home', 'HomeController@index')->name('home');
Route::post('test','testController@index')->name('test');
Route::get('/dashboard','pagesController@index')->name('Dashboard');
Route::get('/courses','pagesController@courses')->name('Courses');
Route::get("/team","pagesController@team")->name('Network & Security Expo Team');
Route::get("/download","downloadController@index")->name('Download');
Route::get("/download/movies","downloadController@movies")->name('Download - Movies');
Route::get("/download/series","downloadController@series")->name('Download - Series');
Route::get("/download/music","downloadController@music")->name('Download - Music');
Route::get("/download/education","downloadController@education")->name('Download - Education');
Route::get("/gallery","pagesController@gallery")->name('gallery');
Route::get("/instructor","pagesController@instructor")->name('instructor');
Route::get("/about","pagesController@about")->name('about');