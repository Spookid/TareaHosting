<?php
$host_db = "localhost";
$user_db = "root";
$pass_db = "Aries2031pa";
$db_name = "asistencia";
$tbl_name = "usuarios";
$conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);

if ($conexion->connect_error) {
 die("La conexion falló: " . $conexion->connect_error);
}
?>