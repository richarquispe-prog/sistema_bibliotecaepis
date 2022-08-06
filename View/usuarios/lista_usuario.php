<?php 

session_start();
if (!isset($_SESSION['user']) || $_SESSION['user']['tipo_usuario'] != "ADMINISTRADOR"){
	header("Location: ../");
}
include('../../Model/conexion.php'); 
include('../includes/menu_administrador.php');

?>

<br>

<link rel="stylesheet" type="text/css" href="../../assets/Styles/estilos_pdf.css">	

<div class="container-fluid">
	<div id="main-containe">
    <!--<center><h1>BOLETAS</h1></center>-->

	<br><?php echo isset($alert) ? $alert : ""; ?><br>


	<center><h3>LISTA DE USUARIOS</h3></center>
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#registrarUsuario" data-bs-whatever="@mdo">REGISTRAR USUARIO </button><!--AZULITO BOTON-->

		</div>
		<div class="container">

			<div class="card-body">
				<div class="table-responsive">
					<table  id="example" class="table table-sm" style="width:100%" >
						<thead>
							<th>
															
								<td>Nombre </td>
								<td>Apellido</td>
								<td>Usuario</td>
								<td>DNI</td>
								<td>CORREO</td>
								<td>Contraseña</td>
								<td>Acciones</td>
								
								
							</th>
						</thead>

						<?php 
							$sql="SELECT * from usuarios ";
							$result=mysqli_query($conexion,$sql);

							while($mostrar=mysqli_fetch_array($result)){
						?>

						<tr>
							<td><?php echo $mostrar['nombre'] ?></td>
							<td><?php echo $mostrar['apellidos'] ?></td>
							<td><?php echo $mostrar['tipo_usuario'] ?></td>
							<td><?php echo $mostrar['DNI'] ?></td>
							<td><?php echo $mostrar['Correo_Institucional'] ?></td>
							
							<td><?php echo $mostrar['Password'] ?></td>
							<td>
								<a href="editar_Usuario.php?DNI= <?php echo $mostrar['DNI'];?>" class="btn btn-success">
								Editar
								</a>
							</td>
							<td>
								<a href="../../Controller/eliminar_usuario.php?DNI=<?php echo $mostrar['DNI']; ?>" class="btn btn-danger">
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


<!-- Modal -->
<div class="modal" id="registrarUsuario" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">REGISTRAR USUARIO</h5>
		<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

      </div>
	  <form action="../../Controller/registrar_usuario.php" method="post">
		  <div class="modal-body">

		  	<div class="mb-3">
				<input type="text" name="nombre" placeholder="Nombres"  class="form-control"  required onkeypress="return sololetras(event)"  onpaste="return false" title="Debe contener solo  letras " ><!--?!.* (?: |$))-->
			</div>
			<div class="mb-3">
				<input type="text" name="apellidos" required placeholder="Apellidos" class="form-control"  required onkeypress="return sololetras(event)"  onpaste="return false" title="Debe contener solo  letras " >
			</div>
			<div class="mb-3">
				<input type="text" name="celular" required placeholder="Celular" maxlength="9" class="form-control" onkeypress="return solonumero(event)"  onpaste="return false"  title="Debe contener 9 números y empezar con 9">
			</div>
			<div class="mb-3">
				<input type="text" name="dni" required placeholder="DNI" maxlength="8"  class="form-control"  onkeypress="return solonumero(event)"  onpaste="return false"  title="Debe contener">
			</div>
			<div class="mb-3">
				<input type="email" name="correo" pattern=".+@unh.edu.pe" title="Ingrese un correo institucional de la UNH" required placeholder="correo@unh.edu.pe" class="form-control" >
			</div>
			<div class="mb-3">
				<input type="password" name="pass1" required placeholder="Contraseña" class="form-control" >
			</div>
			<div class="mb-3">
				<input type="password" name="pass2" required placeholder="Repita contraseña" class="form-control" >
			</div>


			  
		  </div>
		  <div class="modal-footer">
		  	<button type="button" class="btn btn-secondary" data-bs-dismiss="modal" aria-label="Close">Cancelar</button>

			  <button type="submit" class="btn btn-primary">REGISTRAR USUARIO</button>
		  </div>
	  </form>


    </div> 
  </div>
</div>


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

<script>
	function sololetras(e){//recibe el evento parametro 
		key=e.keyCode || e.which;
		teclado=String.fromCharCode(key).toLowerCase();
		letras=" abcdefghijklmnñopqrstuvwxyz";
		especiales="8-37-38-46-164";
		teclado_especial=false;
		for(var i in especiales){
			if(key==especiales[i]){
				teclado_especial=true;break;
			}
		}
		if(letras.indexOf(teclado)==-1 && !teclado_especial){
			return false;
		}
	}



	function solonumero(e){
		key=e.keyCode || e.which;
		teclado=String.fromCharCode(key);
		numeros="0123456789";
		especiales="8-37-38-46";
		teclado_especial=false;
		for(var i in especiales){//buscando la tecla presionada 
			if(key==especiales[i]){
				teclado_especial=true;
			}
		}
		if(numeros.indexOf(teclado)==-1 && !teclado_especial){// si esque no encuentra va ser menos 1
			return false;
		}
	}
</script>





