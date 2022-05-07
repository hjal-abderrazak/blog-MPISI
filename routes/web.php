<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
Route::get('/','WelcomeController@showView');
/*Route::get('articles/java', function () {
    return view('java');
});
Route::get('articles/php', function () {
    return view('php');
});
Route::get('articles/cpp', function () {
    return view('cpp');
});*/
Route::get('articles/login', function () {
    return view('login');
});
Route::get('articles/register', function () {
    return view('register');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('contact', 'ContactController@showView');
Route::post('contact', 'ContactController@addContact');
Route::get('/users', 'UsersController@showUsers')->middleware('auth','admin');
Route::get('/list_contact', 'ContactController@showAllContacts')->middleware('auth','admin');
Route::get('contact/delete/{id}','ContactController@delete')->name('delete');
Route::get('/detail/{id}','ContactController@detail')->name('detail');

Route::get('course/{id}','CourseController@showCourse');
Route::get('addcourse','CourseController@showaddcourse')->middleware('auth','admin');;
Route::post('addcourse','CourseController@addCourse')->middleware('auth','admin');
Route::get('deletecourse/{id}','CourseController@deleteCourse')->middleware('auth','admin');;

Route::get('/detail_user/{id}','UsersController@detail')->name('detailUser');
Route::get('/profile','ProfileController@show');