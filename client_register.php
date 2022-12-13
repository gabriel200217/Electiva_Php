<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT * FROM cliente";
    $query=mysqli_query($con,$sql);

    // $row=mysqli_fetch_array($query);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="css/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">    
</head>
<body>
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Ingrese datos</h1>
                                <form action="insertar_cliente.php" method="POST">
                                    <input type="hidden" name="id">
                                    <input type="text" class="form-control mb-3" name="Rif_Ced" placeholder="Rif/Ced">
                                    <input type="text" class="form-control mb-3" name="Cliente" placeholder="Cliente">
                                    <input type="text" class="form-control mb-3" name="Contacto" placeholder="Contacto">
                                    <input type="text" class="form-control mb-3" name="Direccion" placeholder="Direccion">
                                    <input type="text" class="form-control mb-3" name="Email" placeholder="Email">
                                    <input type="text" class="form-control mb-3" name="Telefono" placeholder="Telefono">

                                    <input type="submit" class="btn btn-primary">
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped">
                                    <tr>
                                        
                                        <th>Rif/Ced</th>
                                        <th>Cliente</th>
                                        <th>Contacto</th>
                                        <th>Direccion</th>
                                        <th>Email</th>
                                        <th>Telefono</th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody class="col-md-3">
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                
                                                <th><?php  echo $row['rif_ced']?></th>
                                                <th><?php  echo $row['cliente']?></th>
                                                <th><?php  echo $row['contacto']?></th>
                                                <th><?php  echo $row['direccion']?></th>
                                                <th><?php  echo $row['email']?></th>
                                                <th><?php  echo $row['telefono']?></th>
                                                <th><a href="actualizar_cliente.php?id=<?php echo $row['id'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete_cliente.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">Eliminar</a></th>
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>  
            </div>
    </body>
</html>