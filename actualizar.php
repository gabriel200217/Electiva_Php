<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM alumno WHERE numero_servicio='$id'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);

$sql2="SELECT * FROM cliente";
$query2=mysqli_query($con,$sql2);

$sql3="SELECT * FROM recibe";
$query3=mysqli_query($con,$sql3);
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
                    <form action="update.php" method="POST">
                                
                                <input type="hidden" name="numero_servicio" value="<?php echo $row['numero_servicio']  ?>">
                                <input class="form-control mb-3" name="cliente" required list="interes_list" value="<?php echo $row['asociadocliente']?>">
                                        <datalist id="interes_list">  
                                        <?php
                                            while($key=mysqli_fetch_array($query2)){
                                        ?>
                                        <option value="<?php echo $key['rif_ced']?>"><?php echo $key['rif_ced']?> <?php echo $key['cliente']?></option>
                                        <?php
                                            }
                                        ?>
                                        </datalist>
                                <input class="form-control mb-3" name="recibe" required list="interes_list2" value="<?php echo $row['asociadorecibe']?>">
                                        <datalist id="interes_list2">  
                                        <?php
                                            while($key=mysqli_fetch_array($query3)){
                                        ?>
                                        <option value="<?php echo $key['cedula']?>"><?php echo $key['cedula']?> <?php echo $key['nombre']?></option>
                                        <?php
                                            }
                                        ?>
                                        </datalist>
                                <input type="date" class="form-control mb-3" name="fecha" value="<?php echo $row['fecha']?>">
                                <input type="time" class="form-control mb-3" name="hora" value="<?php echo $row['hora']?>">
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>