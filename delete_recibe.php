<?php

include("conexion.php");
$con=conectar();

$Id=$_GET['id'];

$sql="DELETE FROM recibe  WHERE id='$Id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: alumno.php");
    }
?>
