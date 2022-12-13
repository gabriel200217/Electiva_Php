<?php
include("conexion.php");
$con=conectar();

$asoc_id=$_POST['asoc_id'];
$fecha=$_POST['fecha'];
$hora=$_POST['hora'];
$estado=$_POST['estado'];

$sql="UPDATE finalizar SET fecha='$fecha', hora='$hora', estado='$estado' WHERE asoc_id='$asoc_id'";
$query= mysqli_query($con,$sql);

$sql2="UPDATE equipos SET fecha='$fecha', estado='$estado' WHERE asoc_id='$asoc_id'";
$query2= mysqli_query($con,$sql2);

// if($query){
//     Header("Location: modal.php");
    
// }else {
// }
?>