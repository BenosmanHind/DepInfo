<?php

namespace App\Http\Controllers;
use App\Enseignement;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Document;
use App\Media;
use Illuminate\Support\Facades\Storage;

class DocumentController extends Controller
{
    public function index(){
        

        $modules = Enseignement::join('Modules', 'Modules.id', '=', 'Enseignements.module_id')
        ->where('user_id','=',Auth::user()->id)->get();

        return view('Dashbord/Enseignant/documents',['modules'=>$modules]);
    }

    public function store(Request $request ){

        $hasFile = $request->hasFile('fichier');

         
        if($hasFile){
          $file =  $request->file('fichier');
          $name = $file->store('Document');
          $lien = Storage::url($name);
          
        }


        $document = new Document();
        $document->title = $request->input('titre');
        $document->description = $request->input('description');
        $document->doc = $request->input('type');
        $document->module_id = $request->input('module');
        $document->user_id = Auth::user()->id;
        $document->promo = "null";


        $document->save();

        $media = new Media;
        $media->lien = $lien;
        $media->type = "document";
        

        $document->media()->save($media);

        return redirect()->route('documents.index')

        ->with('success','Evenement ajouté avec success!');



    }



}
