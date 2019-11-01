<?php 
ob_start();
// Credenciales Base de datos
$db['db_host'] = "localhost";
$db['db_user'] = "root";
$db['db_pass'] = "";
$db['db_name'] = "test";

foreach ($db as $key => $value) {
    define(strtoupper($key), $value);
}

$connection = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);

if (!$connection) {
    die('Error de Conexión (' . mysqli_connect_errno() . ') ' . mysqli_connect_error());
}
