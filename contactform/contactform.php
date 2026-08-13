<?php

$name = $_REQUEST["name"];
$email = $_REQUEST["email"];
$subject = $_REQUEST["subject"];
$message = $_REQUEST["message"];

$cabeceras = "Content-type: text/html; charset=utf-8\r\n";
$cabeceras .= 'From: aguateatinos@gmail.com' ."\r\n" . 'Reply-To: aguateatinos@gmail.com\r\n' . 'X-Mailer: PHP/' . phpversion() . '\r\n"';

$mensaje = "Un cordial saludo,"
        . "<br><br>"
        . $name . " escribió: "
        . "<br><br>"
        . "<p style=\"font-weight: bold;margin-left: 20px;\">" . $message . " </p>"
        . "<br>"
        . "<p style=\"margin-left: 20px;\">Email de la persona: " . $email . " </p>"
        . "<br><br>"
        . "Cordialmente,"
        . "<div style=\"font-weight: bold;\">"
        . "Asociación De Suscriptores Del Acueducto Teatinos De La Vereda Puente De Boyacá - Sistema automático de contacto"
        . "<br>"
        . "aguateatinos@gmail.com"
        . "</div>";

$est = mail('aguateatinos@gmail.com', $subject, $mensaje, $cabeceras);

$cabecerasD = "Content-type: text/html; charset=utf-8\r\n";
$cabecerasD .= 'From: aguateatinos@gmail.com' . "\r\n" . 'Reply-To: aguateatinos@gmail.com\r\n' . 'X-Mailer: PHP/' . phpversion() . '\r\n"';
$mensaje = "Un cordial saludo,"
        . "<br><br>"
        . "<span style=\"text-transform: uppercase;\">" . $name . "</span>"
        . "<br><br>"
        . "Gracias por querer contactarnos y saber más acerca de nosotros, es muy grato su interes. Uno de nuestro asesores lo contactará."
        . "<br><br>"
        . "Información del mensaje:"
        . "<br><br>"
        . "<p style=\"margin-left: 20px;\"><span style=\"font-weight: bold;\">Asunto: </span>" . $subject . " </p>"
        . "<br>"
        . "<p style=\"margin-left: 20px;\"><span style=\"font-weight: bold;\">Detalle: </span>" . $message . " </p>"
        . "<br><br>"
        . "Cordialmente,"
        . "<div style=\"font-weight: bold;\">"
        . "Asociación De Suscriptores Del Acueducto Teatinos De La Vereda Puente De Boyacá - Sistema automático de contacto"
        . "<br>"
        . "aguateatinos@gmail.com"
        . "</div>";
mail($email, "Confirmación: " . $subject, $mensaje, $cabecerasD);

if ($est) {
    echo "OK";
} else {
    echo "Se ha presentado un error al enviar el correo, por favor intente más tarde o comuníquese con nuestro soporte, gracias.";
}
?>