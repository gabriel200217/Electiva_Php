<?php
include("conexion.php");
$con=conectar();

$Id=$_POST['id'];
$Rif_Ced=$_POST['Rif_Ced'];
$Contacto=$_POST['Contacto'];
$Cliente=$_POST['Cliente'];
$Direccion=$_POST['Direccion'];
$Email=$_POST['Email'];
$Telefono=$_POST['Telefono'];

$sql="INSERT INTO cliente VALUES('$id','$Rif_Ced','$Cliente','$Contacto','$Direccion','$Email','$Telefono')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: alumno.php");
    
}else {
}
?>