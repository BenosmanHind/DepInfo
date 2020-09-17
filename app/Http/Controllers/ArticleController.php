<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Article;
use App\Http\Requests\ArticleRequest;
use Illuminate\Support\Facades\Storage;
use App\Media;



class ArticleController extends Controller
{
    
      public function index(){
          $list_articles = Article::all();

         // $this->authorize('viewAny',$list_articles);

          return view('articles',['articles'=>$list_articles]);
  
      }



       public function store(ArticleRequest $request){

        $hasFile = $request->hasFile('picture');
      
  
        if($hasFile){
          $file =  $request ->file('picture');
          $name = $file->store('articlePicture');
          $lien = Storage::url($name);

        }
        $article = new Article();
        $article->title = $request->input('title');     
        $article->description = $request->input('description');
        
        $article->save();

        $media = new Media;
        $media->lien = $lien;
        $media->type = "img";

        $article->medias()->save($media);


        return redirect()->route('articles.index')

        ->with('success','Article ajouté avec success!');
        


      }



      public function edit($id){
        $article = Article::find($id);

        $this->authorize('update',$article);

        return view('editeArticles',['article'=>$article]);

      }

      public function update(Request $request , $id){

        $article = Article::find($id);
       
        
        $article->title = $request->input('title');
       
        $article->description = $request->input('description');
      
        $article->save();
       
    
       return redirect()->route('articles.index')

        ->with('success','Article modifié avec success!');
    

      }



    public function destroy($id){


    
    $article=Article::find($id);
    $this->authorize('delete',$article);

    $article->delete();
    
    return redirect ('articles');           

    }
    
     public function articlesdetail($id){
      $article=Article::find($id);
      $medias = $article->medias; 
      return view('articles_detail',['article'=>$article,'medias' =>$medias]);           
    }

    public function articlespage(){
      $article=Article::all();
      return view('articles_page',['articles'=>$article]);           
    }
}