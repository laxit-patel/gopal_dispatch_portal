<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
                  
    public function login(Request $request)
    {
        $request->validate([
            'email' => ['required'],
            'password' => ['required'],
        ]);

       $user = User::where('email',$request->email)->get()->first();
       
       if($user){
            if(Hash::check($request->password,$user->password)){
                
                Auth::login($user);

                if(auth()->user()->is_admin){
                    return redirect('/admin/');
                }else{
                    return redirect('/user/');
                }
            }
            else{
                return back()->withErrors([
                    'password' => 'Incorrect Password 🚫',
                ]);
            }
       }
       else{
        return back()->withErrors([
            'email' => 'Email Not Found 🚫',
        ]);
       }

    }

}
