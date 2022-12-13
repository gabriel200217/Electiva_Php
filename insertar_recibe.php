<?php
include("conexion.php");
$con=conectar();

$Id=$_POST['id'];
$nombre=$_POST['nombre'];
$cedula=$_POST['cedula'];
$direccion=$_POST['direccion'];
$telefono=$_POST['telefono'];

$sql="INSERT INTO recibe VALUES('$id','$nombre','$cedula','$direccion','$telefono')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: alumno.php");
    
}else {
}
?>