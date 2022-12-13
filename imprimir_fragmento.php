<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];
$id2=$_GET['id2'];
$id3=$_GET['id3'];
$id4=$_GET['id4'];
$id_busqueda=$_GET['id_busqueda'];

$sql="SELECT * FROM alumno WHERE numero_servicio='$id'";
$query=mysqli_query($con,$sql);


$sql2="SELECT * FROM cliente WHERE rif_ced = '$id2'";
$query2=mysqli_query($con,$sql2);

$sql3="SELECT * FROM equipos WHERE asoc_id = '$id' AND id = '$id_busqueda'";
$query3=mysqli_query($con,$sql3);

$sql4="SELECT * FROM finalizar WHERE asoc_id = '$id'";
$query4=mysqli_query($con,$sql4);

$sql5="SELECT * FROM recibe WHERE cedula = '$id4'";
$query5=mysqli_query($con,$sql5);

$sql6="SELECT * FROM reparar WHERE id = '$id_busqueda'";
$query6=mysqli_query($con,$sql6);
?>
<?php ob_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<!-- <div>
    <div class="card" style="width: 50%; margin-bottom: -190px">
        <div class="card-body">
            <h5 class="card-title">TECNOSISTEMAS LARA C.A</h5>
            <h6 class="card-subtitle mb-2 ">Rif. J-31299880-6 NIT</h6>
            <p class="card-text">BQTO. CARRERA 28 ENTRE CALLES 34 Y 35 CASA #34-51</p>
            <p class="card-text">TELEFONOS 0251-2322130/EMAIL: TECLARA@CANTV.NET</p>
        </div>
    </div>
    <div class="card" style="width: 50%; margin-left: 345px;">
        <div class="card-body">
            <h5 class="card-title">RECEPCION Nro: 2322</h5>
            <h6 class="card-subtitle mb-2">2013-06-25</h6>
            <p class="card-text">BQTO. CARRERA 28 ENTRE CALLES 34 Y 35 CASA #34-51</p>
            <p class="card-text">TELEFONOS 0251-2322130/EMAIL: TECLARA@CANTV.NET</p>
        </div>
    </div>
