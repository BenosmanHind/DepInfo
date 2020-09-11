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
   
   
   
   
   }
}
