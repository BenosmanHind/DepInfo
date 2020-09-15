<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Enseignement;
use App\Exam_teacher;
use App\Module;
use Illuminate\Support\Facades\Auth;

class ExamteacherController extends Controller
{
    public function index() {

        $examens = Exam_teacher::where('user_id','=',Auth::user()->id)->get(); 
        $modules = Enseignement::join('Modules', 'Modules.id', '=', 'Enseignements.module_id')
           ->where('user_id','=',Auth::user()->id)->get();
   
         return view('Dashbord/Enseignant/examens',['modules'=>$modules , 'examens'=>$examens]);
   }
   

   public function store(Request $request ){
   
   
   
           $module = Module::where('id',$request->input('module'))->first();
           $examen = new Exam_teacher();
           $examen->date = $request->input('date');
           $examen->heure = $request->input('heure');
           $examen->type = $request->input('type');
           $examen->salle = $request->input('salle');
           $examen->module_id = $request->input('module');
           $examen->user_id = Auth::user()->id;
           $examen->save();
   
         return redirect()->route('examens.index')

        ->with('success','Examen ajouté avec success!');
   
   
   }

   public function edit($id){
     $examen = Exam_teacher::find($id);
     $modules = module::all();

     return view('/editexamteacher',['examen' =>$examen , 'modules' =>$modules]);

   }

   public function update(Request $request , $id){

           $module = Module::where('id',$request->input('module'))->first();
           $examen = new Exam_teacher();
           $examen->date = $request->input('date');
           $examen->heure = $request->input('heure');
           $examen->type = $request->input('type');
           $examen->salle = $request->input('salle');
           $examen->module_id = $request->input('module');
           $examen->user_id = Auth::user()->id;
           $examen->save();

           return redirect()->route('examens.index')

        ->with('success','Examen modifié avec success!');

        


   }



   public function destroy($id){

    $examenenseignant=Exam_teacher::find($id);
    $examenenseignant->delete();
    
    return redirect ('/examens');           

    }
}
