<?php
	
include '../Model/conexion.php';

$n_controls= $_GET['n_control']; 
$sql="SELECT * from libro WHERE n_control='$n_controls'";
$result=mysqli_query($conexion,$sql);
while($mostrar=mysqli_fetch_array($result)){

    //include("../View/libros/ed_libro.php");
    //print_r($mostrar);


    include("../View/libros/ed_libro.php");

}

?>