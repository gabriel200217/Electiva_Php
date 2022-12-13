<?php 
    include("conexion.php");
    $con=conectar();

    $fecha_inicio = $_POST['fecha-inicio'];
    $fecha_final = $_POST['fecha-final'];

    $sql="SELECT * FROM equipos WHERE estado='Recibido' AND fecha BETWEEN '$fecha_inicio' AND '$fecha_final'";
    $query=mysqli_query($con,$sql);
?>
<?php ob_start(); ?>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div style="width: 100%; text-align: center">
        <h3>
            Reporte de equipos pendientes desde
            <br>
            <h2>
                <?php echo $fecha_inicio?>
                 Hasta el 
                <?php echo $fecha_final?>
            </h2>
        </h3>
    </div>
<table width="100%" cellpadding="5px" cellspacing="5px" border="1">
    <!-- <tr bgcolor="#331d97"> -->
    <tr>
        <td>Equipo</td>
        <td>Marca</td>
        <td>Modelo</td>
        <td>Serial</td>
        <td>Fecha</td>
        <td>Estado</td>
        <td>Falla</td>
    </tr>
    <?php
        while($row=mysqli_fetch_array($query)){
    ?>    
    <tr >
        <td><?php echo $row['equipo']?></td>
        <td><?php echo $row['marca']?></td>
        <td><?php echo $row['modelo']?></td>
        <td><?php echo $row['serials']?></td>
        <td><?php echo $row['fecha']?></td>
        <td><?php echo $row['estado']?></td>
        <td><?php echo $row['falla']?></td>
        
    </tr>
    <?php
        }
    ?>
</table>
</body>
<?php
require_once 'dompdf/autoload.inc.php';
use Dompdf\Dompdf;
$dompdf = new DOMPDF();
$dompdf->setPaper(array(0, -10, 705, 901), 'portrait');
$dompdf->load_html(ob_get_clean());
$dompdf->render();
$pdf = $dompdf->output();
$filename = "Reporte_Equipos_Pendiente.pdf";
file_put_contents($filename, $pdf);
$dompdf->stream($filename);
?>
</html>