<?php> 

$para = 'brayan7101@hotmail.com, brayan7101@gmail.com';

$asunto = "Mensaje desde warsoft";
$mailheader = "From: ".$_POST["email"]."\r\n";
$mailheader .= "Replay-To: ".$_POST["email"]."\r\n";
$mailheader .= "Content-type: text/html; charset=utf-8\r\n";
$MESSAGE_BODY = "Nombre: ".$_POST["name"]."\n";
$MESSAGE_BODY .= "\n<br>Email: ".$_POST["email"]."\n";
$MESSAGE_BODY .= "\n<br>Mensaje: ".n12br($_POST["message"])."\n";

mail($para, $asunto, $MESSAGE_BODY, $mailheader) or die("error al enviar email!");

header('Location: http://127.0.0.1:5500/index.html')

?>

/* tener en cuenta necesita un 
servidor php para desplegar este backend */