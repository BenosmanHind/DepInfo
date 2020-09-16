<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\User;
use Illuminate\Support\Facades\Auth;
use App\Module;

class EtudiantController extends Controller
{
    //
    public function __construct()
{
      $this->middleware('auth');

}
    public function index(){
        $list_etudiants = User::where('role', 3)->get();
         //$this->authorize('viewAny');

        return view('etudiants',['etuds'=>$list_etudiants]);

    }


    
    
    public function destory($id){

           
           $etud= User::find($id);
           $this->authorize('delete',$etud);
           $etud->delete();
          return redirect('etudiants');
    }
    
    public function mes_modules(){
        
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


          // dd( $modulesS2);


          
         

          return view('Dashbord.Etudiant.mes-modules',['modulesS1'=>$modulesS1 , 'modulesS2'=>$modulesS2]);
    }


}
