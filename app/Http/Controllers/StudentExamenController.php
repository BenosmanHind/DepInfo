<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentExamenController extends Controller
{
    //
    public function index(){

        return  view('dashbord.etudiant.mes-examens');
    }

}
