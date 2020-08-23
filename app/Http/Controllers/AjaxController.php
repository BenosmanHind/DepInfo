<?php

namespace App\Http\Controllers;

use App\Module;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
    public function getModules($promo){
        $response = Module::where('promo','=',$promo)->pluck('nom');
        return response()->json($response); 
    }


    public function getModules2($promo,$specialite){
        $response = Module::where('promo','=', $promo)
        ->where('specialite','=',$specialite )->pluck('nom');
        
        return response()->json($response); 
    }
}
