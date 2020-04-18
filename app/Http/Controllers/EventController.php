<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;

class EventController extends Controller
{
    public function __construct(){

        $this->middleware('auth');
  
       }
  
  
  
      public function index(){
          $list_events = Event::all();
          return view('events',['events'=>$list_events]);
  
      }
}
