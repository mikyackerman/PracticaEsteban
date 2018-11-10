<?php
include("conexion.php");
	
		$con = new mysqli($host, $user, $pw) or die ("problemas al conectar");
		mysqli_select_db($con,$db) or die ("problemas al conectar a la base de datos");
		
		mysqli_query($con,"INSERT INTO tbl_lenguajes(lenguaje) VALUES ('$_POST[lenguaje]')");
		
?>