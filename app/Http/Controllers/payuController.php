<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\credencialesPayU;
use App\Models\transaccionesPayu;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Models;

use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use \stdClass;

use App\Mail\pagosMail;



class payuController extends Controller
{
    //
    public function response(Request $request)//pagina de pago
    {
        if($this->existeTransaccion($request->referenceCode) != 0){
            $objTransaccion = $this->obtenerTransaccion($request->referenceCode);
            $transaccion = $objTransaccion[0];
        }else{
            $transaccion = new transaccionesPayu;
        }
       
        $transaccion->action_code_description = (isset ($request->action_code_description) == false) ? 'null' : $request->action_code_description  ;
        
        $transaccion->authorizationCode = (isset ($request->authorizationCode) == false) ? 'null' : $request->authorizationCode ;
        $transaccion->buyerEmail = (isset ($request->buyerEmail) == false) ? 'null' : $request->buyerEmail;
        $transaccion->cc_holder = (isset ($request->cc_holder) == false) ? 'null' :$request->cc_holder ;
        $transaccion->cc_number = (isset ($request->cc_number) == false) ? 'null' :$request->cc_number ;
        $transaccion->currency = (isset ($request->currency) == false) ? 'null' :$request->currency ;
        $transaccion->cus = (isset ($request->cus) == false) ? 'null' : $request->cus ;
        $transaccion->description = (isset ($request->description) == false) ? 'null' : $request->description ;
        $transaccion->extra1 = (isset ($request->extra1) == false) ? 'null' : $request->extra1 ;
        $transaccion->extra2 = (isset ($request->extra2) == false) ? 'null' : $request->extra2 ;
        $transaccion->extra3 = (isset ($request->extra3) == false) ? 'null' : $request->extra3 ;
        $transaccion->installmentsNumber = (isset ($request->installmentsNumber) == false) ? 'null' : $request->installmentsNumber ;
        $transaccion->lapPaymentMethod = (isset ($request->lapPaymentMethod) == false) ? 'null' : $request->lapPaymentMethod ;
        $transaccion->lapPaymentMethodType = (isset ($request->lapPaymentMethodType) == false) ? 'null' : $request->lapPaymentMethodType ;
        $transaccion->lapResponseCode = (isset ($request->lapResponseCode ) == false) ? 'null' : $request->lapResponseCode ;
        $transaccion->lapTransactionState = (isset ($request->lapTransactionState) == false) ? 'null' : $request->lapTransactionState ;
        $transaccion->lng = (isset ($request->lng) == false) ? 'null' : $request->lng ;
        $transaccion->merchant_address = (isset ($request->merchant_address) == false) ? 'null' : $request->merchant_address ;
        $transaccion->merchant_name = (isset ($request->merchant_name) == false) ? 'null' : $request->merchant_name ;
        $transaccion->merchant_url = (isset ($request->merchant_url) == false) ? 'null' : $request->merchant_url   ;
        $transaccion->merchantId = (isset ($request->merchantId) == false) ? 'null' :$request->merchantId;
        $transaccion->message = (isset ($request->message) == false) ? 'null' : $request->message ;
        $transaccion->orderLanguage = (isset ($request->orderLanguage) == false) ? 'null' : $request->orderLanguage ;
        $transaccion->polPaymentMethod = (isset ($request->polPaymentMethod) == false) ? 'null' : $request->polPaymentMethod ;
        $transaccion->polPaymentMethodType = (isset ($request->polPaymentMethodType) == false) ? 'null' : $request->polPaymentMethodType ;
        $transaccion->polResponseCode = (isset ($request->polResponseCode) == false) ? 'null' : $request->polResponseCode ;
        $transaccion->processing_date_time = (isset ($request->processing_date_time) == false) ? $request->processingDate : $request->processing_date_time ;
        $transaccion->processingDate = (isset ($request->processingDate) == false) ? 'null' : $request->processingDate ;
        $transaccion->pseBank = (isset ($request->pseBank) == false) ? 'null' : $request->pseBank ;
        $transaccion->pseCycle = (isset ($request->pseCycle) == false) ? 0 : $request->pseCycle ;
        $transaccion->pseReference1 = (isset ($request->pseReference1) == false) ? 'null' : $request->pseReference1;
        $transaccion->pseReference2 = (isset ($request->pseReference2) == false) ? 'null' : $request->pseReference2 ;
        $transaccion->pseReference3 = (isset ($request->pseReference3) == false) ? 'null' : $request->pseReference3 ;
        $transaccion->reference_pol = (isset ($request->reference_pol) == false) ? 'null' : $request->reference_pol  ;
        $transaccion->referenceCode = (isset ($request->referenceCode) == false) ? 'null' : $request->referenceCode ;
        $transaccion->request_number = (isset ($request->request_number) == false) ? 'null' : $request->request_number ;
        $transaccion->risk = (isset ($request->risk) == false) ? 0 : $request->risk ;
        $transaccion->signature = (isset ($request->signature) == false) ? 'null' : $request->signature ;
        $transaccion->telephone = (isset ($request->telephone) == false) ? 'null' : $request->telephone ;
        $transaccion->transactionId = (isset ($request->transactionId) == false) ? 'null' : $request->transactionId ;
        $transaccion->transactionState = (isset ($request->transactionState) == false) ? 'null' : $request->transactionState ;
        $transaccion->trazabilityCode = (isset ($request->trazabilityCode) == false) ? 'null' : $request->trazabilityCode ;
        $transaccion->TX_ADMINISTRATIVE_FEE = (isset ($request->TX_ADMINISTRATIVE_FEE) == false ||  $request->TX_ADMINISTRATIVE_FEE == .00) ? 0 : $request->TX_ADMINISTRATIVE_FEE ;
        $transaccion->TX_TAX = (isset ($request->TX_TAX) == false  || $request->TX_TAX == .00) ? 0 : $request->TX_TAX ;
        $transaccion->TX_TAX_ADMINISTRATIVE_FEE = (isset ($request->TX_TAX_ADMINISTRATIVE_FEE) == false || $request->TX_TAX_ADMINISTRATIVE_FEE== .00) ? 0 : $request->TX_TAX_ADMINISTRATIVE_FEE ;
        $transaccion->TX_TAX_ADMINISTRATIVE_FEE_RETURN_BASE = (isset ($request->TX_TAX_ADMINISTRATIVE_FEE_RETURN_BASE) == false || $request->TX_TAX_ADMINISTRATIVE_FEE_RETURN_BASE== .00) ? 0 : $request->TX_TAX_ADMINISTRATIVE_FEE_RETURN_BASE ;
        $transaccion->TX_VALUE = (isset ($request->TX_VALUE) == false || $request->TX_VALUE == .00) ? 0 :$request->TX_VALUE ;
        $transaccion->account_number_ach = (isset ($request->account_number_ach) == false ||  $request->account_number_ac == .00) ? 0 :$request->account_number_ach ;
     
        $transaccion->save();

        
        $transactionState = $request->transactionState;
        $merchant_address = $request->merchant_address;
        $referenceCode = $request->referenceCode;
        $telephone = $request->telephone;
        $merchant_name = $request->merchant_name;
        $description = $request->description;
        $TX_VALUE = $request->TX_VALUE;
        $processingDate = $request->processingDate;

        //Envio Al cliente 
        Mail::to($request->buyerEmail)->send(new pagosMail($request->referenceCode));
        
        //Envio a Finanzas 
        Mail::to('finanzas@zaabra.com.co')->send(new pagosMail($request->referenceCode));
        
        


        if ($transactionState == 4) {    
            (new premiumController)->actualizarPago($request->referenceCode, $request->TX_VALUE);
            return View('payu.carritoResponse', compact('merchant_address', 'referenceCode', 'telephone', 'merchant_name', 'description', 'TX_VALUE', 'processingDate'));
        } elseif ($transactionState == 6) {
            
                //(new premiumController)->actualizarPago($request->referenceCode);
            return View('payu.carritoResponseDeclined', compact('merchant_address', 'referenceCode', 'telephone', 'merchant_name', 'description', 'TX_VALUE', 'processingDate'));
        } elseif ($transactionState == 104) {
            
                //(new premiumController)->actualizarPago($request->referenceCode);
            return View('payu.carritoResponseError', compact('merchant_address', 'merchant_name', 'telephone'));
        } elseif ($transactionState == 5) {
            
                //(new premiumController)->actualizarPago($request->referenceCode);
            return View('payu.carritoResponseExpired', compact('merchant_address', 'merchant_name', 'telephone'));
        } elseif ($transactionState == 7) {
            
            // (new premiumController)->actualizarPago($request->referenceCode);
            return View('payu.carritoResponsePending', compact('merchant_address', 'merchant_name', 'telephone'));
        }
    }

