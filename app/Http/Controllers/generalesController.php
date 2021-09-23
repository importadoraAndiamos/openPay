<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pagos;
use App\Models\areas;
use App\Models\profesiones;
use App\Models\especialidades;
use App\Models\controlesperfilesprofesiones;
use App\Models\perfilesprofesionales;
// La M de Model es importante en mayuscula por tema del servidor 
use App\Models\infoUser;
use Illuminate\Support\Facades\DB;
use App\Models\catalogos;
use App\Http\Controllers\busqueda\especialidadesController;
use App\Http\Controllers\estudiantes\estudiantesController;
//variables Globales
$cadenaPrin = '' ;

class generalesController extends Controller
{
  

    public function almacenarFoto(Request $request, $nombreInputArchivo){

        if($request->hasFile($nombreInputArchivo)){

            $file = $request->file($nombreInputArchivo);

            $nameFile = $file->getClientOriginalName();
            
            $ruta = 'img/user/'.$request->user()->id.'/' ;

           
            $file->move(public_path().'/'.$ruta , $nameFile);
            //dd($nameFile);
            return $ruta.$nameFile;
        }



    }
    public function simulaCorreo(){
        $objEncCompra =  (new misPagosController)->cargueCompra(511608753734);
        //dd($objEncCompra);
        return view('mails.correoPago',compact('objEncCompra'));
    }

 

    public function armarJsonPosicion($valorCaja,$tamañoArrar,$posicion)
    {
    
        $posiRelativa = $posicion-1;
        
        
        if($posicion == 1){
            
            $GLOBALS['cadenaPrin'] = '{"0":"'.$valorCaja.'"' ;
            if($tamañoArrar == 1)    {
                $GLOBALS['cadenaPrin'] = $GLOBALS['cadenaPrin'].'}';
                return $GLOBALS['cadenaPrin'];
            }
                
        }else{
            if($posicion < $tamañoArrar){
               
                $GLOBALS['cadenaPrin'] = $GLOBALS['cadenaPrin'].',"'.$posiRelativa.'":"'.$valorCaja.'"' ;
                
            }if($posicion == $tamañoArrar){
                $GLOBALS['cadenaPrin'] = $GLOBALS['cadenaPrin'].',"'.$posiRelativa.'":"'.$valorCaja.'"' ;
                $GLOBALS['cadenaPrin'] = $GLOBALS['cadenaPrin'].'}';

                return $GLOBALS['cadenaPrin'];
            }
        }
    }


