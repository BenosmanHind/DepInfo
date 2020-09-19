<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Module;
use App\User;
use App\Document;

class EtuddashboardController extends Controller
{
    //
    public function index(){

        $specialite_etud = Auth::user()->specialite;
        $promo_etud = Auth::user()->promo;



           if($specialite_etud){

            $nbrModules = Module::where('promo','=', $promo_etud)
            ->where('specialite','=',$specialite_etud )->count();
        }
            
          else {
            $nbrModules = Module::where('promo','=', $promo_etud)
            ->count();
            
           }

          if($specialite_etud){
            $tds = Document::join('Modules', 'Modules.id', '=', 'Documents.module_id')->where('promo','=', $promo_etud)->where('specialite','=', $specialite_etud)->where('doc' ,'=','td')->count();
            $tps = Document::join('Modules', 'Modules.id', '=', 'Documents.module_id')->where('promo','=', $promo_etud)->where('specialite','=', $specialite_etud)->where('doc' ,'=','tp')->count();
            $cours = Document::join('Modules', 'Modules.id', '=', 'Documents.module_id')->where('promo','=', $promo_etud)->where('specialite','=', $specialite_etud)->where('doc' ,'=','cours')->count();
         
          }

      else{

          

           $tds = Document::join('Modules', 'Modules.id', '=', 'Documents.module_id')->where('promo','=', $promo_etud)->where('doc' ,'=','td')->count();
            $tps = Document::join('Modules', 'Modules.id', '=', 'Documents.module_id')->where('promo','=', $promo_etud)->where('doc' ,'=','tp')->count();
            $cours = Document::join('Modules', 'Modules.id', '=', 'Documents.module_id')->where('promo','=', $promo_etud)->where('doc' ,'=','cours')->count();

         
          
          }

             return  view('dashbord/etudiant/home',['nbrModules' => $nbrModules , 'cours' => $cours , 'tds' => $tds , 'tps' => $tps]);

    

}
}