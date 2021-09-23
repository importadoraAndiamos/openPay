<?php

namespace App\Http\Controllers\busqueda;

use App\Http\Controllers\Controller;
use App\Http\Controllers\generalesController;
use Illuminate\Http\Request;
use App\Models\areas;
use App\Models\profesiones;
use App\Models\especialidades;
use App\Models\controlesperfilesprofesiones;
use App\Models\perfilProfesional;
use Illuminate\Support\Facades\DB;

class especialidadesController extends Controller
{ 
   
    public function __construct()
    {
       
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($area,$profesion,$especialidad)
    {
        $objGeneral = new generalesController;
        $objArea= areas::select('id','nombreArea')
        ->where('ruta','=',$area)
        ->get();
        //encapsulacion id area 
        
        $valoridArea = $objArea[0]->id;

        $objProfesion = profesiones::select('id','nombreProfesion')
        ->where('ruta','=',$profesion)
        ->get();

        //encapsulacion id profesion
        $valoridProfesion = $objProfesion[0]->id; 

        $objEspecialidad = especialidades::select('id','nombreEspecialidad')
        ->where('ruta','=',$especialidad)
        ->get();

        //encapsulacion id 
        $valoridEspecialidad= $objEspecialidad[0]->id; 

        $area = $objArea[0]->nombreArea;
        $profesion = $objProfesion[0]->nombreProfesion;
        $especialidad = $objEspecialidad[0]->nombreEspecialidad;

        $consultacontrolesperfilesprofesiones = controlesperfilesprofesiones::select('idPerfilProfesional')
        
        ->where ('idArea','=',$valoridArea)
        ->where ('idProfesion','=',$valoridProfesion)
        ->where ('idEspecialidad','=',$valoridEspecialidad)
        ->get();
        
        //dd($consultacontrolesperfilesprofesiones );
        if(!isset($consultacontrolesperfilesprofesiones[0])){
            return view('profesionales.NoGaleriaProfesionales');
        }
        
        $objProfDestacados = $this->consultarDestacados($valoridEspecialidad);
        $objProfPremiun = $this->consultarPremiun($valoridEspecialidad);
        $objProfNormal = $this->consultarNormal($valoridEspecialidad);
            

     
        if(!isset($objProfDestacados[0]) AND !isset($objProfPremiun[0]) AND  !isset($objProfNormal[0])){
            return view('profesionales.NoGaleriaProfesionales');
        }

        return view('profesionales.galeriaProfesionales',compact(
            'objProfDestacados',
            'objProfPremiun',
            'objProfNormal'
            ,'area'
            ,'profesion'
            ,'especialidad'));
 

    }
    public function especialidadPorProfesion(Request $request,$idProfesion)
    {
        if($request->ajax()){
            $profesion = profesiones::where('id', '=',$idProfesion)->get();
            $area = areas::where('id', '=',$profesion[0]->idArea)->get();
            $especialidad = especialidades::where('idProfesion', '=',$idProfesion)
            ->orderBy('nombreEspecialidad', 'ASC')
            ->get();
            return response()->json([$especialidad,$area ,$profesion ]); 
        }
           
    }
    

    public function consultarDestacados ($valoridEspecialidad){
      
        $objProfDestacados = controlesperfilesprofesiones::select(
            'controlesperfilesprofesiones.idPerfilProfesional'
            , 'PEPR.descripcion'
            , 'PEPR.id'
            , 'PEPR.idUser'
            , 'PEPR.fotoperfil'
            , 'INUS.NOMBRE'
            , 'INUS.APELLIDO'
            , 'PROF.nombreProfesion'
            , 'ESPE.NombreEspecialidad'
            , 'MUN.nombre AS nombreCiudad'
            ,DB::raw('IFNULL(FORMAT ((select sum(calificacion) from  testimonios where id_perfilProf = PEPR.id)
            /(select count(*) from  testimonios where id_perfilProf = PEPR.id),2),0) AS Calificacion')
            )
            ->distinct('PEPR.id')
            ->join('perfilesprofesionales AS PEPR','PEPR.id', '=','controlesperfilesprofesiones.idPerfilProfesional')
            ->join('profesiones AS PROF','controlesperfilesprofesiones.idProfesion', '=','PROF.id')
            ->join('especialidades AS ESPE','controlesperfilesprofesiones.idEspecialidad', '=','ESPE.id')
            ->join('users AS USER','PEPR.idUser', '=','USER.id')
            ->join('infouser AS INUS','USER.id', '=','INUS.ID')
            ->join('municipio AS MUN','INUS.ciudad', '=','MUN.id_municipio')
            ->join('pagos AS PAGO','USER.id', '=','PAGO.idUsuario')
            ->where ('controlesperfilesprofesiones.idEspecialidad','=',$valoridEspecialidad)
            ->where ('PAGO.idConcepto','=','1203')
            ->where ('PAGO.aprobado','<>','0')
            ->get();
    
        return $objProfDestacados;
    }

