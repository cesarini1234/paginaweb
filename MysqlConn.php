<?php

function conectar(){
    //Parametros de conexion
    $servername = "localhost";
    $database = "proyecto";
    $username = "root";
    $password = "";
    
    //Crear la conexion
    $conn = mysqli_connect($servername, $username, $password, $database);
    //checar si se realizo la conexion
    if(!$conn){
        die("ERROR: la conexion no se realizo correctamente. " .mysqli_connect_error());
    }
    echo "<p>";
    $cbd = mysqli_select_db($conn, $database);
    if(!$cbd){
        die("ERROR DE CONEXION CON LA BASE DE DATOS");
    }
    echo "<p>";
    return($conn);
}

function formatearFecha($fecha){
   return date('g:i a', strtotime($fecha));
}
?>  
