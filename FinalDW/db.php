<?php

session_start();
//requerimos archivo con datos de conexion
require_once "datosdb.php";

//Variable de Conexión Creada con los datos de conexion
$conn = new mysqli($host,
$user,
$pass,
$dbname);

if($conn->connect_error)
{
    die('No se pudo conectar al servidor');
}
?>