    public function buscador(Request $request){
        
        if(empty($request->buscar)){
            $request->buscar = $request->BuscadorEspecialidades;
        }
        //primero busca si existe en profesiones
        $objProfesion = profesiones::select('*')
        ->whereRaw('nombreProfesion LIKE \'%'.$request->buscar.'%\'')
        ->get();
        //si no llega a existir en profesiones   
        if(!isset($objProfesion[0])){
            //busca en especialidades 
            $objEspecialidad = especialidades::select('*')
            ->whereRaw('nombreEspecialidad LIKE \'%'.$request->buscar.'%\'')
            ->get();
            //pregunta si existe en especialidades
            if(!isset($objEspecialidad[0])){
                //No existe en especialidades ni en profesiones
                $valoridEspecialidad = 0;
                $valoridProfesion = 0;
            }else{
                //si si existe guarda el ID de la especialidad
                $valoridEspecialidad= $objEspecialidad[0]->id; 
                $valoridProfesion = 0;
            }

        }else{
            //si si existe en profesiones guarda el ID de la profesion
            $valoridProfesion = $objProfesion[0]->id; 
            $valoridEspecialidad = 0;
        }
       

        //si el ID de la profesion es diferente de Cero 
        if($valoridProfesion <> 0){
            
            //busca el area 
            $objArea = areas::select('*')
            ->where('id','=',$objProfesion[0]->idArea)
            ->get();

          
            //esta parte de la ruta retorna a las especialidades 
            $objEspecialidades = especialidades::select('especialidades.nombreEspecialidad','especialidades.ruta','especialidades.imagen')
            ->join('profesiones','profesiones.id','=','especialidades.idProfesion')
            ->join('areas','areas.id','=','profesiones.idArea')
            ->where ('especialidades.idProfesion','=',$objProfesion[0]->id)
            ->where ('profesiones.idArea','=',$objProfesion[0]->idArea)
            ->get();
                //envia los 3 objetos a la vista con la ruta 
                
             return redirect()->route('especialidades', array('area' => $objArea[0]->ruta,'profesion' =>$objProfesion[0]->ruta));
            
        }
    
        //si no era la profesion aparece la especialidad

        //esta parte de la ruta retorna a las tarjetas 
        
        if($valoridEspecialidad <> 0){
          
            //busca los perfiles que coincidan con al especialidad
            $consultacontrolesperfilesprofesiones = controlesperfilesprofesiones::select('idPerfilProfesional')
            ->where ('idEspecialidad','=',$valoridEspecialidad)
            ->get();

            if(!isset($consultacontrolesperfilesprofesiones[0])){
                //si no ningun perfil que pertenesca a la especiliadidad envia a pagina no se encontraron coincidencias 
                return view('profesionales.NoGaleriaProfesionales');
            }
            
            //En caso de que si se encuentren conicidencias 
            //se busca la profesion con relacion a la especialidad
            $objProfesion= profesiones::select('*')
            ->where('id','=',$objEspecialidad[0]->idProfesion)
            ->get();
            //Se busca el arear con relacion a la profesion
            $objArea= areas::select('*')
            ->where('id','=',$objProfesion[0]->idArea)
            ->get();

            $area = $objArea[0]->nombreArea;
            $profesion = $objProfesion[0]->nombreProfesion;
            $especialidad = $objEspecialidad[0]->nombreEspecialidad;
           
           
            //esto aplica solo pa estudiantes 
            if($objArea[0]->id == 5 ){
                //Recorre todos los perfiles de estudiantes
                foreach($consultacontrolesperfilesprofesiones as $index => $value){
                    //se consultan los estudiantes pertenecientes a la especialidad
                    $objProfEstudiante[] = (new estudiantesController)->consultarEstudiante($valoridEspecialidad,$value->idPerfilProfesional);
                }
                
                //Retorna a la vista de galerias pero de los estudiantes 
                return view('estudiantes.galeriaEstudiantes',compact(
                    'objProfEstudiante','area' ,'profesion' ,'especialidad'));
            }

            return redirect()->route('galeriaProfesionales', array('area' =>  $objArea[0]->ruta ,'profesion'=>  $objProfesion[0]->ruta,'especialidad'=>  $objEspecialidad[0]->ruta  ));
           

        }else{
            //se busca si el perfil existe
            $objPerfil = infoUser::select()
            ->join('perfilesprofesionales','perfilesprofesionales.idUser','=','infouser.id')
           ->whereRaw('concat(infouser.nombre,\' \',infouser.apellido) LIKE \'%'.$request->buscar.'%\'')
           ->get();
           
           //si existe el perfil se continua a buscar el area
            if(isset($objPerfil[0])){

                $objProfesionalOEstudiantes = controlesperfilesprofesiones::select()
                //Se relaciona con la primera coincidencia de perfil                           
                ->where('idPerfilProfesional','=',$objPerfil[0]->id)
                ->get();

                //Esto solo aplica para los perfiles que son estudiantes 
                if($objProfesionalOEstudiantes[0]->idArea == 5){
                    
                    return redirect()->route('infoEstudiante', array('estudiante' => $objPerfil[0]->idUser));
                }else{
                    //esto aplica para el resto de profesionales
                    
                    return redirect()->route('infoProfesional', array('profesional' => $objPerfil[0]->idUser));
                }
                

                
                
            }

            
        }
            

    }

    public function consultarCatalogos($idCatalogo){
        $objCatalogo =  catalogos::select('id_catalogo','id_padre','nombre')     
        ->where('id_padre', '=', $idCatalogo )
        ->get();
        return $objCatalogo ;
    }
    
    public function limpiarArray ($array){
        $array = array_filter($array); 
       return $array;
    }

   

}