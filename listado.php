<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM alumno ORDER BY numero_servicio DESC";
    $query=mysqli_query($con,$sql);

    // $sql="SELECT *  FROM alumno WHERE numero_servicio = (select max(numero_servicio) from alumno)";

    // $row=mysqli_fetch_array($query);

    $sql2="SELECT * FROM cliente ";
    $query2=mysqli_query($con,$sql2);

    $sql4="SELECT * FROM recibe ";
    $query4=mysqli_query($con,$sql4);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> Listado </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        
    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-light" id="navTop">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-printer" viewBox="0 0 16 16">
                  <path d="M2.5 8a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z"/>
                  <path d="M5 1a2 2 0 0 0-2 2v2H2a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h1v1a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2v-1h1a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2h-1V3a2 2 0 0 0-2-2H5zM4 3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v2H4V3zm1 5a2 2 0 0 0-2 2v1H2a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-1v-1a2 2 0 0 0-2-2H5zm7 2v3a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1z"/>
                </svg>
              </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-filter" viewBox="0 0 16 16">
                  <path d="M6 10.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5zm-2-3a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm-2-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z"/>
                </svg>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <form class="d-flex">
                  <input class="form-control" type="text" id="myInput"  placeholder="Buscar Recepcion" title="Type in a name" onkeyup="myFunctionSearch()">
                  <!-- <input  type="search" placeholder="Search" aria-label="Search" id="buscar" value=""> -->
                </form>
              </div>
            </div>
            
    </nav>
    <div>
    </div>
            
            <div class="container mt-5" >
                    <div class="row">                         
                        <div class="col-md-8" >
                            <table class="table" >
                                <thead class="table-success table-striped">
                                    <tr>
                                        <th>Nro</th>
                                        <th>Cliente</th>
                                        <th>Recibe</th>
                                        <th>Fecha</th>
                                        <th>Hora</th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>
<!-- echo $row['asociadocliente'] -->
                                <tbody class="col-md-3"  id="myUL">
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><div><?php  echo $row['numero_servicio']?></div></th>
                                                <th>
                                                    <?php
                                                        $let = $row['asociadocliente'];
                                                        $sql3 = "SELECT * FROM cliente WHERE rif_ced = '$let'";
                                                        $query3 = mysqli_query($con,$sql3);
                                                            while($row2=mysqli_fetch_array($query3)){
                                                    ?>
                                                        <?php echo $row2['cliente']?>
                                                    <?php
                                                        }
                                                    ?>
                                                </th>
                                                <th>
                                                    <?php
                                                        $let2 = $row['asociadorecibe'];
                                                        $sql5 = "SELECT * FROM recibe WHERE cedula = '$let2'";
                                                        $query5 = mysqli_query($con,$sql5);
                                                            while($row3=mysqli_fetch_array($query5)){
                                                    ?>
                                                        <?php echo $row3['nombre']?>
                                                    <?php
                                                        }
                                                    ?>
                                                </th>
                                                <th><?php  echo $row['fecha']?></th>
                                                <th><?php  echo $row['hora']?></th>
                                                <th><a href="imprimir.php?id3=<?php echo $row['asociadorecibe']?>&id2=<?php echo $row['asociadocliente']?>&id=<?php echo $row['numero_servicio']?>" class="btn btn-primary">imprimir</a></th>
                                                <th><a href="insertar_equip.php?id4=<?php echo $row['asociadorecibe']?>&id3=<?php  echo $row['fecha']?>&id2=<?php echo $row['asociadocliente']?>&id=<?php echo $row['numero_servicio']?>" class="btn btn-secondary">equipos</a></th>
                                                <th><a href="actualizar.php?id=<?php echo $row['numero_servicio'] ?>" class="btn btn-info">Editar</a></th>
                                                <!-- <th><a href="delete.php?id=<!?php echo $row['numero_servicio'] ?>" class="btn btn-danger">Eliminar</a></th> -->
                                                <th><object data="modal.php?id=<?php echo $row['numero_servicio']?>" style="width: 200%; height: 170px; padding-right: 200px"></object></th>
                                                
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>  
            </div>
            <script>
                function myFunctionSearch(e) {
          
                    var input, filter, ul, li, div, i, txtValue;
                    input = document.getElementById("myInput")
                    filter = input.value.toUpperCase();
                    ul = document.getElementById("myUL");
                    li = ul.getElementsByTagName("tr");
                    for (i = 0; i < li.length; i++) {
                        div = li[i].getElementsByTagName("div")[0];
                        txtValue = div.textContent || div.innerText;
                        if (txtValue.toUpperCase().indexOf(filter) > -1) {
                            li[i].style.display = "";
                        } else {
                            li[i].style.display = "none";
                        }
                    }
                }
                
                
            </script>
    </body>
</html>