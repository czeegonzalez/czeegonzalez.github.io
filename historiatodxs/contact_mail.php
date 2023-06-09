<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
header("Allow: GET, POST, OPTIONS, PUT, DELETE");

if($_POST){
	$obj = json_decode($_POST['myData']);
	$toEmail = "czee@czeegonzalez.com";
	$mailHeaders = "From: Bot <administracion@cecigonzalez.website>\r\n";
	$mailHeaders .= 'MIME-Version: 1.0';
	$mailHeaders .= 'Content-type: text/html; charset=iso-8859-1';
	$message = 'Nuevo contacto en el sitio web
		
		Solicita: '.$obj->{'userName'}.'
		Email: '.$obj->{'userEmail'}.'
		Phone: '.$obj->{'phone'}.'
		Mensaje: '.$obj->{'message'};

	if(mail($toEmail, "Solicitud de contacto", $message, $mailHeaders)) {
	print "<p class='success'>Mensaje enviado.</p>";
	} else {
	print "<p class='error'>Hubo un problema en el envio, contacte al equipo directamente a través del correo electrónico info@lunamaya.org .</p>";
	}
	
}

?>