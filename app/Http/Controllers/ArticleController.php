<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Article;

class ArticleController extends Controller
{
    public function __construct(){

        $this->middleware('auth');
  
       }
  
  
  
      public function index(){
          $list_articles = Article::all();
          return view('articles',['articles'=>$list_articles]);
  
      }



        public function destory($id){

           
           $article= User::find($id);
           $article->delete();

          return redirect('articles');


    }
}