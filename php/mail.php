<?php
var_dump($_POST);
$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["msg"];

/*

$EmailTo = "institutoaelem@gmail.com";
$Title = "Consultas Instructorado";

// prepare email body text
$Fields .= "Name: ";
$Fields .= $name;
$Fields .= "\n";

$Fields.= "Email: ";
$Fields .= $email;
$Fields .= "\n";

$Fields .= "Message: ";
$Fields .= $message;
$Fields .= "\n";


// send email
$success = mail($EmailTo,  $Title,  $Fields, "From:".$email);
*/
$para = 'institutoaelem@gmail.com';
$asunto = 'Correo de prueba';
$mensaje = $message;

// Cabeceras del correo
$cabeceras = 'From: '+$email+ "\r\n" .
    'Reply-To: '+$email+ "\r\n" .
    'X-Mailer: PHP/' . phpversion();
// Envío del correo
if (mail($para, $asunto, $mensaje, $cabeceras)) {
    echo 'El correo se ha enviado correctamente.';
} else {
    echo 'Error al enviar el correo.';
}
