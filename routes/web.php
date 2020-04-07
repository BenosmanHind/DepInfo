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




Route::get('/admins', function () {
    return view('admins');
});

Route::get('/choose', function () {
    return view('choose');
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



Route::get('/registerteacher', function () {
    return view('Auth.registerteacher');
});

Route::get('/etudiants', 'EtudiantController@index')->name('etudiants');


Route::get('/enseignants', 'EnseignantController@index')->name('enseignants');

Route::get('etudiants/{id}','EtudiantController@destory');


Route::get('enseignants/{id}','EnseignantController@destory');


