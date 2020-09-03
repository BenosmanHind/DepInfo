<?php

namespace App\Http\Controllers;
use App\Enseignement;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Examen;

class ExamenController extends Controller
{
    //
    public function index() {

     $examens = Examen::where('user_id','=',Auth::user()->id)->get(); 
     $modules = Enseignement::join('Modules', 'Modules.id', '=', 'Enseignements.module_id')
        ->where('user_id','=',Auth::user()->id)->get();
        return view('Dashbord/Enseignant/examens',['modules'=>$modules , 'examens'=>$examens]);

    }




public function store(Request $request ){

        $examen = new Examen();
        $examen->date = $request->input('date');
        $examen->heure = $request->input('heure');
        $examen->type = $request->input('type');
        $examen->salle = $request->input('salle');
        $examen->module_id = $request->input('module');
        $examen->user_id = Auth::user()->id;
        $examen->promo = "null";
        $examen->specialite = "null";
        $examen->semestre = "null";


        $examen->save();



return redirect()->route('examens.index')

        ->with('success','Examen ajouté avec success!');




}
}