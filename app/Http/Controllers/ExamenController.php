<?php

namespace App\Http\Controllers;
use App\Enseignement;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Examen;
use App\Media;
use App\Module;
use Illuminate\Support\Facades\Storage;

class ExamenController extends Controller
{
    //
    public function index() {

     $examens = Examen::where('user_id','=',Auth::user()->id)->get(); 
     $modules = Enseignement::join('Modules', 'Modules.id', '=', 'Enseignements.module_id')
        ->where('user_id','=',Auth::user()->id)->get();

        if(Auth::user()->role == 2 ){
                return view('Dashbord/Enseignant/examens',['modules'=>$modules , 'examens'=>$examens]);
        }

        else{
                return view('gerer-examen',['modules'=>$modules , 'examens'=>$examens]);
        }
       

    }




public function store(Request $request ){

      if(Auth::user()->role == 2){

        $module = Module::where('id',$request->input('module'))->first();
        $examen = new Examen();
        $examen->date = $request->input('date');
        $examen->heure = $request->input('heure');
        $examen->type = $request->input('type');
        $examen->salle = $request->input('salle');
        $examen->module_id = $request->input('module');
        $examen->user_id = Auth::user()->id;

        if($module->specialite && $module->promo){
                $examen->promo =  $module->promo;
                $examen->specialite =  $module->specialite;
        }
        else{
                $examen->promo =  $module->promo;
                $examen->specialite = "null";
        }
      
        $examen->semestre = "null";
        $examen->save();

     }

     if(Auth::user()->role ==1 ){

        $request->validate([
                'fichier' => 'required',
                'promo' => 'required',
                'specialite' => 'required',
                'semestre' => 'required',
              
          ]);

        $hasFile = $request->hasFile('fichier');
        if($hasFile){
                $file =  $request->file('fichier');
                $name = $file->store('Examens');
                $lien = Storage::url($name);
                
         }

        $examen = new Examen();
        $examen->type = $request->input('type');
        $examen->promo =  $request->input('promo');
        $examen->specialite =  $request->input('specialite');
        $examen->semestre = $request->input('semestre');
        $examen->user_id = Auth::user()->id;
        $examen->save();

        $media = new Media();
        $media->lien = $lien;
        $media->name =  $request->file('fichier')->getClientOriginalName();
        $media->type = $request->input('type');
        

        $examen->media()->save($media);


        
              
      

     }



return redirect()->route('examens.index')

        ->with('success','Examen ajouté avec success!');




}
}