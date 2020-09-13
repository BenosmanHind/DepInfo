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
   
           $examenadmin = new Exam_admin();
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
   
   
             return redirect()->route('gerer-examen.index')

        ->with('success','Examen ajouté avec success!');

   
   }

 public function edit($id){
        $examen = Planning::find($id);
       
        return view('gerer-examen',['examen'=>$examen]);

      }

       public function update(Request $request , $id){ 
        $examen = Planning::find($id);

        $examen->promo = $request->input('promo');
        $examen->semestre = $request->input('semestre');
        $examen->specialite = $request->input('specialite');
        $examen->type = $request->input('type');
        $examen->save();
        return redirect('gerer-examen');

       
      }



    public function destroy($id){


    
    $examenadmin=Exam_admin::find($id);
    $examenadmin->delete();
    
    return redirect ('gerer-examen');           

    }

}
