<?php
$destinatario = 'jose86mend@gmail.com';

$nombre = $_POST['name'];
$apellido = $_POST['lastname'];
$mail = $_POST['mail'];
$telefono = $_POST['phone'];
$mensaje = $_POST['message'];

$header = 'Enviado desde la pagina web de MS Plating Solutions';
$mensajeCompleto = $mensaje . "\nAtentamente: " . $nombre;

mail($destinatario, $nombre, $mensajeCompleto, $header);
echo "<script>alert('correo enviado exitosamente')</script>";
echo "<script>setTimeout(\"location.href='index.html'\",1000)</script>";
