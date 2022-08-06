<?php
//$con = mysqli_connect("localhost","root","","bibliotecaepis");
include '../Model/conexion.php';
	$codigo = $_GET['codigo_boleta'];
	

	$eliminar="DELETE  FROM boleta  WHERE  codigo_boleta=$codigo";

	
	if(mysqli_query($conexion,$eliminar)){
		/*echo" dato guardado";*/
		
		echo $alert = "<div  style='color: green;'> 
              libro actualizado </div>";
             header("location: ../View/boletas/boletas_admi.php");

	}else{
		/*mysqli_error();*/
		echo"error";
	}
?>