

<?php


session_start();
if (!isset($_SESSION['user']) || $_SESSION['user']['tipo_usuario'] != "ADMINISTRADOR"){
	header("Location: ../");
}
include('../../Model/conexion.php'); 
include('../includes/menu_administrador.php');

$n_controls= $_GET['n_control']; 
$sql="SELECT * from libro WHERE n_control='$n_controls'";
$result=mysqli_query($conexion,$sql);
while($mostrar=mysqli_fetch_array($result)){

    //include("../View/libros/ed_libro.php");
    //print_r($mostrar);

?>

<!--text-primary-->
<div class="container-fluid">
	<!--      Card Ediit    -->
                    <div class="row">
                        <div class="col-lg-6 m-auto">
                            <div class="card shadow mb-4">
<div class="card-header py-3">
<center> <h6 class="text-decoration-none ">
 EDITAR LIBRO
<?php echo isset($alert) ? $alert : ""; ?>

    </h6></center>
                                </div>

<form action="../../Controller/actualizar_libro.php" method="post">	

	
<div id="main-containe">	
<div class="container">	
	<div class="mb-3">
			<input type="hidden"  name="n_control"  class="form-control"   value="<?php echo $mostrar['n_control'] ?>" >	
			</div>
	<div class="mb-3">
			<label >Dewey:</label><input type="text"  name="dewewey"  class="form-control"   value="<?php echo $mostrar['dewey'] ?>" >	
			</div>
		<div class="mb-3">
			<label >Titulo:</label><input type="text"  name="titulo"  class="form-control"   value="<?php echo $mostrar['titulo'] ?>" >	
			</div>
		<div class="mb-3">		
			<label>Autor:</label><input type="text"   name="autor" class="form-control"  value="<?php echo $mostrar['autor'] ?>" >		
		</div>
		<div class="mb-3">
			<label>Fecha Edicion:</label><input type="date"  name="fecha" class="form-control" value="<?php echo $mostrar['fecha_edicion'] ?>" >
		</div>
		<div class="mb-3">	
			<label>Editorial:</label><input type="text"   name="editorial"  class="form-control" value="<?php echo $mostrar['editorial'] ?>" >
		</div>	
				
			<div class="mb-3">
			<label>Fecha Adquisicion:</label><input type="date"  name="fecha_ad" class="form-control" value="<?php echo $mostrar['fecha_adquisicion'] ?>" >
		</div>

		<div class="mb-3">
			<input type="hidden"  name="imagen" class="form-control" value="<?php echo $mostrar['imagen'] ?>" >
		</div>
		<div class="mb-3">
			<input type="hidden"  name="estado" class="form-control"  value="<?php echo $mostrar['estado'] ?>" >
		</div>
		<div class="mb-3">
			<label>Genero:</label><input type="text"  name="genero" class="form-control" value="<?php echo $mostrar['genero'] ?>" >
		</div>

		<label>cantidad Libro</label>
		<select name="cantidad" class="form-select" aria-label="Default select example"  >	
		<option ><?php echo $mostrar['cantidad'] ?></option>			
				<option >1</option><!--DISPONIBLE-->		
				<option >0</option>		<!--prestado-->		
			</select>

		<div class="mb-3">
			<!--<label>Formato:</label>--><input type="hidden"   name="formato" class="form-control" value="<?php echo $mostrar['formato'] ?>"  >
		</div>	
		<div class="mb-3">
			<input type="hidden"  name="PDF" class="form-control" value="<?php echo $mostrar['PDF'] ?>" >
		</div>
		
		<center> <a href="acervo.php" class="btn btn-secondary">Volver</a>
	

<input type="submit" value="Guardar"  class="btn btn-primary">
					
					</center>	
					<br>	
				
		</div>
	</div>
		</form>
		</div>	
	</div>
</div>
</div>

<?php
}
?>


	 <?php include('../includes/footer.php');?>

</body>
</html>



