
<?php
//$con = mysqli_connect("localhost","root","","bibliotecaepis");
include '../Model/conexion.php';
	$n_controls = $_POST['n_control'];
	$deweweys = $_POST['dewewey'];
	$titulos=$_POST['titulo'];
	$autors=$_POST['autor'];
	$fechas=$_POST['fecha'];
	$editorials=$_POST['editorial'];
	$cantidads=$_POST["cantidad"];
	$fecha_ads=$_POST['fecha_ad'];
	$imagens=$_POST["imagen"];
	$estados=$_POST['estado'];
	$generos=$_POST['genero'];
	$formatos=$_POST['formato'];
	$PDF=$_POST['PDF'];
	

	$actualizar="UPDATE  libro SET  dewey='$deweweys',titulo='$titulos',autor='$autors', fecha_edicion='$fechas',editorial='$editorials',cantidad='$cantidads',fecha_adquisicion='$fecha_ads',imagen='$imagens',estado='$estados',genero='$generos',formato='$formatos',PDF='$PDF' WHERE n_control=$n_controls";

	
	if(mysqli_query($conexion,$actualizar)){
		/*echo" dato guardado";*/
		
		echo $alert = "<div  style='color: green;'> 
              libro actualizado </div>";
             header("location: ../View/libros/acervo.php");

	}else{
		/*mysqli_error();*/
		echo"error";
	}
?>