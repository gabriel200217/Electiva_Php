<?php

include("conexion.php");
$con=conectar();

$estado = $_GET['estado'];
$id_busqueda=$_GET['id_busqueda'];
$id=$_GET['id'];
$id2=$_GET['id2'];
$id3=$_GET['id3'];
$id4=$_GET['id4'];

if($estado == 'Finalizado' OR $estado == 'Recibido'){
    echo 'ERROR; NO SE PUEDE BORRAR';
}else{
$sql="DELETE FROM equipos WHERE id='$id_busqueda'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: insertar_equip.php?id=$id&id2=$id2&id3=$id3&id4=$id4");
    }
}
?>