<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\User;

class EtudiantController extends Controller
{
    //

    public function index(){
        $list_etudiants = User::where('role', 3)->get();
        return view('etudiants',['etuds'=>$list_etudiants]);

    }
    
}
