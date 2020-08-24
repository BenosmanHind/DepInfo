<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;
class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
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
            return '/isRegister';
         }

         else {
            $role =0;
            $role = Auth::user()->role;  
            dd($role);

            switch ($role) {
                case 1:
                       return '/admins';
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
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'nstudent' => ['string'],
            'nteacher' => ['string'],
            'role' => ['string'],
          
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {

        if($data['role'] == 2){

            return User::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
              
                'nteacher' => $data['nteacher'],
                'promo' => null,
                'specialite' => null,
                'role' => $data['role'],
            ]);

        }
        
        if($data['role'] == 3){
            return User::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
                'nstudent' => $data['nstudent'],
                
                'promo' => $data['promo'],
                'specialite' => $data['specialite'],
                'role' => $data['role'],
            ]);

        }
         
    }
        

        
}
