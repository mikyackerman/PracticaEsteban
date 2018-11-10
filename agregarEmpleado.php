<?php
include("conexion.php");
	
		$con = new mysqli($host, $user, $pw) or die ("problemas al conectar");
		mysqli_select_db($con,$db) or die ("problemas al conectar a la base de datos");
		
		mysqli_query($con,"INSERT INTO tbl_empleado(nombre, edad, direccion, estado, fecha_nacimiento, telefono) VALUES ('$_POST[nombre]','$_POST[edad]','$_POST[direccion]','$_POST[estado]','$_POST[fecha]','$_POST[telefono]')");
		
?>