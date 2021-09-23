<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Http\Controllers\misPagosController;

class pagosMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($referenceCode)
    {
        
      
        $this->referenceCode = $referenceCode; 
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $objEncCompra =  (new misPagosController)->cargueCompra($this->referenceCode);
        return $this->view('mails.correoPago',compact('objEncCompra'));
    }
}
