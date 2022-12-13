<?php 
    include("conexion.php");
    $con=conectar();

$id4=$_GET['id4'];
$id3=$_GET['id3'];
$id2=$_GET['id2'];
$id=$_GET['id'];
$estado = $_GET['estado'];
$id_busqueda=$_GET['id_busqueda'];

$sql="SELECT * FROM equipos WHERE id='$id_busqueda'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
                <div class="container mt-5">
                    <?php
                    if($estado == 'Recibido'){
                    ?>
                    <form action="update_equip.php" method="POST">

                        <input type="hidden" name="id4" value="<?php echo $id4?>" disabled>
                        <input type="hidden" name="id3" value="<?php echo $id3?>" disabled>
                        <input type="hidden" name="id2" value="<?php echo $id2?>" disabled>
                        <input type="hidden" name="id" value="<?php echo $id?>" disabled>
                        <input type="hidden" name="id_busqueda" value="<?php echo $row['id']?>" disabled>

                        <input type="text" class="form-control mb-3" name="equipo" placeholder="equipo" value="<?php echo $row['equipo']  ?>" disabled>
                        <input type="text" class="form-control mb-3" name="marca" placeholder="marca" value="<?php echo $row['marca']  ?>" disabled>
                        <input type="text" class="form-control mb-3" name="modelo" placeholder="modelo" value="<?php echo $row['modelo']  ?>" disabled>
                        <input type="text" class="form-control mb-3" name="serial" placeholder="serial" value="<?php echo $row['serials']  ?>" disabled>
                        <input type="text" class="form-control mb-3" name="servicio" placeholder="servicio" value="<?php echo $row['servicio']  ?>" disabled>
                        <input type="text" class="form-control mb-3" name="falla" placeholder="falla" value="<?php echo $row['falla']  ?>" disabled>
                        <input type="text" class="form-control mb-3" name="observacion" placeholder="observacion" value="<?php echo $row['observacion']  ?>" disabled>
                        

                        <input type="submit" class="btn btn-primary btn-block" value="Recibido" disabled>
                        </form>
                    <?php
                    }else if($estado == 'Finalizado'){
                    ?>
                    <form action="update_equip.php" method="POST">

                        <input type="hidden" name="id4" value="<?php echo $id4?>" disabled>
                        <input type="hidden" name="id3" value="<?php echo $id3?>" disabled>
                        <input type="hidden" name="id2" value="<?php echo $id2?>" disabled>
                        <input type="hidden" name="id" value="<?php echo $id?>" disabled>
                        <input type="hidden" name="id_busqueda" value="<?php echo $row['id']?>" disabled>

                        <input type="text" class="form-control mb-3" name="equipo" placeholder="equipo" value="<?php echo $row['equipo']  ?>" disabled>
                        <input type="text" class="form-control mb-3" name="marca" placeholder="marca" value="<?php echo $row['marca']  ?>" disabled>
                        <input type="text" class="form-control mb-3" name="modelo" placeholder="modelo" value="<?php echo $row['modelo']  ?>" disabled>
                        <input type="text" class="form-control mb-3" name="serial" placeholder="serial" value="<?php echo $row['serials']  ?>" disabled>
                        <input type="text" class="form-control mb-3" name="servicio" placeholder="servicio" value="<?php echo $row['servicio']  ?>" disabled>
                        <input type="text" class="form-control mb-3" name="falla" placeholder="falla" value="<?php echo $row['falla']  ?>" disabled>
                        <input type="text" class="form-control mb-3" name="observacion" placeholder="observacion" value="<?php echo $row['observacion']  ?>" disabled>
                        
                        <input type="submit" class="btn btn-primary btn-block" value="Finalizado" disabled>
                        </form>
                    <?php
                    }else{
                    ?>
                    <form action="update_equip.php" method="POST">

                                <input type="hidden" name="id4" value="<?php echo $id4?>">
                                <input type="hidden" name="id3" value="<?php echo $id3?>">
                                <input type="hidden" name="id2" value="<?php echo $id2?>">
                                <input type="hidden" name="id" value="<?php echo $id?>">
                                <input type="hidden" name="id_busqueda" value="<?php echo $row['id']?>">
                                
                                <input type="text" class="form-control mb-3" name="equipo" placeholder="equipo" value="<?php echo $row['equipo']  ?>">
                                <input type="text" class="form-control mb-3" name="marca" placeholder="marca" value="<?php echo $row['marca']  ?>">
                                <input type="text" class="form-control mb-3" name="modelo" placeholder="modelo" value="<?php echo $row['modelo']  ?>">
                                <input type="text" class="form-control mb-3" name="serial" placeholder="serial" value="<?php echo $row['serials']  ?>">
                                <input type="text" class="form-control mb-3" name="servicio" placeholder="servicio" value="<?php echo $row['servicio']  ?>">
                                <input type="text" class="form-control mb-3" name="falla" placeholder="falla" value="<?php echo $row['falla']  ?>">
                                <input type="text" class="form-control mb-3" name="observacion" placeholder="observacion" value="<?php echo $row['observacion']  ?>">
                                 
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    <?php
                    }
                    ?>
                </div>
    </body>
</html>