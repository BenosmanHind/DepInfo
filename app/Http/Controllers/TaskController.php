<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use App\Http\Requests\TaskRequest;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
{
    $tasks = $request->user()->tasks()->get();
    $role = Auth::user()->role;
    switch ($role) {
       
        case 2:
                return view('/dashbord/enseignant/home',['tasks' => $tasks,]);
            break;
        case 3:
                return view('/dashbord/etudiant/home',['tasks' => $tasks,]);
            break; 
        default:
                return view('/home',['tasks' => $tasks,]);
            break;
        
    }

    
}

public function store(Request $request)
{    
    $this->validate($request, [
        'name' => 'required|max:255',
    ]);

    $request->user()->tasks()->create([
        'name' => $request->name,
    ]);
}

}
