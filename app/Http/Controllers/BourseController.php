<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bourse;
use App\Http\Requests\BourseRequest;
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

      public function store(BourseRequest $request){
        $bourse = new Bourse();

        $bourse->title = $request->input('title');
        
        $bourse->description = $request->input('description');
        $bourse->lieu = $request->input('lieu');
        $bourse->spécialité = $request->input('spécialité');
        $bourse->année_universitaire = $request->input('année_universitaire');
        
        $bourse->save();


        return redirect()->route('bourses.index')

        ->with('success','Bourse ajoutée avec success!');
        


      }
    

      public function edit($id){
        $bourse = Bourse::find($id);
        return view('editBourse',['bourse'=>$bourse]);

      }
      public function update(Request $request , $id){
        $bourse = Bourse::find($id);

        $bourse->title = $request->input('title');
        
        $bourse->description = $request->input('description');
        $bourse->lieu = $request->input('lieu');
        $bourse->spécialité = $request->input('spécialité');
        $bourse->année_universitaire = $request->input('année_universitaire');
        
        $bourse->save();
        return redirect('bourses');

      }
   
      public function destroy($id){  
        $bourse=Bourse::find($id);
        $bourse->delete(); 
        return redirect ('bourses');           
        }

        public function boursespage(){
          $bourse=Bourse::all();
          return view('boursepage',['bourses'=>$bourse]);           
        } 
}
