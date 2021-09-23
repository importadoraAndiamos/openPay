<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\premiumController;
use Illuminate\Pagination\Paginator;
use Illuminate\Http\Request;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * . 
     * @return void
     */
    public function boot(Request $request)
    {

        $listaAutocompletable = $this->generarLista();
        //esta linea elimina la ultima coma de la lista 
        $listaAutocompletable = substr($listaAutocompletable, 0, -1);
       
        $urlZaabra= "http://localhost:8000/";
        //$urlZaabra = 'https://sprofesional.zaabra.co/';
       // $urlZaabra= "http://portal-test.zaabra.local/";

        $GLOBALS["urlZaabra"] = $urlZaabra;
        

        if(!empty($request)){
            $premiunProf = (new premiumController)->premiunProfesional(0);
            $premiunTecn = (new premiumController)->premiunTecnologo(0);
            $premiunDoce = (new premiumController)->premiunDocente(0);
            $premiunEstu = (new premiumController)->premiunEstudiante(0);
        }else{
            $premiunProf = (new premiumController)->premiunProfesional($request->user()->id);
            $premiunTecn = (new premiumController)->premiunTecnologo($request->user()->id);
            $premiunDoce = (new premiumController)->premiunDocente($request->user()->id);
            $premiunEstu = (new premiumController)->premiunEstudiante($request->user()->id);
            
        }

          
        

        //dd($listaAutocompletable);
        View::share(compact('urlZaabra','listaAutocompletable'));
        Paginator::defaultView('vendor.pagination.bootstrap-4');
        Paginator::defaultSimpleView('vendor.pagination.simple-bootstrap-4');

    }
    
    public function generarLista(){

        $objProfesiones = (new HomeController)->cargarProfesiones();
        $objEspecialidades = (new HomeController)->cargarEspecialidades();
        $objPerfiles = (new HomeController)->cargarPerfiles();
        $varLista ="";
        
        
        foreach($objProfesiones as $item){
            $varLista = $varLista."\"".$item->nombreProfesion.'",';
        }
        
        foreach($objEspecialidades as $item){
            $varLista = $varLista."\"".$item->nombreEspecialidad.'",';
        }

        foreach($objPerfiles as $item){
            $varLista = $varLista."\"".$item->Name.'",';
        }

       return $varLista;

    }
}
