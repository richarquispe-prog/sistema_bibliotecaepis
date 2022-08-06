
<?php 
session_start();

if (!isset($_SESSION['user']) || $_SESSION['user']['tipo_usuario'] != "ADMINISTRADOR"){
	header("Location: ../");
}
include('../../Model/conexion.php'); 
include('../includes/menu_administrador.php');
//include('../../Controller/registrar_libro.php'); 
?>
<link rel="stylesheet" type="text/css" href="../../assets/Styles/estilos_pdf.css">	

<div class="container">

<form action="../../Controller/registrar_libro.php" method="post"  enctype="multipart/form-data">		
	<div class="container text-center"><br>  
	</div> <!--modal-->
	<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  	<div class="modal-dialog">
    <div class="modal-content">
		<div class="modal-header">
			<h5 class="modal-title" id="exampleModalLabel">AÑADIR LIBRO</h5>
			<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		</div>      	
		<center>
			<div class="form">
			<div class="grid">
					<div class="form-element">
							<input type="file" id="file-1" name="imagen" accept="image/*" >
						<label for="file-1" id="file-1-preview"><!--para jalar de carpeta-->
							<img src="https://bit.ly/3ubuq5o" alt=""><!--imagen de fondo-->
							<script src="js/main.js"></script>
										<div>
										<span>+</span>       
										</div>		
					</div>
				</div>
			</div>
		</center>

		 <div class="modal-body">			
			<div class="mb-3">         
				<input type="text" name="dewewey" placeholder="Número de Deewey" class="form-control" required="">            
			</div>

			<div class="mb-3">                   
					<input type="text"  name="titulo" placeholder="Titulo"  class="form-control" required>            
			</div>

			<div class="mb-3">                 
				<input type="text"   name="autor" placeholder="Autor"  class="form-control" >            
			</div>

					<div class="mb-3">
	            <label   >Fecha de Edicion:</label>        
	            <input type="date"  name="fecha" placeholder="fecha de Edicion"  class="form-control">            
          </div>

					<div class="mb-3">            
            	<input type="text"   name="editorial" placeholder="Editorial"   class="form-control">            
          </div>				

					<div class="mb-3">
		           <label>Fecha de Compra:</label>       
		           <input type="date"    name="fecha_ad" placeholder="Fecha de Adquicision"  class="form-control">            
          </div>

					<div class="mb-3">                    
          	 <input type="text"   name="genero"  placeholder="Genero"  class="form-control">            
          </div>				

					<div class="mb-3">
		           <select name="formato"  class="form-select" aria-label="Default select example" >
						<!--<option value="indefinido">Formato</option>-->
											<option value="Fisico">Fisico</option>	
											<option value="PDF">PDF</option>
												
								</select>
          </div>
         

					<div class="mb-3">                    
           			<input type="file" name="pdf"  class="form-control">            
          </div>

   				<select name="estado" class="form-select" aria-label="Default select example" >				
								<option value="Activo">Disponible</option>
								<option value="Desactivo">Prestado</option>				
					</select> <br>


					<center> 
						
						<button type="button" class="btn btn-secondary" data-bs-dismiss="modal" aria-label="Close">Cancelar</button>

						<input type="submit" value="Registrar Libro"  class="btn btn-primary">				
					</center>	
			</div>	
				
</form>
	</div>
      
  </div>
  </div>
</div>

<br>

	<div class="container-fluid">
		<div id="main-containe">    
				<center><h1>ACERVO BIBLIOGRÁFICO</h1></center>
					<br><?php echo isset($alert) ? $alert : ""; ?><br>
					<div class="card shadow mb-4">
						<div class="card-header py-3">
								<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">AÑADIR LIBRO </button><!--AZULITO BOTON-->
						</div>


						<div class="container">
							 <div class="card-body">
								<div class="table-responsive">               
                	

							<table  id="example" class="table table-sm" style="width:100%" >
										<thead>
												<tr>
														<td>Número de Control</td>														
														<td>Titulo</td>
														<td>Autor</td>			
														<td>Editorial</td>
														<!-- <td>Cantidad</td>															 -->
														<td>Estado</td>
														<td>Formato</td>				
														<td>Acciones</td>
														<td></td>
												</tr>
										</thead>

										<?php 
										$sql="SELECT * from libro";
										$result=mysqli_query($conexion,$sql);
										while($mostrar=mysqli_fetch_array($result)){			
											$actualizar="UPDATE  libro SET estado='Prestado'  WHERE cantidad=0";
											if(mysqli_query($conexion,$actualizar)){
							
											//echo $alert          

											}else{
											
												echo"error";
											} 
												$actualizar1="UPDATE  libro SET estado='Disponible'  WHERE cantidad=1";
																if(mysqli_query($conexion,$actualizar1)){
												
												//echo $alert          

											}else{
											
												echo"error";
											}
							

									 if ($mostrar['cantidad'] == 1) {
								                        $estado = '<span class="badge rounded-pill bg-success">Disponible </span>';
								                    } else {
								                        $estado = '<span class="badge rounded-pill bg-danger">Prestado</span>';
								                    }

								                   
										 ?>

										<tr>
											<td><?php echo $mostrar['n_control'] ?></td>		
											<td><?php echo $mostrar['titulo'] ?></td>
											<td><?php echo $mostrar['autor'] ?></td>		
											<td><?php echo $mostrar['editorial'] ?></td>
											<!-- <td><?php //echo $mostrar['cantidad'] ?></td>				 -->
										  <td><?php echo $estado; ?></td>		<!--ESTADO-->											
											<td><span class="badge bg-warning text-dark"><?php echo $mostrar['formato'] ?></span></td>											
											<td><a href="ed_libro.php?n_control= <?php echo $mostrar['n_control'];?>" class="btn btn-success">Editar</a></td>

											<td><a href="../../Controller/eliminar_libro.php?n_control=<?php echo $mostrar['n_control']; ?>" class="btn btn-danger">
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

