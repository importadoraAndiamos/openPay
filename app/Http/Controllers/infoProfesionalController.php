<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Arr;
use App\Models\perfilProfesional;
use App\Models\catalogos;
use App\Models\controlesperfilesEstudiantes;
use App\Models\controlesperfilesprofesiones;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\testimoniosController;
use App\Http\Controllers\generalesController;

class infoProfesionalController extends Controller
{ 
    public function index(Request $request){

        $obj = $this->cargarInfoPerfilSinAprobado($request->user()->id); 
        $objUsuario  = $this->cargarCiudadUsuario($request->user()->id); 
        if(count($obj) == 0){
            $obj[] = '' ;
            $perfil = '';
        }else {
            $perfil = $obj[0];// desencapsulo el objeto para retormar a la vista 
        }
        if($perfil == ""){ 
             /*esto solo es para cargar area, profesion, especialidad del perfil*/
            $objAreaProfEspe = $this->controlPerfilProfesionalPorUsuario(0);
            
        }else{
             /*esto solo es para cargar area, profesion, especialidad del perfil*/
            $objAreaProfEspe = $this->controlPerfilProfesionalPorUsuario($perfil->id);
        }
        
        $objbannersArea = (new HomeController)->cargarAreas();
        $objbannersProfesionales =  (new HomeController)->cargarProfesiones();
        $objbannersEspecialidades =  (new HomeController)->cargarEspecialidades();
       
        
       
        $objTipoConsulta = (new generalesController)->consultarCatalogos(16);
        $objGenero = (new generalesController)->consultarCatalogos(18);
        $diasSemana = $this->cargarDia();

        return view('miCuenta.miPerfilProfesional',compact('perfil'
        ,'diasSemana',
        'objbannersArea',
        'objbannersProfesionales',
        'objbannersEspecialidades',
        'objUsuario',
        'objAreaProfEspe',
        'objTipoConsulta',
        'objGenero'));
    }
    public function cargarPerfilName($profesional){

        return redirect()->route('infoProfesional', array('profesional' => $profesional));
    }

    public function cargarPerfil($profesional,Request $request){

        
        $urlAnterior = redirect()->getUrlGenerator()->previous();
        
        $perfil = $this->cargarInfoPerfil($profesional);  
         
        if(empty($perfil))
        {
            $estudios = [];
            $especialidades =[];
            $objTestimonios =[];
            $valorIdPerfilActual =0;
        }else{
            $estudios = $this->cargarEstudios($perfil[0]->id);
            $especialidades = $this->cargarEspecialidades($perfil[0]->id);
            $objTestimonios = (new testimoniosController)->show($perfil[0]->id);
            $valorIdPerfilActual = $profesional;
        }
        

        

        return view('profesionales.infoProfesionales',
        compact('perfil',
        'urlAnterior',
        'estudios',
        'especialidades',
        'objTestimonios',
        'valorIdPerfilActual'
    ));

    } 


     /*esto solo es para cargar area, profesion, especialidad del perfil*/
    public function controlPerfilProfesionalPorUsuario ($id){
       
      return DB::select('SELECT * FROM controlesperfilesprofesiones WHERE idPerfilProfesional = ?', [$id]) ;

    }

