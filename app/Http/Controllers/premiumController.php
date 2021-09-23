<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pagos;
use App\Http\Controllers\OpenPayController;



class premiumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $premiunProf = (new premiumController)->premiunProfesional($request->user()->id);
        $premiunTecn = (new premiumController)->premiunTecnologo($request->user()->id);
        $premiunDoce = (new premiumController)->premiunDocente($request->user()->id);
        $premiunEstu = (new premiumController)->premiunEstudiante($request->user()->id);
      $premiun = 0;
      return view('miCuenta.premiunView',compact('premiun'
        ,'premiunProf'
        ,'premiunTecn'
        ,'premiunDoce'
        ,'premiunEstu'
    ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function abrirPreviewHome(){
        return view('PremiunHome');

     }


    public function create(Request $request)
    {
        try {
            
            $valorCompra = 0;

            if ($request->compra == 1){
                    //profesional
                    $valorCompra = 1190000;
                    $descipcion = "Menbresia profesional ZAABRA SERVICIOS PROFESIONALES";
            }
            if($request->compra == 2){
                    //tecnologo
                    $valorCompra = 690000;
                    $descipcion = "Menbresia tecnologo ZAABRA SERVICIOS PROFESIONALES";
            }
            if($request->compra == 3){
                    //docente
                    $valorCompra = 290000;
                    $descipcion = "Menbresia docente ZAABRA SERVICIOS PROFESIONALES";
            }
            if($request->compra == 4){
                    //estudiante
                    $valorCompra = 200000;
                    $descipcion =  "Menbresia estudiante ZAABRA SERVICIOS PROFESIONALES";
            }
            //se almacen mas datos en el request para mas adelante ser reutilizados 
            $pagoTemporal = new \stdClass();
            $pagoTemporal->valorCompra = $valorCompra;
            $pagoTemporal->descipcion = $descipcion;
            
            $charge = (new OpenPayController)->pagoOpenPay($request,$pagoTemporal);
            //dd($charge);
            //aca se construye 1 pago 
            $pagos = new pagos;
            $pagos->idUsuario = $request->user()->id;//toca Mirarlo
            $pagos->referenceCode = $GLOBALS["source_id"];
            $pagos->aprobado = 0 ;
            $pagos->fecha = date(now());
            $pagos->idConcepto = 1202 ;
            $pagos->metodoPago = $charge->method;
            /*$pagos->tipoTransaccion = ;*/
            $pagos->idOpenPay = $charge->id;
            $pagos->valor = $valorCompra ;

            $pagos->save();
            
            return response()->json([
                "sucess" => true,
                "url" => $charge->payment_method->url
                ]); 


            
            //Esto antiguanteme dirigia a PayU 
            //$PagoPayU =  $this->credencialesPayU($valorCompra,$pagos->referenceCode, $request,$descipcion); 

            //return response()->json([$PagoPayU]);

            //dd($pagos->idPago);

        } catch (Exception $e) {
            return 0;
        return   \Log::error('QueryException: ' . $e->getMessage()) ;

        } 
        
        
    }

    public function actualizarPago($idOpenPay,$valor,$numeroAutorizacion) {
        
       
        $pagos = pagos::where('idOpenPay', '=',$idOpenPay)->get();
        $pagos[0]->aprobado = 1;
        
        if($valor == 1190000){
            $pagos[0]->idConcepto = 1201;
        }
        if($valor == 690000){
            $pagos[0]->idConcepto = 1205;
        }
        if($valor == 290000){
            $pagos[0]->idConcepto = 1206;
        }
        if($valor == 200000){
            $pagos[0]->idConcepto = 1207;
        }
        $pagos[0]->numeroAutorizacion = $numeroAutorizacion;

       // DD($pagos[0]->save());
        $guardo = $pagos[0]->save();
        


        return $guardo; 

    }

    /*
    public function credencialesPayU($valorCompra , $referenceCode,Request $request,$descipcion){

     
        $pago = new \stdClass();
        $PayU =  (new payuController)->show();
        
        $api_key= $PayU[0]->api_key;
        
        $pago->merchantId =$PayU[0]->id_comerc;// idComercio
        $pago->accountId=$PayU[0]->pais; // este es el de pais 
        $pago->description= $descipcion;//"Test PAYU";
        $pago->referenceCode =  $referenceCode;//"TestPayU";
        $pago->amount=$valorCompra;
        $pago->tax= 0 ;

        $pago->taxReturnBase="0";
        $pago->currency= $PayU[0]->valorMoneda;
        $pago->signature = md5($api_key."~".$pago->merchantId."~".$pago->referenceCode."~".$pago->amount."~".$pago->currency); //"ba9ffa71559580175585e45ce70b6c37";
        $pago->test=test;
        $pago->buyerEmail= $request->user()->email;//"test@test.com";//
        $pago->responseUrl = $PayU[0]->responseUrl ;
        $pago->confirmationUrl = $PayU[0]->confirmationUrl ;
    
        return $pago;
        
    }*/

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
        $valor = pagos::where('idUsuario','=',$id)
        ->where('aprobado','=','1')
        ->get();


        return $valor;
    }
    public function premiunProfesional($id)
    {
        $valor = pagos::where('idUsuario','=',$id)
        ->where('aprobado','=','1')
        ->where('idConcepto','=','1201')
        ->whereRaw('TIMESTAMPDIFF(DAY,DATE_FORMAT(fecha,\'%Y-%m-%d\'),CURDATE()) <= 365')
        ->count();
        return $valor;
    }
    public function premiunTecnologo($id)
    {
        $valor = pagos::where('idUsuario','=',$id)
        ->where('aprobado','=','1')
        ->where('idConcepto','=','1205')
        ->whereRaw('TIMESTAMPDIFF(DAY,DATE_FORMAT(fecha,\'%Y-%m-%d\'),CURDATE()) <= 365')
        ->count();
        return $valor;
    }
    public function premiunDocente($id)
    {
        $valor = pagos::where('idUsuario','=',$id)
        ->where('aprobado','=','1')
        ->where('idConcepto','=','1206')
        ->whereRaw('TIMESTAMPDIFF(DAY,DATE_FORMAT(fecha,\'%Y-%m-%d\'),CURDATE()) <= 183')
        ->count();
        return $valor;
    }
    public function premiunEstudiante($id)
    {
        $valor = pagos::where('idUsuario','=',$id)
        ->where('aprobado','=','1')
        ->where('idConcepto','=','1207')
        ->whereRaw('TIMESTAMPDIFF(DAY,DATE_FORMAT(fecha,\'%Y-%m-%d\'),CURDATE()) <= 183')
        ->count();
        return $valor;
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