    public function consultarPremiun ($valoridEspecialidad){
        
        $objProfPremiun = controlesperfilesprofesiones::select(
            'controlesperfilesprofesiones.idPerfilProfesional'
            , 'PEPR.descripcion'
            , 'PEPR.id'
            , 'PEPR.idUser'
            , 'PEPR.fotoperfil'
            , 'INUS.NOMBRE'
            , 'INUS.APELLIDO'
            , 'PROF.nombreProfesion'
            , 'ESPE.NombreEspecialidad'
            , DB::raw('IFNULL(FORMAT ((select sum(calificacion) from  testimonios where id_perfilProf = PEPR.id)
            /(select count(*) from  testimonios where id_perfilProf = PEPR.id),2),0) AS Calificacion')
            )
            ->distinct('PEPR.id')
            ->join('perfilesprofesionales AS PEPR','PEPR.id', '=','controlesperfilesprofesiones.idPerfilProfesional')
            ->join('profesiones AS PROF','controlesperfilesprofesiones.idProfesion', '=','PROF.id')
            ->join('especialidades AS ESPE','controlesperfilesprofesiones.idEspecialidad', '=','ESPE.id')
            ->join('users AS USER','PEPR.idUser', '=','USER.id')
            ->join('infouser AS INUS','USER.id', '=','INUS.ID')
            ->join('municipio AS MUN','INUS.ciudad', '=','MUN.id_municipio')
            ->join('pagos AS PAGO','USER.id', '=','PAGO.idUsuario')
            ->where ('controlesperfilesprofesiones.idEspecialidad','=',$valoridEspecialidad)
            ->where ('PAGO.idConcepto','=','1201')
            ->where ('PAGO.aprobado','<>','0')
            ->paginate(8, ['*'], 'Prem');
     
        return $objProfPremiun;
    }

    public function consultarNormal ($valoridEspecialidad){
      
     
        $objProfNormal = controlesperfilesprofesiones::select(
            'controlesperfilesprofesiones.idPerfilProfesional'
            , 'PEPR.descripcion'
            , 'PEPR.id'
            , 'PEPR.idUser'
            , 'PEPR.fotoperfil'
            , 'INUS.NOMBRE'
            , 'INUS.APELLIDO'
            , 'PROF.nombreProfesion'
            , 'ESPE.NombreEspecialidad'
            , DB::raw('IFNULL(FORMAT ((select sum(calificacion) from  testimonios where id_perfilProf = PEPR.id)
            /(select count(*) from  testimonios where id_perfilProf = PEPR.id),2),0) AS Calificacion')
            )
            ->distinct('PEPR.id')
            ->join('perfilesprofesionales AS PEPR','PEPR.id', '=','controlesperfilesprofesiones.idPerfilProfesional')
            ->join('profesiones AS PROF','controlesperfilesprofesiones.idProfesion', '=','PROF.id')
            ->join('especialidades AS ESPE','controlesperfilesprofesiones.idEspecialidad', '=','ESPE.id')
            ->join('users AS USER','PEPR.idUser', '=','USER.id')
            ->join('infouser AS INUS','USER.id', '=','INUS.ID')
            ->join('municipio AS MUN','INUS.ciudad', '=','MUN.id_municipio')
            ->join('pagos AS PAGO','USER.id', '=','PAGO.idUsuario')
            ->where ('controlesperfilesprofesiones.idEspecialidad','=',$valoridEspecialidad)
            ->whereRaw('(PAGO.idConcepto <> 1203 and  PAGO.idConcepto <> 1201)')
            ->where ('PAGO.aprobado','<>','0')
            ->paginate(8, ['*'], 'Norm');

        return $objProfNormal;
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
