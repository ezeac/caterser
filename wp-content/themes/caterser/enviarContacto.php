<?php
$text = "";
foreach ($_POST as $key => $value) {
	$text .= "<b>".$key.": </b>".$value."<br>";
}

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";


//mail("gezeac@gmail.com", "DiezWeb Contacto", $text, $headers);

?>

{"message": "¡GRACIAS POR ESCRIBIRNOS!<br>En breve estaremos respondiendo tu consulta."}