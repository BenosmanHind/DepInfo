<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use Illuminate\Support\Facades\Hash;

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

       
      if($user->role == 2){


        $user->name = $request->input('name');
        $user->email = $request->input('email');
        if($request['password']){
          $user->password = Hash::make($request['password']);
        }
        $user->save();

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

        return redirect()->route('profil.index')

        ->with('success','Profile modifié avec success!');
        }
    }

    
     
}
