<?php

	session_start();
	require_once "../Model/conexion.php"; //----conexion a la BD
	    //para iniciar sesión
	if ($_POST) {   //----cuando el formulario manda datos atravez del boton
		//--------recoleccion de datos de entrada y guardar en variables
		$correo = $_POST['email_'];//llama correo y se guarda en la variable
		$Pass = $_POST['password_'];
		//--------consulta MySql [$conexion=conexion a la BD] [SELECT * FROM tablename WHERE (condicion para iniciar sesion como administrador)]----
		$query= mysqli_query($conexion, "SELECT * FROM usuarios WHERE Correo_Institucional = '$correo' AND Password = '$Pass' AND Tipo_usuario = 'Administrador'");
		//------$rpta almacena cuantas filas consultadas de la tabla usuarios---
		$Rpta = mysqli_num_rows($query);
		//------si se encontró datos
		if ($Rpta > 0) {
			
			$dato = mysqli_fetch_array($query);		//de la fila obtenida ... va consultar las columnas
			$_SESSION['user'] = $dato;
					//--En session va guardar los datos de la columna solicidada
			$_SESSION['acceso'] = true; 

			header("Location: ../View/libros/acervo.php");

			//echo '<script>alert("USTED INICIÓ SESIÓN CORRECTAMENTE "); window.location.href="../View/acervo.php";</script>';
		
		}else{
			$alert = '<div class="alert alert-danger" role="alert">
                       Usuario y contraseña no coinciden
                    </div>';
            session_destroy();
			//header("location: ../View/index.php");

		}
	}
?>