    public function cargarCiudadUsuario ($profesional){

        $perfil = DB::select('SELECT  INFO.nombre , INFO.apellido, USER.email ,CIUD.nombre ciudad , CIUD.id_municipio codigoCiudad
        FROM users USER  
        INNER JOIN  infouser INFO ON USER.id = INFO.id 
        INNER JOIN  municipio CIUD ON CIUD.id_municipio = INFO.ciudad
        WHERE USER.id = ?', [$profesional]) ;

       
        return $perfil;
    }
    public function cargarEstudios($profesional){
        
        $estudios = DB::select('SELECT DISTINCT * FROM controlesPerfilesestudiantes
        INNER JOIN universidades ON  universidades.id = controlesPerfilesestudiantes.iduniversidad
        INNER JOIN carreras ON  carreras.id = controlesPerfilesestudiantes.idcarrera
        INNER JOIN  catalogos ON catalogos.id_catalogo = controlesPerfilesestudiantes.idsemestre
        WHERE controlesPerfilesestudiantes.idperfilprofesional = ? LIMIT 1', [$profesional] );

        return $estudios;
    }
    
    public function cargarEspecialidades($profesional){

        $especialidades = controlesperfilesprofesiones::select('*')
        ->distinct()
        ->join('especialidades','especialidades.id','=','controlesperfilesprofesiones.idEspecialidad')
        ->where('controlesperfilesprofesiones.idPerfilProfesional','=',$profesional)
        ->take(1)
        ->get();
        return $especialidades;
    }

    public function cargarInfoPerfil ($profesional){
        
        $perfil = DB::select('SELECT  PERF.id, PERF.idUser, INFO.nombre , INFO.apellido, INFO.direccion , USER.email, PERF.tipoConsulta,PERF.aprobado,
        PERF.titulos,  PERF.entidadCertificado, PERF.nombreCertificado ,  PERF.fechaCertificado , 
        PERF.estudios , PERF.nivelEstudios , PERF.nombreEstudios ,  PERF.fechaEstudios ,
        PERF.Publicaciones, PERF.nombrePublicacion, PERF.linksPublicacion, PERF.fechaPublicacion , 
        PERF.whatsapp, PERF.youtube, PERF.descripcion , PERF.expertoEn,
        PERF.facebook ,PERF.imagen, PERF.instagram, PERF.twitter, PERF.url, PERF.diaatencioninicio  , PERF.diaatencionfin ,
        PERF.valorConsultaPresencial,PERF.valorConsultaVirtual,PERF.valorConsultaTelefonica,
         DATE_FORMAT(PERF.fechanacimiento, "%M %d %Y" ) fechanacimiento, PERF.horarioatencioninicio,
        PERF.horarioatencionfin, PERF.descripcion, PERF.titulos, PERF.fotoperfil, CIUD.nombre ciudad
        ,PERF.genero ,PERF.EmpresaActual,
        IFNULL(FORMAT ((select sum(calificacion) from  testimonios where id_perfilProf = PERF.id)
            /(select count(*) from  testimonios where id_perfilProf = PERF.id),2),0) AS Calificacion
        FROM perfilesprofesionales PERF 
        INNER JOIN users USER ON PERF.idUser = USER.id  
        INNER JOIN  infouser INFO ON USER.id = INFO.id 
        INNER JOIN  municipio CIUD ON CIUD.id_municipio = INFO.ciudad
        WHERE PERF.aprobado <> 0 AND  USER.id = ?', [$profesional]
        );
        
        return $perfil;

    }
    

    public function cargarInfoPerfilSinAprobado ($profesional){
        
        $perfil = DB::select('SELECT PERF.id, INFO.nombre , INFO.apellido, USER.email , PERF.tipoConsulta,
        PERF.nivelEstudios, PERF.nombreEstudios, PERF.estudios, PERF.fechaEstudios , PERF.descripcion ,
        PERF.entidadCertificado, PERF.nombreCertificado,PERF.fechaCertificado, PERF.titulos ,
        PERF.nombrePublicacion, PERF.linksPublicacion, PERF.Publicaciones ,  PERF.fechaPublicacion ,  PERF.hojaVida ,
        PERF.nombreEmpresaExperiencia, PERF.descripcionExperiencia, PERF.fechaInicioExperiencia, PERF.fechaFinExperiencia,
        PERF.nombreProyecto,PERF.descripcionProyecto,PERF.imagen, PERF.expertoEn,
        PERF.facebook ,PERF.instagram, PERF.twitter, PERF.whatsapp, PERF.youtube,PERF.CorreoPersonal , PERF.url, PERF.diaatencioninicio  , PERF.diaatencionfin ,
        PERF.valorConsultaPresencial,PERF.valorConsultaVirtual,PERF.valorConsultaTelefonica,
        REPLACE(DATE_FORMAT(PERF.fechanacimiento, "%Y %m %d" )," ","-")  fechanacimiento, PERF.horarioatencioninicio,
        PERF.horarioatencionfin, PERF.descripcion,  PERF.fotoperfil, CIUD.nombre ciudad ,   CIUD.id_municipio codigoCiudad
        ,PERF.genero ,PERF.EmpresaActual,
        IFNULL(FORMAT ((select sum(calificacion) from  testimonios where id_perfilProf = PERF.id)
            /(select count(*) from  testimonios where id_perfilProf = PERF.id),2),0) AS Calificacion
        FROM perfilesprofesionales PERF 
        INNER JOIN users USER ON PERF.idUser = USER.id  
        INNER JOIN infouser INFO ON USER.id = INFO.id 
        INNER JOIN municipio CIUD ON CIUD.id_municipio = INFO.ciudad

        WHERE   USER.id = ?', [$profesional]) ;
        return $perfil;

    }

    public function cargarDia(){

        $diasSemana =  catalogos::select('id_catalogo','id_padre','nombre')     
        ->where('id_padre', '=', 13 )
        ->get();
        return $diasSemana ;

    }

    public function gestionarPerfilProfesional(Request $request){
        
        $id = $request->user()->id;

        if(empty($request->slcAreaMiPerf)){
            $request->slcAreaMiPerf = 0;
        }
        if(empty($request->slcProfesionMiPerf)){
            $request->slcProfesionMiPerf = 0;
        }
        if(empty($request->slcEspecialidadMiPerf)){
            $request->slcEspecialidadMiPerf = 0;
        }

        if(empty($request->facebook)){
            $request->facebook = '';
        }
        if(empty($request->instagram)){
            $request->instagram = '';
        }
        if(empty($request->twitter)){
            $request->twitter = '';
        }
        if(empty($request->whatsapp)){
            $request->whatsapp = '';
        }
        if(empty($request->youtube)){
            $request->youtube = '';
        }
        if(empty($request->hojaVida)){
            $request->hojaVida = '';
        }

        if(empty($request->valorServicio)){
            $request->valorServicio = '';

        }
    
        if(empty($request->descrpcion)){
            $request->descrpcion = '';

        }
        if(empty($request->url)){
            $request->url = '';
        }
        
        if(empty($request->descripcion)){
            $request->descripcion = '';
        }
        if(empty($request->genero)){
            $request->genero = '';
        }
        if(empty($request->EmpresaActual)){
            $request->EmpresaActual = '';
        }
        if(empty($request->expertoEn)){
            $request->expertoEn = '';
        }
        if(empty($request->codigoCiudad)){
            $request->codigoCiudad = 169; //Codigo por defecto de bogota
        }
        
                

         //Este bloque es para encapsular en JSON los datos dinamicos de los Estudios ED
        for($contadorNivelEstudio = 1; $contadorNivelEstudio <= $request->cantEstudios; $contadorNivelEstudio++){            
            if(empty($request->{"txtNivelEstudios".$contadorNivelEstudio})){
                $request->{"txtNivelEstudios".$contadorNivelEstudio} = '';
            }            
                $request->nivelEstudios = (new generalesController)->armarJsonPosicion($request->{"txtNivelEstudios".$contadorNivelEstudio},$request->cantEstudios,$contadorNivelEstudio);
        }

        for($contadorNombreEstudios = 1; $contadorNombreEstudios <= $request->cantEstudios; $contadorNombreEstudios++){            
            if(empty($request->{"txtNombreEstudios".$contadorNombreEstudios})){
                $request->{"txtNombreEstudios".$contadorNombreEstudios} = '';
            }            
            $request->nombreEstudios = (new generalesController)->armarJsonPosicion($request->{"txtNombreEstudios".$contadorNombreEstudios},$request->cantEstudios,$contadorNombreEstudios);
        }
        for($contadorFechaEstudios = 1; $contadorFechaEstudios <= $request->cantEstudios; $contadorFechaEstudios++){            
            if(empty($request->{"fechaEstudios".$contadorFechaEstudios})){
                $request->{"fechaEstudios".$contadorFechaEstudios} = '';
            }            
            $request->fechaEstudios = (new generalesController)->armarJsonPosicion($request->{"fechaEstudios".$contadorFechaEstudios},$request->cantEstudios,$contadorFechaEstudios);
        }
        
      
        for ($contImagEstudio = 1; $contImagEstudio <= $request->cantEstudios; $contImagEstudio++){
            $imagenActual = 'inputMultiestudios'.$contImagEstudio;
            /*if($contImagEstudio == 2){
                dd($imagenActual);
            }*/
            if($request->hasFile($imagenActual)){
                ${"inputActualImagen".$contImagEstudio} = (new generalesController)->almacenarFoto($request,$imagenActual);
                $request->estudios = (new generalesController)->armarJsonPosicion(${"inputActualImagen".$contImagEstudio},$request->cantEstudios,$contImagEstudio);
            }else{
                ${"inputActualImagen".$contImagEstudio} = $request->{"imgEstudios".$contImagEstudio};
                $request->estudios = (new generalesController)->armarJsonPosicion(${"inputActualImagen".$contImagEstudio},$request->cantEstudios,$contImagEstudio);
            }
        }
       
        //El bloque de conversion de los estudios va a hasta aca
        
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
        //dd($request->titulos);
        //El bloque de conversion de las publicaciones va a hasta aca
        

        for($contadorNombrePublicacion = 1; $contadorNombrePublicacion <= $request->cantPublicaciones; $contadorNombrePublicacion++){            
            if(empty($request->{"txtNombrePublicacion".$contadorNombrePublicacion})){
                $request->{"txtNombrePublicacion".$contadorNombrePublicacion} = '';
            }            
            $request->nombrePublicacion = (new generalesController)->armarJsonPosicion($request->{"txtNombrePublicacion".$contadorNombrePublicacion},$request->cantPublicaciones,$contadorNombrePublicacion);
        }
   
        for($contadorlinkPubli = 1; $contadorlinkPubli <= $request->cantPublicaciones; $contadorlinkPubli++){            
            if(empty($request->{"txtLinkPublicacion".$contadorlinkPubli})){
                $request->{"txtLinkPublicacion".$contadorlinkPubli} = '';
            }            
            $request->linksPublicacion = (new generalesController)->armarJsonPosicion($request->{"txtLinkPublicacion".$contadorlinkPubli},$request->cantPublicaciones,$contadorlinkPubli);
        }
        
        for($contadorFechaPubli = 1; $contadorFechaPubli <= $request->cantPublicaciones; $contadorFechaPubli++){            
            if(empty($request->{"fechaPublicacion".$contadorFechaPubli})){
                $request->{"fechaPublicacion".$contadorFechaPubli} = '';
            }            
            $request->fechaPublicacion = (new generalesController)->armarJsonPosicion($request->{"fechaPublicacion".$contadorFechaPubli},$request->cantPublicaciones,$contadorFechaPubli);
        }
        for ($contImgPublicaciones = 1; $contImgPublicaciones <= $request->cantPublicaciones; $contImgPublicaciones++){
            $imagenActual = 'inputMultiPublicacion'.$contImgPublicaciones;
            if($request->hasFile($imagenActual)){
                ${"inputActualImagen".$contImgPublicaciones} = (new generalesController)->almacenarFoto($request,$imagenActual);
                $request->Publicaciones = (new generalesController)->armarJsonPosicion(${"inputActualImagen".$contImgPublicaciones},$request->cantPublicaciones,$contImgPublicaciones);
            }else{
                ${"inputActualImagen".$contImgPublicaciones} = $request->{"imgPublicacion".$contImgPublicaciones};
                $request->Publicaciones = (new generalesController)->armarJsonPosicion(${"inputActualImagen".$contImgPublicaciones},$request->cantPublicaciones,$contImgPublicaciones);
            }
        }

        //este es el bloque que guarda la galeria actual del formulario 

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
        //Final del formulario 

        //dd($nombreGaleria5);

        $pefilExiste = $this->pefilExiste($id);
       
        
        //dd($nombreImagenCertificacion1);
        //dd($pefilExiste);

        if ($pefilExiste == 1){
            
            $actualizoUsuario = $this->update($request,$id);
            
            $this->ConfigurarProfesionPerfil($request,$actualizoUsuario->id);
            
            
        }else {
            
            $insertoUsuario = $this->create($request,$id);
            
            $this->ConfigurarProfesionPerfil($request,$insertoUsuario->id);
        }
        
        return redirect('profesionales');  

       
    }

    public function show($id){
        $usuario = perfilProfesional::find($id);
        return $usuario;

    }

    public function pefilExiste($id){
        
        $exisUser = DB::table('perfilesprofesionales')     
        ->whereRaw('idUser = '."'$id'")
        ->count();
        return $exisUser;

    }


    public function create(Request $request,$id){

        $infoProf = new perfilProfesional;
        $infoProf->idUser = $request->user()->id;
        $infoProf->facebook =  $request->facebook ;
        $infoProf->instagram =  $request->instagram ;
        $infoProf->twitter =  $request->twitter ;
        $infoProf->whatsapp = $request->whatsapp ;
        $infoProf->youtube = $request->youtube ;
        $infoProf->hojaVida = $request->hojaVida;
        $infoProf->valorConsultaPresencial =  $request->valorConsultaPresencial ;
        $infoProf->valorConsultaVirtual =  $request->valorConsultaVirtual ;
        $infoProf->valorConsultaTelefonica =  $request->valorConsultaTelefonica ;
        $infoProf->url = $request->url ;
        $infoProf->genero = $request->genero;
        $infoProf->EmpresaActual = $request->EmpresaActual;

        $infoProf->expertoEn = $request->expertoEn;
        $infoProf->aceptoTerminos = 1;
        
        $infoProf->ipCreacion = $request->ip();
        $infoProf->descripcion =  $request->descripcion ;
        $infoProf->fechanacimiento = $request->fechaNacimiento;
        $infoProf->imagen =  $request->imagen; //este es el campo Galeria
        $infoProf->descripcion = $request->descripcion;
        $infoProf->tipoConsulta = $request->tipoConsulta;

        $infoProf->nivelEstudios =$request->nivelEstudios;
        $infoProf->nombreEstudios =$request->nombreEstudios ;
        $infoProf->fechaEstudios = $request->fechaEstudios;
        $infoProf->estudios = $request->estudios;
        

        $infoProf->entidadCertificado = $request->entidadCertificado;
        $infoProf->nombreCertificado = $request->nombreCertificado;
        $infoProf->fechaCertificado = $request->fechaCertificado;
        $infoProf->titulos = $request->titulos;

        $infoProf->nombrePublicacion =$request->nombrePublicacion ;
        $infoProf->linksPublicacion =$request->linksPublicacion ;
        $infoProf->Publicaciones =$request->Publicaciones;
        
        $infoProf->nombreEmpresaExperiencia = $request->nombreEmpresaExperiencia;
        $infoProf->descripcionExperiencia = $request->descripcionExperiencia;
        $infoProf->fechaInicioExperiencia = $request->fechaInicioExperiencia;      
        $infoProf->fechaFinExperiencia = $request->fechaFinExperiencia;

        if($request->hasFile('avatar')){
            $infoProf->fotoperfil = (new generalesController)->almacenarFoto($request,'avatar');
        }
       
        $infoProf->save();

        return $infoProf;
    }

    public function update(Request $request,$valorid){

        
        $array = perfilProfesional::where('idUser', '=',$valorid)->get();

        $infoProf = $array[0];
        $infoProf->idUser = $request->user()->id;
        $infoProf->facebook =  $request->facebook ;
        $infoProf->instagram =  $request->instagram ;
        $infoProf->twitter =  $request->twitter ;
        $infoProf->whatsapp = $request->whatsapp ;
        $infoProf->youtube = $request->youtube ;
        $infoProf->tipoConsulta = $request->tipoConsulta;
        $infoProf->valorConsultaPresencial =  $request->valorConsultaPresencial ;
        $infoProf->valorConsultaVirtual =  $request->valorConsultaVirtual ;
        $infoProf->valorConsultaTelefonica =  $request->valorConsultaTelefonica ;
        $infoProf->url =  $request->url ;
        $infoProf->genero = $request->genero;
        $infoProf->EmpresaActual = $request->EmpresaActual;
        $infoProf->expertoEn = $request->expertoEn;

        $infoProf->descripcion =  $request->descripcion ;
        $infoProf->fechanacimiento = $request->fechaNacimiento;
        $infoProf->imagen =  $request->imagen; //este es el campo Galeria
        $infoProf->descripcion = $request->descripcion;
        $infoProf->hojaVida = $request->hojaVida;
        
        $infoProf->nivelEstudios =$request->nivelEstudios;
        $infoProf->nombreEstudios =$request->nombreEstudios;
        $infoProf->fechaEstudios = $request->fechaEstudios;
        $infoProf->estudios = $request->estudios;
        
        
        $infoProf->entidadCertificado = $request->entidadCertificado;
        $infoProf->nombreCertificado = $request->nombreCertificado;
        $infoProf->fechaCertificado = $request->fechaCertificado;
        $infoProf->titulos = $request->titulos;
        
        $infoProf->nombrePublicacion =$request->nombrePublicacion ;
        $infoProf->linksPublicacion = $request->linksPublicacion ;
        $infoProf->fechaPublicacion = $request->fechaPublicacion;
        $infoProf->Publicaciones =$request->Publicaciones;

        $infoProf->nombreEmpresaExperiencia = $request->nombreEmpresaExperiencia;
        $infoProf->descripcionExperiencia = $request->descripcionExperiencia;
        $infoProf->fechaInicioExperiencia = $request->fechaInicioExperiencia;      
        $infoProf->fechaFinExperiencia = $request->fechaFinExperiencia;
        

        if($request->hasFile('avatar')){
            $infoProf->fotoperfil = (new generalesController)->almacenarFoto($request,'avatar');
        }

        $infoProf->save();
        return $infoProf;

    }

    public function ConfigurarProfesionPerfil(Request $request,$CodigoPerfilUsuario){


        DB::delete('delete from controlesperfilesprofesiones where idPerfilProfesional = ?',[$CodigoPerfilUsuario]);
        
        $newControl = new controlesperfilesprofesiones;

        $newControl->idPerfilProfesional  = $CodigoPerfilUsuario;
        $newControl->idArea  = $request->slcAreaMiPerf;
        $newControl->idProfesion  = $request->slcProfesionMiPerf;
        $newControl->idEspecialidad  = $request->slcEspecialidadMiPerf;
        $newControl->idCiudad  = $request->codigoCiudad;
        

       

        return $newControl->save();        

    }




}