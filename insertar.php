<?php include("conexion.php");
$con=conectar();
$id=$_POST['id'];
$nombre=$_POST['nombre'];
$unidadmedida=$_POST['unidadmedida'];
$precio=$_POST['precio'];
$stock=$_POST['stock'];
$totalporproducto=$precio*$stock;
$sql="INSERT INTO materiales VALUES('$id','$nombre','$unidadmedida', '$precio', '$stock', '$totalporproducto')";
$query= mysqli_query($con,$sql);
if ($query) {
  Header("Location: Materiales.php");
}else {

}
 ?>
