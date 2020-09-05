<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\EmploiDuTemp;
use App\Media;

use Illuminate\Support\Facades\Storage;
class EmploiDuTempController extends Controller
{
    //
    public function index(){

    	
                
                 return view('/emploi_du_temps_etudiant');
                }

       



    public function store(Request $request){


        $hasFile = $request->hasFile('fichier');
        if($hasFile){
                $file =  $request->file('fichier');
                $name = $file->store('EmploiDuTemps');
                $lien = Storage::url($name);
                
         }

    	$emploidutemps = new EmploiDuTemp();
    	$emploidutemps->title = $request->input('title');
    	$emploidutemps->promo = $request->input('promo');
    	$emploidutemps->specialite = $request->input('specialite');
    	$emploidutemps->semestre = $request->input('semestre');
    	
    	$emploidutemps->save();

        $media = new Media();
        $media->lien = $lien;
        $media->type = $request->input('type');
        

        $emploidutemps->media()->save($media);

        return redirect()->route('emploi_du_temps_etudiant.index')

        ->with('success','Emlpoi du temps ajouté avec success!');




    }
}