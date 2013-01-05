<?php

//Variables. 
$nombre = $_POST['nombre']; 
$email = $_POST['email']; 
$web = $_POST['web']; 

$cuerpo = "El usuario: " .$nombre . " acaba de rellenar un formulario.<br />";
$cuerpo .= "Ha introducido el email: " .$email . " y la web: "  . $web . "<br /><br />";

echo $cuerpo;

?>
