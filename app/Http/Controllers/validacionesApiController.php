<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class validacionesApiController extends Controller
{
    public function llavesApi(request $request){
        
        //validacion token 
        if (!$request->has("api_key")) {
            return false;
        }
        $api_key = env('API_KEY');
        
         
        if($request->input("api_key") != $api_key){
            return false;
        }

        //validacion usuario

        if (!$request->has("api_user")) {
            return false;
        }
        $api_user = env('API_USER');
        
        if($request->input("api_user") != $api_user){
            return false;
        }
        return true;



    }


}
