<?php
    $datos=$_GET;
    $fecha = $datos['fecha'];
    $hora = $datos['hora'];
    $temperatura = $datos['temperatura'];
    $humedad = $datos['humedad'];
	$usuario = "root";
	$password = "pepebiker123";
	$servidor = "35.239.168.26";
	$basededatos = "esp32";
	
	// creación de la conexión a la base de datos con mysql_connect()
	$conexion = mysqli_connect( $servidor, $usuario, $password ) or die ("No se ha podido conectar al servidor de Base de datos");
	
	// Selección del a base de datos a utilizar
	$db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );
	// establecer y realizar consulta. guardamos en variable.
	$consulta = "INSERT INTO humedadtemperatura VALUES ('$fecha','$hora','$humedad','$temperatura')";
	$resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
	echo "OK";

	// cerrar conexión de base de datos
	mysqli_close( $conexion );
?>