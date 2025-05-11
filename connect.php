<?php

$server = "localhost";
$user = "root";
$password = ""; // normalmente vacio
$db = "enoc_ingredientes"; // nombre de su base de datos

// Establecer la conexion
$connect = mysqli_connect($server, $user, $password, $db);

if ($connect) {
    //echo "Conectado a la base de datos"."<br>";
} else {
    mysqli_connect_errno("Ocurrio un error al conectarse a la BD");
}
?>