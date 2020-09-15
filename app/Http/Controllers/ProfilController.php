<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Media;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class ProfilController extends Controller
{
    //
    public function index(){

    	$role = Auth::user()->role;
     

    	switch ($role) {
    		case 2:
                   return view('/dashbord/enseignant/profil_enseignant');    			
   			break;

   			case 3:
                   return view('/dashbord/etudiant/profil_etudiant');    			
   			break;
    		
    		default:
    			return view('/profil_admin');
    			break;
    	}
    }







    public function update(Request $request , $id){
   
   
      $user = User::find($id);
      
   
      $hasFile = $request->hasFile('fichier');

         
        if($hasFile){
          $file =  $request->file('fichier');
          $name = $file->store('Photo_de_profil');
       
          $lien = Storage::url($name);
          
        }
        
       
       
       if($user->role == 2){


        $user->name = $request->input('name');
        $user->email = $request->input('email');
        if($request['password']){
          $user->password = Hash::make($request['password']);
        }
          $user->save();
        
           //supprimer avant la photo quiexiste
           $media = Media::where('user_id','=',Auth::user()->id)->count();

           if($media != null){
               $media = Media::where('user_id','=',Auth::user()->id)->first();
               $media->delete();
 
           }
         
        
        $media = new Media();
        $media->lien =  $lien;
        $media->type = "photo";
        $media->name =  $request->file('fichier')->getClientOriginalName();
        $user->media()->save($media);
      

        return redirect()->route('profil.index')

        ->with('success','Profile modifié avec success!');
      }

      if($user->role  == 3){
      
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        if($request['password']){
          $user->password = Hash::make($request['password']);
        }
        $user->save();

         //supprimer avant la photo quiexiste
         $media = Media::where('user_id','=',Auth::user()->id)->count();

         if($media != null){
             $media = Media::where('user_id','=',Auth::user()->id)->first();
             $media->delete();

         }

        $media = new Media();
        $media->lien = $lien;
        $media->type = "photo";
        $media->name =  $request->file('fichier')->getClientOriginalName();
        $user->media()->save($media);

        return redirect()->route('profil.index')

        ->with('success','Profile modifié avec success!');


         }

        else {


        $user->name = $request->input('name');
        $user->email = $request->input('email');
        if($request['password']){
          $user->password = Hash::make($request['password']);
        }
        $user->save();

         //supprimer avant la photo quiexiste
         $media = Media::where('user_id','=',Auth::user()->id)->count();

         if($media != null){
             $media = Media::where('user_id','=',Auth::user()->id)->first();
             $media->delete();

         }

        $media = new Media();
        $media->lien =  $lien;
        $media->type = "profil";
        $media->name =  $request->file('fichier')->getClientOriginalName();

        $user->media()->save($media);
        return redirect()->route('profil.index')

        ->with('success','Profile modifié avec success!');
        }
    }

    
     
}
