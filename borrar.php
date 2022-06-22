<?php
include("conexion.php");
$con=conectar();
$id=$_GET['id'];
$stock=$_GET['stock'];
$sql= "DELETE FROM materiales WHERE id='$id'and '$stock'=0";
$query=mysqli_query($con,$sql);
  if ($query) {
    Header("Location: Materiales.php");
  }
 ?>
