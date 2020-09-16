<?php

namespace App\Http\Controllers;
use App\Enseignement;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Document;
use App\Media;
use App\Module;
use Illuminate\Support\Facades\Storage;

class DocumentController extends Controller
{
    public function index(){
        
        $documents = Document::where('user_id','=',Auth::user()->id)->get(); 
        $modules = Enseignement::join('Modules', 'Modules.id', '=', 'Enseignements.module_id')
        ->where('user_id','=',Auth::user()->id)->get();
        return view('Dashbord/Enseignant/documents',['modules'=>$modules , 'documents'=>$documents]);
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
        $media->name =  $request->file('fichier')->getClientOriginalName();
        $document->medias()->save($media);

        return redirect()->route('documents.index')

        ->with('success','Document ajouté avec success!');



    }


      public function edit($id){
        $document = Document::find($id);

        // $this->authorize('update',$document);
        
        $modules = Enseignement::join('Modules', 'Modules.id', '=', 'Enseignements.module_id')
        ->where('user_id','=',Auth::user()->id)->get();
        return view('/editdocument',['document'=>$document , 'modules' =>$modules]);

      }


     



   public function update(Request $request , $id){

    $document = Document::find($id);

    $hasFile = $request->hasFile('fichier');
        if($hasFile){
          $file =  $request->file('fichier');
          $name = $file->store('Document');
       
          $lien = Storage::url($name);
          
      
        }

        $document->title = $request->input('titre');
        $document->description = $request->input('description');
        $document->doc = $request->input('type');
        $document->module_id = $request->input('module');
        $document->user_id = Auth::user()->id;
        $document->promo = "null";


        $document->save();

        //supprimer avant la photo quiexiste
        $media = Media::where('document_id','=',$document->id)->count();

        if($media != null){
            $media = Media::where('document_id','=',$document->id)->first();
            $media->delete();

        }

        if($hasFile){

        $media = new Media();
        $media->lien = $lien;
        $media->type = "document";
        $media->name =  $request->file('fichier')->getClientOriginalName();
        $document->medias()->save($media);
      }

        return redirect()->route('documents.index')

        ->with('success','Document modifié avec success!');
    
  
    
   }



     public function destroy($id){

    $document=Document::find($id);
    //$this->authorize('update',$document);
    $document->delete();
    
    return redirect ('dashbord/enseignant/documents');           

    }



}
