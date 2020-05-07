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



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Route::get('/student', 'StudentController@index')->name('student');



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


Route::get('/dashbord/etudiant/home', function () {
    return view('Dashbord.Etudiant.home');
});

Route::get('/dashbord/enseignant/home', function () {
    return view('Dashbord.Enseignant.home');
});


//routes Enseignants
Route::get('/enseignants', 'EnseignantController@index')->name('enseignants');
Route::get('enseignants/validate/{id}','ValidateController@accept2');
Route::get('enseignants/{id}','EnseignantController@destory');



//routes Etudiants
Route::get('/etudiants', 'EtudiantController@index')->name('etudiants');
Route::get('etudiants/{id}','EtudiantController@destory');



//Routes Admines

Route::get('/admins', 'AdminController@index')->name('admins');
Route::get('admins/{id}','AdminController@destory');
Route::get('validate/{id}','ValidateController@accept');

Route::get('/article','ArticleController@index');
Route::get('/bourse','BourseController@index');

Route::post('admins/add','AdminController@store');



Route::get('/addadmin', function () {
    return view('addadmin');
});
//route de confirmation si le compte a été accpté

Route::get('/isAccept', function () {
    return view('isAccept');
});

Route::get('/isRegister', function () {
    return view('isRegister');
});


//Events Route

Route::resource('events', 'EventController');

Route::get('/addevent', function () {
    return view('addevent');
});

Route::get('/eventdetail/{id}', 'EventController@eventdetail');
Route::get('/eventspage', 'EventController@eventpage');

//Articles Route

Route::resource('articles', 'ArticleController');


Route::get('/addarticles', function () {
    return view('addarticles');
});

Route::get('/articlesdetail/{id}', 'ArticleController@articlesdetail');
Route::get('/articlespage', 'ArticleController@articlespage');

//Aceuil Route 

Route::get('/','AccueilController@index');

//Bourses Route
Route::resource('bourses', 'BourseController');

Route::get('/addbourse',function(){
    return view('addbourse');
});