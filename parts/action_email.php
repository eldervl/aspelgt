<?php
if($_SERVER['REQUEST_METHOD'] == "POST"){
	$name = $_POST['name'];        // Nombre de quien envía el mensaje
	$apellido = $_POST['apellido']; //Apellido de quien envía el mensaje
	$email = $_POST['email'];      // Correo de quien envía el mensaje
	$phone  = $_POST['phone'];     // Teléfono de quien envía el mensaje
	$message = $_POST['message'];  // Mensaje enviado
	$headers  = 'MIME-Version: 1.0' . "\r\n"; // Para enviar correo HTML, se debe establecer el encabezado Content-type
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . '\r\n';

	$to = 'emiliosaloj44@gmail.com';     // Correo de la empresa
	$subject = 'ApoyoAE-Contacto | Mensaje Nuevo'; // Sujeto del mensaje a enviar

	$body = '<html><body>
	<center><h1 style="color:#50563c;">Formulario de Contacto</h1></center>
	<p style="color:#000000;font-size:18px;">Has recibido éste correo directamente de la página web de ApoyoAE donde se pide información por parte de un cliente.</p>
	<p style="font-size:18px;"><b style="color:#50563c;">Nombre:</b> '.$name.'</p>
	<p style="font-size:18px;"><b style="color:#50563c;">Empresa:</b> '.$apellido.'</p>
	<p style="font-size:18px;"><b style="color:#50563c;">Telefono:</b> '.$phone.'</p>
	<p style="font-size:18px;"><b style="color:#50563c;">Correo Electrónico:</b> '.$email.'</p>
	<p style="font-size:18px;"><b style="color:#50563c;">Mensaje que fue recibido:</b> '.$message.'</p>
	</body></html>';
	return;
 }
 ?>