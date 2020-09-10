<?php

namespace App\Http\Controllers;
use App\Enseignement;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\ExamenEnseignant;
use App\Media;
use App\Module;
use Illuminate\Support\Facades\Storage;

class ExamenEnseignantController extends Controller
{
    //
    public function index() {

     $examensenseignant = ExamenEnseignant::where('user_id','=',Auth::user()->id)->get(); 
     $modules = Enseignement::join('Modules', 'Modules.id', '=', 'Enseignements.module_id')
        ->where('user_id','=',Auth::user()->id)->get();

      return view('Dashbord/Enseignant/examens',['modules'=>$modules , ' $examensenseignant'=>$examensenseignant]);
}





public function store(Request $request ){



        $module = Module::where('id',$request->input('module'))->first();
        $examenenseignant = new ExamenEnseignant();
        $examenenseignant->date = $request->input('date');
        $examenenseignant->heure = $request->input('heure');
        $examenenseignant->type = $request->input('type');
        $examenenseignant->salle = $request->input('salle');
        $examenenseignant->module_id = $request->input('module');
        $examenenseignant->user_id = Auth::user()->id;

        if($module->specialite && $module->promo){
                $examenenseignant->promo =  $module->promo;
                $examenenseignant->specialite =  $module->specialite;
        }
        else{
                $examenenseignant->promo =  $module->promo;
                $examenenseignant->specialite = "null";
        }
      
        $examenenseignant->semestre = "null";
        $examenenseignant->save();



}

}