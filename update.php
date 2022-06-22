<?php
include("conexion.php");
$con=conectar();
$id=$_POST['id'];
$Nombre=$_POST['nombre'];
$unidadmedida=$_POST['unidadmedida'];
$precio=$_POST['precio'];
$stock=$_POST['stock'];
$totalporproducto=$_POST['totalporproducto'];

$sql="UPDATE materiales SET nombre='$Nombre',unidadmedida='$unidadmedida',precio='$precio',stock='$stock',totalporproducto='$totalporproducto' WHERE id='$id'";
$query=mysqli_query($con,$sql);

 if ($query) {
   Header("Location: Materiales.php");
 }


 ?>
