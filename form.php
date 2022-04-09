<?php
$nombre = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$para = 'lucasezequiel.f97@gmail.com';
$asunto = 'Mail enviado desde la pagina web';

mail($para, $asunto, utf8_decode($name, $email, $message));

header('location:index.html');


?>
