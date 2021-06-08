<?php
$destinatario = 'inforvilla2021@gmail.com';
//este es el correo al que se enviara el Mensaje
$nombre = $_POST['nombre'];
$asunto =$_POST['asunto'];
$mensaje =$_POST['mensaje'];
$telefono =$_POST['telefono'];
$email =$_POST['email'];

$header ="Enviado por:";
$mensajecompleto=$mensaje ."\nAtentamente:" .$nombre;

mail($destinatario,$asunto,$mensajecompleto,$header);
echo <"script>alert('correo enviado exitosamente')</script>";
echo <"script>setTimeout(\"loccation.href='index.html'\",1000)</script>";
?>
