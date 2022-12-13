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

$sql="UPDATE reparar SET comentario='$comentario',fecha='$fecha',hora='$hora',
material1='$material1',material2='$material2',material3='$material3'
WHERE id='$id_busqueda'";

$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: insertar_equip.php?id4=$id4&id3=$id3&id2=$id2&id=$id");
    }
?>