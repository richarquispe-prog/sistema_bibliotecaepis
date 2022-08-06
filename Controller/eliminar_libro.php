<?php
//$con = mysqli_connect("localhost","root","","bibliotecaepis");
include '../Model/conexion.php';
	$n_control = $_GET['n_control'];
	

	$eliminar="DELETE  FROM libro  WHERE  n_control=$n_control";

	
	if(mysqli_query($conexion,$eliminar)){
		/*echo" dato guardado";*/
		
		echo $alert = "<div  style='color: green;'> 
              libro  </div>";
             header("location: ../View/libros/acervo.php");

	}else{
		/*mysqli_error();*/
		echo"error";
	}
?>