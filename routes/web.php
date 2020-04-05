<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/etudiants', function () {
    return view('etudiants');
});

Route::get('/enseignants', function () {
    return view('enseignants');
});

Route::get('/admins', function () {
    return view('admins');
});

Route::get('/teacher-signup', function () {
    return view('teacher-signup');
});


Route::get('/student-signup', function () {
    return view('student-signup');
});

Route::get('/test', function () {
    dd(Auth::guard('teacher')->attempt(['name' => 'Lahcene', 'password'=>'crazydz14l']));
});

Route::get('/register2', function () {
    return view('Auth.register2');
});




