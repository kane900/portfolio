<?php
$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
$tema = $_POST['tema'];
$mensaje = $_POST['mensaje'];

$destinatario = 'tucorreo@gmail.com'; // Aquí coloca tu dirección de correo electrónico
$asunto = 'Nuevo mensaje desde el formulario de contacto';

$contenido = "Nombre: $nombre\n";
$contenido .= "Teléfono: $telefono\n";
$contenido .= "Correo: $correo\n";
$contenido .= "Tema: $tema\n";
$contenido .= "Mensaje: $mensaje\n";

mail($destinatario, $asunto, $contenido);

echo "¡Gracias por tu mensaje! Nos pondremos en contacto contigo pronto.";
?>
