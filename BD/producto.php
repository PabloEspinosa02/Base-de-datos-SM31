<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">

    <title>Productos</title>
  </head>
  <body>
    <h3> CREAR UN PRODUCTO</h3>
    <form action="registroProducto.php" method="POST">
        <div class="mb-3">
          <label class="form-label">Nombre del Producto</label>
          <input type="text" class="form-control" arias-label="Default select example"name="nomProducto" />
          </div>
        <div class="mb-3">
            <label class="form-label">Precio del Producto</label>
            <input type="text" class="form-control" name="precioProducto" />
            </div>
        
        <div class="mb-3">
            <label class="form-label">numero del Fabricante</label>
            <select name="codFabricante" id="">
              <option value="">Ingresa Fabricante</option>
              <?php
                include('conec.php');
                $consulta2 = "SELECT * FROM fabricante";
                $resultado = mysqli_query($conexion, $consulta2);
                while ($fila = mysqli_fetch_array($resultado)){
                ?>
              <option value="<?php echo $fila["codigo"]?>"><?php echo $fila["nombre"]?></option>
              <?php 
            }      
            ?>
            </select>
            
            </div>
        <input type="submit" name="enviar" value="Ingresar Producto" class="btn btn-primary"/>
      </form>


      <!--Inicio de la tabla-->
<br>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Producto</th>
      <th scope="col">Precio</th>
      <th scope="col">Codigo</th>
      <th scope="col">Eliminar</th>


    </tr>
  </thead>
  <?php
include('conec.php');
$consulta = "SELECT producto.codigo, producto.nombre, producto.precio, fabricante.nombre AS nomFabricante 
FROM producto LEFT JOIN fabricante ON producto.codigo_fabricante = fabricante.codigo";
$resultado = mysqli_query($conexion, $consulta);
while ($fila = mysqli_fetch_array($resultado)){
?>
    <tr>
      <th scope="row">
        <?php echo $fila["codigo"]?>
      </th>
      
      <td><?php echo $fila["nombre"]?></td>
      <td><?php echo $fila["precio"]?></td>
      <td><?php echo $fila["nomFabricante"]?></td>
      <td><a target="_self" href="acciones/eliminarProducto.php?id=<?php echo $fila["codigo"]?>">  
      <i class="bi bi-trash">Basurero</i>

    </tr>
    
    <?php 
    } 
  ?>
</table>


<!--fin de la tabla-->




   <!-- Option 1: Bootstrap Bundle with Popper -->
   <script
   src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
   integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
   crossorigin="anonymous"
 ></script>
  </body>
</html>



  </body>
</html>
