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

    
     
}
