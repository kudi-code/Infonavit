<?php
$name = $_POST['name'];
$mail = $_POST['mail'];
$phone = $_POST['phone'];
$message = $_POST['y'];

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$message = "Este mensaje fue enviado por: " . $name . " \r\n";
$message .= "Su e-mail es: " . $mail . " \r\n";
$message .= "Teléfono de contacto: " . $phone . " \r\n";
$message .= "¿Cuenta con algun sistema?" . $_POST['y'] . " \r\n";
$message .= "Enviado el: " . date('d/m/Y', time());

$para = 'kevinsal.casas@gmail.com';
$asunto = 'Formulario INFONAVIT';

mail($para, $asunto, utf8_decode($message), $header);

header("Location:index.html");
?>