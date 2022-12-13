<?php

include("conexion.php");
$con=conectar();

$Id =$_POST['id'];
$Rif_Ced=$_POST['rif_ced'];
$Cliente=$_POST['cliente'];
$Contacto=$_POST['contacto'];
$Direccion=$_POST['direccion'];
$Email=$_POST['email'];
$Telefono=$_POST['telefono'];

$sql="UPDATE cliente SET rif_ced='$Rif_Ced', cliente='$Cliente', contacto='$Contacto', 
direccion='$Direccion', email='$Email', telefono='$Telefono' WHERE id='$Id'";

$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: client_register.php");
    }
?>