<html>
<head>
<meta content="text/html; charset=UTF-8" http-equiv="content-type">
<title>Resultado para el form (PHP)</title>
</head>
<body>
Este sería el resultado: <br> <br>
Entre las líneas de guiones se ve el resultado de la sección de PHP, cuyo código no se ve en 
el código HTML de la página resultante, claro:<br><br>
------------------------------------------------------------------------------------------------------------------------------- <br>

<?php
//Variables. 
$nombre = $_POST['nombre']; 
$email = $_POST['email']; 
$web = $_POST['web']; 

$cuerpo = "El usuario: " .$nombre . " acaba de rellenar un formulario.<br />";
$cuerpo .= "Ha introducido el email: " .$email . " y la web: "  . $web . "<br />";

echo $cuerpo;
?>
------------------------------------------------------------------------------------------------------------------------------- <br><br>

Y esto es un poco más de HTML que metemos dentro del fichero .php, que no deja de ser HTML con secciones de PHP embebidas.
Al servirlo, el servidor coge el fichero PHP y genera código HTML a partir del HTML que tenga el propio fichero más
el resultado de la ejecución de las secciones PHP.

</body>
</html>



