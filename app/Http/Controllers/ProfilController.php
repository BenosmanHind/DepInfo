<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class ProfilController extends Controller
{
    //
    public function index(){

    	$role = Auth::user()->role;
      $user = User::where('id','=',Auth::user()->id)->get();  

    	switch ($role) {
    		case 2:
                   return view('/dashbord/enseignant/profil_enseignant',['user'=>$user]);    			
   			break;

   			case 3:
                   return view('/dashbord/etudiant/profil_etudiant',['user'=>$user]);    			
   			break;
    		
    		default:
    			return view('/profil_admin',['user'=>$user]);
    			break;
    	}
    }



    public function update(Request $request , $id){

       
      if(role == 2){


        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->nteacher = $request->input('nteacher');
        $user->save();

        return redirect('/dashbord/enseignant/profil_enseignant');
      }

      if(role == 3){

        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->nstudent = $request->input('nstudent');
        $user->save();

          return redirect('dashbord/etudiant/profil_etudiant');
         }

        else {


        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->save();

          return redirect('/profil_admin');
        }
    }

    
     
}
