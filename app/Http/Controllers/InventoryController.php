<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use App\Tool;
use Illuminate\Support\Facades\DB;
//use App\Http\Controllers\Controller;
use Illuminate\Http\Response;


class InventoryController extends Controller
{
    public function getInventory()
    {
        //return "retornem inventory del usuari logejat";
        if(Auth::check())
        {
    		$user_id = Auth::id();
        	$user_data  = DB::table('employees')->where('user_id',$user_id)->select('id','company_id')->get();
        	
        	//agafem el api_token de la petició
        	$user_token = Auth::user()->api_token;
        	//retornem la id de la empresa
        	
        	$user_data = json_decode($user_data, true)[0];
        	//$user_data = $user_data[0];
        	//mirem las einas que te el employee de l'empresa
        	
        	$tools  = DB::table('tools')->where([
        		['employee_id', '=', $user_data['id']],
        		['company_id', '=', $user_data['company_id']],
        	])->get();

        	//retornem totes les eines del usuari
        	//return $tools;
        	return response()->json([
        		'status' 	=> Response::HTTP_OK,
        		'token'		=> $user_token,
        		'data' 		=> $tools,
            ]);
        	
        }
    }
}
