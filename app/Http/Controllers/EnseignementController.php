<?php

namespace App\Http\Controllers;

use App\Enseignement;
use App\Module;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EnseignementController extends Controller
{
    public function index() {


    }

    public function store(Request $request){
        
        
        $module = Module::where('nom' ,'=' ,$request->module)->first();
        $exist = Enseignement::where('user_id','=',Auth::user()->id)->where('module_id','=',$module->id)->count();
        $moduleId = $module->pluck('id'); 
        

        if($exist == null){
            

        $ens = new Enseignement(); 
        $ens->module_id = $module->id;
        $ens->user_id = Auth::user()->id;
        $ens->save();
        return response()->json( $moduleId ); 

        }

        else{

            $response = array(
                'status' => 'error',
                'msg' => 'Article has been posted.',
            );
            return response()->json( $response ); 
        }
        

       
      
 

         }

        public function destroy($id){
            $module = Enseignement::where('user_id',"=",Auth::user()->id)->where('module_id',"=",$id)->first();
                $module->delete();
                return response()->json([
                    'message' => 'Data deleted successfully!'
                ]);

        }
}
