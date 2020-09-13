<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Media;
use App\Planning;
use Illuminate\Support\Facades\Storage;

class PlanningController extends Controller
{
    //
    public function index(){

         $emp = Planning::all();
    	 return view('/planning_student',['emp'=>$emp]);
    }



     public function store(Request $request){


   	  $hasFile = $request->hasFile('fichier');

         
        if($hasFile){
          $file =  $request->file('fichier');
          $name = $file->store('Planning');
       
          $lien = Storage::url($name);
          
        }

           $emp = new Planning();
           $emp->title = $request->input('title');
           $emp->promo =  $request->input('promo');
           $emp->specialite =  $request->input('specialite');
           $emp->semestre = $request->input('semestre');
           $emp->user_id = Auth::user()->id;
           $emp->save();
   
           $media = new Media();
           $media->lien = $lien;
           $media->type = "emp";
           $media->name =  $request->file('fichier')->getClientOriginalName();
           
           
   
           $emp->media()->save($media);
   
  
}

}
