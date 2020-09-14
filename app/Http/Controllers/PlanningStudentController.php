<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Planning;


class PlanningStudentController extends Controller
{
    //
    public function index(){

      
    	
    if(Auth::user()->specialite ){
           
            $planningS1 = Planning::where('specialite',Auth::user()->specialite)->where('promo',Auth::user()->promo)->where('semestre','S1')->first();

            $planningS2 = Planning::where('specialite',Auth::user()->specialite)->where('promo',Auth::user()->promo)->where('semestre','S2')->firstOrNew();


           
        }
        else{
          $planningS1 = Planning::where('promo',Auth::user()->promo)->where('semestre','S1')->first();
          $planningS2 = Planning::where('promo',Auth::user()->promo)->where('semestre','S2')->firstOrNew();
        }


      
    	return view('/dashbord/etudiant/planning',['planningS1'=>$planningS1,'planningS2'=>$planningS2]);
    }
}
