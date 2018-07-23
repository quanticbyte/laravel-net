<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Companie;
use App\Employee;
use App\Tool;
//use App\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Response;

class superadminController extends Controller
{
    //retorna llistat de totes les empresas
    //api/superadmin/companies
    public function companieList()
    {
        if(Auth::check())
        {
            $user_rol = Auth::user()->rol;
            $user_token = Auth::user()->api_token;
            if($user_rol==100)
            {
                $companies = DB::table('companies')->get();
            	return response()->json([
            		'status'    => Response::HTTP_OK,
            		'token'     => $user_token,
            		'data'      => $companies,
            		]);	  
            }
            else
            {
            	return response()->json([
            		'status'    => Response::HTTP_NOT_FOUND,
            		'token'     => $user_token,
            		'message'   => "Error petició inexistent.",
            		]);	              
            }            
        }
    }

    //retorna llistat treballadors de una empres amb id
    //api/superadmin/employees
    public function employeeList(Request $request, $id)
    {
        if(Auth::check())
        {
            $user_rol = Auth::user()->rol;
            $user_token = Auth::user()->api_token;
            if($user_rol==100)
            {
            	//retorna llistat treballadors de una empresa
            }
            else
            {
            	return response()->json([
            		'status'    => Response::HTTP_NOT_FOUND,
            		'token'     => $user_token,
            		'message'   => "Error petició inexistent.",
            		]);	              
            }            
   	 	}
   	}

    //retorna einas de un treballador amb id
    //api/superadmin/tools/employee/{id}
    //retorna solicituds de un treballador amb id
    //api/superadmin/requests/{id}
    //retorna llistat einas de empresa {id}
    //api/superadmin/tools/company/{id}
    //retorna moviments eina {id}
    //api/superadmin/requests/tool/{id}
    
    //formulari nova empresa
    //api/superadmin/new/company
    //formulari nova eina
    //formulari nou treballador

}

/*	//eskelet basic
    public function employeeList(Request $request, $id)
    {
        if(Auth::check())
        {
            $user_rol = Auth::user()->rol;
            $user_token = Auth::user()->api_token;
            if($user_rol==100)
            {
            }
            else
            {
            	return response()->json([
            		'status'    => Response::HTTP_NOT_FOUND,
            		'token'     => $user_token,
            		'message'   => "Error petició inexistent.",
            		]);	              
            }            
    }
*/