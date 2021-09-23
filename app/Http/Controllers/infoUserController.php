<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Auth;
use App\User;   
use App\Models\infoUser;
use App\models\perfilProfesional;
use App\Http\Controllers\infoBasicoController;

use Illuminate\Support\Facades\DB;


class infoUserController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $usuario = $this->show($request->user()->id);
        
        $premiunProf = (new premiumController)->premiunProfesional($request->user()->id);
        $premiunTecn = (new premiumController)->premiunTecnologo($request->user()->id);
        $premiunDoce = (new premiumController)->premiunDocente($request->user()->id);
        $premiunEstu = (new premiumController)->premiunEstudiante($request->user()->id);
        
        //dd($premiun);

        $pais =  (new paisController)->show();
        $departamento = (new departamentoController)->show();
        $provincia = (new provinciaController)->show();
        $municipio = (new municipioController)->show();
        $tipoDocumento = (new tipoDocumentoController)->show();

        /*Esta Seccion que viene se incluyo apartir de la fusion de datos basicos y mi cuenta*/
        $infoProfesiona = new infoProfesionalController;
        //encuentra los datos de edicion del perfil
        $obj =  $infoProfesiona->cargarInfoPerfilSinAprobado($request->user()->id);
        //esto es para traer en nombre y apellido de mis datos 
        $objUsuario = (new infoBasicoController)->usuarioBasico($request->user()->id);
        
        //esto valida si existe el perfil en el sistema si no lo envia vacio
        if(count($obj) == 0){
            $obj[] = '' ;
            $perfil = '';
        }else {
            $perfil = $obj[0];// desencapsulo el objeto para retormar a la vista 
        }

        //si el perfil llega a estar vacio
        if($perfil == ""){ 
            /*esto solo es para cargar area, profesion, especialidad del perfil envia el codigo 0*/
           $objAreaProfEspe = $infoProfesiona->controlPerfilProfesionalPorUsuario(0);
           
       }else{
            /*esto solo es para cargar area, profesion, especialidad del perfil por su id */
           $objAreaProfEspe = $infoProfesiona->controlPerfilProfesionalPorUsuario($perfil->id);
       }

        $objbannersArea = (new HomeController)->cargarAreas();
        $objbannersProfesionales =  (new HomeController)->cargarProfesiones();
        $objbannersEspecialidades =  (new HomeController)->cargarEspecialidades();
        
        
        

        return View('miCuenta.misDatos',
        compact('usuario'
        , 'perfil'
        , 'objAreaProfEspe'
        , 'objbannersArea'
        , 'objbannersProfesionales'
        , 'objbannersEspecialidades'
        , 'pais'
        , 'departamento'
        , 'provincia'
        , 'municipio'
        , 'tipoDocumento'
        , 'premiunProf'
        , 'premiunTecn'
        , 'premiunDoce'
        , 'premiunEstu'));
    }
  
    public function usuarioExiste($id){
        $exisUser = DB::table('infouser')     
        ->whereRaw('id = '."'$id'")
        ->count();
        return $exisUser;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $usuario = infoUser::find($id);
        return $usuario;
    }

   

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function edit(Request $request)
    {
       
      
        $id = $request->user()->id;
        
        if(empty($request->nombre)){
            $request->nombre = '';
        }
        
        if(empty($request->apellido)){
            $request->apellido = '';
        }
       // dd($request->numeroIdentificacion);
        if(empty($request->numeroIdentificacion)){
            $request->numeroIdentificacion = 0;
        }
        if(empty($request->telefono)){
            $request->telefono = '';
        }
        if(empty($request->direccion)){
            $request->direccion = '';
        }
       
        if(empty($request->pais)){
            $request->pais = 0;
        }
        if(empty($request->departamento)){
            $request->departamento = 0;
        }
        if(empty($request->provincia)){
            $request->provincia = 0;
        }
        if(empty($request->ciudad)){
            $request->ciudad = 0;
        }
        if(empty($request->fechaNacimiento)){
            $request->fechaNacimiento = '';
        }

        

        if(empty($request->descripcion)){
            $request->descripcion = '';
        }
        
        
        $pefilExiste = (new infoProfesionalController)->pefilExiste($id);
        $usuarioExiste = $this->usuarioExiste($id);

        if ($pefilExiste == 1){
                                //Esta instancia se crea por la migracion de la funcionabilidad que ya se encontraba en info Basico 
                                
            $actualizoUsuario = (new infoBasicoController)->update($request,$id);
            //dd($request);
           
            (new infoProfesionalController)->ConfigurarProfesionPerfil($request,$actualizoUsuario->id);
        }else {
            //
                                //Esta instancia se crea por la migracion de la funcionabilidad que ya se encontraba en info Basico 
            $insertoUsuario = (new infoBasicoController)->create($request,$id);
           //dd($request);
            (new infoProfesionalController)->ConfigurarProfesionPerfil($request,$insertoUsuario->id);
        }
        
        if ($usuarioExiste == 1){
            
            $actualizoUsuario = $this->update($request,$id);
        }else {
            
            $insertoUsuario = $this->create($request,$id);
        }
        
        return redirect('miCuenta');  

        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$valorid)
    {
        
        $infoUser = infoUser::find($valorid);
        $infoUser->id = $valorid;
        $infoUser->nombre = $request->nombre; 
        $infoUser->apellido = $request->apellido;
        $infoUser->tipo_documento = $request->tipoDocumento;
        $infoUser->numero_documento = $request->numeroIdentificacion;
        $infoUser->telefono  = $request->telefono;
        $infoUser->pais = $request->pais;
        $infoUser->departamento = $request->departamento;
        $infoUser->provincia = $request->provincia;
        
        $infoUser->ciudad  = $request->ciudad;
        $infoUser->direccion = $request->direccion;
        return $infoUser->save();

    }
      /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request, $valorid)
    {   

        $infoUser = new infoUser;
        
        $infoUser->id = $valorid;
        $infoUser->nombre = $request->nombre; 
        $infoUser->apellido = $request->apellido;
        $infoUser->tipo_documento = $request->tipoDocumento;
        $infoUser->numero_documento = $request->numeroIdentificacion;
        $infoUser->telefono  = $request->telefono;
        $infoUser->pais = $request->pais;
        $infoUser->departamento = $request->departamento;
        $infoUser->provincia = $request->provincia;
        $infoUser->ciudad  = $request->ciudad;
        
        $infoUser->direccion = $request->direccion;

       return $infoUser->save();


    }

    

    


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
    }
}
