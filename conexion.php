<?php
// Vamos a establecer la conexion a Mysql
// Para conectarnos a mysql, se necesitan ciertos parametros
// parametros de conexion: server, user, password, database
$server = "localhost";
$user = "root";
$password = ""; // normalmente vacio
$db = "marzo31"; // nombre de su base de datos

// Establecer la conexion
$connect = mysqli_connect($server, $user, $password, $db);

if ($connect) {
    echo "Conectado a la base de datos";
} else {
    mysqli_connect_errno("Ocurrio un error al conectarse a la BD");
}
