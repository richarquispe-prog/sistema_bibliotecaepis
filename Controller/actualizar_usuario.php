<?php
//$con = mysqli_connect("localhost","root","","bibliotecaepis");
include '../Model/conexion.php';
	$DNI = $_POST['DNI'];
	$nombre = $_POST['nombre'];
	$apellido=$_POST['apellidos'];
	$telefono=$_POST['telefono'];
	$correo=$_POST['correo'];
	$usuario=$_POST['usuario'];
	
	

	$actualizar="UPDATE  usuarios SET  nombre='$nombre',apellidos='$apellido',telefono='$telefono', Correo_Institucional='$correo',tipo_usuario='$usuario' WHERE DNI=$DNI";

	
	if(mysqli_query($conexion,$actualizar)){
		/*echo" dato guardado";*/
		
		echo $alert = "<div  style='color: green;'> 
              libro actualizado </div>";
             header("location: ../View/usuarios/lista_usuario.php");

	}else{
		/*mysqli_error();*/
		echo"error";
	}
?>