</div>
    <div class="card" style="width: 95%; margin-left: 3%">
        <div class="card-body">
            <h5> -->
            <table width="100%" class="title">
                <tr><td>TECNOSISTEMAS LARA C.A</td></tr>
            </table>
            <?php
                $row=mysqli_fetch_array($query)
            ?>
            <!-- <table width="100%" cellpadding="5px" cellspacing="15px" Bordes="2" Frame=vsides Rules=none> -->
            
            <div style="border-top: 2px solid black;border-bottom: 2px solid black; font-size: small">
                <ul>Rif. J-31299880-6 NIT</ul>
                <ul>BQTO. CARRERA 28 ENTRE CALLES 34 Y 35 CASA #34-51</ul>
                <ul>TELEFONOS 0251-2322130/EMAIL: TECLARA@CANTV.NET</ul>
            </div>
            <div style="margin-top: -90px; margin-left: 650px; font-size: small">
                <ul>RECEPCION Nro: <?php echo $id?></ul>
                <ul><?php echo $row['fecha']?></ul>
            </div>
            
            <!-- </table> -->
                <?php
                    while($row=mysqli_fetch_array($query2)){
                ?>
                <table width="100%" cellpadding="5px" cellspacing="5px" Bordes="2" Frame=vsides Rules=none class="mt-3">
                    <tr style="font-size: small">
                        <div>
                            <col><ul>Rif/Cedula: <?php  echo $row['rif_ced']?></ul></col>
                            <ul>Contacto: <?php  echo $row['contacto']?></ul>
                            <ul>Cliente: <?php  echo $row['cliente']?></ul>
                        </div>
                        <div style="margin-left: 650px; margin-bottom: -120px">
                            <col><ul>Direccion: <?php  echo $row['direccion']?></ul></col>
                            <ul>Email: <?php  echo $row['email']?></ul>
                            <ul>Telefono: <?php  echo $row['telefono']?></ul>
                        </div>
                    </tr>
                <?php 
                    }
                ?>
            </table>
            
            <table>
                <?php
                    while($row=mysqli_fetch_array($query3)){
                ?>
                <table width="100%" cellpadding="5px" cellspacing="5px" Bordes="2" Frame=vsides class="mt-3">
                    <tr>
                        <td>Equipo: <br> <?php  echo $row['equipo']?></td>   
                        <td>Marca: <br><?php  echo $row['marca']?></td>
                        <td>Modelo:<br><?php  echo $row['modelo']?></td>
                        <td>Serial: <br><?php  echo $row['serials']?></td>
                        <td>Servicio: <br><?php  echo $row['servicio']?></td>
                        <td>Falla: <br><?php  echo $row['falla']?></td>
                        <td>Observacion: <br><?php  echo $row['observacion']?></td>
                    </tr>
                <?php 
                    }
                ?>   
                    <table width="100%" cellpadding="3px" cellspacing="2px">
                        <tr>
                            <td style="font-size: small; width: 100%">NOTA: LA EMPRESA NO SE HACE RESONSABLE POR LA INTEGRIDAD DEL SOFTWARE O DATOS CONTENIDOS EN EL DISCO DURO DEL EQUIPO PASADOS 30 DIAS LA EMPRESA NO SE HARA RESPONSABLE POR LOS EQUIPOS DEJADOS EN EL TALLER. ES INDISPENSABLE LA PRESENTACION DE ESTE COMPROBANTE PARA EL RETIRO DE EQUIPOS</td>
                        </tr>
                        <tr>
                            <?php 
                                 while($row2=mysqli_fetch_array($query5)){
                            ?>
                            <td><div style="margin-top: 10px; text-transform: uppercase"> Recibido Por: <?php echo $row2['nombre']?></div></td>
                            <?php 
                                }
                            ?>
                        </tr>
                        <tr>
                            <td><div style="margin-top: -30px; margin-left: 550px; margin-bottom: 15px; text-transform: uppercase"> Cliente: </div></td>
                        </tr>
                    <table>
                <table width="100%" cellpadding="3px" cellspacing="3px" Bordes="2" Frame=vsides class="mt-2">
                <?php
                    while($row=mysqli_fetch_array($query6)){
                ?>
                    <tr> 
                          <td>Estado: Reparado</td>
                          <td>Comentario: <?php  echo $row['comentario']?></td>
                          <td>Fecha: <?php  echo $row['fecha']?></td>
                          <td>Hora: <?php  echo $row['hora']?></td>
                          <td>Materiales: <?php echo $row['material1']?> - <?php echo $row['material2']?> - <?php echo $row['material3']?></td>
                        
                    </tr>    
                <?php
                    }
                ?> 
                </table>
                <table width="100%" cellpadding="3px" cellspacing="3px" Bordes="2" Frame=vsides class="mt-2">
                <?php
                    while($row=mysqli_fetch_array($query4)){
                ?>
                    <tr>
                        <!-- <!?php $fin = $row['estado'];
                            if($fin != 'Finalizado'){
                        ?>   
                        <td>Estado: No finalizado</td>
                        <!?php
                            }else{
                        ?> -->
                          <td>Estado: <?php  echo $row['estado']?></td>
                          <td>Fecha: <?php  echo $row['fecha']?></td>
                          <td>Hora: <?php  echo $row['hora']?></td>
                        <!-- <!?php
                            }
                        ?> -->
                    </tr>    
                <?php
                    }
                ?> 
                </table>
                
                
            </table>
            <!-- <table>
                
            </table> -->
            <!-- </h5>
        </div>
    </div> -->
</body>
<?php
require_once 'dompdf/autoload.inc.php';
use Dompdf\Dompdf;
$dompdf = new DOMPDF();
$dompdf->setPaper(array(0, -10, 705, 901), 'portrait');
$dompdf->load_html(ob_get_clean());
$dompdf->render();
$pdf = $dompdf->output();
$filename = "Reporte.pdf";
file_put_contents($filename, $pdf);
$dompdf->stream($filename);
?>
</html>