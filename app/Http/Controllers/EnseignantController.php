<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\User;

class EnseignantController extends Controller
{
    //
    public function __construct()
{
      $this->middleware('auth');

}
    public function index(){
        $list_enseignants = User::where('role', 2)->get();
        return view('enseignants',['ensg'=>$list_enseignants,]);

    }
    


    public function destory($id){

           $ensg= User::find($id);
           $this->authorize('delete',$ensg);
           $ensg->delete();

          return redirect('enseignants');
          
    }

}
