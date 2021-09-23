<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\perfilProfesional;

class infoBasicoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $infoProfesiona = new infoProfesionalController;
        //encuentra los datos de edicion del perfil
        $obj =  $infoProfesiona->cargarInfoPerfilSinAprobado($request->user()->id);
        //esto es para traer en nombre y apellido de mis datos 
        $objUsuario = $this->usuarioBasico($request->user()->id);
        
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
        $premiun = (new premiumController)->show($request->user()->id);

        return view('miCuenta.miBasico',compact(
        'objbannersArea',
        'objbannersProfesionales',
        'objbannersEspecialidades',
        'premiun',
        'objUsuario',
        'objAreaProfEspe',
        'perfil'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function gestionarPerfilProfesional(Request $request)
    {
        $id = $request->user()->id;

        if(empty($request->descripcion)){
            $request->descripcion = '';
        }
        
        $pefilExiste = (new infoProfesionalController)->pefilExiste($id);

        if ($pefilExiste == 1){

            $actualizoUsuario = $this->update($request,$id);
            //dd($request);
            (new infoProfesionalController)->ConfigurarProfesionPerfil($request,$actualizoUsuario->id);
        }else {

            $insertoUsuario = $this->create($request,$id);
           //dd($request);
            (new infoProfesionalController)->ConfigurarProfesionPerfil($request,$insertoUsuario->id);
        }

        return redirect('basicView');  


    }
    public function usuarioBasico($profesional){

        $perfil = DB::select('SELECT  INFO.nombre , INFO.apellido
        FROM users USER  
        INNER JOIN infouser INFO ON USER.id = INFO.id 
        
        WHERE USER.id = ?', [$profesional]) ;

       
        return $perfil;
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request, $id)
    {
        $infoProf = new perfilProfesional;
        $infoProf->idUser = $request->user()->id;
        $infoProf->descripcion =  $request->descripcion ;

        if($request->hasFile('avatar')){
            $infoProf->fotoperfil = (new generalesController)->almacenarFoto($request,'avatar');
        }
        $infoProf->save();

        return $infoProf;
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
   
        $array = perfilProfesional::where('idUser', '=',$valorid)->get();
       
        $infoProf = $array[0];
        $infoProf->idUser = $request->user()->id;
        $infoProf->descripcion =  $request->descripcion;
        $infoProf->fechanacimiento = $request->fechaNacimiento;
        if($request->hasFile('avatarBasico')){
            $infoProf->fotoperfil = (new generalesController)->almacenarFoto($request,'avatarBasico');
        }
        //dd($infoProf);
         $infoProf->save();

        return $infoProf;
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
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
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
