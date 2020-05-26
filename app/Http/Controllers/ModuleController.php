<?php

namespace App\Http\Controllers;

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
          return view('modules',['mod'=>$list_modules]);
  
      }

       public function store(Request $request){
           
        $module = new Module();
        $module->nom = $request->input('nom');
        $module->promo = $request->input('promo');
        $module->specialite = $request->input('specialite');
        $module->semestre = $request->input('semestre');
        $module->type = $request->input('type');
        $module->code = $request->input('code');
        $module->save();


        return redirect()->route('modules.index')

        ->with('success','Module ajouté avec success!');

}
}