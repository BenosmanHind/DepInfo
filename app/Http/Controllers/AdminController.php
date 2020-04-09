<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //public function __construct()
{
      $this->middleware('auth');

}
    public function index(){
        $list_admins = User::where('role', 1)->get();
        return view('admins',['adms'=>$list_admins]);

    }
    
    public function destory($id){

           
           $adm= User::find($id);
           $adm->delete();

          return redirect('admins');


    }
}
