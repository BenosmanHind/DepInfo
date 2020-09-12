<?php

namespace App\Http\Controllers;

use App\Exam_admin;
use App\Exam_teacher;
use App\Examen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class StudentExamenController extends Controller
{
    //
    public function index(){

        // examens / controls final
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
      


        //examen individuel

        if(Auth::user()->specialite ){

            $examsS1 = DB::table('modules')
            ->join('exam_teachers', 'modules.id', '=', 'exam_teachers.module_id')
            ->where('specialite',Auth::user()->specialite)->where('promo',Auth::user()->promo)
            ->where('semestre','S1')->get();

            $examsS2 = DB::table('modules')
            ->join('exam_teachers', 'modules.id', '=', 'exam_teachers.module_id')
            ->where('specialite',Auth::user()->specialite)->where('promo',Auth::user()->promo)
            ->where('semestre','S2')->get();
           
         
           
        }
        else{
            $examsS1  = DB::table('modules')
            ->join('exam_teachers', 'modules.id', '=', 'exam_teachers.module_id')
            ->where('promo',Auth::user()->promo)
            ->where('semestre','S1')->get();

            $examsS2 = DB::table('modules')
            ->join('exam_teachers', 'modules.id', '=', 'exam_teachers.module_id')
            ->where('promo',Auth::user()->promo)
            ->where('semestre','S2')->get();
            
        }

        return  view('dashbord.etudiant.mes-examens',[
            'examsS1'=>$examsS1,
            'examsS2'=>$examsS2,
            'examensS1'=>$examensS1,
            'examensS2'=>$examensS2,
            
            
            
            ]);
    }

}
