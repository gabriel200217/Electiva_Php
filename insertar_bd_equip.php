<?php
include("conexion.php");
$con=conectar();

$id4=$_POST['id4'];
$id3=$_POST['id3'];
$id2=$_POST['id2'];
$id=$_POST['id'];
$id_marca=$_POST['id_marca'];
$id_equipo=$_POST['id_equipo'];
$asoc_id=$_POST['asoc_id'];
$equipo=$_POST['equipo'];
$marca=$_POST['marca'];
$modelo=$_POST['modelo'];
$serials=$_POST['serial'];
$servicio=$_POST['servicio'];
$falla=$_POST['falla'];
$observacion=$_POST['observacion'];
$fecha=$_POST['fecha_equip'];
$estado=$_POST['estado_equip'];



$sql="INSERT INTO equipos VALUES('$id','$asoc_id','$equipo','$marca','$modelo','$serials','$servicio','$falla','$observacion','$fecha','$estado')";
$query= mysqli_query($con,$sql);

$sql2="INSERT INTO marca VALUES('$id_marca','$marca')";
$query2= mysqli_query($con,$sql2);

$sql3="INSERT INTO equipo_especifico VALUES('$id_equipo','$equipo')";
$query3= mysqli_query($con,$sql3);

if($query){
    Header("Location: insertar_equip.php?id4=$id4&id3=$id3&id2=$id2&id=$asoc_id");
    
}else {
}
?>