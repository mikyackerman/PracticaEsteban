<html>
<head>
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


<h1> Lenguajes <h1>
<table width = "70%" border = "1px">

<tr align = "center">
	<td>Id</td>
	<td>Lenguajes</td>
</tr>
		
<?php	


include("conexion.php");
	
		$con = new mysqli($host, $user, $pw) or die ("problemas al conectar");
		mysqli_select_db($con,$db) or die ("problemas al conectar a la base de datos");
		
		
		
		$registro = mysqli_query($con, "SELECT * FROM tbl_lenguajes")
		or die("problemas en consulta: ".mysql_error());
		
		
		
		while ($reg = mysqli_fetch_array($registro))
		{
			
		echo'
		
			<tr>
				<td>'.$reg["id"].'</td>
				<td>'.$reg["lenguaje"].'</td>								
			</tr>';
			
		}
			
?>


</table>
<a href="agregarLenguaje.html" class="button">Nuevo Lenguaje</a>
<a href="agregarLenguaje.html" class="button2">Modificar Lenguaje</a>
<a href="eliminarLenguaje.html" class="button3">Eliminar Lenguaje</a>

</body>
</html>