<?php
include("conexion.php");
$con=conectar();

$id4=$_POST['id4'];
$id3=$_POST['id3'];
$id2=$_POST['id2'];
$id=$_POST['id'];
$id_busqueda=$_POST['id_busqueda'];
$comentario=$_POST['comentario'];
$material1=$_POST['material1'];
$material2=$_POST['material2'];
$material3=$_POST['material3'];
$fecha=$_POST['fecha'];
$hora=$_POST['hora'];



$sql="INSERT INTO reparar VALUES('$id_busqueda','$comentario','$material1','$material2','$material3','$fecha','$hora')";
$query= mysqli_query($con,$sql);

$sql2="UPDATE equipos SET fecha='$fecha', estado='Reparado' WHERE asoc_id='$id'";
$query2= mysqli_query($con,$sql2);

if($query){
    Header("Location: insertar_equip.php?id4=$id4&id3=$id3&id2=$id2&id=$id");
    
}else {
}
?>