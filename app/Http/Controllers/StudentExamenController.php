<?php

namespace App\Http\Controllers;

use App\Exam_admin;
use App\Examen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentExamenController extends Controller
{
    //
    public function index(){
        if(Auth::user()->specialite ){
           
            $examensS1 = Exam_admin::where('specialite',Auth::user()->specialite)->where('promo',Auth::user()->promo)
            ->where('semestre','S1')->get();
            $examensS2 = Exam_admin::where('specialite',Auth::user()->specialite)->where('promo',Auth::user()->promo)
            ->where('semestre','S2')->get();

        }
        else{
            $examensS1 = Exam_admin::where('promo',Auth::user()->promo)
            ->where('semestre','S1')->get();
            $examensS2 = Exam_admin::where('promo',Auth::user()->promo)
            ->where('semestre','S2')->get();
        }
       
        return  view('dashbord.etudiant.mes-examens',[
            'examensS1'=>$examensS1,
            'examensS2'=>$examensS2,
            ]);
    }

}
