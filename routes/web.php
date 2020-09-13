<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Bourse;
use GuzzleHttp\Psr7\Request;

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

Route::get('/dashbord/enseignant/reglement', function () {
    return view('reglement');
});

Route::get('/dashbord/etudiant/reglement', function () {
    return view('reglement');
});

//routes Enseignants
Route::get('/enseignants', 'EnseignantController@index')->name('enseignants');
Route::get('enseignants/validate/{id}','ValidateController@accept2');
Route::get('enseignants/{id}','EnseignantController@destory');
Route::resource('dashbord/enseignant/modules','ModuleEnsController');
Route::resource('dashbord/enseignant/documents','DocumentController');
Route::resource('dashbord/enseignant/examens','ExamenController');


// ajx enseignant

Route::get('/moduleAjax/{promo}','AjaxController@getModules');
Route::get('/moduleAjax/{promo}/{specialite}','AjaxController@getModules2');
Route::resource('/Mesmodules','EnseignementController');


//routes Etudiants
Route::get('/etudiants', 'EtudiantController@index')->name('etudiants');
Route::get('etudiants/{id}','EtudiantController@destory');
Route::get('dashbord/etudiant/');





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

Route::get('/boursepage',function(){
    $bourse=Bourse::all();
    return view('boursepage',['bourses'=>$bourse]);
});

   

//Modules Route

Route::resource('/modules', 'ModuleController');

Route::get('/addmodules',function(){
    return view('addmodules');
});

//Etudiant Mes modules route

Route::get('/mes-modules', 'EtudiantController@mes_modules');

//Docuements
Route::resource('/documents', 'DocumentController');


//Examens

Route::resource('/examens', 'ExamteacherController');
Route::resource('/gerer-examen', 'ExamadminController');


//Etudiant documents route
Route::resource('/student-documents', 'StudentDocumentController');
Route::get('/documentView/{id}', 'StudentDocumentController@documentView');


//Etudiant  examens route

Route::resource('/student-examens', 'StudentExamenController');


// Profil route

Route::resource('/dashbord/enseignant/profil_enseignant','ProfilController');
Route::resource('/dashbord/etudiant/profil_etudiant','ProfilController');
Route::resource('/profil_admin','ProfilController');

// Emploi du temps route
Route::resource('/planning_student', 'PlanningController');

Route::resource('/student-planning', 'PlanningStudentController');

// Task route
//Route::get('/dashbord/enseignant/home', 'TaskController@index');
//Route::post('/dashbord/enseignant/home', 'TaskController@store');
//Route::delete('/task/{task}', 'TaskController@destroy');

