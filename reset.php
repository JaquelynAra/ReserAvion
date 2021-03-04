<?php
	sleep(3);
	$conexion = new mysqli("localhost","root","12345678","aereopuerto") or ($conexion->error());
	$consulta = $conexion->query("UPDATE avion SET disponible = true");
	if($consulta)
		$exito = '{"exito":1}';
	else
		$exito = '{"exito":0}';

	$conexion->close();
	echo($exito);		
?>