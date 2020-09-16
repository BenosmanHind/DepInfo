<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;


class AdminController extends Controller
{
    


    
    public function __construct(){

      $this->middleware('auth');

     }

     


     public function store(Request $request){

        $this->validate($request,[

            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'nstudent' => ['string'],
            'nteacher' => ['string'],
            'role' => ['string'],
            'specialite' => ['string'],

        ]);
        
         User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'nstudent' => "0",
            'nteacher' => "0",
            'specialite' => "0",
            'role' => 1 ,
            'accept' => "1" ,
           
        ]);

        return redirect('admins');
    

         
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
