<?php

namespace App\Http\Controllers\estudiantes;

use App\Http\Controllers\Controller;
use App\Http\Controllers\generalesController;
use App\Http\Controllers\universidadesController;
use App\Http\Controllers\infoProfesionalController;
use Illuminate\Http\Request;
use App\Models\areas;
use App\Models\profesiones;
use App\Models\especialidades;
use App\Models\controlesperfilesprofesiones;
use App\Models\perfilesprofesionales;
use Illuminate\Support\Facades\DB;

class estudiantesController extends Controller
{
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
        ->where('idProfesion','=',$valoridProfesion)
        ->get();

        //encapsulacion id 
        $valoridEspecialidad= $objEspecialidad[0]->id; 
        //dd($valoridEspecialidad);
        $area = $objArea[0]->nombreArea;
        $profesion = $objProfesion[0]->nombreProfesion;
        $especialidad = $objEspecialidad[0]->nombreEspecialidad;
        //DD($valoridEspecialidad);
        

        $consultacontrolesperfilesprofesiones = controlesperfilesprofesiones::select('idPerfilProfesional')
        ->where ('idArea','=',$valoridArea)
        ->where ('idProfesion','=',$valoridProfesion)
        ->where ('idEspecialidad','=',$valoridEspecialidad)
        ->get();


        
        if(!isset($consultacontrolesperfilesprofesiones[0])){
            return view('profesionales.NoGaleriaProfesionales');
        }
        //dd($consultacontrolesperfilesprofesiones );
        
        foreach($consultacontrolesperfilesprofesiones as $index => $value){
            $objProfEstudiante[] = $this->consultarEstudiante($valoridEspecialidad,$value->idPerfilProfesional);
        }

        $objProfEstudiante = $objGeneral->limpiarArray($objProfEstudiante);
        
        if(empty($objProfEstudiante)){

            return view('profesionales.NoGaleriaProfesionales');

        }
        
        return view('estudiantes.galeriaEstudiantes',compact(
            'objProfEstudiante','area' ,'profesion' ,'especialidad'));


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

    public function cargarPerfil($profesional,Request $request){
        
        $urlAnterior = redirect()->getUrlGenerator()->previous();
        $objEstudiante = $this->cargarInfoPerfil($profesional);  
        $objExperiencia =$this->experienciaPerfilProfesional($objEstudiante[0]->id);
        //DD($objEstudiante); recordar que tiene que estar aprobado el perfil
        $universidad =  (new universidadesController)->cargarUniversidadesPorPerfilProfesional($objEstudiante[0]->id); 
        $especialidades  = (new infoProfesionalController)->cargarEspecialidades($objEstudiante[0]->id);
        //dd($objEstudiante[0]->id);
        return view('estudiantes.perfilEstudiantes',compact('objEstudiante','universidad','especialidades','objExperiencia'));

    }

    public function cargarInfoPerfil ($profesional){
        
        $perfil = DB::select('SELECT  PERF.id, INFO.nombre , INFO.apellido, USER.email, PERF.tipoConsulta,
        PERF.estudios , PERF.nivelEstudios , PERF.nombreEstudios ,  PERF.fechaEstudios ,
        PERF.titulos,  PERF.entidadCertificado, PERF.nombreCertificado ,  PERF.fechaCertificado , 
        
        PERF.Publicaciones, PERF.nombrePublicacion, PERF.linksPublicacion, PERF.fechaPublicacion , 
        PERF.whatsapp, PERF.youtube, PERF.descripcion ,
        PERF.facebook ,PERF.imagen, PERF.posicionImagen, PERF.instagram, PERF.twitter, PERF.url, PERF.diaatencioninicio  , PERF.diaatencionfin ,
        PERF.valorConsultaPresencial,PERF.valorConsultaVirtual,PERF.valorConsultaTelefonica,
        DATE_FORMAT(PERF.fechanacimiento, "%M %d %Y" ) fechanacimiento, PERF.horarioatencioninicio,
        PERF.horarioatencionfin, PERF.descripcion, PERF.titulos, PERF.fotoperfil, CIUD.nombre ciudad
        FROM perfilesprofesionales PERF 
        INNER JOIN users USER ON PERF.idUser = USER.id  
        INNER JOIN  infouser INFO ON USER.id = INFO.id 
        INNER JOIN  municipio CIUD ON CIUD.id_municipio = INFO.ciudad
        WHERE PERF.aprobado <> 0 AND  USER.id = ?', [$profesional]) ;

       
        return $perfil;
    }

    public function consultarEstudiante ($valoridEspecialidad,$idPerfilProfesional){
        
        $obj = db::select('SELECT DISTINCT 
        PEPR.descripcion , PEPR.id, PEPR.idUser, PEPR.fotoperfil ,INUS.NOMBRE,INUS.APELLIDO, PROF.nombreProfesion,ESPE.NombreEspecialidad,PEPR.nombreCertificado ,
        UNIV.fotouniversidad
        from perfilesprofesionales PEPR 
        inner join controlesperfilesprofesiones COPE ON PEPR.id = COPE.idPerfilProfesional 
        INNER JOIN controlesPerfilesestudiantes COES ON PEPR.id = COES.idperfilprofesional 
        INNER JOIN universidades UNIV ON COES.iduniversidad = UNIV.id
        inner join profesiones PROF on COPE.idProfesion = PROF.id 
        inner join especialidades ESPE on COPE.idEspecialidad = ESPE.id 
        inner join users USER on PEPR.idUser = USER.id 
        inner join infouser INUS ON USER.id = INUS.ID 
        inner join pagos PAGO ON USER.id = PAGO.idUsuario
        where PAGO.idConcepto = 1207 and PAGO.aprobado <> 0 and USER.estado <>0  and ESPE.id=? and  PEPR.id =?', [$valoridEspecialidad,$idPerfilProfesional]);
        //dd($obj);
        return $obj;
    }

    public function experienciaPerfilProfesional($profesional){

        $experiencia = db::select('SELECT   EXPE.nombreEmpresa, EXPE.descripcion,
        DATE_FORMAT(EXPE.fechainicio, "%M %d %Y" ) fechainicio,
        DATE_FORMAT(EXPE.fechafin, "%M %d %Y" ) fechafin FROM perfilesprofesionales PEPR 
        INNER JOIN experiencilaboral EXPE ON PEPR.id = EXPE.idPerfilProfesional
        WHERE PEPR.id = ?',[$profesional]);

        return $experiencia;

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
