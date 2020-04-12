<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ValidateController extends Controller
{
    //
    public function __construct()
    {
          $this->middleware('auth');
    
    }


    public function accept($id){
        $user = User::find($id);
        $user->update(['accept'=> '1']); 
        return redirect('/etudiants');
    }
 
   
 public function accept2($id){
        $user = User::find($id);
        $user->update(['accept'=> '1']); 
        return redirect('/enseignants');
    }
     
}
