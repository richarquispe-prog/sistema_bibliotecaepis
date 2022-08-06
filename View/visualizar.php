
	
<?php 
session_start();

if (!isset($_SESSION['user']) ){
	header("Location: ../");
}

include('includes/menu_estudiante.php');

include '../Model/conexion.php';

$n_controls= $_GET['n_control']; 

$sql="SELECT * from libro WHERE n_control='$n_controls'";
$result=mysqli_query($conexion,$sql);
while($mostrar=mysqli_fetch_array($result)){
	if ($mostrar['formato'] == 'PDF') {
		 ?>

<div class="container-fluid">
	<!--      Card Ediit    -->
                    <div class="row">
                        <div class="col-lg-6 m-auto">
                            <div class="card shadow mb-4">
<div class="card-header py-3">
 <center><h6 class="m-0 font-weight-bold text-primary">
 DATOS DEL LIBRO
    </h6></center>
                                </div>

<form method="post">	

	
<div id="main-containe">	
<div class="container">	
		<div class="mb-3"><br>
			<label >Titulo:</label><input type="text"  name="titulo"  class="form-control"  aria-label="Disabled input example" disabled value="<?php echo $mostrar['titulo'] ?>" >	
			</div>
		<div class="mb-3">		
			<label>Autor:</label><input type="text"   name="autor" class="form-control" aria-label="Disabled input example" disabled value="<?php echo $mostrar['autor'] ?>" >		
		</div>
		<div class="mb-3">	
			<label>Editorial:</label><input type="text"   name="autor"  class="form-control" aria-label="Disabled input example" disabled value="<?php echo $mostrar['editorial'] ?>" >
		</div>		
		<div class="mb-3">
			<label>Estado:</label><input type="text"  name="titulo" class="form-control" aria-label="Disabled input example" disabled  value="<?php echo $mostrar['estado'] ?>" >
		</div>
		<div class="mb-3">
			<label>Formato:</label><input type="text"  name="titulo" class="form-control" aria-label="Disabled input example" disabled value="<?php echo $mostrar['formato'] ?>" >
		</div>
		<center> <a href="catalogo.php" class="btn btn-secondary">Volver</a>
		<!--	<button type="button" class="btn btn-primary">Prestar</button>-->


		<!--<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal1">
  Solicitar Libro
</button>-->



<!--<a href="pdf/doc.pdf" class="btn btn-success">Descargar PDF</a>-->


<a  class="btn btn-success" target="_black" href="<?php echo '../resources/' . $mostrar['PDF']; ?>" > Leer libro (PDF)</a>

<!-- <a  class="btn btn-success" target="_black" href="<?php //	echo 'http://' . $_SERVER['HTTP_HOST'] . '/bibliotecaepis/' . $mostrar['PDF']; ?>" >Descargar PDF</a> -->
				
					</center>	
					<br>	
				
		</div>
	</div>
		</form>
		</div>	
	</div>
</div>
</div>


		<div class="modal fade" id="modal1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">PRESTAMO</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <?php echo"Usted se prestara el libro:  ".$mostrar['titulo'] ?>
        <br><br>
        <?php echo"REALIZE LA CONFIRMACION PARA SU BOLETA "?>
      </div>
      <br>

      <form method="post" >

      <center> <!--<a href="visualizar.php" class="btn btn-secondary">Cancelar</a>	-->
      	<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
      	<!--<a  href="boleta.php?n_control= <?//php echo $mostrar['n_control']?>  "    class="btn btn-primary">+Confiemar</a>-->
				<!--<input type="submit" value="Confirmar"  class="btn btn-primary">-->
				<a  href="boleta.php?n_control= <?php echo $mostrar['n_control'];?>"  class="btn btn-primary">Aceptar</a>  
				</form>
				<div>  </div>
      <!--<div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary">Confirmar</button>
      </div>--><br>
    </div>
  </div>
</div>





			<?php 
		} 
		
		else{?>
			
<div class="container-fluid">
	<!--      Card Ediit    -->
                    <div class="row">
                        <div class="col-lg-6 m-auto">
                            <div class="card shadow mb-4">
<div class="card-header py-3">
 <center><h6 class="m-0 font-weight-bold text-primary">
DATOS DEL LIBRO 
    </h6></center>
                                </div>

<form method="post">	

	
<div id="main-containe">	
<div class="container">	
		<div class="mb-3"><br>
			<label >Titulo:</label><input type="text"  name="titulo"  class="form-control"  aria-label="Disabled input example" disabled value="<?php echo $mostrar['titulo'] ?>" >	
			</div>
		<div class="mb-3">		
			<label>Autor:</label><input type="text"   name="autor" class="form-control" aria-label="Disabled input example" disabled value="<?php echo $mostrar['autor'] ?>" >		
		</div>
		<div class="mb-3">	
			<label>Editorial:</label><input type="text"   name="autor"  class="form-control" aria-label="Disabled input example" disabled value="<?php echo $mostrar['editorial'] ?>" >
		</div>		
		<div class="mb-3">
			<label>Estado:</label><input type="text"  name="titulo" class="form-control" aria-label="Disabled input example" disabled  value="<?php echo $mostrar['estado'] ?>" >
		</div>
		<div class="mb-3">
			<label>Formato:</label><input type="text"  name="titulo" class="form-control" aria-label="Disabled input example" disabled value="<?php echo $mostrar['formato'] ?>" >
		</div>
		<center> <a href="catalogo.php" class="btn btn-secondary">Volver</a>
		<!--	<button type="button" class="btn btn-primary">Prestar</button>-->
			 




<?php



//include 'conexion.php';
//$con = mysqli_connect("localhost","root","","bibliotecaepis")


$n_controls= $_GET['n_control']; 

$sql="SELECT * from libro WHERE n_control='$n_controls'";
$result=mysqli_query($conexion,$sql);
while($mostrar=mysqli_fetch_array($result)){
	if ($mostrar['cantidad'] == 1) {
		 ?>

<a  href="boleta.php?n_control= <?php echo $mostrar['n_control'];?>"  class="btn btn-primary">Solicitar Libro</a> 
	
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
}else{?>

<button type="button" class="btn btn-primary"  disabled>
  Solicitar Libro 
</button>
<?php
}

}


?>



<!--<a href="pdf/doc.pdf" class="btn btn-success">Descargar PDF</a>-->



<!--<a  class="btn btn-success" target="_black" href="<?php //echo 'http://' . $_SERVER['HTTP_HOST'] . '/bibliotecaepis/' . $mostrar['PDF']; ?>" >Descargar PDF</a>-->
				
					

		<div class="modal fade" id="modal1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">PRESTAMO</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <?php echo"Usted se prestara el libro:  ".$mostrar['titulo'] ?>
        <br><br>
        <?php echo"REALIZE LA CONFIRMACION PARA SU BOLETA "?>
      </div>
      <br>

      <form method="post" >

      <center> <!--<a href="visualizar.php" class="btn btn-secondary">Cancelar</a>	-->
      	<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
      	<!--<a  href="boleta.php?n_control= <?//php echo $mostrar['n_control']?>  "    class="btn btn-primary">+Confiemar</a>-->
				<!--<input type="submit" value="Confirmar"  class="btn btn-primary">-->
				<a  href="boleta.php?n_control= <?php echo $mostrar['n_control'];?>"  class="btn btn-primary">Aceptar</a>  
				</form>
				
    
    </div>
  </div>
</div>


		<?php }
	}?>
	








<?php include('includes/footer.php');?>



	

</body>
</html>


