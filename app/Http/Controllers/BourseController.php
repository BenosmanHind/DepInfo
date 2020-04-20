<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bourse;

class BourseController extends Controller
{
    //

    public function __construct(){

        $this->middleware('auth');
  
       }
  
  
  
      public function index(){
          $list_bourses = Bourse::all();
          return view('bourses',['bourses'=>$list_bourses]);
  
      }



}
