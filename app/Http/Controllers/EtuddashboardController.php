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
          $cours = Document::where('user_id','=',Auth::user()->id)->where('promo','=', $promo_etud)
            ->where('specialite','=',$specialite_etud )->where('doc' ,'=','cours')->count();

          $tds = Document::where('user_id','=',Auth::user()->id)->where('promo','=', $promo_etud)
            ->where('specialite','=',$specialite_etud )->where('doc' ,'=','td')->count();

          $tps = Document::where('user_id','=',Auth::user()->id)->where('promo','=', $promo_etud)
            ->where('specialite','=',$specialite_etud )->where('doc' ,'=','tp')->count();
          }

      else{

           $cours = Document::where('user_id','=',Auth::user()->id)->where('promo','=', $promo_etud)->where('doc' ,'=','cours')->count();

           $tds = Document::where('user_id','=',Auth::user()->id)->where('promo','=', $promo_etud)->where('doc' ,'=','td')->count();
           $tps = Document::where('user_id','=',Auth::user()->id)->where('promo','=', $promo_etud)->where('doc' ,'=','tp')->count();
           //dd( $tds);
          }

             return  view('dashbord/etudiant/home',['nbrModules' => $nbrModules , 'cours' => $cours , 'tds' => $tds , 'tps' => $tps]);

    

}
}