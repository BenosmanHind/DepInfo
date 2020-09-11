<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\TimeTableStudent;
use App\Media;
use Illuminate\Support\Facades\Storage;


class TimeTableStudentController extends Controller
{
    //
  public function index(){

         $emp = TimeTableStudent::all();
    	 return view('/emploi_du_temps_etudiant',['emp'=>$emp]);
    }





public function store(Request $request){

        $request->validate([
                   'fichier' => 'required',
                   'promo' => 'required',
                   'specialite' => 'required',
                   'semestre' => 'required',
                 
             ]);

   	  $hasFile = $request->hasFile('fichier');

         
        if($hasFile){
          $file =  $request->file('fichier');
          $name = $file->store('EmploiDuTemp');
       
          $lien = Storage::url($name);
          
        }

           $emp = new TimeTableStudent();
           $emp->title = $request->input('title');
           $emp->promo =  $request->input('promo');
           $emp->specialite =  $request->input('specialite');
           $emp->semestre = $request->input('semestre');
           $emp->user_id = Auth::user()->id;
           $emp->save();
   
           $media = new Media();
           $media->lien = $lien;
           $media->name =  $request->file('fichier')->getClientOriginalName();
           $media->type = $request->input('type');
           
   
           $emp->media()->save($media);
   
  
}

  }
