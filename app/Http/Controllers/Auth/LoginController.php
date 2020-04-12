<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    //protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function redirectTo(){
        
        //User role
        $validate ="";
        $validate = Auth::user()->accept; 
         if($validate == 0 ){
            Auth()->logout();
            return '/isAccept';
         }
         else {
            $role =0;
            $role = Auth::user()->role;  

            switch ($role) {
                case 2:
                        return '/dashbord/enseignant/home';
                    break;
                case 3:
                        return '/dashbord/etudiant/home';
                    break; 
                default:
                        return '/home'; 
                    break;
            }


                   
         }
         
      
        
        
    
    }

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
