<?php

namespace App\Http\Controllers;

use App\Enseignement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ModuleEnsController extends Controller
{
    public function index(){
        
        $list_modules_perso = Enseignement::join('Modules', 'Modules.id', '=', 'Enseignements.module_id')
        ->where('user_id','=',Auth::user()->id)->get();

       
        
        return view('dashbord.enseignant.modules',['modules_persos'=>$list_modules_perso]);
    }
}
