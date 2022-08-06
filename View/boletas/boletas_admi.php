<?php
session_start();
include('../includes/menu_administrador.php');
include('../../Model/conexion.php');

if (!isset($_SESSION['user']) || $_SESSION['user']['tipo_usuario'] != "ADMINISTRADOR"){
	header("Location: ../");
}


 ?>

<br>

	<div class="container-fluid">

<div id="main-containe">
    
<!--<center><h1>BOLETAS</h1></center>-->

<div class="card shadow mb-4">
	<div class="card-header py-3">
	<center><h3>LISTA DE BOLETAS</h3></center>
</div>
<div class="container">
        <!--<div class="row">
                <div class="col-lg-12">-->

                		
                	   <div class="card-body">
                    <div class="table-responsive">                 
                	

	<table  id="example" class="table table-sm" style="width:100%" >
		<thead>
		<tr><td>CODIGO BOLETA </td>
			<td>Nombre </td>
			<td>Apellidos </td>
			<td>DNI </td>
			<!--<td>Correo </td>-->
			<td>Libro </td>
			<td>NUMERO DE CONTROL</td>
			
			<td>FECHA DE ENTREGA</td>
			<td>FECHA DE DEVOLUCION</td>
			<td>Acciones</td>	
			
			
		</tr>
		</thead>

		<?php 
		//$sql="SELECT * from boleta ";
		$sql1=" SELECT boleta.codigo_boleta, usuarios.nombre, usuarios.apellidos, usuarios.DNI, usuarios.Correo_Institucional, libro.n_control, libro.titulo,boleta.fecha_entrega,boleta.fecha_devolucion from usuarios JOIN boleta ON boleta.DNI= usuarios.DNI INNER JOIN libro ON libro.n_control= boleta.n_control";
		$result=mysqli_query($conexion,$sql1);

		while($mostrar=mysqli_fetch_array($result)){	
			 		

                   
		 ?>

		<tr>
			<td><?php echo $mostrar['codigo_boleta'] ?></td>
			<td><?php echo $mostrar['nombre'] ?></td>
			<td><?php echo $mostrar['apellidos'] ?></td>
			<td><?php echo $mostrar['DNI'] ?></td>

			
			<td><?php echo $mostrar['titulo'] ?></td>
			<td><?php echo $mostrar['n_control'] ?></td>
			<td><?php echo $mostrar['fecha_entrega'] ?></td>

			<?php

			if ($mostrar['fecha_devolucion'] == null){
				?>
				<td><span class="badge bg-warning text-dark">Pendiente</span></td>
				<?php
			}else{
				?>
				<td><?php echo $mostrar['fecha_devolucion'] ?></td>
				<?php
			}

			?>
			
			<td>
				<a href="../../Controller/eliminar_boleta_adm.php?codigo_boleta=<?php echo $mostrar['codigo_boleta']; ?>" class="btn btn-danger">
					Eliminar
				</a>
			</td>


			
			
		</tr>
	<?php 
	}
	 ?>
	</table>
	</div>
         </div>
        </div>  
    </div>  
  
  </div>
<br><br>
<!--<center>
	<a href="añadirlibro.php" class="button1">Añadir libro</a>
	</center>-->
</div>
 <!-- jQuery, Popper.js, Bootstrap JS -->
    <script src="../../assets/jquery/jquery-3.3.1.min.js"></script>
  <!--  <script src="popper/popper.min.js"></script>-->
    <script src="../../assets/bootstrap/js/bootstrap.min.js"></script>
      
    <!-- datatables JS -->
    <script type="text/javascript" src="../../assets/datatables/datatables.min.js"></script>    
     
    <script type="text/javascript" src="../../assets/formato.js"></script>
 	<?php include('../includes/footer.php');?>
</body>
</html>















