<?php

namespace App\Http\Controllers;

use App\Examen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentExamenController extends Controller
{
    //
    public function index(){
        if(Auth::user()->specialite ){
           
            $examensS1 = Examen::where('specialite',Auth::user()->specialite)->where('promo',Auth::user()->promo)
            ->where('module_id',null)->where('semestre','S1')->get();
            $examensS2 = Examen::where('specialite',Auth::user()->specialite)->where('promo',Auth::user()->promo)
            ->where('module_id',null)->where('semestre','S2')->get();

            
           
        }
        else{
            $examensS1 = Examen::where('promo',Auth::user()->promo)
            ->where('module_id',null)->where('semestre','S1')->get();
            $examensS2 = Examen::where('promo',Auth::user()->promo)
            ->where('module_id',null)->where('semestre','S2')->get();
        }
       
        return  view('dashbord.etudiant.mes-examens',[
            'examensS1'=>$examensS1,
            'examensS2'=>$examensS2,
            ]);
    }

}
