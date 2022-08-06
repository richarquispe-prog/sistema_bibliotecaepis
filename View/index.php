<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="utf-8">
    <title>Biblioteca EPIS</title>
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.css"/>
    <link type="image/x-icon" href="../resources/img/epis1.png" rel="shortcut icon">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>  
<header class="cabecera">
    <div class="cabecera__fondo--nitido"></div>
    <div class="cabecera__capa"></div>
    <div class="cabecera__contenido">
        <img src="../resources/img/epis1.png" alt="Funcion 13 Logo" class="logo">
        <h1>SISTEMA DE BIBLIOTECA</h1>
        <p>Escuela Profesional de Ingenieria de Sistemas</p>
    </div>
    <nav class="nav">
        <div class="nav__columna nav__pull"></div>
        <ul class="nav__columna nav__enlaces">
            <li><a href="#">Inicio</a></li>
            <li><a href="https://goo.gl/maps/YGddP8BJ74DW9uu5A" target="_blank">Ubicación</a></li>
            <li><a href="https://sistemas.unh.edu.pe/" target="_blank">Contactenos</a></li>
            <li class="dropdown">
                <span>Ingresar
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                    </svg>
                </span>
                <ul >
                    <li class=""> 
                        <button type="button" class="btn " data-bs-toggle="modal" data-bs-target="#estudent" style = "color: white">
                        Estudiante
                        </button>
                
                        <button type="button" class="btn " data-bs-toggle="modal" data-bs-target="#addprofile" >
                         Administrador 
                        </button>
                     </li>
                </ul>
            </li>
        </ul>
    </nav>
</header>
<section class="section1-center">
        <div class="cont-video-bg" style="position:relative; width: 100%; top: 0; left: 0">
            <br><br><br><br>
            <video autoplay muted loop id="myVideo" style="min-width: 100%">
                <source src="../resources/img/libros_comprimido(1080)(2).mp4" type="video/mp4">
            </video>
        </div>
 </section>


<!-- MODALS -->

<!-- Modal: Login Student -->
<div class="modal fade" id="estudent" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="color: black;">
    <div class="modal-dialog">
        <div class="modal-content img_log">
            <div class="modal-header">
           
                <h5 class="modal-title" id="exampleModalLabel">ESTUDIANTE</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <img src="../resources/img/sistemas.png">
            <div class="modal-body">
        <form method="post" action="../Controller/logestudent.php" class="adm_login" autocomplete="on">

                  <div class=" txt_field">                      
                        <input  name="email"  type="email" required class="form-control" id="exampleInputEmail1">
                        <span></span>
                        <label for="exampleInputEmail1" class="form-label">Correo</label>
                    </div>

                    <div class="mb-3 txt_field">                      
                        <input name="password" type="password" required class="form-control" id="exampleInputPassword1">
                        <span></span>
                      <label for="exampleInputPassword1" class="form-label">Contraseña</label>
                    </div>

                    <div class="modal-footer contraseña">
                <input  type="submit" value="Login">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
            </div>
          </form>
            </div>

            <div class="modal-footer">
                <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
            </div>
        </div>
    </div>
</div>
<?php
if(filter_var( $_POST["email"] , FILTER_VALIDATE_EMAIL)){
		$correo = mysqli_real_escape_string( $conexion, $_POST["email"]);
		}else{
		$errors["email"] = "Tiene que proporcionar un email valido";
		}
?>
<!-- Modal: Login Admin -->
<div class="modal fade" id="addprofile" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="color: black;">
    <div class="modal-dialog">
        <div class="modal-content img_log">
        
            <div class="modal-header ">
                
                <h5 class="modal-title" id="exampleModalLabel">ADMINISTRADOR </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <img src="../resources/img/sistemas.png">
            <div class="modal-body">
        <form method="POST" action="../Controller/logadmin.php" class="adm_login" autocomplete="on">

                  <div class=" txt_field">                      
                        <input  name="email_"  type="email" required class="form-control" id="exampleInputEmail1">
                        <span></span>
                        <label for="exampleInputEmail1" class="form-label">Correo</label>
                    </div>

                    <div class="mb-3 txt_field">                      
                        <input name="password_" type="password" required class="form-control" id="exampleInputPassword1">
                        <span></span>
                      <label for="exampleInputPassword1" class="form-label">Contraseña</label>
                    </div>

                    <div class="modal-footer contraseña">
                <input  type="submit" value="Login">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
            </div>
          </form>
            </div>

            <div class="modal-footer">
                <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
            </div>
        </div>
    </div>