    public function confirmation(Request $request)
    {

        if($this->existeTransaccion($request->referenceCode) != 0){
            $objTransaccion = $this->obtenerTransaccion($request->referenceCode);
            $transaccion = $objTransaccion[0];
        }else{
            $transaccion = new transaccionesPayu;
        }

        $transaccion->merchantId   = (isset ($request->merchant_id) == false) ? 'null' : $request->merchant_id  ;
        $transaccion->state_pol	 = (isset ($request->state_pol) == false) ? 'null' : $request->state_pol ;
        $transaccion->risk = (isset ($request->risk) == false) ? 0 : $request->risk;
        $transaccion->referenceCode        = (isset ($request->response_code_pol) == false) ? 'null' : $request->response_code_pol ;
        $transaccion->reference_sale	= (isset ($request->reference_sale) == false) ? 'null' : $request->reference_sale ;
        $transaccion->reference_pol	 = (isset ($request->reference_pol) == false) ? 'null' : $request->reference_pol;
        $transaccion->sign	 = (isset ($request->sign) == false) ? 'null' : $request->sign;
        $transaccion->extra1	 = (isset ($request->extra1) == false) ? 'null' :$request->extra1	 ;
        $transaccion->extra2	= (isset ($request->extra2) == false) ? 'null' : $request->extra2	 ;
        $transaccion->payment_method	 = (isset ($request->payment_method) == false) ? 0 : $request->payment_method ;
        $transaccion->payment_method_type	 = (isset ($request->payment_method_type) == false) ? 0 : $request->payment_method_type ;
        $transaccion->installmentsNumber  = (isset ($request->installments_number) == false) ? 0 : $request->installments_number	 ;
        $transaccion->value	 = (isset ($request->value) == false) ? 0 : $request->value	;
        $transaccion->tax = (isset ($request->tax) == false) ? 0 : $request->tax ;	
        $transaccion->additional_value = (isset ($request->additional_value) == false) ? 0 : $request->additional_value	 ;
        $transaccion->transaction_date	 = (isset ($request->transaction_date) == false) ? 'null' : $request->transaction_date ;
        $transaccion->currency	 = (isset ($request->currency) == false) ? 'null' :  $request->currency ;	
        $transaccion->email_buyer = (isset ($request->email_buyer) == false) ? 'null' : $request->email_buyer;
        $transaccion->cus  = (isset ($request->cus) == false) ? 'null' : $request->cus;
        $transaccion->pseBank        = (isset ($request->pse_bank) == false) ? 'null' : $request->pse_bank ;
        $transaccion->test	 = (isset ($request->test) == false) ? false : $request->test ;
        $transaccion->description	 = (isset ($request->description) == false) ? 'null' : $request->description ;
        $transaccion->billing_address	= (isset ($request->billing_address) == false) ? 'null' : $request->billing_address ;
        $transaccion->shipping_address	 = (isset ($request->shipping_address) == false) ? 'null' : $request->shipping_address ;
        $transaccion->phone	 = (isset ($request->phone) == false) ? 'null' : $request->phone;
        $transaccion->office_phone	 = (isset ($request->office_phone) == false) ? 'null' : $request->office_phone;
        $transaccion->account_number_ach	 = (isset ($request->account_number_ach) == false) ? 'null' : $request->account_number_ach;
        $transaccion->account_type_ach	 = (isset ($request->account_type_ach) == false) ? 'null' : $request->account_type_ach;
        $transaccion->administrative_fee	= (isset ($request->administrative_fee) == false) ? 0 : $request->administrative_fee;
        $transaccion->administrative_fee_base	 = (isset ($request->administrative_fee_base) == false) ? 0 : $request->administrative_fee_base ;
        $transaccion->administrative_fee_tax	= (isset ($request->administrative_fee_tax) == false) ? 0 :  $request->administrative_fee_tax;
        $transaccion->airline_code	 = (isset ($request->airline_code) == false) ? 'null' : $request->airline_code ;
        $transaccion->attempts	= (isset ($request->attempts) == false) ? 0 : $request->attempts ;
        $transaccion->authorizationCode  = (isset ($request->authorization_code) == false) ? 'null' : $request->authorization_code;
        $transaccion->travel_agency_authorization_code	 = (isset ($request->travel_agency_authorization_code) == false) ? 'null' : $request->travel_agency_authorization_code ;
        $transaccion->bank_id	  = (isset ($request->bank_id) == false) ? 'null' : $request->bank_id ;
        $transaccion->billing_city	 = (isset ($request->billing_city) == false) ? 'null' : $request->billing_city ;
        $transaccion->billing_country	 = (isset ($request->billing_country) == false) ? 'null' : $request->billing_country ;
        $transaccion->commision_pol	 = (isset ($request->commision_pol) == false) ? 0 : $request->commision_pol ;
        $transaccion->commision_pol_currency	 = (isset ($request->commision_pol_currency) == false) ? 'null' : $request->commision_pol_currency	;
        $transaccion->customer_number	= (isset ($request->customer_number) == false) ? 0 : $request->customer_number;
        $transaccion->date	 = (isset ($request->date) == false) ? 'null' : $request->date ;
        $transaccion->error_code_bank	 = (isset ($request->error_code_bank) == false) ? 'null' : $request->error_code_bank ;
        $transaccion->error_message_bank	 = (isset ($request->error_message_bank) == false) ? 'null' : $request->error_message_bank;
        $transaccion->exchange_rate	 = (isset ($request->exchange_rate	) == false) ? 0 : $request->exchange_rate;
        $transaccion->ip	= (isset ($request->ip) == false) ? 'null' : $request->ip ;
        $transaccion->nickname_buyer	 = (isset ($request->nickname_buyer) == false) ? 'null' : $request->nickname_buyer;
        $transaccion->nickname_seller	 = (isset ($request->nickname_seller) == false) ? 'null' :$request->nickname_seller ;
        $transaccion->payment_method_id	 = (isset ($request->payment_method_id) == false) ? 0 : $request->payment_method_id ;
        $transaccion->payment_request_state	= (isset ($request->payment_request_state) == false) ? 'null' : $request->payment_request_state ;
        $transaccion->pseReference1	 = (isset ($request->pseReference1) == false) ? 'null' : $request->pseReference1 ;
        $transaccion->pseReference2	 = (isset ($request->pseReference2) == false) ? 'null' : $request->pseReference2 ;
        $transaccion->pseReference3	 = (isset ($request->pseReference3) == false) ? 'null' : $request->pseReference3;
        $transaccion->response_message_pol	 = (isset ($request->response_message_pol) == false) ? 'null' : $request->response_message_pol;
        $transaccion->shipping_city	= (isset ($request->shipping_city) == false) ? 'null' : $request->shipping_city;
        $transaccion->shipping_country	= (isset ($request->shipping_country) == false) ? 'null' : $request->shipping_country;
        $transaccion->transaction_bank_id	= (isset ($request->transaction_bank_id) == false) ? 'null' : $request->transaction_bank_id	;
        $transaccion->transaction_id	= (isset ($request->transaction_id) == false) ? 'null' : $request->transaction_id;
        $transaccion->payment_method_name	  = (isset ($request->payment_method_name) == false) ? 'null' : $request->payment_method_name;
        $transaccion->save();

              
        $transactionState = $request->transactionState;

        if ($transactionState == 4) {    
            (new premiumController)->actualizarPago($request->referenceCode);
        }

    }

    public function obtenerTransaccion($codigoReferencia){
        $transaccion = transaccionesPayu::where('referenceCode','=', $codigoReferencia)
        ->get();
        return $transaccion;
    }


    public function existeTransaccion($codigoReferencia){
        $existe = transaccionesPayu::where('referenceCode','=', $codigoReferencia)
       ->count();
       return $existe;
   }

    public function show(){
        
        $credePayU = credencialesPayU::select('api_key','api_login','llave_public','id_comerc','responseUrl','confirmationUrl','pais','valorMoneda')
        ->where('id', '=',ambiente)
        ->get();
        return $credePayU;
    }


}
