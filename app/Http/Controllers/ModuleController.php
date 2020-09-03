<?php

namespace App\Http\Controllers;

use App\Enseignement;

use Illuminate\Http\Request;
use App\Module;



class ModuleController extends Controller
{
    //
    public function __construct(){

        $this->middleware('auth');
  
       }
  
  
      public function index(){
          $list_modules = Module::all();
          

          return view('modules',['module'=>$list_modules]);
  
      }

       public function store(Request $request){
           
        $module = new Module();
        $module->nom = $request->input('nom');
        $module->promo = $request->input('promo');
        $module->specialite = $request->input('specialite');
        $module->semestre = $request->input('semestre');
        $module->type = $request->input('type');
        $module->code = $request->input('code');
        $module->description = $request->input('description');
        $module->save();


        return redirect()->route('modules.index')

        ->with('success','Module ajouté avec success!');

}

      public function edit($id){
        $module = Module::find($id);
        return view('editModule',['module'=>$module]);

      }

      public function update(Request $request , $id){ 
        $module = Module::find($id);

      
        $module->nom = $request->input('nom');
        $module->promo = $request->input('promo');
        $module->semestre = $request->input('semestre');
        $module->specialite = $request->input('specialite');
        $module->type = $request->input('type');
        $module->code = $request->input('code');
        $module->description = $request->input('description');
        $module->save();
        return redirect('modules');

       
      }


  public function destroy($id){  
    $module=Module::find($id);
    $module->delete(); 
    return redirect ('modules');           
    }











}