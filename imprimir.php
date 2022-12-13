<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];
$id2=$_GET['id2'];
$id3=$_GET['id3'];

$sql="SELECT * FROM alumno WHERE numero_servicio='$id'";
$query=mysqli_query($con,$sql);


$sql2="SELECT * FROM cliente WHERE rif_ced = '$id2'";
$query2=mysqli_query($con,$sql2);

$sql3="SELECT * FROM equipos WHERE asoc_id = '$id'";
$query3=mysqli_query($con,$sql3);

$sql4="SELECT * FROM finalizar WHERE asoc_id = '$id'";
$query4=mysqli_query($con,$sql4);

$sql5="SELECT * FROM recibe WHERE cedula = '$id3'";
$query5=mysqli_query($con,$sql5);
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
            <div style="margin-top: -100px; margin-left: 650px; font-size: small; margin-bottom: -20px">
                <ul>RECEPCION Nro: <?php echo $id?></ul>
                <ul><?php echo $row['fecha']?></ul>
                <ul><?php echo $row['hora']?></ul>
            </div>
            
            <!-- </table> -->
                <?php
                    while($row=mysqli_fetch_array($query2)){
                ?>
                <table width="100%" cellpadding="5px" cellspacing="5px" Bordes="2" Frame=vsides Rules=none class="mt-3">
                    <tr style="font-size: small">
                        <div>
                            <col><ul style="text-transform: uppercase">Direccion: <?php  echo $row['direccion']?></ul></col>
                            <ul style="text-transform: uppercase">Contacto: <?php  echo $row['contacto']?></ul>
                            <ul style="text-transform: uppercase">Cliente: <?php  echo $row['cliente']?></ul>
                        </div>
                        <div style="margin-left: 550px; margin-bottom: -120px">
                            <col>RIF/CED: <?php  echo $row['rif_ced']?></ul></col>
                            <ul>EMAIL: <?php  echo $row['email']?></ul>
                            <ul>TELEFONO: 0<?php  echo $row['telefono']?></ul>
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
                <table width="100%" cellpadding="5px" cellspacing="5px" Bordes="2" Frame=vsides class="mt-3" style="table-layout: fixed; font-size: small">
                    <tr>
                        <td>Equipo: <br> <?php  echo $row['equipo']?></td>   
                        <td>Marca: <br><?php  echo $row['marca']?></td>
                        <td>Modelo:<br><?php  echo $row['modelo']?></td>
                        <td>Serial: <br><?php  echo $row['serials']?></td>
                        <td>Servicio: <br><?php  echo $row['servicio']?></td>
                        <td style="word-wrap: break-word; padding-right: -210px">Falla: <?php  echo $row['falla']?></td>
                        <td></td>
                        <td></td>
                        <tr>
                            
                            <td style="word-wrap: break-word; padding-right: -210px">Observacion: <?php  echo $row['observacion']?></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <?php
                            $let = $row['id'];
                            $sql6 = "SELECT * FROM reparar WHERE id = '$let'";
                            $query6 = mysqli_query($con,$sql6);
                            while($row3=mysqli_fetch_array($query6)){
                        ?>
                            <tr>
                            
                                <td>Comentario:</td>
                            
                                <td style="word-wrap: break-word; padding-right: -240px"><?php echo $row3['comentario']?></td>
                                
                                <td></td>

                                <td>Materiales: <?php echo $row3['material1']?> - <?php echo $row3['material2']?> - <?php echo $row3['material3']?></td>

                                <td></td>

                                <td style="padding-left: 50px">Fecha:</td>

                                <td><?php echo $row3['fecha']?></td>

                                <td>Hora:</td>

                                <td><?php echo $row3['hora']?></td>
                            </tr>
                        <?php
                            }
                        ?>
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
                    while($row=mysqli_fetch_array($query4)){
                        if($row['estado'] != 'Finalizado'){
                ?>
                <div></div>
                <?php 
                    }else{
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