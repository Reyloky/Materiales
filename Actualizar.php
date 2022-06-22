<?php
include("conexion.php");
$con=conectar();
$id=$_GET['id'];
$sql ="SELECT * FROM materiales WHERE id='$id'";
$query=mysqli_query($con,$sql);
$row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">"
  </head>
        <body>
                    <div class="container mt-5">
                        <form action="update.php" method="POST">

                                    <input type="hidden" name="id" value="<?php echo $row['id']  ?>">
                                    <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombre" value="<?php echo $row['nombre']  ?>">
                                    <input type="text" class="form-control mb-3" name="unidadmedida" placeholder="Unidad de Medida" value="<?php echo $row['unidadmedida']  ?>">
                                    <input type="text" class="form-control mb-3" name="precio" placeholder="precio" value="<?php echo $row['precio']  ?>">
                                    <input type="text" class="form-control mb-3" name="stock" placeholder="stock" value="<?php echo $row['stock']  ?>">
                                    <input type="text" class="form-control mb-3" name="totalporproducto" placeholder="Total de productos" value="<?php echo $row['totalporproducto']  ?>">

                                <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                        </form>

                    </div>
        </body>
    </html>
