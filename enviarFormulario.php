<?php
	$nombre 	= (isset($_POST['nombre'])) ? $_POST['nombre'] : '';
	$telefono 	= (isset($_POST['telefono'])) ? $_POST['telefono'] : '';
	$mail 		= (isset($_POST['mail'])) ? $_POST['mail'] : '';
	$texto	 	= (isset($_POST['mensaje'])) ? $_POST['mensaje'] : '';
	$texto 		= wordwrap($texto, 70, "\r\n"); //Las lineas no tienen que ocupar mas de 70 caracteres.
	$texto 		= str_replace("\n.", "\n..", $texto); //En windows si se encuenta un punto inicial se elimina. Para evitarlo reemplazamos con un doble punto


	$para		= 'arealsl@arealsl.es';
	$titulo		= 'Petición desde www.arealsl.es';
	$mensaje	= 'Nombre:   '.$nombre."\r\n";
	$mensaje	.='Teléfono: '.$telefono."\r\n";
	$mensaje	.='Mail:     '.$mail."\r\n"."\r\n"."\r\n";
	$mensaje	.=$texto;
	$cabeceras	= "From: ".$nombre." ".$mail. "\r\n" .
		"Reply-to: ".$mail."\r\n".
	    'X-Mailer: PHP/' . phpversion();

	if(mail($para, $titulo, $mensaje, $cabeceras)){
		echo "OK";
	}else{
		echo "ERROR";
	}
?>