<!DOCTYPE html>
<html lang="es">
<head>
    <title>Título de la WEB</title>
    <meta charset="UTF-8">
    <meta name="title" content="Título de la WEB">
    <meta name="description" content="Descripción de la WEB">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script type="text/javascript" src="https://openpay.s3.amazonaws.com/openpay.v1.min.js"></script>        
    <script type="text/javascript">
     $(document).ready(function() {
            OpenPay.setId('mauvaatmwmszthwx4zu3');
            OpenPay.setApiKey('pk_7aa58f744e7e4494b8f7339c402fbd8a');
            OpenPay.setSandboxMode(true);
    });
</script>
</head>
<body>
<form action="/save_customer_card" method="POST" id="customer-form">
        <input type="text" name="token_id" id="token_id"/>
        <fieldset>
          <legend>Datos del cliente</legend>
        <p>
          <label>Nombre</label>
          <input type="text" size="20" autocomplete="on" name="client_name"/>
        </p>
        <p>
          <label>Correo Electr&oacute;nico</label>
          <input type="text" size="20" autocomplete="on" name="cliente_email"/>
        </p>
        </fieldset>
        <fieldset>
          <legend>Datos de la tarjeta</legend>
        <p>
          <label>Nombre</label>
          <input type="text" size="20" autocomplete="off"
            data-openpay-card="holder_name" />
        </p>
        <p>
          <label>N&uacute;mero</label>
          <input type="text" size="20" autocomplete="off"
            data-openpay-card="card_number" />
        </p>
        <p>
          <label>CVV2</label>
          <input type="text" size="4" autocomplete="off"
            data-openpay-card="cvv2" />
        </p>
        <p>
          <label>Fecha de expiraci&oacute;n (MM/YY)</label>
          <input type="text" size="2" data-openpay-card="expiration_month" /> /
          <input type="text" size="2" data-openpay-card="expiration_year" />
        </p>
        </fieldset>
        <input type="submit" id="save-button" value="Pagar"/>
</form>
<script>
$('#save-button').on('click', function(event) {
       event.preventDefault();
       $("#save-button").prop( "disabled", true);
       OpenPay.token.extractFormAndCreate('customer-form', success_callbak, error_callbak);
});
var success_callbak = function(response) {
              var token_id = response.data.id;
              $('#token_id').val(token_id);
              $('#customer-form').submit();
};
var error_callbak = function(response) {
     var desc = response.data.description != undefined ? response.data.description : response.message;
     alert("ERROR [" + response.status + "] " + desc);
     $("#save-button").prop("disabled", false);
};
</script>
</body>
</html>