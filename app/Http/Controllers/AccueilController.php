<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use App\Article;

class AccueilController extends Controller
{
    public function index(){

        $list_events = Event::all();
        $list_articles = Article::all();
         
        return view('welcome',['events'=>$list_events],['articles'=>$list_articles]);
        
       
       
    }
}
