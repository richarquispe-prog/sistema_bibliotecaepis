<?php
//$con = mysqli_connect("localhost","root","","bibliotecaepis");
include '../Model/conexion.php';
	$DNI = $_GET['DNI'];
	

	$eliminar="DELETE  FROM usuarios  WHERE  DNI=$DNI";

	
	if(mysqli_query($conexion,$eliminar)){
		/*echo" dato guardado";*/
		
		echo $alert = "<div  style='color: green;'> 
              usuario actualizado </div>";
			  
        header("location: ../View/usuarios/lista_usuario.php");

	}else{
		/*mysqli_error();*/
		echo"error";
	}
?>