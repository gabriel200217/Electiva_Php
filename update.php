<?php

include("conexion.php");
$con=conectar();

$numero_servicio=$_POST['numero_servicio'];
$asociadocliente=$_POST['cliente'];
$asociadorecibe=$_POST['recibe'];
$fecha=$_POST['fecha'];
$hora=$_POST['hora'];

$sql="UPDATE alumno SET asociadocliente='$asociadocliente', asociadorecibe='$asociadorecibe',fecha='$fecha',hora='$hora' WHERE numero_servicio='$numero_servicio'";
$query=mysqli_query($con,$sql);
// numero_servicio='$numero_servicio',
    if($query){
        Header("Location: insertar_equip.php?id4=$asociadorecibe&id3=$fecha&id2=$asociadocliente&id=$numero_servicio");
    }
?>