<?php
	include ('../Model/conexion.php'); //Conexion a la bd
    //include_once(".conexion.phpconexion.php");
	if ($_POST) {
		/*  obtener valores de los -input-  y guardar en las variables */
		$DNI = $_POST['dni'];  
		$nom = $_POST['nombre'];
		$apellidos = $_POST['apellidos'];
		$celular = $_POST['celular'];
		$correo = $_POST['correo'];
		$pass = $_POST['pass1'];
		$rep_pass = $_POST['pass2'];

		$result = 0;
		if (is_numeric($DNI) and $DNI != 0) {
		 	$query = mysqli_query($conexion, "SELECT * FROM usuarios WHERE DNI = '$DNI'");
		 	$result = mysqli_fetch_array($query);
            header("Location: ../View/usuarios/lista_usuario.php");
		}
		if ($result > 0) {
			$alert =  '<div class="alert alert-secondary"" role="alert">
                       Este usuario ya existente
                    </div>';
		}elseif ($pass == $rep_pass) {
			$insert = mysqli_query($conexion, "INSERT INTO usuarios(apellidos, Correo_Institucional, DNI, nombre, Password, repita_contraseña, telefono, tipo_usuario) VALUES('$apellidos', '$correo', '$DNI', '$nom', '$pass', '$rep_pass', '$celular', 'ESTUDIANTE')");
			//$alert = '<div  style="color: green;">Registrado</div>';
			 $alert = '<div class="alert alert-warning" role="alert">
                       Registro exitoso 
                    </div>';
		}else{ 
			$alert = '<div class="alert alert-danger" role="alert">
                       Las contraseña no coinciden
                    </div>';
		}
	}
?>