<?php
 
    $host = "localhost";
    $usuario = "root";
    $contraseña = "";
    $basedatos = "forodb";

    $conexion = new mysqli($host, $usuario, $contraseña, $basedatos);

    if ($conexion->connect_error){
        die("Conexion fallida: " . $conexion->connect_error); 
    }
    else
        echo "Conexion exitosa";

?>