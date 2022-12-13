<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM alumno WHERE numero_servicio = (select max(numero_servicio) from alumno)";
    $query=mysqli_query($con,$sql);

    // $sql="SELECT *  FROM alumno ORDER BY numero_servicio DESC";

    // $row=mysqli_fetch_array($query);

    $sql2="SELECT * FROM cliente ";
    $query2=mysqli_query($con,$sql2);

    $sql4="SELECT * FROM recibe ";
    $query4=mysqli_query($con,$sql4);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> Datos</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        
    </head>
    <body >
    <div>
    </div>
            
            <div class="container mt-5" >
                    <div class="row" > 
                        
                        <div class="col-md-6" >
                            <h1>Ingrese datos</h1>
                                <form action="insertar.php" method="POST" >
                                    <input type="hidden" class="form-control mb-3 px-4" name="numero_servicio" >
                                    <input type="date" class="form-control mb-3 px-4" name="fecha">
                                    <input type="time" class="form-control mb-3 px-4" name="hora">
                                    
                                        <input class="form-control mb-3 px-4" name="cliente" required list="interes_list" placeholder="Cliente">
                                        <datalist id="interes_list">  
                                        <?php
                                            while($key=mysqli_fetch_array($query2)){
                                        ?>
                                        <option value="<?php echo $key['rif_ced']?>"><?php echo $key['rif_ced']?>  <?php echo $key['cliente']?></option>
                                        <?php
                                            }
                                        ?>
                                        </datalist>
                                        <input class="form-control mb-3 px-4" name="recibe" required list="interes_list2" placeholder="Quien recibe">
                                        <datalist id="interes_list2">  
                                        <?php
                                            while($key2=mysqli_fetch_array($query4)){
                                        ?>
                                        <option value="<?php echo $key2['cedula']?>"><?php echo $key2['cedula']?>  <?php echo $key2['nombre']?></option>
                                        <?php
                                            }
                                        ?>
                                        </datalist>
                                    <input type="submit" class="btn btn-primary">
                                    <a href="client_register.php" class="btn btn-danger">Registrar nuevo Cliente</a>
                                </form>
                        </div>
                    </div>  
            </div>
    </body>
</html>