<?php 
    include("conexion.php");
    $con=conectar();

    $id=$_GET['id'];
    $id2=$_GET['id2'];
    $id3=$_GET['id3'];
    $id4=$_GET['id4'];

    $sql="SELECT * FROM alumno WHERE numero_servicio='$id'";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);

    $sql2="SELECT * FROM equipos WHERE asoc_id='$id'";
    $query2=mysqli_query($con,$sql2);

    $sql3="SELECT * FROM finalizar WHERE asoc_id='$id'";
    $query3=mysqli_query($con,$sql3);

    $rowEstado=mysqli_fetch_array($query3);
    $let = isset($rowEstado['estado']);
    
    $sql4="SELECT * FROM cliente";
    $query4=mysqli_query($con,$sql4);

    $sql5="SELECT * FROM recibe";
    $query5=mysqli_query($con,$sql5);

    $sql6="SELECT * FROM marca";
    $query6=mysqli_query($con,$sql6);

    $sql7="SELECT * FROM equipo_especifico";
    $query7=mysqli_query($con,$sql7);
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
                            <div>
                                <?php
                                    $var = isset($rowEstado['estado']);
                                    if($var == 'Finalizado'){
                                ?>
                                <form action="update.php" method="POST">
                                
                                    <input type="hidden" name="numero_servicio" value="<?php echo $row['numero_servicio']  ?>" disabled>
                                    <input class="form-control mb-3" name="cliente" required list="interes_list" placeholder="<?php echo $id2?>" disabled>
                                        <datalist id="interes_list" disabled>  
                                        <?php
                                            while($key=mysqli_fetch_array($query4)){
                                        ?>
                                        <option value="<?php echo $key['rif_ced']?>" disabled><?php echo $key['rif_ced']?> <?php echo $key['cliente']?></option>
                                        <?php
                                            }
                                        ?>
                                    </datalist>
                                    <input class="form-control mb-3" name="recibe" required list="interes_list2" placeholder="<?php echo $id4?>" disabled>
                                        <datalist id="interes_list2" disabled>  
                                        <?php
                                            while($key2=mysqli_fetch_array($query5)){
                                        ?>
                                        <option value="<?php echo $key2['cedula']?>" disabled><?php echo $key2['cedula']?> <?php echo $key2['nombre']?></option>
                                        <?php
                                            }
                                        ?>
                                        </datalist>
                                <input type="date" class="form-control mb-3" name="fecha" value="<?php echo $id3?>" disabled>
                                <input type="time" class="form-control mb-3" name="hora" value="<?php echo $row['hora']?>" disabled>
                                <input type="submit" class="btn btn-primary btn-block mb-3" value="Finalizado" disabled>
                                </form>
                                <?php
                                    }else if($var == 'Recibido'){
                                ?>
                                <form action="update.php" method="POST">
                                
                                <input type="hidden" name="numero_servicio" value="<?php echo $row['numero_servicio']  ?>" disabled>
                                <input class="form-control mb-3" name="cliente" required list="interes_list" placeholder="<?php echo $id2?>" disabled>
                                    <datalist id="interes_list" disabled>  
                                    <?php
                                        while($key=mysqli_fetch_array($query4)){
                                    ?>
                                    <option value="<?php echo $key['rif_ced']?>" disabled><?php echo $key['rif_ced']?> <?php echo $key['cliente']?></option>
                                    <?php
                                        }
                                    ?>
                                </datalist>
                                <input class="form-control mb-3" name="recibe" required list="interes_list2" placeholder="<?php echo $id4?>" disabled>
                                    <datalist id="interes_list2" disabled>  
                                    <?php
                                        while($key2=mysqli_fetch_array($query5)){
                                    ?>
                                    <option value="<?php echo $key2['cedula']?>" disabled><?php echo $key2['cedula']?> <?php echo $key2['nombre']?></option>
                                    <?php
                                        }
                                    ?>
                                    </datalist>
                                <input type="date" class="form-control mb-3" name="fecha" value="<?php echo $id3?>" disabled>
                                <input type="time" class="form-control mb-3" name="hora" value="<?php echo $row['hora']?>" disabled>
                                <input type="submit" class="btn btn-primary btn-block mb-3" value="Recibido" disabled>
                                </form>
                                <?php
                                    }else{
                                ?>
                                <form action="update.php" method="POST">
                                
                                    <input type="hidden" name="numero_servicio" value="<?php echo $row['numero_servicio']  ?>">
                                    <input class="form-control mb-3" name="cliente" required list="interes_list" placeholder="<?php echo $id2?>">
                                        <datalist id="interes_list">  
                                        <?php
                                            while($key=mysqli_fetch_array($query4)){
                                        ?>
                                        <option value="<?php echo $key['rif_ced']?>"><?php echo $key['rif_ced']?> <?php echo $key['cliente']?></option>
                                        <?php
                                            }
                                        ?>
                                        </datalist>
                                    <input class="form-control mb-3" name="recibe" required list="interes_list2" placeholder="<?php echo $id4?>">
                                        <datalist id="interes_list2">  
                                        <?php
                                            while($key2=mysqli_fetch_array($query5)){
                                        ?>
                                        <option value="<?php echo $key2['cedula']?>"><?php echo $key2['cedula']?> <?php echo $key2['nombre']?></option>
                                        <?php
                                            }
                                        ?>
                                        </datalist>
                                    <input type="date" class="form-control mb-3" name="fecha" value="<?php echo $id3?>">
                                    <input type="time" class="form-control mb-3" name="hora" value="<?php echo $row['hora']?>">
                                    <input type="submit" class="btn btn-primary btn-block mb-3" value="Actualizar">
                                </form>
                                <?php 
                                    }
                                ?>
                            </div>
                                <?php 
                                    $var = isset($rowEstado['estado']);
                                    if($var == 'Finalizado'){
                                ?>
                                    <input type="text" class="form-control mb-3" name="equipo" placeholder="Equipo" disabled>
                                    <input type="text" class="form-control mb-3" name="marca" placeholder="Marca" disabled>
                                    <input type="text" class="form-control mb-3" name="modelo" placeholder="Modelo" disabled>
                                    <input type="text" class="form-control mb-3" name="serial" placeholder="Serial" disabled>
                                    <input type="text" class="form-control mb-3" name="servicio" placeholder="Servicio" disabled>
                                    <input type="text" class="form-control mb-3" name="falla" placeholder="Falla" disabled>
                                    <input type="text" class="form-control mb-3" name="observacion" placeholder="Observacion" disabled>
                                    <div class="col-md-8">
                                        <table class="table">
                                            <tbody class="col-md-3">
                                                <tr>
                                                    <th><input type="submit" class="btn btn-success" value="Finalizado" disabled></th>
                                                    <th><a href="imprimir.php?id3=<?php echo $row['asociadorecibe']?>&id2=<?php echo $row['asociadocliente']?>&id=<?php echo $row['numero_servicio']?>" class="btn btn-dark">imprimir</a></th>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                <?php
                                    }else if($var == 'Recibido'){
                                ?>
                                    <input type="text" class="form-control mb-3" name="equipo" placeholder="Equipo" disabled>
                                    <input type="text" class="form-control mb-3" name="marca" placeholder="Marca" disabled>
                                    <input type="text" class="form-control mb-3" name="modelo" placeholder="Modelo" disabled>
                                    <input type="text" class="form-control mb-3" name="serial" placeholder="Serial" disabled>
                                    <input type="text" class="form-control mb-3" name="servicio" placeholder="Servicio" disabled>
                                    <input type="text" class="form-control mb-3" name="falla" placeholder="Falla" disabled>
                                    <input type="text" class="form-control mb-3" name="observacion" placeholder="Observacion" disabled>
                                    <div class="col-md-8">
                                        <table class="table">
                                            <tbody class="col-md-3">
                                                <tr>
                                                    <th><input type="submit" class="btn btn-success" value="Recibido" disabled></th>
                                                    <th><a href="imprimir.php?id3=<?php echo $row['asociadorecibe']?>&id2=<?php echo $row['asociadocliente']?>&id=<?php echo $row['numero_servicio']?>" class="btn btn-dark">imprimir</a></th>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                <?php
                                    }else{
                                ?>
                                <form action="insertar_bd_equip.php" method="POST">
                                    <input type="hidden" name="id">
                                    <input type="hidden" class="form-control mb-3" name="id4" value="<?php echo $id4?>">
                                    <input type="hidden" class="form-control mb-3" name="id3" value="<?php echo $id3?>">
                                    <input type="hidden" class="form-control mb-3" name="id2" value="<?php echo $id2?>">
                                    <input type="hidden" class="form-control mb-3" name="asoc_id" value="<?php echo $id?>">
                                    <input type="hidden" class="form-control mb-3" name="id_equipo">
                                    <input class="form-control mb-3" name="equipo" required list="interes_list4" placeholder="Equipo">
                                        <datalist id="interes_list4">  
                                        <?php
                                            while($key4=mysqli_fetch_array($query7)){
                                        ?>
                                        <option value="<?php echo $key4['equipo']?>"><?php echo $key4['equipo']?></option>
                                        <?php
                                            }
                                        ?>
                                        </datalist>
                                    <input type="hidden" name="id_marca">
                                    <input class="form-control mb-3" name="marca" required list="interes_list3" placeholder="Marca">
                                        <datalist id="interes_list3">  
                                        <?php
                                            while($key3=mysqli_fetch_array($query6)){
                                        ?>
                                        <option value="<?php echo $key3['marca']?>"><?php echo $key3['marca']?></option>
                                        <?php
                                            }
                                        ?>
                                        </datalist>
                                    <input type="text" class="form-control mb-3" name="modelo" placeholder="Modelo">
                                    <input type="text" class="form-control mb-3" name="serial" placeholder="Serial">
                                    <input type="text" class="form-control mb-3" name="servicio" placeholder="Servicio">
                                    <input type="text" class="form-control mb-3" name="falla" placeholder="Falla">
                                    <input type="text" class="form-control mb-3" name="observacion" placeholder="Observacion">
                                    <input type="hidden" class="form-control mb-3" name="fecha_equip" value="<?php echo $id3?>" >
                                    <input type="hidden" class="form-control mb-3" name="estado_equip" value="" >
                                    <div class="col-md-8">
                                        <table class="table">
                                            <tbody class="col-md-3">
                                                <tr>
                                                    <th><input type="submit" class="btn btn-primary"></th>
                                                    <th><object data="recibir_ventana.php?id=<?php echo $id?>"></object></th>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </form>
                                <?php 
                                    }
                                ?>
                        </div>
                        
                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped">
                                    <tr>
                                        
                                        <th>Equipo</th>
                                        <th>Marca</th>
                                        <th>Modelo</th>
                                        <th>Serial</th>
                                        <th>Servicio</th>
                                        <th>Falla</th>
                                        <th>Observación</th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody class="col-md-3">
                                        <?php
                                            while($row=mysqli_fetch_array($query2)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['equipo']?></th>
                                                <th><?php  echo $row['marca']?></th>
                                                <th><?php  echo $row['modelo']?></th>
                                                <th><?php  echo $row['serials']?></th>
                                                <th><?php  echo $row['servicio']?></th>
                                                <th><?php  echo $row['falla']?></th>
                                                <th><?php  echo $row['observacion']?></th>
                                                <th><a href="actualizar_equip.php?estado=<?php echo $let?>&id4=<?php echo $id4 ?>&id3=<?php echo $id3 ?>&id2=<?php echo $id2 ?>&id=<?php echo $id ?>&id_busqueda=<?php echo $row['id'] ?>" class="btn btn-info">Editar</a></th> 
                                                <th><a href="delete_equip.php?id_busqueda=<?php echo $row['id'] ?>&id=<?php echo $id ?>&id2=<?php echo $id2 ?>&id3=<?php echo $id3 ?>&id4=<?php echo $id4 ?>&estado=<?php echo $let?>" class="btn btn-danger">Eliminar</a></th>
                                                <th><a href="reparar_equip.php?estado=<?php echo $let?>&id4=<?php echo $id4 ?>&id3=<?php echo $id3 ?>&id2=<?php echo $id2 ?>&id=<?php echo $id ?>&id_busqueda=<?php echo $row['id'] ?>" class="btn btn-success">Reparar</a></th>
                                                <th><a href="imprimir_fragmento.php?estado=<?php echo $let?>&id4=<?php echo $id4 ?>&id3=<?php echo $id3 ?>&id2=<?php echo $id2 ?>&id=<?php echo $id ?>&id_busqueda=<?php echo $row['id'] ?>" class="btn btn-primary">imprimir</a></th>
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