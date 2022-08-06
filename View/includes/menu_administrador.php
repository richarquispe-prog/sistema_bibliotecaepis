
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>EPIS</title>
	<!--link rel="stylesheet" href="Styles/estilos.css"-->
	
	 <!-- Bootstrap CSS -->
	 <link rel="stylesheet" href="../../assets/bootstrap/css/bootstrap.css"/>
     <!--datables CSS básico-->
    <link rel="stylesheet" type="text/css" href="../../assets/datatables/datatables.min.css"/>
    

    <!-- Custom styles for this template-->
    <link href="../../assets/css/sb-admin-2.min.css" rel="stylesheet">
</head>
<body id="page-top">
	<div id="wrapper">
		<ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color: black;">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
                <div class="sidebar-brand-icon">
                    <i class="fas fa-building"></i>
                </div>  
                <img src="../../resources/img/epis1.png" width="50" height="50">
                <div class="sidebar-brand-text mx-1">BIBLIOTECA EPIS</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-2">
            <!-- S  -->
            <li class="nav-item">

            	<a href="../libros/acervo.php" class="nav-link"><img src="../../resources/img/libro.png" width="20" height="20">LIBRO </a>
            	<a href="../boletas/boletas_admi.php" class="nav-link"><img src="../../resources/img/boletaadmi.png" width="20" height="20">BOLETAS</a>
            	<a href="../usuarios/lista_usuario.php" class="nav-link"><img src="../../resources/img/usuario.png" width="20" height="20">USUARIOS</a>
            	<!-- <a href="es_registro.php" class="nav-link"><img src="../../resources/img/registrarusuario.png" width="20" height="20">REGISTRAR USUARIO</a> -->
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider my-2">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle" ></button>
            </div>

        </ul>
        <div id="content-wrapper" class="d-flex flex-column">
        	<div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    
                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item text-dark ">      
                                 
                            <?php
                            //print_r($_SESSION['user']);
                            echo $_SESSION['user']['nombre']." ".$_SESSION['user']['apellidos']." - ";
                            echo $_SESSION['user']['tipo_usuario'];
                                                       
                            ?>
                        </li>
                    </ul>
                    <ul class="navbar-nav ml-auto">
                    
                        <div class="topbar-divider d-none d-sm-block">
                            
                        </div>
                        <!-- Nav Item - User Information -->
                        
                        <li class="nav-item dropdown no-arrow">
                        
                        	<a href="../../Controller/logout.php" class="nav-link">Salir</a>
                        </li>
                    </ul>
                </nav>
            
	
	
