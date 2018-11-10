<html>
<head>

<h2>Jose Angel Duarte Corona<h2>
<style>
.button {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 12px 10px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 10px 0px;
    cursor: pointer;
}

.button2 {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 12px 10px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 10px 300px;
    cursor: pointer;
}


.button3 {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 12px 10px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 10px 27px;
    cursor: pointer;
}

</style>
</head>

<body>


<h1> Empleados <h1>
<table width = "70%" border = "1px">

<tr align = "center">
	<td>Id</td>
	<td>Nombre</td>
	<td>Edad</td>
	<td>Dirección</td>
	<td>Estado</td>
	<td>Fecha de Nacimiento</td>
	<td>Teléfono</td>	
</tr>
		
<?php


include("conexion.php");
	
		$con = new mysqli($host, $user, $pw) or die ("problemas al conectar");
		mysqli_select_db($con,$db) or die ("problemas al conectar a la base de datos");
		
		
		
		$registro = mysqli_query($con, "SELECT * FROM tbl_empleado")
		or die("problemas en consulta: ".mysql_error());
		
		
		
		while ($reg = mysqli_fetch_array($registro))
		{
			
		echo'
		
			<tr>
				<td>'.$reg["id"].'</td>
				<td>'.$reg["nombre"].'</td>
				<td>'.$reg["edad"].'</td>
				<td>'.$reg["direccion"].'</td>
				<td>'.$reg["estado"].'</td>
				<td>'.$reg["fecha_nacimiento"].'</td>
				<td>'.$reg["telefono"].'</td>
										
			</tr>';
			
		}
			
?>


</table>
<a href="agregarEmpleado.html" class="button">Nuevo Empleado</a>
<a href="agregarEmpleado.html" class="button2">Modificar empleado</a>
<a href="eliminarEmpleado.html" class="button3">Eliminar empleado</a>

</body>
</html>