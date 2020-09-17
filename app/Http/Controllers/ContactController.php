<?php

namespace App\Http\Controllers;

use App\Mail\ContactAdmin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index(){

        return view('contact');
    }
   
   
    public function store(Request $request){
      
       
        $data = array(
         'name'=> $request->name,
         'email'=> $request->email,
         'message'=> $request->message,
         'subject'=> $request->subject

        );

        Mail::to('benosmanhind@gmail.com')->send(new ContactAdmin($data));

        return redirect('/');
    }
}
