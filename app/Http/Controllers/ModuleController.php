<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Module;
class ModuleController extends Controller
{
    //
    public function __construct(){

        $this->middleware('auth');
  
       }
  
  
  
      public function index(){
          $list_modules = Module::all();
          return view('modules',['mod'=>$list_modules]);
  
      }

}
