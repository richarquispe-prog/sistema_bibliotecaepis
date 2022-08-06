<?php
	session_start();

	if (!isset($_SESSION['user']) ){
		header("Location: ../");
	}
	include('includes/menu_estudiante.php');
	include '../Model/conexion.php';

 ?>

<div class="container-fluid">
    <div id="main-containe">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <center>
                    <h3>BOLETAS PENDIENTES</h3>
                </center>
            </div>
            <div class="container">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example" class="table table-sm" style="width:100%">
                            <thead>
                                <tr>
                                    <td>CODIGO BOLETA </td>
                                    <td>DNI </td>
                                    <td>NUMERO DE CONTROL</td>
                                    <td>FECHA DE ENTREGA</td>
                                    <td>FECHA DE DEVOLUCION</td>
                                    <td>Accion</td>
                                </tr>
                            </thead>
                            <?php
							$var=$_SESSION['DNI'] ;

							echo $_SESSION['DNI'];?>
                            <?php 
							$sql="SELECT * from boleta WHERE DNI=$var";
							$result=mysqli_query($conexion,$sql);

							while($mostrar=mysqli_fetch_array($result)){	        
								?>

                            <tr>
                                <td><?php echo $mostrar['codigo_boleta'] ?></td>
                                <td><?php echo $mostrar['DNI'] ?></td>
                                <td><?php echo $mostrar['n_control'] ?></td>
                                <td><?php echo $mostrar['fecha_entrega'] ?></td>

                                <td><?php echo $mostrar['fecha_devolucion'] ?></td>

                                <td><a target="_black"
                                        href="fpdf.php?codigo_boleta= <?php echo $mostrar['codigo_boleta'];?>"
                                        class="btn btn-outline-success">Boleta</a></td>


                                <!--<td><?php //echo $mostrar['imagen'] ?></td>-->

                                <?php ?>
                            </tr>
                            <?php } ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- jQuery, Popper.js, Bootstrap JS -->
<script src="jquery/jquery-3.3.1.min.js"></script>
<!--  <script src="popper/popper.min.js"></script>-->
<script src="bootstrap/js/bootstrap.min.js"></script>

<!-- datatables JS -->
<script type="text/javascript" src="datatables/datatables.min.js"></script>

<script type="text/javascript" src="formato.js"></script>
<br><br> <br><br>
<br><br>
<?php include('includes/footer.php');?>
</body>

</html>