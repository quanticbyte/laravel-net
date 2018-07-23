<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use App\User;
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
    //protected $redirectTo = '/home'; //<------- original
    //----------------------------------------------------------------------------------------
    /*
    protected function redirectPath()
    {
        if(\Auth::user()->rol == 1) 
        {
            //return "/admin";
            //return route('routename');
            $redirectTo = '/admin';
        }
        elseif(\Auth::user()->rol == 2)
        {
        //return "/account";
        // or return route('routename');
            $redirectTo = '/magatzem';
        }
        else
        {
            $redirectTo = '/user';
        }
    }
    */
    protected function authenticated($request, $user)
    {
        if($user->rol  == 0)
        {
            return redirect('/admin');
        }
        elseif($user->rol == 2)
        {
            return redirect('/magatzem');
        }
        elseif($user->rol == 100)
        {
            return redirect('/superadmin');
        }
        else{
            return redirect('/employee');
        }
    }
    //----------------------------------------------------------------------------------------
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
