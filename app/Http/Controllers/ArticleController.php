<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Article;
use App\Http\Requests\ArticleRequest;


class ArticleController extends Controller
{
    public function __construct(){

        $this->middleware('auth');
  
       }
  
  
  
      public function index(){
          $list_articles = Article::all();
          return view('articles',['articles'=>$list_articles]);
  
      }



       public function store(ArticleRequest $request){
        $article = new Article();

        $article->title = $request->input('title');
       
        $article->description = $request->input('description');
        
        $article->save();


        return redirect()->route('articles.index')

        ->with('success','Article ajouté avec success!');
        


      }



      public function edit($id){
        $article = Article::find($id);
        return view('editeArticles',['article'=>$article]);

      }

      public function update(Request $request , $id){
        $article = Article::find($id);

        $article->title = $request->input('title');
       
        $article->description = $request->input('description');
      
        $article->save();
        return redirect('articles');

      }



    public function destroy($id){


    
    $article=Article::find($id);
    $article->delete();
    
    return redirect ('articles');           

    }
}