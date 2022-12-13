<?php 
    include("conexion.php");
    $con=conectar();

$id4=$_GET['id4'];
$id3=$_GET['id3'];
$id2=$_GET['id2'];
$id=$_GET['id'];
$estado = $_GET['estado'];
$id_busqueda=$_GET['id_busqueda'];

$sql="SELECT * FROM reparar WHERE id='$id_busqueda'";
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
                    if($estado == 'Finalizado'){
                    ?>
                    <form action="update_reparar.php" method="POST">

                        <input type="hidden" name="id4" value="<?php echo $id4?>" disabled>
                        <input type="hidden" name="id3" value="<?php echo $id3?>" disabled>
                        <input type="hidden" name="id2" value="<?php echo $id2?>" disabled>
                        <input type="hidden" name="id" value="<?php echo $id?>" disabled>
                        <input type="hidden" name="id_busqueda" value="<?php echo $id_busqueda?>" disabled>

                        <input type="text" class="form-control mb-3" name="comentario" placeholder="comentario" value="<?php echo $row['comentario']  ?>" disabled>
                        <input type="date" class="form-control mb-3" name="fecha" placeholder="fecha" value="<?php echo $row['fecha']  ?>" disabled>
                        <input type="time" class="form-control mb-3" name="hora" placeholder="hora" value="<?php echo $row['hora']  ?>" disabled>

                        <input type="submit" class="btn btn-primary btn-block" value="actualizar" disabled>
                        </form>
                    <?php
                    }else{
                    ?>
                    <form action="update_reparar.php" method="POST">

                                <input type="hidden" name="id4" value="<?php echo $id4?>">
                                <input type="hidden" name="id3" value="<?php echo $id3?>">
                                <input type="hidden" name="id2" value="<?php echo $id2?>">
                                <input type="hidden" name="id" value="<?php echo $id?>">
                                <input type="hidden" name="id_busqueda" value="<?php echo $id_busqueda?>">
                                
                                <input type="text" class="form-control mb-3" name="comentario" placeholder="comentario" value="<?php echo $row['comentario']  ?>">
                                <input type="text" class="form-control mb-3" name="material1" placeholder="material usado" value="<?php echo $row['material1']  ?>">
                                <input type="text" class="form-control mb-3" name="material2" placeholder="material usado" value="<?php echo $row['material2']  ?>">
                                <input type="text" class="form-control mb-3" name="material3" placeholder="material usado" value="<?php echo $row['material3']  ?>">
                                <input type="date" class="form-control mb-3" name="fecha" placeholder="fecha" value="<?php echo $row['fecha']  ?>">
                                <input type="time" class="form-control mb-3" name="hora" placeholder="hora" value="<?php echo $row['hora']  ?>">
                                
                            <input type="submit" class="btn btn-primary btn-block" value="actualizar">
                    </form>
                    <?php
                    }
                    ?>
                </div>
    </body>
</html>