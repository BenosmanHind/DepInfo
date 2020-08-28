<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentDocumentController extends Controller
{
    public function index(){

        return  view('dashbord.etudiant.mes-documents');
    }


    public function documentView(){

        return  view('dashbord.etudiant.document-view');

    }
}
