<?php

if ($_POST["hidden"] == "" ) {
	$mensaje="Mensaje del formulario de contacto de RockGarden";
	$mensaje.= "\nNombre: ". $_POST['nombre'];
	$mensaje.= "\nEmail: ".$_POST['correo'];
	$mensaje.= "\nAsunto: ". $_POST['asunto'];
	$mensaje.= "\nMensaje: \n".$_POST['mensaje'];
	$destino= "michelle@rockgarden.mx";
	$remitente = $_POST['correo'];
	$asunto = "Mensaje enviado por: ".$_POST['nombre'];
	mail($destino,$asunto,$mensaje,"FROM: $remitente");
}

?>