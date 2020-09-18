<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Document;
use App\Exam_teacher;
use App\Enseignement;

use App\User;

class EnsgdashboardController extends Controller
{
    //
     public function index()
    {
        $cours = Document::where('user_id','=',Auth::user()->id)->where('doc' ,'=','cours')->count();
        $tds = Document::where('user_id','=',Auth::user()->id)->where('doc' ,'=','TD')->count();
        $tps = Document::where('user_id','=',Auth::user()->id)->where('doc' ,'=','TP')->count();
        $examen = Exam_teacher::where('user_id','=',Auth::user()->id)->count();
       // $notes = Document::where('user_id','=',Auth::user()->id)->where('doc' ,'=','Note')->count();


        return view('/dashbord/enseignant/home',['cours' => $cours , 'tds' => $tds , 'tps' => $tps , 'examen' => $examen]);
    }
}
