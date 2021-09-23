<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\productos;
use Illuminate\Support\Facades\DB;


class productosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $objProducto = productos::all();

        return response()->json($objProducto, 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($producto,Request $request)
    {
        
        $objValidacionApi = new validacionesApiController ;

       $resultado =  $objValidacionApi->llavesApi($request);

       if($resultado == false){
        return response()->json([
            'status' => 401,
            'message' => 'Acceso no autorizado',
          ], 401);
       }
       
         

        $objProducto = DB::table('productos')
        ->orWhere('titulo', 'like', '%' . $producto . '%')
        ->where('aprobado','<>','0')
        ->get();
        
        if (!isset($objProducto[0])){

            return response()->json([
                'status' => 204,
                'message' => 'No Coincidencias',
              ], 204);
        }

        return response()->json($objProducto, 200);
        
    }

    public function returnPost(Request $request){
        dd($request->parameters);
        $objValidacionApi = new validacionesApiController ;

        $resultado =  $objValidacionApi->llavesApi($request);
 
        if($resultado == false){
         return response()->json([
             'status' => 401,
             'message' => 'Acceso no autorizado',
           ], 401);
        }
        $objProducto = productos::all();

        return response()->json($objProducto, 200);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
