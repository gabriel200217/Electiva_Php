<?php

include("conexion.php");
$con=conectar();

$Id=$_GET['id'];

$sql="DELETE FROM cliente  WHERE id='$Id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: client_register.php");
    }
?>
