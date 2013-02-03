<html>
<head>
<meta content="text/html; charset=UTF-8" http-equiv="content-type">
<title>Insert OK(PHP)</title>
</head>
<body>

	<?php
	// leer datos de usuario y contraseña de la base de datos
	include("00_config_bbdd.php") ;

	// Conexión con el servidor
	mysql_connect($server, $db_user, $db_pass) or die ("error1".mysql_error());

	// Selección de Base de Datos
	mysql_select_db($database) or die ("error2".mysql_error());

    $texto = htmlentities($_POST[nom_deporte]); //<-----

	//VALUES ($_POST[nom_deporte], $_POST[radio_contacto]) ")
	mysql_query ("INSERT INTO `asalas_bd`.`appsport_sport` (`nombre`, `contacto`) 
	                   VALUES ('$texto', '$_POST[radio_contacto]') ");

	echo "El registro se ha insertado en la base de datos como nuevo deporte";
	?> 

</body>
</html>