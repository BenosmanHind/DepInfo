<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ModuleEnsController extends Controller
{
    public function index(){
        return view('dashbord.enseignant.modules');
    }
}
