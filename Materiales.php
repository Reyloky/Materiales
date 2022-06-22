<?php
include("conexion.php");
$con=conectar();
$sql="SELECT * FROM materiales";
$query=mysqli_query($con,$sql);
$row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <title> APP ONLINE EMPRESA MATERIALES </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width-device-width,initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    </head
    <body>
      <div class="container mt-5">
        <div class="row">
          <div class="col-md-4">
            <h1>INGRESAR NUEVO MATERIAL</h1>
            <form action="insertar.php" method="POST";>
              <input type="text" class="form-control mb-3" name="nombre" placeholder="NOMBRE">
              <input type="text" class="form-control mb-3" name="unidadmedida" placeholder="UNIDAD DE MEDIDA">
              <input type="text" class="form-control mb-3" name="precio" placeholder="PRECIO">
              <input type="text" class="form-control mb-3" name="stock" placeholder="stock">
              <input type="submit" class="btn btn-primary" value="Registrar">
            </form>
          </div>
          <div class="col-md-8">
            <h1>Mostrando tabla de materiales</h1>
            <table class="table">
              <thead class="table-success table-striped" >
                <tr>
                  <th>ID</th>
                  <th>Nombre</th>
                  <th>unidad de medida</th>
                  <th>Precio</th>
                  <th>stock</th>
                  <th>Total Por Producto</th>
                  <th></th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
              <?php while($row=mysqli_fetch_array($query)){
                ?>
                <tr>
                  <th><?php echo $row['id']?></th>
                  <th><?php echo $row['nombre']?></th>
                  <th><?php echo $row['unidadmedida']?></th>
                  <th><?php echo $row['precio']?></th>
                  <th><?php echo $row['stock']?></th>
                  <th><?php echo $row['totalporproducto']?></th>
                  <th><a href="Actualizar.php?id=<?php echo $row['id']?>" class="btn btn-info">Editar</a></th>
                  <th><a href="borrar.php?id=<?php echo $row['id']?>&stock=<?php echo$row['stock']?>" class="btn btn-warning">Borrar</a></th>
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

 ?>
