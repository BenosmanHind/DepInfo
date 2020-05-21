<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Module;
use App\Http\Requests\ModuleRequest;

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

       public function store(ModuleRequest $request){
        $mod = new Module();

        $mod->nom = $request->input('nom');
        
        $mod->promo = $request->input('promo');

        $mod->spécialité = $request->input('spécialité');

        $mod->semestre = $request->input('semestre');
        
        $mod->save();


        return redirect()->route('modules.index')

        ->with('success','Module ajouté avec success!');

}
}