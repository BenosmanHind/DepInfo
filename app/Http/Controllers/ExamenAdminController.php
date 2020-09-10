<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\ExamenAdmin;
use App\Media;
use Illuminate\Support\Facades\Storage;


class ExamenAdminController extends Controller
{
    //


    public function index() {

     $examenadmin = ExamenEnseignant::where('user_id','=',Auth::user()->id)->get(); 

      return view('gerer-examen',['examens'=>$examens]);


 }


public function store(Request $request ){


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

        $examenadmin = new ExamenAdmin();
        $examenadmin->type = $request->input('type');
        $examenadmin->promo =  $request->input('promo');
        $examenadmin->specialite =  $request->input('specialite');
        $examenadmin->semestre = $request->input('semestre');
        $examenadmin->user_id = Auth::user()->id;
        $examenadmin->save();

        $media = new Media();
        $media->lien = $lien;
        $media->name =  $request->file('fichier')->getClientOriginalName();
        $media->type = $request->input('type');
        

        $examenadmin->media()->save($media);


        
              
      


}

}
