
<?php 
session_start();

if (!isset($_SESSION['user']) ){
	header("Location: ../");
}

include('includes/menu_estudiante.php');
include '../Model/conexion.php';


//session_start();
//echo $_SESSION['DNI'] ;
$var=$_SESSION['DNI'] ;
$var1=$_SESSION['nombre'];
//echo $var;

$sql="SELECT * FROM `boleta` WHERE `DNI`=$var";
		$query=mysqli_query($conexion,$sql);
 $result = mysqli_fetch_array($query);
		 
		 if ( $result > 1) {
		 	
		 	
		 	 $alert = '<div class="alert alert-danger" role="alert">
                       BOLETA NO GENERADA - TIENE UN LIBRO PENDIENTE
                    </div>';

$n_controls= $_GET['n_control'];
$sql="SELECT * from libro WHERE n_control='$n_controls'";
$result=mysqli_query($conexion,$sql);
while($mostrar=mysqli_fetch_array($result)){?>

			<div class="mb-3" >
			
			</div>

<center>	
	<div class="container-fluid">
	<!--      Card Ediit    -->
     <div class="row">
     <div class="col-lg-6 m-auto">
     <div class="card shadow mb-4">

				<div class="card-header py-3">
						 	<h4 class="m-0 font-weight-bold text-secondary">
									BOLETA  
						    </h4>
			    </div>
			    <?php echo isset($alert) ? $alert : ""; ?>

  	 	<h5 class="m-0 font-weight-bold text-primary" >Código del Libro::  </h5> <h5><?php echo $n_controls ?></h5>
    	<h5 class="m-0 font-weight-bold text-primary">Título:  </h5> <h5><?php echo $mostrar['titulo'] ?></h5>
     	<h5 class="m-0 font-weight-bold text-primary">Autor: <BR> </h5> <h5><?php echo$mostrar['autor'] ?></h5>
   		<h5 class="m-0 font-weight-bold text-primary">Usuario: <BR> </h5> <h5><?php echo $var1 ?></h5>
   		<h5 class="m-0 font-weight-bold text-primary">DNI: <BR> </h5> <h5><?php echo $var ?></h5>
   <!-- <a href="#" class="btn btn-primary">Go somewhere</a>-->
   <form action="" method="post">
		   	<center> <a href="catalogo.php" class="btn btn-secondary">Cancelar</a>
		   <input type="submit" value ="Aceptar Boleta"  class="btn btn-primary" disabled name="v">
   </form>
<br> <br>
  </div>
  </div>
  </div>
  </div></center>



			<?php


			?>
<?php
}
?>
<?php
date_default_timezone_set("America/Lima");
$mifecha= date('Y-m-d  H:i:s');
//echo $mifecha ; 
?>
<br>
<?php
date_default_timezone_set("America/Lima");
$NuevaFecha = strtotime ( $mifecha."+  1 days")  ; 
$NuevaFecha = date ( 'Y-m-d  H:i:s' , $NuevaFecha); 
//echo $NuevaFecha;
?>

<?php
if($_POST){

$insertar="INSERT INTO boleta(DNI, n_control, fecha_entrega,codigo_boleta,fecha_devolucion) VALUES('$var','$n_controls','$mifecha','','$NuevaFecha')";

	if(mysqli_query($conexion,$insertar)){
		
                    ?>


		<?php
		//echo" dato guardado";		
		
	}else{
		/*mysqli_error();*/
		echo"error";
	}

}
		 }
		 else{
		 	//$alert = '<div class="alert alert-warning" role="alert">
                        //no se puede prestar mas de  tres libros';
		 	//echo "holisiiii"; 	

	 ?>
<?php


$n_controls= $_GET['n_control'];
$sql="SELECT * from libro WHERE n_control='$n_controls'";
$result=mysqli_query($conexion,$sql);
while($mostrar=mysqli_fetch_array($result)){?>

			<div class="mb-3" >		
			</div>
		
<center>
	<div class="container-fluid">
	<!--      Card Ediit    -->
     <div class="row">
     <div class="col-lg-6 m-auto">
     <div class="card shadow mb-4">
	<div class="card-header py-3">
			 <h4 class="m-0 font-weight-bold text-secondary">
			BOLETA
			 </h4>
    </div>
   

	  	<h5 class="m-0 font-weight-bold text-primary" >Código del Libro:  </h5> <h5><?php echo $n_controls ?></h5>
	    <h5 class="m-0 font-weight-bold text-primary">Título:  </h5> <h5><?php echo $mostrar['titulo'] ?></h5>
	    <h5 class="m-0 font-weight-bold text-primary">Autor: <BR> </h5> <h5><?php echo$mostrar['autor'] ?></h5>
	   	<h5 class="m-0 font-weight-bold text-primary">Usuario: <BR> </h5> <h5><?php echo $var1 ?></h5>
	   	<h5 class="m-0 font-weight-bold text-primary">DNI : <BR> </h5> <h5><?php echo $var ?></h5>
   <!-- <a href="#" class="btn btn-primary">Go somewhere</a>-->
   
<br>
   <form action="" method="post">

   	<center> <a href="catalogo.php" class="btn btn-secondary">Cancelar</a>  		 	
   		
  	<input type="submit" value ="Aceptar Boleta"  class="btn btn-primary" name="v" >
    
   </form>
   <br> <br>
  </div>
  </div>
  </div>
  </div>
</center>



<?php
}
?>
<?php
date_default_timezone_set("America/Lima");
$mifecha= date('Y-m-d  H:i:s');
//echo $mifecha ; 
?>
<br>
<?php
date_default_timezone_set("America/Lima");
$NuevaFecha = strtotime ( $mifecha."+  1 days")  ; 
$NuevaFecha = date ( 'Y-m-d  H:i:s' , $NuevaFecha); 
//echo $NuevaFecha;
?>

<?php
if($_POST){
$insertar="INSERT INTO boleta(DNI, n_control, fecha_entrega,codigo_boleta,fecha_devolucion) VALUES('$var','$n_controls','$mifecha','','$NuevaFecha')";
	if(mysqli_query($conexion,$insertar)){?>

<!--AQUIII_-->

<?php 


	

$actualizar="UPDATE  libro SET cantidad=0 WHERE n_control=$n_controls";

if(mysqli_query($conexion,$actualizar)){

	

	}else{
echo"error";
}

        ?>
<!--HHHH CAMBIA ESTADOOOOO-->



		<?php
		//echo" dato guardado";

		
		
	}else{
		/*mysqli_error();*/
		echo"error";
	}

}
}
?>
<?php include('includes/footer.php');?>
</body>
  
</html>


