<?php
$servidor = "localhost";
$baseDeDatos = "app";
$usuario ="root";
$contrasenia="";

try {
    //code...
    $conexion = new PDO("mysql:host=$servidor;dbname=$baseDeDatos",$usuario,$contrasenia);
} catch (Exception $ex) {
    //throw $th;
    echo $ex->getMessage();
}

?>