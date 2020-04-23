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

        $event->title = $request->input('title');
        $event->lieu = $request->input('lieu');
        $event->description = $request->input('description');
        $event->heure = $request->input('heure');
        $event->date = $request->input('date');
        $event->save();


        return redirect()->route('articles.index')

        ->with('success','Evenement ajouté avec success!');
        


      }



      public function edit($id){
        $event = Event::find($id);
        return view('editArticles',['article'=>$article]);

      }

      public function update(Request $request , $id){
        $event = Event::find($id);

        $event->title = $request->input('title');
        $event->lieu = $request->input('lieu');
        $event->description = $request->input('description');
        $event->heure = $request->input('heure');
        $event->date = $request->input('date');
        $event->save();
        return redirect('articles');

      }



    public function destroy($id){


    
    $event=Event::find($id);
    $event->delete();
    
    return redirect ('articles');           

    }
}