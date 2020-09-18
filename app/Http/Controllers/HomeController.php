<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Article;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $nbrAdmin= User::where('role','=',1)->count();
        $nbrEnsg= User::where('role','=',2)->count();
        $nbrEtud= User::where('role','=',3)->count();
        $nbrArticle=Article::count();

        return view('home',['nbrAdmin' => $nbrAdmin , 'nbrEnsg' => $nbrEnsg , 'nbrEtud' => $nbrEtud ,'nbrArticle' => $nbrArticle]);
    }
}
