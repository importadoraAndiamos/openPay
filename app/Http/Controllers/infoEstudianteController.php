<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Controllers\generalesController;
use App\Http\Controllers\infoProfesionalController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\universidades;
use App\models\perfilProfesional;
use App\models\controlesperfilesEstudiantes;


class infoEstudianteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
       
        $obj =  (new infoProfesionalController)->cargarInfoPerfilSinAprobado($request->user()->id); 
        $objUsuario  =  (new infoProfesionalController)->cargarCiudadUsuario($request->user()->id); 
        //dd($obj);
        if(count($obj) == 0){
            $obj[] = '' ;
            $perfil = '';
        }else {
            $perfil = $obj[0];// desencapsulo el objeto para retormar a la vista 
        }
        if($perfil == ""){ 
             /*esto solo es para cargar area, profesion, especialidad del perfil*/
            $objEstudios =  $this->carrerasPerfilEstudiante(0);
            
        }else{
             /*esto solo es para cargar area, profesion, especialidad del perfil*/
            $objEstudios =  $this->carrerasPerfilEstudiante($perfil->id);
        }
        if($perfil == ""){ 
            /*esto solo es para cargar area, profesion, especialidad del perfil*/
           $objAreaProfEspe = (new infoProfesionalController)->controlPerfilProfesionalPorUsuario(0);
           
       }else{
            /*esto solo es para cargar area, profesion, especialidad del perfil*/
           $objAreaProfEspe = (new infoProfesionalController)->controlPerfilProfesionalPorUsuario($perfil->id);
       }
        
  
       
        $objTipoConsulta = (new generalesController)->consultarCatalogos(16);
        $diasSemana =  (new infoProfesionalController)->cargarDia();
        
        //ESTO ES GENERAL PARA CARGAR LA PAGINA 
        $objUniversidades = (new universidadesController)->cargarUniversidades();
        $objCarreras =  (new carrerasController)->cargarCarreras();
        $objSemestre = (new generalesController)->consultarCatalogos(15);
        //DD($objCarreras);
        $objbannersArea = (new HomeController)->cargarAreas();
        $objbannersProfesionales =  (new HomeController)->cargarProfesiones();
        $objbannersEspecialidades =  (new HomeController)->cargarEspecialidades();



        return view('miCuenta.miPerfilEstudiante',compact('perfil'
        ,'diasSemana'
        ,'objUniversidades'
        ,'objCarreras'
        ,'objSemestre'
        ,'objEstudios'
        ,'objUsuario'
        ,'objbannersArea'
        ,'objbannersProfesionales'
        ,'objbannersEspecialidades'
        ,'objAreaProfEspe'
        ,'objTipoConsulta'));
        
    }

    public function carrerasPerfilEstudiante($id){
    
        $estudios = controlesperfilesEstudiantes::select('*')
        ->where('idperfilprofesional','=',$id)
        ->get();

        return $estudios;

    }


    public function gestionarPerfilEstudiante(Request $request){
        
        $inputActualEstudio = '';

        $id = $request->user()->id;
        

        if(empty($request->codigoCiudad)){
            $request->codigoCiudad = '';
        }
        
        if(empty($request->fechaNacimiento)){
            $request->fechaNacimiento = '';
        }

        if(empty($request->descripcion)){
            $request->descripcion= '';
        }
        
        if(empty($request->whatsapp )){
            $request->whatsapp = '';
        }

        if(empty($request->facebook )){
            $request->facebook = '';
        }

        if(empty($request->instagram)){
            $request->instagram = '';
        }
        
        if(empty($request->CorreoPersonal )){
            $request->CorreoPersonal = '';
        }
        
        if(empty($request->cantEstudios)){
            $request->cantEstudios = 1;
        }
        if(empty($request->cantExperiencia)){
            $request->cantExperiencia = 1;
        }
        
        if(empty($request->cantCertificados)){
            $request->cantCertificados = 1;
        }
        
        if(empty($request->cantGaleria)){
            $request->cantGaleria = 1;
        }
        if(empty($request->slcAreaMiPerf)){
            $request->slcAreaMiPerf = 5;
        }
        if(empty($request->slcProfesionMiPerf)){
            $request->slcProfesionMiPerf = 20;
        }
        if(empty($request->slcEspecialidadMiPerf)){
            $request->slcEspecialidadMiPerf = 120;
        }
        
        
        //Este bloque es para encapsular en JSON los datos dinamicos de los certificados ED
        for($contadorEntiCerti = 1; $contadorEntiCerti <= $request->cantCertificados; $contadorEntiCerti++){            
            if(empty($request->{"txtNivelCertificados".$contadorEntiCerti})){
                $request->{"txtNivelCertificados".$contadorEntiCerti} = '';
            }            
            $request->entidadCertificado = (new generalesController)->armarJsonPosicion($request->{"txtNivelCertificados".$contadorEntiCerti},$request->cantCertificados,$contadorEntiCerti);
        }
       
        for($contadorNombreCerti = 1; $contadorNombreCerti <= $request->cantCertificados; $contadorNombreCerti++){            
            if(empty($request->{"txtNombreCertificados".$contadorNombreCerti})){
                $request->{"txtNombreCertificados".$contadorNombreCerti} = '';
            }            
            $request->nombreCertificado = (new generalesController)->armarJsonPosicion($request->{"txtNombreCertificados".$contadorNombreCerti},$request->cantCertificados,$contadorNombreCerti);
        }
        for($contadorFechaCerti = 1; $contadorFechaCerti <= $request->cantCertificados; $contadorFechaCerti++){            
            if(empty($request->{"fechaCertificados".$contadorFechaCerti})){
                $request->{"fechaCertificados".$contadorFechaCerti} = '';
            }            
            $request->fechaCertificado = (new generalesController)->armarJsonPosicion($request->{"fechaCertificados".$contadorFechaCerti},$request->cantCertificados,$contadorFechaCerti);
        }


        for ($contImagCert = 1; $contImagCert <= $request->cantCertificados; $contImagCert++){
            $imagenActual = 'inputMultiCertificados'.$contImagCert;
            if($request->hasFile($imagenActual)){
                  ${"inputActualCertificado".$contImagCert} = (new generalesController)->almacenarFoto($request,$imagenActual);
                  $request->titulos = (new generalesController)->armarJsonPosicion(${"inputActualCertificado".$contImagCert},$request->cantCertificados,$contImagCert);
            }else{
                  ${"inputActualCertificado".$contImagCert} = $request->{"imgCertificado".$contImagCert};
                  $request->titulos = (new generalesController)->armarJsonPosicion(${"inputActualCertificado".$contImagCert},$request->cantCertificados,$contImagCert);
            }
        }
        //El bloque de conversion de los certificados va a hasta aca

        //Este es el bloque de almacenamiento de la experiencia laboral
        for($contadorNombreExpe = 1; $contadorNombreExpe <= $request->cantExperiencia; $contadorNombreExpe++){            
            if(empty($request->{"txtNombreExperiencia".$contadorNombreExpe})){
                $request->{"txtNombreExperiencia".$contadorNombreExpe} = '';
            }            
            $request->nombreEmpresaExperiencia = (new generalesController)->armarJsonPosicion($request->{"txtNombreExperiencia".$contadorNombreExpe},$request->cantExperiencia,$contadorNombreExpe);
        }

        for($contadorDescripExpe = 1; $contadorDescripExpe <= $request->cantExperiencia; $contadorDescripExpe++){            
            if(empty($request->{"txtLinkExperiencia".$contadorDescripExpe})){
                $request->{"txtLinkExperiencia".$contadorDescripExpe} = '';
            }            
            $request->descripcionExperiencia = (new generalesController)->armarJsonPosicion($request->{"txtLinkExperiencia".$contadorDescripExpe},$request->cantExperiencia,$contadorDescripExpe);
        }

        for($contadorFechaIniExpe = 1; $contadorFechaIniExpe <= $request->cantExperiencia; $contadorFechaIniExpe++){            
            if(empty($request->{"fechaExperienciaIncio".$contadorFechaIniExpe})){
                $request->{"fechaExperienciaIncio".$contadorFechaIniExpe} = '';
            }            
            $request->fechaInicioExperiencia = (new generalesController)->armarJsonPosicion($request->{"fechaExperienciaIncio".$contadorFechaIniExpe},$request->cantExperiencia,$contadorFechaIniExpe);
        }


        for($contadorFechaFinExpe = 1; $contadorFechaFinExpe <= $request->cantExperiencia; $contadorFechaFinExpe++){            
            if(empty($request->{"fechaExperienciaFin".$contadorFechaFinExpe})){
                $request->{"fechaExperienciaFin".$contadorFechaFinExpe} = '';
            }            
            $request->fechaFinExperiencia = (new generalesController)->armarJsonPosicion($request->{"fechaExperienciaFin".$contadorFechaFinExpe},$request->cantExperiencia,$contadorFechaFinExpe);
        }
          //El bloque de conversion de la experiencia va a hasta aca

        //Este es el bloque de almacenamiento de la galeria
        for($contadorNombreGaleria = 1; $contadorNombreGaleria <= $request->cantGaleria; $contadorNombreGaleria++){            
            if(empty($request->{"txtNombreGaleria".$contadorNombreGaleria})){
                $request->{"txtNombreGaleria".$contadorNombreGaleria} = '';
            }            
            $request->nombreProyecto = (new generalesController)->armarJsonPosicion($request->{"txtNombreGaleria".$contadorNombreGaleria},$request->cantGaleria,$contadorNombreGaleria);
        }
        for($contadorDescripGaleria = 1; $contadorDescripGaleria <= $request->cantGaleria; $contadorDescripGaleria++){            
            if(empty($request->{"txtDescripcionGaleria".$contadorDescripGaleria})){
                $request->{"txtDescripcionGaleria".$contadorDescripGaleria} = '';
            }            
            $request->descripcionProyecto = (new generalesController)->armarJsonPosicion($request->{"txtDescripcionGaleria".$contadorDescripGaleria},$request->cantGaleria,$contadorDescripGaleria);
        }

        
        for ($contImagGaleria = 1; $contImagGaleria <= $request->cantGaleria; $contImagGaleria++){
            $imagenActualGaleria = 'inputMulti'.$contImagGaleria;
            if($request->hasFile($imagenActualGaleria)){
                  ${"inputActualGaleria".$contImagGaleria} = (new generalesController)->almacenarFoto($request,$imagenActualGaleria);
                  $request->imagen = (new generalesController)->armarJsonPosicion(${"inputActualGaleria".$contImagGaleria},$request->cantGaleria,$contImagGaleria);
            }else{
                  ${"inputActualGaleria".$contImagGaleria} = $request->{"imgGaleria".$contImagGaleria} ;
                  $request->imagen = (new generalesController)->armarJsonPosicion(${"inputActualGaleria".$contImagGaleria},$request->cantGaleria,$contImagGaleria);
            }
        }
        $pefilExiste = $this->pefilExiste($id);

        if ($pefilExiste == 1){
           
            $actualizoUsuario = $this->update($request);
            $this->gestionarUniversidadesPerfilEstudiante($request,$actualizoUsuario->id);
            
            (new infoProfesionalController)->ConfigurarProfesionPerfil($request,$actualizoUsuario->id);
        }else {
           
            $insertoUsuario = $this->create($request);
            $this->gestionarUniversidadesPerfilEstudiante($request,$insertoUsuario->id);
            (new infoProfesionalController)->ConfigurarProfesionPerfil($request,$insertoUsuario->id);
        }

        return redirect('estudiantes');  

    }
    
 


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $infoProf = new perfilProfesional;
        $infoProf->idUser = $request->user()->id;
        
        $infoProf->fechaNacimiento = $request->fechaNacimiento;
        $infoProf->descripcion = $request->descripcion;
        $infoProf->whatsapp = $request->whatsapp;
        $infoProf->facebook = $request->facebook;
        $infoProf->instagram = $request->instagram;
        $infoProf->CorreoPersonal = $request->CorreoPersonal;
        $infoProf->entidadCertificado = $request->entidadCertificado;
        $infoProf->nombreCertificado = $request->nombreCertificado;
        $infoProf->fechaCertificado = $request->fechaCertificado;
        $infoProf->titulos = $request->titulos;
        $infoProf->nombreEmpresaExperiencia = $request->nombreEmpresaExperiencia;
        $infoProf->descripcionExperiencia = $request->descripcionExperiencia;
        $infoProf->fechaInicioExperiencia = $request->fechaInicioExperiencia;      
        $infoProf->fechaFinExperiencia = $request->fechaFinExperiencia;
        $infoProf->nombreProyecto = $request->nombreProyecto;
        $infoProf->descripcionProyecto = $request->descripcionProyecto;
        $infoProf->imagen = $request->imagen;


        if($request->hasFile('avatar')){
            $infoProf->fotoperfil = (new generalesController)->almacenarFoto($request,'avatar');
        }
       
        $infoProf->save();
        return $infoProf;
    }
    public function update(Request $request)
    {
        $array = perfilProfesional::where('idUser', '=',$request->user()->id)->get();

        $infoProf = $array[0];
        $infoProf->idUser = $request->user()->id;
        
        $infoProf->fechaNacimiento = $request->fechaNacimiento;
        $infoProf->descripcion = $request->descripcion;
        $infoProf->whatsapp = $request->whatsapp;
        $infoProf->facebook = $request->facebook;
        $infoProf->instagram = $request->instagram;
        $infoProf->CorreoPersonal = $request->CorreoPersonal;
        
        $infoProf->entidadCertificado = $request->entidadCertificado;
        $infoProf->nombreCertificado = $request->nombreCertificado;
        $infoProf->fechaCertificado = $request->fechaCertificado;

        $infoProf->titulos = $request->titulos;
        $infoProf->nombreEmpresaExperiencia = $request->nombreEmpresaExperiencia;
        $infoProf->descripcionExperiencia = $request->descripcionExperiencia;
        $infoProf->fechaInicioExperiencia = $request->fechaInicioExperiencia;      
        $infoProf->fechaFinExperiencia = $request->fechaFinExperiencia;
        $infoProf->nombreProyecto = $request->nombreProyecto;
        $infoProf->descripcionProyecto = $request->descripcionProyecto;
        $infoProf->imagen = $request->imagen;

        if($request->hasFile('avatar')){
            $infoProf->fotoperfil = (new generalesController)->almacenarFoto($request,'avatar');
        }
        
        $infoProf->save();
        return $infoProf;

    }
    public function gestionarUniversidadesPerfilEstudiante(Request $request, $id){
       
        try {
            DB::beginTransaction();
            controlesperfilesEstudiantes::where('idPerfilProfesional', $id)->delete();
            
            for ($contRelaEstuUniv=1; $contRelaEstuUniv <= $request->cantEstudios; $contRelaEstuUniv++) { 
                $infoControlPerfilEstudiantes = new controlesperfilesEstudiantes;
                $infoControlPerfilEstudiantes->idperfilprofesional = $id;
                $infoControlPerfilEstudiantes->iduniversidad =  $request->{"slcUniversidad".$contRelaEstuUniv} ;
                $infoControlPerfilEstudiantes->idcarrera =  $request->{"slcCarrera".$contRelaEstuUniv} ;
                $infoControlPerfilEstudiantes->idsemestre =  $request->{"slcSemestre".$contRelaEstuUniv}; 
               
                $infoControlPerfilEstudiantes->save();
            }
            DB::commit();

            return true;
        } catch (Exception $e) {
            DB::rollBack();
        return   \Log::error('QueryException: ' . $e->getMessage()) ;
        }

    }
    public function pefilExiste($id){
        
        $exisUser = DB::table('perfilesprofesionales')     
        ->whereRaw('idUser = '."'$id'")
        ->count();
        return $exisUser;

    }


    public function cargarUniversidades(){
       
       $universidad =  universidades::all();
       //dd($universidad);
        return $universidad;
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
