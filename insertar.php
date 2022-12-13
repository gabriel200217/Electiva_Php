<?php
include("conexion.php");
$con=conectar();

$numero_servicio=$_POST['numero_servicio'];
$fecha=$_POST['fecha'];
$Client_Assoc=$_POST['cliente'];
$Recibe_Assoc=$_POST['recibe'];
$hora=$_POST['hora'];


$sql="INSERT INTO alumno VALUES('$numero_servicio','$Client_Assoc','$Recibe_Assoc','$fecha','$hora')";
$query= mysqli_query($con,$sql);

$sql2="SELECT * FROM alumno WHERE numero_servicio=(SELECT MAX(numero_servicio) FROM alumno)";
$query2= mysqli_query($con,$sql2);

$row=mysqli_fetch_array($query2);

$let = $row['numero_servicio'];

if($query){
    Header("Location: insertar_equip.php?id4=$Recibe_Assoc&id3=$fecha&id2=$Client_Assoc&id=$let");
    
}else {
}
?>