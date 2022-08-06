
 <?php
	require_once "../Model/conexion.php";
	session_start();
	if ($_POST) {
		$correo = $_POST['email'];//llama correo y se guarda en la variable
		$Pass = $_POST['password'];
		$query= mysqli_query($conexion, "SELECT * FROM usuarios WHERE Correo_Institucional = '$correo' AND Password = '$Pass' AND Tipo_usuario = 'Estudiante'");
		$Rpta = mysqli_num_rows($query);// guarda en la variable  con la cantidad  que encontro en la consulta con esas condiciones -----filas CUENTA
		if ($Rpta > 0) {// SI SE ENCONTRO MAS DE UNA COINCIDENCIA EN LA BD
			$dato = mysqli_fetch_array($query);// SE ALMACENA EN EL DATO y llama a la funcion mysqli  que toma la fila indicada (column)  de donde se hizo la consulta
			$_SESSION['user'] = $dato;
			$_SESSION['DNI'] = $dato['DNI'];//guarda los datos si se desa pasar a otro archivo
			$_SESSION['nombre'] = $dato['nombre']; 
			header("location: ../View/catalogo.php");/* llamar a otro formulario*/
			
			$alert = "<div  style='color: green;'>
              Sesión Iniciada :)
              </div>";// si pasa todo eso va a mostrar 
		}else{
			$alert = '<div  style="color: red;">
              Correo o contraseña incorrecta :(
            </div>';
            session_destroy();// se destruye la sesion 
			header("location: ../View/index.php");
		}
	}
?>