<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Module;

class StudentDocumentController extends Controller
{
    public function index(){

    	   $specialite_etud = Auth::user()->specialite;
           $promo_etud = Auth::user()->promo;

           
           
           
          if($specialite_etud){

            $modulesS1 = Module::where('promo','=', $promo_etud)
            ->where('specialite','=',$specialite_etud )->where('semestre','=','S1')->get();
            $modulesS2 = Module::where('promo','=', $promo_etud)
            ->where('specialite','=',$specialite_etud )->where('semestre','=','S2')->get();
           }
          else {
            $modulesS1 = Module::where('promo','=', $promo_etud)
            ->where('semestre','=','S1')->get();
            $modulesS2 = Module::where('promo','=', $promo_etud)
            ->where('semestre','=','S2')->get();
           
           }

            return  view('dashbord.etudiant.mes-documents',['modulesS1'=>$modulesS1 , 'modulesS2'=>$modulesS2]);
    }


    public function documentView(){

        return  view('dashbord.etudiant.document-view');

    }
}
