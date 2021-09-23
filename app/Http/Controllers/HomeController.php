<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\perfilProfesional;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(request $request)
    {

        
        $objbannersArea = $this->cargarAreas();
        $objbannersProfesionales =  $this->cargarProfesiones();
        $objbannersEspecialidades =  $this->cargarEspecialidades();
        $objProfDestacados =  $this->buscaProfesionalIndex();
        $objbannersParalax = $this->cargarBanner(11);
        $objbannersPrincipalSP = $this->cargarBanner(12);
        $objbannersPagoPublicidad = $this->cargarBanner(14);
        //dd($objbanners);
        return view('home',compact(
            'objbannersArea',
            'objbannersProfesionales',
            'objbannersEspecialidades',
            'objProfDestacados',
            'objbannersParalax',
            'objbannersPrincipalSP',
            'objbannersPagoPublicidad'));  
    }


    public function buscaProfesionalIndex()
    {
        
        $objProfDestacados = perfilProfesional::select('perfilesprofesionales.fotoperfil', 
        'infouser.nombre','infouser.apellido','users.id','profesiones.nombreProfesion','especialidades.nombreEspecialidad')
        ->distinct()
        ->join('users','users.id','=','perfilesprofesionales.idUser')
        ->join('controlesperfilesprofesiones','perfilesprofesionales.id','=','controlesperfilesprofesiones.idPerfilProfesional')
        ->join('profesiones','controlesperfilesprofesiones.idProfesion','=','profesiones.id')
        ->join('especialidades','controlesperfilesprofesiones.idEspecialidad','=','especialidades.id')
        ->join('infouser','users.id','=','infouser.id')
        ->join('pagos','users.id','=','pagos.idUsuario')
        ->where('pagos.idConcepto','=', 1204)
        ->where('pagos.aprobado','<>',0)
        ->get(); 
        return  $objProfDestacados;
    }
    public function cargarBanner($espacio){
         $objBannerArea = DB::table('ventabanners') 
         ->select()   
         ->whereRaw('espacio ='.$espacio)   
         ->whereRaw('(CURDATE() BETWEEN start AND end)')
         ->whereRaw('(TIME(NOW()) BETWEEN TIME(start) AND TIME(end))')
         ->where('aprobado', '<>', 0)
         ->inRandomOrder()  
        ->get();

         return $objBannerArea;
    }
    public function cargarAreas(){
        return db::select('SELECT * FROM `areas` ORDER BY `orden` asc');
    }
    public function cargarProfesiones(){
        return db::select('SELECT * FROM profesiones ORDER BY `nombreProfesion` asc');
    }
    public function cargarEspecialidades(){
        return db::select('SELECT * FROM especialidades ORDER BY `nombreEspecialidad` asc');
    }
    public function cargarPerfiles(){

        return db::select('SELECT DISTINCT concat(info.nombre,\' \',info.apellido) AS Name FROM perfilesprofesionales prof 
        INNER JOIN  users us on prof.idUser = us.id	
        INNER JOIN infouser info on us.id = info.id 
        ORDER BY concat(info.nombre,\' \',info.apellido) ASC');
    }



}
