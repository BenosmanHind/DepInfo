<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\User;

class EnseignantController extends Controller
{
    //
    public function index(){
        $list_enseignants = User::where('role', 2)->get();
        return view('enseignants',['ensg'=>$list_enseignants]);

    }
    


    public function destory($id){

           
           $ensg= User::find($id);
           $ensg->delete();

          return redirect('enseignants');


    }

}
