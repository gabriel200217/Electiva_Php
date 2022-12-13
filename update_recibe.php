<?php

include("conexion.php");
$con=conectar();

$Id =$_POST['id'];
$cedula=$_POST['cedula'];
$nombre=$_POST['nombre'];
$direccion=$_POST['direccion'];
$telefono=$_POST['telefono'];

$sql="UPDATE recibe SET cedula='$cedula', nombre='$nombre',
direccion='$direccion', telefono='$telefono' WHERE id='$Id'";

$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: alumno.php");
    }
?>