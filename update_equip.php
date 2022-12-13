<?php

include("conexion.php");
$con=conectar();

$id4=$_POST['id4'];
$id3=$_POST['id3'];
$id2=$_POST['id2'];
$id=$_POST['id'];
$id_busqueda=$_POST['id_busqueda'];
$equipo=$_POST['equipo'];
$marca=$_POST['marca'];
$modelo=$_POST['modelo'];
$serial=$_POST['serial'];
$servicio=$_POST['servicio'];
$falla=$_POST['falla'];
$observacion=$_POST['observacion'];

$sql="UPDATE equipos SET equipo='$equipo',marca='$marca',modelo='$modelo',
serials='$serial',servicio='$servicio',falla='$falla',observacion='$observacion'
WHERE id='$id_busqueda'";

$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: insertar_equip.php?id4=$id4&id3=$id3&id2=$id2&id=$id");
    }
?>