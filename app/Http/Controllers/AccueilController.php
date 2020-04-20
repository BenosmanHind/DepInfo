<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;

class AccueilController extends Controller
{
    public function index(){

        

        $list_events = Event::all();
         
        return view('welcome',['events'=>$list_events]);
       
    }
}
