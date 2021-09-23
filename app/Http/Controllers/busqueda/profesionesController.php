<?php

namespace App\Http\Controllers\busqueda;

use App\Http\Controllers\Controller;
use App\Models\areas;
use App\Models\profesiones;
use App\Models\especialidades;
use App\Models\configuracionUniversidades;
use App\Models\controlesperfilesprofesiones;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\HomeController;

class profesionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($area,$profesion)
    {
        $objbannersPagoPublicidad = (new HomeController)->cargarBanner(14);


        $ListaEspecialidadesProfesionActual ="";
        $objArea= areas::select('*')
        ->whereRaw('ruta LIKE \'%'.$area.'%\'')
        ->get();
        
            
        if(!isset($objArea[0])){
        
            $valoridArea = 1;
            $objArea = Arr::add($objArea, 'ruta', 'ruta');
        }else{
            $valoridArea = $objArea[0]->id;
        }
            
        

        $objProfesion = profesiones::select('*')
        ->whereRaw('ruta LIKE \'%'.$profesion.'%\'')
        ->get();
        
        if(!isset($objProfesion[0])){
            $valoridProfesion = 1 ;
            $objProfesion = Arr::add($objProfesion, 'ruta', 'ruta');
            
        }else{
            $valoridProfesion = $objProfesion[0]->id;
        }

        $profesion=$objProfesion[0]->nombreProfesion;

        if($valoridArea == 5){
            
            $objEspecialidades = DB::table('configuracionUniversidadEspecialidad')
            ->select(
            'especialidades.id',
            'especialidades.nombreEspecialidad',
            'especialidades.ruta',
            'especialidades.imagen')
            ->selectRaw('GROUP_CONCAT(configuracionUniversidadEspecialidad.idUniversidad) as idUniversidad')
            ->join('profesiones','configuracionUniversidadEspecialidad.idProfesion','=','profesiones.id')
            ->join('especialidades','configuracionUniversidadEspecialidad.idEspecialidad','=','especialidades.id')
            ->join('universidades','configuracionUniversidadEspecialidad.idUniversidad','=','universidades.id')
            ->where('configuracionUniversidadEspecialidad.idProfesion','=',$valoridProfesion)
            ->where('profesiones.idArea','=',$valoridArea)
            ->groupBy('especialidades.id')
            ->orderBy('especialidades.nombreEspecialidad','desc')
            ->paginate(8);

            //esta es la consulta original pero se usa la eloquent para el tema de la paginacion 
           /* $objEspecialidades = 
           db::select('SELECT  ESPE.id, 
           GROUP_CONCAT(CONF.idUniversidad) AS idUniversidad , 
           ESPE.nombreEspecialidad,
           ESPE.ruta,
           ESPE.imagen
           FROM configuracionUniversidadEspecialidad CONF
           inner join  profesiones PROF ON CONF.idProfesion = PROF.id
           INNER JOIN especialidades ESPE ON CONF.idEspecialidad = ESPE.id
           inner join universidades UNI ON CONF.idUniversidad = UNI.id
           WHERE CONF.idProfesion = ? and PROF.idArea = ? GROUP BY ESPE.id order by ESPE.id ASC',[$valoridProfesion,$valoridArea]);*/

           //Si no encuentra nada en la tabla de control con las profesiones con respecto a la universidad consulta directamente en las especialidades
           if(empty($objEspecialidades)){           
            $objEspecialidades = especialidades::select('especialidades.nombreEspecialidad','especialidades.ruta','especialidades.imagen')
            ->join('profesiones','profesiones.id','=','especialidades.idProfesion')
            ->join('areas','areas.id','=','profesiones.idArea')
            ->where ('especialidades.idProfesion','=',$valoridProfesion)
            ->where ('profesiones.idArea','=',$valoridArea)
            ->paginate(8);
            
           }

            foreach($objEspecialidades as $item){
                $ListaEspecialidadesProfesionActual = $ListaEspecialidadesProfesionActual."\"".$item->nombreEspecialidad.'",';
            }
            //esta linea elimina la ultima coma de la lista 
            $ListaEspecialidadesProfesionActual = substr($ListaEspecialidadesProfesionActual, 0, -1);
            //dd($ListaEspecialidadesProfesionActual);

          $objUniversidad = db::select('SELECT distinct  CONF.idUniversidad,
           UNI.fotoBanner
           FROM configuracionUniversidadEspecialidad CONF
           inner join  profesiones PROF ON CONF.idProfesion = PROF.id
           INNER JOIN especialidades ESPE ON CONF.idEspecialidad = ESPE.id
           inner join universidades UNI ON CONF.idUniversidad = UNI.id
           WHERE CONF.idProfesion = ? order by CONF.idUniversidad',[$valoridProfesion]);

            return view('especialidades.especialidadesEstudiantes' ,compact(
                'objEspecialidades',
                'objProfesion',
                'objArea',
                'ListaEspecialidadesProfesionActual',
                'objUniversidad'
                ,'profesion'
                ,'objbannersPagoPublicidad'
            ));

        }else{
            
            
            $objEspecialidades = especialidades::select('especialidades.nombreEspecialidad','especialidades.ruta','especialidades.imagen')
            ->join('profesiones','profesiones.id','=','especialidades.idProfesion')
            ->join('areas','areas.id','=','profesiones.idArea')
            ->where ('especialidades.idProfesion','=',$valoridProfesion)
            ->where ('profesiones.idArea','=',$valoridArea)
            ->paginate(8);
    
            foreach($objEspecialidades as $item){
                $ListaEspecialidadesProfesionActual = $ListaEspecialidadesProfesionActual."\"".$item->nombreEspecialidad.'",';
            }
            //esta linea elimina la ultima coma de la lista 
            $ListaEspecialidadesProfesionActual = substr($ListaEspecialidadesProfesionActual, 0, -1);
            //dd($ListaEspecialidadesProfesionActual);
            //dd($ListaEspecialidadesProfesionActual);
            $objbannersPagoPublicidad = (new HomeController)->cargarBanner(14);

        }
        

        return view('especialidades.especialidadesProfesionales' ,compact(
            'objEspecialidades',
            'objProfesion',
            'objArea',
            'ListaEspecialidadesProfesionActual'
            ,'profesion'
            ,'objbannersPagoPublicidad'
        ));
        
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
    public function profesionPorArea(Request $request,$idArea)
    {
        if($request->ajax()){
            $profesion = profesiones::where('idArea', '=',$idArea)
            ->orderBy('nombreProfesion', 'ASC')
            ->get();
            
            return response()->json($profesion); 

        }
           
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
