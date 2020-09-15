<?php

namespace App\Http\Controllers;

use App\Exam_admin;
use App\Media;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ExamadminController extends Controller
{
    public function index() {

        $examens = Exam_admin::all();
         return view('gerer-examen',['examens'=>$examens]);
   
   
     }
   
   
   public function store(Request $request ){


   
     
   
           $hasFile = $request->hasFile('fichier');
           if($hasFile){
                   $file =  $request->file('fichier');
                   $name = $file->store('Examens');
                   $lien = Storage::url($name);
                   
            }
   
           $examen = new Exam_admin();
           $examen->type = $request->input('type');
           $examen->promo =  $request->input('promo');
           $examen->specialite =  $request->input('specialite');
           $examen->semestre = $request->input('semestre');
           $examen->save();
   
           $media = new Media();
           $media->lien = $lien;
           $media->name =  $request->file('fichier')->getClientOriginalName();
           $media->type = $request->input('type');
           
   
           $examen->media()->save($media);
   
   
             return redirect()->route('gerer-examen.index')

        ->with('success','Examen ajouté avec success!');

   
   }

 public function edit($id){
        $examen = Exam_admin::find($id);
       
        return view('/editexam',['examen'=>$examen]);

      }

       public function update(Request $request , $id){ 
        $examen = Exam_admin::find($id);

        $hasFile = $request->hasFile('fichier');
           if($hasFile){
                   $file =  $request->file('fichier');
                   $name = $file->store('Examens');
                   $lien = Storage::url($name);
                   
            }

        $examen->promo = $request->input('promo');
        $examen->semestre = $request->input('semestre');
        $examen->specialite = $request->input('specialite');
        $examen->type = $request->input('type');
        $examen->user_id = Auth::user()->id;
        $examen->save();


         $media = Media::where('exam_admin_id','=',$examen->id)->count();

        if($media != null){
            $media = Media::where('exam_admin_id','=',$examen->id)->first();
            $media->delete();

        }


        if($hasFile){

        $media = new Media();
        $media->lien = $lien;
        $media->type = "examen";
        $media->name =  $request->file('fichier')->getClientOriginalName();
        $examen->medias()->save($media);
      }


        return redirect()->route('gerer-examen.index')

        ->with('success','Examen modifié avec success!');

       
      }



    public function destroy($id){


    
    $examenadmin=Exam_admin::find($id);
    $examenadmin->delete();
    
    return redirect ('gerer-examen');           

    }

}
