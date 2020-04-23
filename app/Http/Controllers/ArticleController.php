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



       public function store(EventRequest $request){
        $event = new Event();

        $article->title = $request->input('title');
       
        $article->description = $request->input('description');
        
        $event->save();


        return redirect()->route('articles.index')

        ->with('success','Article ajouté avec success!');
        


      }



      public function edit($id){
        $event = Event::find($id);
        return view('editArticles',['article'=>$article]);

      }

      public function update(Request $request , $id){
        $article = Event::find($id);

        $article->title = $request->input('title');
       
        $article->description = $request->input('description');
      
        $event->save();
        return redirect('articles');

      }



    public function destroy($id){


    
    $article=Event::find($id);
    $article->delete();
    
    return redirect ('articles');           

    }
}