<?php

    $hostname = "localhost";
    $user = "root";
    $pass = "";
    $database = "bibliotecaepis";
//realizando la conexion
    $conexion = mysqli_connect($hostname,$user,$pass,$database);//declarando la variable conexion  con la funcion 
    if (mysqli_connect_errno()){//
        echo "No se pudo conectar a la base de datos";
        exit();
    }

    mysqli_select_db($conexion,$database) or die("No se encuentra la base de datos");//si esque ocurre algun error en la bd

    mysqli_set_charset($conexion,"utf8");

?>