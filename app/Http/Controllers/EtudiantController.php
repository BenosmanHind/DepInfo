<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\User;

class EtudiantController extends Controller
{
    //
    public function __construct()
{
      $this->middleware('auth');

}
    public function index(){
        $list_etudiants = User::where('role', 3)->get();
        return view('etudiants',['etuds'=>$list_etudiants]);

    }
    
    public function destory($id){

           
           $etud= User::find($id);
           $etud->delete();

          return redirect('etudiants');


    }


}
