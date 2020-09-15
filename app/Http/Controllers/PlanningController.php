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
    
             return redirect()->route('planning_student.index')

        ->with('success','Emlpoi du temps ajouté avec success!');

  
}
      public function edit($id){
        $emp = Planning::find($id);
       
        return view('planning_student',['emp'=>$emp]);

      }

       public function update(Request $request , $id){ 
        $emp = Planning::find($id);

        $hasFile = $request->hasFile('fichier');
        if($hasFile){
          $file =  $request->file('fichier');
          $name =  $file->store('Planning');
       
          $lien = Storage::url($name);
          
      
        }

      
        $emp->title = $request->input('title');
        $emp->promo = $request->input('promo');
        $emp->semestre = $request->input('semestre');
        $emp->specialite = $request->input('specialite');
        
        $emp->save();

         $media = Media::where('planning_id','=',$planning->id)->count();

         if($media != null){
            $media = Media::where('planning_id','=',$planning->id)->first();
            $media->delete();

        }

        if($hasFile){

        $media = new Media();
        $media->lien = $lien;
        $media->type = "document";
        $media->name =  $request->file('fichier')->getClientOriginalName();
        $emp->medias()->save($media);
      }

        return redirect('planning_student.index');

       
      }


  public function destroy($id){


    
    $emp=Planning::find($id);
    $emp->delete();
    
    return redirect ('planning_student');           

    }


}