</div>



 

<footer class="pie_pagina">
    <p>©Copyright 2050 EQUIPO 4. Todos los derechos reservados.</p>
</footer>


</body>





<script>
document.querySelector(".dropdown").addEventListener("click",
    function() {
        document.querySelector("dropdown ul").classList.add("show")
    });
</script>



<style>
        
    /*###################################################################
        #                            menu desplegable
        ###################################################################*/
    .dropdown {
        position: relative;
    }

    .dropdown ul {
        position: absolute;
        max-height: 0px;
        overflow: hidden;
        transition: all 0.5s;
        left: 0px;
    }

    .dropdown:hover ul,
    dropdown:hover ul.show {
        max-height: 400px;
        color: #fff;
        background-color: #836CEE;
        border-color: #836CEE;
    }

    /*###################################################################
        #                            tamaño del video
        ###################################################################*/

    #myVideo {
        width: 100%;
    }
    /*######################################################### 
                                login
    ######################################################### */
    .img_log img {
        position: relative;
        padding: 10px;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    .center form {
        padding: 0 40px;
        box-sizing: border-box;
    }

    .center form {
        padding: 0 40px;
        box-sizing: border-box;
    }

    form .txt_field {
        position: relative;
        border-bottom: 2px solid #adadad;
        margin: 30px 0;
    }
    .txt_field input {
        width: 100%;
        padding: 0 5px;
        height: 40px;
        font-size: 16px;
        border: none;
        background: none;
        outline: none;
    }
    .txt_field label {
        position: absolute;
        top: 50%;
        left: 5px;
        color: #adadad;
        transform: translateY(-50%);
        font-size: 16px;
        pointer-events: none;
        transition: .5s;
    }
    .txt_field span::before {
        content: '';
        position: absolute;
        top: 40px;
        left: 0;
        width: 0%;
        height: 2px;
        background: #2691d9;
        transition: .5s;
    }
    .txt_field input:focus~label,
    .txt_field input:valid~label {
        top: -5px;
        color: #2691d9;
    }

    .txt_field input:focus~span::before,
    .txt_field input:valid~span::before {
        width: 100%;
    }
    input[type="submit"] {
        width: 100%;
        height: 50px;
        border: 1px solid;
        background: #2691d9;
        border-radius: 25px;
        font-size: 18px;
        color: #e9f4fb;
        font-weight: 700;
        cursor: pointer;
        outline: none;
    }

    input[type="submit"]:hover {
        border-color: #2691d9;
        transition: .5s;
    }

    button{
        align-items: center;
    }
    .contraseña button[type="button"]{
        cursor: pointer;
        border: 30px;
        background-color: transparent;
    }


    /*###################################################################
        #                            cabecera
        ###################################################################*/
    html {
        box-sizing: border-box;
    }

    *,
    *:before,
    *:after {
        box-sizing: inherit;
    }

    body {
        /*background: #191919;*/
        color: #fff;
        /*font-smoothing: antialiased;*/
        -webkit-font-smoothing: antialiased;
        margin: 0;
        position: relative;
    }




    .item-content,
    .item-content a,
    .item-content a:hover,
    .item-content a:visited {
        color: #ccc;
        text-decoration: none;
    }

    .item-content .fa {
        display: inline-block;
        margin-right: 5px;
    }


    .nav {
        /*background-color: rgba(0, 0, 0, 0.5);*/
        background-color: rgba(103, 25, 25, 0.5);
        bottom: 0;
        height: 50px;
        left: 0;
        position: absolute;
        width: 100%;
        max-width: 150%;
        z-index: 20;
    }

    .nav ul,
    .nav li {
        list-style: none;
        margin: 0;
        padding: 0;
        /*text-transform: uppercase;*/
    }

    .nav,
    .nav__pull,
    .nav__social,
    .nav__enlaces {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
    }

    .nav__columna {
        font-size: 14px;
        width: 50%;
        /*width: 33%;*/
        -ms-flex-preferred-size: 50%;
        flex-basis: 50%;
    }

    .nav__social,
    .nav__enlaces {
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
    }

    .nav__social li+li,
    .nav__enlaces li+li {
        margin-left: 25px;
    }

    .nav__social a,
    .nav__social a:visited,
    .nav__enlaces a,
    .nav__enlaces a:visited {
        color: #fff;
        text-decoration: none;
        font-family: arial, verdana;
        font-size: 15px;
    }

    .nav__enlaces a:hover {
        text-decoration: none;
        font-weight: 900;
        color: #ffffff;
    }


    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    .cabecera {
        font-family: 'Montserrat', sans-serif;
    }

    .cabecera {
        display: inline-block;
        height: 275px;
        /*cambio original 375-*/
        left: 0;
        padding: 0 20px;
        position: absolute;
        top: 0;
        width: 100%;
        z-index: 5;
    }

    .cabecera--encogida {
        position: fixed;
        top: -225px;
        z-index: 12;
    }

    .cabecera h1 {
        font-size: 45px;
        letter-spacing: 0.2em;
        margin: 0px 0;
        /*AQUI HICE CAMBIOS*/
        text-transform: uppercase;
        color: #ffffff;
    }

    .cabecera p {
        /*AQUI HICE CAMBIOS*/
        text-transform: uppercase;
        color: #ffffff;
    }

    .cabecera__contenido {
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
        height: 55px;
        /*aqui hice cambio 155*/
        left: 0;
        margin-top: 10px;
        padding: 40px 20px;
        position: fixed;
        width: 100%;
        z-index: 2;
    }

    .cabecera,
    .cabecera__fondo--nitido {
        background-position: bottom center;
        background-repeat: no-repeat;
        background-size: cover;
    }

    .cabecera__fondo--nitido {
        background-image: url(../resources/img/img.png);
        height: 275px;
        /*cambio original 375*/
        left: 0;
        opacity: 1;
        position: absolute;
        top: 0;
        width: 100%;
        max-width: 150%;
        min-width: 50%;
    }

    .cabecera__capa {
       /* background-color: rgba(0, 0, 0, 0.5);*/

        background-color: rgba(121, 4, 4, 0.5);
        bottom: 0;
        left: 0;
        position: absolute;
        right: 0;
        top: 0;
        z-index: 1;
        width: 100%;
        /* se cambia de 100% a:*/
        max-width: 150%;
        /* se cambia de 150% a:*/
        min-width: 50%;
        /* se cambia de 100% a:*/

    }

    .funcion13-logo {
        height: 50px;
        left: 20px;
        margin: 10px auto 0;
        position: fixed;
        right: 20px;
        text-align: center;
        z-index: 15;
    }

    .logo {
        height: 100px;
        width: 100px;
    }

    .relleno {
        height: 375px;
        position: relative;
        top: 0;
        width: 100%;
        z-index: -2;
    }

    .section1-center {
        -webkit-background-size: cover;
        background-size: cover;
        background-position: center;
        background-attachment: scroll;
        background-repeat: no-repeat;
        height: 50%;
        position: relative;
        /*overflow:hidden*/
    }

    .pie_pagina {
       /* background-color: rgba(0, 0, 0, 0.5);*/
        background-color: rgba(103, 25, 25, 0.5);
        bottom: 0;
        height: 50px;
        left: 0;
        position: absolute;
        width: 100%;
        max-width: 150%;
        z-index: 20;

    }
</style>

</html>
