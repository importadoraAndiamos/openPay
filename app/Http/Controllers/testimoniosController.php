<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\testimonios;
use Illuminate\Support\Facades\DB;

use App\Models\subcategoria;
use App\Models\categoria;
use App\Models\productos;

class testimoniosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        
        $resultadoIpV4 = preg_match('/^(?:[0-9]{1,3}\.){3}[0-9]{1,3}$/', $request->txtComentario);

        $resultadoIpV6 = preg_match('/^(?:[0-9a-fA-F]{1,4}:){7}[0-9a-fA-F]{1,4}$/', $request->txtComentario);

        $resultadoUrlTexto = preg_match('/^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$/', $request->txtComentario); // esto evita que se ingresen direcciones url de texto 

        if($resultadoIpV4 !=1 and $resultadoIpV6 !=1 and  $resultadoUrlTexto != 1 ){
            $testimonios = new testimonios;
            $testimonios->id_perfilProf  =  $request->usuario;//este corresponde al perfil al que se esta haciendo el testimonio 
            $testimonios->comentario  = $request->txtComentario;
            $testimonios->calificacion  = $request->calificacion;
            $testimonios->id_usuario  = $request->user()->id;  
            $testimonios->aprobado = 2; //por defecto entra No Aprobado el testimonio
            $testimonios->save();
        }

       
           

        $objtestimonios = (new testimoniosController)->show($request->usuario);
        return response()->json($objtestimonios); 

        

       


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $testimonios = testimonios::select('testimonios.comentario','users.name','testimonios.calificacion')
        ->join('users','users.id','=','testimonios.id_usuario')
        ->where('testimonios.id_perfilProf', '=',$id)
        ->where('testimonios.aprobado', '=',1)
        ->orderBy('testimonios.fecha', 'DESC')
        ->get();

        return $testimonios ;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
