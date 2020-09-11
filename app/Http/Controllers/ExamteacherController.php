<?php

namespace App\Http\Controllers;

use App\Enseignement;
use App\Exam_teacher;
use App\Module;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ExamteacherController extends Controller
{
    public function index() {

        $examensenseignant = Exam_teacher::where('user_id','=',Auth::user()->id)->get(); 
        $modules = Enseignement::join('Modules', 'Modules.id', '=', 'Enseignements.module_id')
           ->where('user_id','=',Auth::user()->id)->get();
   
         return view('Dashbord/Enseignant/examens',['modules'=>$modules , 'examensenseignant'=>$examensenseignant]);
   }
   

   public function store(Request $request ){
   
   
   
           $module = Module::where('id',$request->input('module'))->first();
           $examenenseignant = new Exam_teacher();
           $examenenseignant->date = $request->input('date');
           $examenenseignant->heure = $request->input('heure');
           $examenenseignant->type = $request->input('type');
           $examenenseignant->salle = $request->input('salle');
           $examenenseignant->module_id = $request->input('module');
           $examenenseignant->user_id = Auth::user()->id;
           $examenenseignant->semestre = "null";
           $examenenseignant->save();
   
   
   
   }
}
