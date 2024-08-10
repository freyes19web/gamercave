<?php

$Server = "localhost"; // Nombre del servidor MySQL (puede ser localhost)
$UserDB = "root"; // Nombre de usuario de MySQL
$PassDB = ""; // Contraseña de MySQL (dejar vacío si no hay contraseña)
$DB = "db_restaurantefj"; // Nombre de la base de datos

// Crear conexión
$conexion = new mysqli($Server, $UserDB, $PassDB, $DB);

// Verificar conexión
if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}
?>