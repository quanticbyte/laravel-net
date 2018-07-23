<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Response;
use App\Companie;

class CompaniesController extends Controller
{
    //rebra les dades del formulari de nova companyia
    public function newcompanyB(Request $request)
    {
        if(Auth::check())
        {
            $user_rol = Auth::user()->rol;
            $user_token = Auth::user()->api_token;
            if($user_rol==100)
            {
                
                //mostrem dades agafades del formulari
                //$id_institucion= Input::get('institucion');
                //$nombre = Input::get('nombre');
                /*
                $this->validate($request, [
                    'nombre' => 'required|unique:posts|max:255',
                    //'body' => 'required',
                ]);
                */
                //return $this->request->all();
            	//return "Creando una empresa";
                //$data = "creant empresa ...";
                //$nombre = "nombre_company";
                //return View::make('superadmin.superadminHome');

                //return redirect()->route('superadmin.superadminHome', $data);

                //View::make('superadmin.superadminNewCompany')->render();
                 return view('superadmin.SuperadminNewCompany');
             /*   
            	return response()->json([
            		'status'    => Response::HTTP_OK,
            		'token'     => $user_token,
            		'data'		=> $nombre,
            		]);
            */
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




}
