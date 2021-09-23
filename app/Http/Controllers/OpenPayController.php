<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use Openpay;
use Exception;
use OpenpayApi;
use OpenpayApiError;
use OpenpayApiAuthError;
use OpenpayApiRequestError;
use OpenpayApiConnectionError;
use OpenpayApiTransactionError;
use Illuminate\Http\JsonResponse;
use App\Models\infoUser;

require_once '../vendor/autoload.php';

class OpenPayController extends Controller
{
    /**
     * Create charge in OpenPay
     * https://www.openpay.mx/docs/api/?php#con-id-de-tarjeta-o-token
     * 
     */
    public function pagoOpenPay(Request $request,$pagoTemporal)
    {
        
        try {
            $usuarioCompra = (new infoBasicoController)->usuarioBasico($request->user()->id);
            
            // create instance OpenPay
            $openpay = Openpay::getInstance('mauvaatmwmszthwx4zu3', 'sk_5222c5c7e18a4247bf967c450bbef112', 'CO');
            Openpay::setProductionMode(false);
            // create object customer
            $customer = array(
                'name' => $usuarioCompra[0]->nombre,
                'last_name' => $usuarioCompra[0]->apellido,
                'email' => $request->user()->email
            );
            
            $GLOBALS["source_id"] = $request->user()->id.time();

            // create object charge
            $chargeRequest =  array(
                'method' => 'card',
                'amount' => $pagoTemporal->valorCompra,
                'description' => $pagoTemporal->descipcion,
                'customer' => $customer,
                'source_id' => $GLOBALS["source_id"],
                "send_email" => false,
                "confirm" => false,
                'currency' => 'COP',
                "redirect_url" => $GLOBALS["urlZaabra"]."confirmacionOpenPay"
                
            );

            $charge = $openpay->charges->create($chargeRequest);
            
            return $charge;
            /*return response()->json([
                'data' => $charge->id
            ]);*/

        } catch (OpenpayApiTransactionError $e) {
            return response()->json([
                'error' => [
                    'category' => $e->getCategory(),
                    'error_code' => $e->getErrorCode(),
                    'description' => $e->getMessage(),
                    'http_code' => $e->getHttpCode(),
                    'request_id' => $e->getRequestId()
                ]
            ]);
        } catch (OpenpayApiRequestError $e) {
            return response()->json([
                'error' => [
                    'category' => $e->getCategory(),
                    'error_code' => $e->getErrorCode(),
                    'description' => $e->getMessage(),
                    'http_code' => $e->getHttpCode(),
                    'request_id' => $e->getRequestId()
                ]
            ]);
        } catch (OpenpayApiConnectionError $e) {
            return response()->json([
                'error' => [
                    'category' => $e->getCategory(),
                    'error_code' => $e->getErrorCode(),
                    'description' => $e->getMessage(),
                    'http_code' => $e->getHttpCode(),
                    'request_id' => $e->getRequestId()
                ]
            ]);
        } catch (OpenpayApiAuthError $e) {
            return response()->json([
                'error' => [
                    'category' => $e->getCategory(),
                    'error_code' => $e->getErrorCode(),
                    'description' => $e->getMessage(),
                    'http_code' => $e->getHttpCode(),
                    'request_id' => $e->getRequestId()
                ]
            ]);
        } catch (OpenpayApiError $e) {
            return response()->json([
                'error' => [
                    'category' => $e->getCategory(),
                    'error_code' => $e->getErrorCode(),
                    'description' => $e->getMessage(),
                    'http_code' => $e->getHttpCode(),
                    'request_id' => $e->getRequestId()
                ]
            ]);
        } catch (Exception $e) {
            return response()->json([
                'error' => [
                    'category' => $e->getCategory(),
                    'error_code' => $e->getErrorCode(),
                    'description' => $e->getMessage(),
                    'http_code' => $e->getHttpCode(),
                    'request_id' => $e->getRequestId()
                ]
            ]);
        }
    }
    public function confirmacionOpenPay(Request $request){
        
        $consultarCargo =  Openpay::getInstance('mauvaatmwmszthwx4zu3', 'sk_5222c5c7e18a4247bf967c450bbef112', 'CO');
        //este es el id del cargo
        $idOpenPay = $request->id;
        
        //estos son los datos que se guardan para actualizar el pago 
        $Respuesta = $consultarCargo->charges->get($idOpenPay);
        $valorCargo = $Respuesta->amount;
        $numeroAutorizacion = $Respuesta->authorization;
        
        // estos son los elementos que retornaran a la vista 
        $transactionState = $Respuesta->status;
        $referenceCode = $idOpenPay;
        $TX_VALUE =  $valorCargo;
        $processingDate = $Respuesta->creation_date;
        $merchant_address = $request->user()->email;
        $merchant_name =  "ZAABRA SERVICIOS PROFESIONALES";
        //aca consulta el usuario actual 
        $usuarioActual = infoUser::find($request->user()->id);
        $telephone = $usuarioActual->telefono;    


        if ($Respuesta->status == "completed") { 
            $description = "Pago Exitoso";
            (new premiumController)->actualizarPago($idOpenPay, $valorCargo,$numeroAutorizacion);
            return View('payu.carritoResponse', compact('merchant_address', 'referenceCode', 'telephone', 'merchant_name', 'description', 'TX_VALUE', 'processingDate'));
        } elseif ($Respuesta->status == 6) {
            $description = "Pago Exitoso";
                //(new premiumController)->actualizarPago($request->referenceCode);
            return View('payu.carritoResponseDeclined', compact('merchant_address', 'referenceCode', 'telephone', 'merchant_name', 'description', 'TX_VALUE', 'processingDate'));
        } elseif ($Respuesta->status == 104) {
            $description = "Pago Exitoso";
                //(new premiumController)->actualizarPago($request->referenceCode);
            return View('payu.carritoResponseError', compact('merchant_address', 'merchant_name', 'telephone'));
        } elseif ($Respuesta->status == 5) {
            $description = "Pago Exitoso";
                //(new premiumController)->actualizarPago($request->referenceCode);
            return View('payu.carritoResponseExpired', compact('merchant_address', 'merchant_name', 'telephone'));
        } elseif ($Respuesta->status == 7) {
            $description = "Pago Exitoso";
            // (new premiumController)->actualizarPago($request->referenceCode);
            return View('payu.carritoResponsePending', compact('merchant_address', 'merchant_name', 'telephone'));
        }


    }

}
