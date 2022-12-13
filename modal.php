<?php 
    include("conexion.php");
    $con=conectar();

    $id=$_GET['id'];

    $sql="SELECT * FROM alumno WHERE numero_servicio='$id'";
    $query=mysqli_query($con,$sql);

    $sql2="SELECT * FROM finalizar WHERE asoc_id='$id'";
    $query2=mysqli_query($con,$sql2);
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<style>
/* *{
height: 20%;
} */
body {
  font-family: Arial, Helvetica, sans-serif;
  
}
/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 10px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-contenido {
  background-color: #fefefe;
  margin: auto;
  padding: -30px;
  border: 1px solid #888;
  width: 90%;
}
p{
  font-size: xx-small;
}
/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
</style>
</head>
<body>

<!-- Trigger/Open The Modal -->
<?php
  $row=mysqli_fetch_array($query2)  
?>
<?php
  $var = isset($row['estado']);
  if($var == 'Finalizado'){
?>
<button class="btn btn-danger" disabled>Entregado</button>
<?php
    }else if($var != 'Finalizado'){
?>
<button class="btn btn-success" id="myBtn">Entregar</button>

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-contenido">
    <span class="close">&times;</span>
    <form action="insertar_finalizado.php" method="POST">
      <input type="hidden" class="form-control mb-3" name="asoc_id" value="<?php echo $id?>">
      <input type="date" class="form-control" name="fecha">
      <input type="time" class="form-control" name="hora">      
      <input type="hidden" class="form-control" name="estado" value="Finalizado">
      <input type="submit" class="btn btn-primary">
    </form>
  </div>

</div>
<?php 
  }
?>
<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

</body>
</html>