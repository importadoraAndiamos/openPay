<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\favoritos;
use Illuminate\Support\Facades\DB;

class favoritosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
        $existe = $this->existe($request);
        if($existe <> 0){
            $guardo = $this->destroy($request);
            return "Elimino";
        }else{
            $guardo = $this->create($request);
            return "Guardo";
        }
    }

    public function create(Request $request)
    {
        $objFavorito = new favoritos;
        $objFavorito->idPerfilSeleccionador =  $request->user()->id;
        $objFavorito->idPerfilSeleccionado = $request->usuarioLandingPage;

        return $objFavorito->save();
    }

    public function existe(Request $request)
    {
      $existe =  favoritos::select('*')
        ->where('idPerfilSeleccionador','=',$request->user()->id)
        ->where('idPerfilSeleccionado','=',$request->usuarioLandingPage)
        ->count();
        return $existe;
    }
   
    public function destroy(Request $request)
    {
        $elimino =  favoritos::where('idPerfilSeleccionador','=',$request->user()->id)
        ->where('idPerfilSeleccionado','=',$request->usuarioLandingPage)
        ->delete();

        return $elimino;
    }
}
