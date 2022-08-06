<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>EPIS</title>
	<!--link rel="stylesheet" href="Styles/estilos.css"-->
	
	 <!-- Bootstrap CSS -->
	 <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.css"/>
    <!--datables CSS básico-->
    <link rel="stylesheet" type="text/css" href="../assets/datatables/datatables.min.css"/>

    <!-- Custom styles for this template-->
    <link href="../assets/css/sb-admin-2.min.css" rel="stylesheet">
    <!-- CSS only -->
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</head>
<body id="page-top">
	<div id="wrapper">
		<ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color: black;">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
                <div class="sidebar-brand-icon">
                    <i class="fas fa-building"></i>
                </div><img src="../resources/img/epis1.png" width="50" height="50">
                <div class="sidebar-brand-text mx-3">BIBLIOTECA EPIS</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-2">
            <!-- S  -->
            <li class="nav-item">
            	
            	<a href="catalogo.php" class="nav-link"><img src="../resources/img/catalogo.png" width="20" height="20">CATALOGO </a>
			<a href="visualizar_boleta.php" class="nav-link"><img src="../resources/img/boleta.png" width="20" height="20">BOLETA</a>
            <a href="calificacion.php" class="nav-link"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
  <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>
</svg> CALIFICAR</a>
            </li>


            
			
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
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
                        
                        	<a href="../Controller/logout.php" class="nav-link">Salir</a>
                        </li>
                    </ul>
                </nav>

















