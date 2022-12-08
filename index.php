<?php
require_once 'conexion.php';

$query = "insert into productos(nombre) values('productos de prueba');";

$execute = mysqli_query($conexion, $query);

if($execute !== false){
    $id_generado = mysqli_insert_id($conexion);
    echo 'Nuevo Id Generado: '.$id_generado;
}