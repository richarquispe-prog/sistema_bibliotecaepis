<?php 
session_start();
if (!isset($_SESSION['user']) || $_SESSION['user']['tipo_usuario'] != "ADMINISTRADOR"){
	header("Location: ../");
}
include('../../Model/conexion.php'); 
include('../includes/menu_administrador.php');


$DNI= $_GET['DNI']; 

$sql="SELECT * from usuarios WHERE DNI='$DNI'";
$result=mysqli_query($conexion,$sql);
while($mostrar=mysqli_fetch_array($result)){
		 ?>


<div class="container-fluid">
	<!--      Card Ediit    -->
                    <div class="row">
                        <div class="col-lg-6 m-auto">
                            <div class="card shadow mb-4">
<div class="card-header py-3">
<center> <h6 class="text-decoration-none ">
 EDITAR USUARIO
 <?php echo isset($alert) ? $alert : ""; ?>

    </h6></center>
                                </div>

<form action="../../Controller/actualizar_usuario.php" method="post">	

	
<div id="main-containe">	
<div class="container">	
	<div class="mb-3">
		<div class="mb-3">
			<input type="hidden"  name="DNI"  class="form-control"   value="<?php echo $mostrar['DNI'] ?>" >	
			</div>
		<label >Nombre:</label>
			<input type="text"  name="nombre"  class="form-control"   value="<?php echo $mostrar['nombre'] ?>" >	
			</div>
	<div class="mb-3">
			<label >Apellido:</label><input type="text"  name="apellidos"  class="form-control"   value="<?php echo $mostrar['apellidos'] ?>" >	
			</div>
		
		<div class="mb-3">		
			<label>Telefono:</label><input type="text"   name="telefono" class="form-control"  value="<?php echo $mostrar['telefono'] ?>" >		
		</div>
		<div class="mb-3">
			<label>Correo Institucional</label><input type="text"  name="correo" class="form-control" value="<?php echo $mostrar['Correo_Institucional'] ?>" >
		</div>
		<div class="mb-3">	
			<label>Tipo Usuario:</label><input type="text"   name="usuario"  class="form-control" value="<?php echo $mostrar['tipo_usuario'] ?> " >
		</div>	
						
		<center> <a href="lista_Usuario.php" class="btn btn-secondary">Volver</a>
		<!--	<button type="button" class="btn btn-primary">Prestar</button>-->

<input type="submit" value="Guardar"  class="btn btn-primary">
		<!--<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal1">
 Guardar
</button>-->



<!--<a href="pdf/doc.pdf" class="btn btn-success">Descargar PDF</a>-->




				
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
	 <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<?php include('../includes/footer.php');?>
</body>
</html>


