<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\User;
use Illuminate\Support\Facades\Auth;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    //-----------------------------------------------------------------------------------------
    //tornem vista Admin
    public function adminView()
    {
        if(Auth::check())
        {
            $user_rol = Auth::user()->rol;
            if($user_rol==0)
            {
                return view('admin.AdminHome');
            }
            else
            {
                $msg = "No tens privilegis per accedir a admin";
                return view('includes.noPrivileges')->with('mensaje', $msg);
            }            
            
        }
    }
    
    //tornem vista Magatzem
    public function magatzemView()
    {
        if(Auth::check())
        {
            $user_rol = Auth::user()->rol;
            if($user_rol==2)
            {
                return view('magatzem.MagatzemHome');
            }
            else
            {
                $msg = "No tens privilegis per accedir a magatzem";
                return view('includes.noPrivileges')->with('mensaje',$msg);
            }
        }
    }

    //tornem vista employee
    public function employeeView()
    {
        if(Auth::check())
        {
            $user_rol = Auth::user()->rol;
            if($user_rol==1)
            {
                return view('employee.EmployeeHome');
            }
            else
            {
                $msg = "No tens privilegis per accedir a employee";
                return view('includes.noPrivileges')->with('mensaje',$msg);
            }
        }
    
    }

    //retornem vista superAdmin
    public function superadminView()
    {
        if(Auth::check())
        {
            $user_rol = Auth::user()->rol;
            if($user_rol==100)
            {
                return view('superadmin.superadminHome');
            }
            else
            {
                $msg = "No tens privilegis per accedir a superAdmin";
                return view('includes.noPrivileges')->with('mensaje',$msg);
            }
        }

    }

}
