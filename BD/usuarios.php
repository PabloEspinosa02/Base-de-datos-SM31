<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
    crossorigin="anonymous"
    />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">

    <title>Usuarios</title>
</head>
<body>
    <h3> Insertar Usuario</h3>
    <form action="registrousuario" method="POST">
        <div class="mb-3">
            <label class="form-label">Nombre</label>
            <input type="text" class="form-control" arias-label="Default select example"name="nomUsuario" />
            </div>
        <div class="mb-3">
            <label class="form-label">ApellidoPaterno</label>
            <input type="text" class="form-control" name="ApePaterno" />
            </div>
            <div class="mb-3">
                <label class="form-label">ApellidoMaterno</label>
                <input type="text" class="form-control" name="ApeMaterno" />
                </div>
        <div class="mb-3">
            <label class="form-label">Telefono</label>
            <input type="text" class="form-control" name="Telefono" />
            </div>
        
        <div class="mb-3">
                <label class="form-label">Correo</label>
                <input type="text" class="form-control" name="correo" />
                </div>    

        <div class="mb-3">
                <label class="form-label">usuario</label>
                <input type="text" class="form-control" name="usuario" />
                </div>            
    
        <div class="mb-3">
                <label class="form-label">contraseña</label>
                <input type="text" class="form-control" name="contra" />
                </div>  
        
                    <?php
                    include('conec.php');
                    $consulta2 = "SELECT * FROM usuario";
                    $resultado = mysqli_query($conexion, $consulta2);
                    while ($fila = mysqli_fetch_array($resultado)){
                    ?>
                <?php 
                }      
                ?>
                </select>

                </div>
            <input type="submit" name="enviar" value="Ingresar Usuarios" class="btn btn-primary"/>
            </form>
        
        
        <br>
        <table class="table">
        <thead>
            <tr>
            <th scope="col">Nombre</th>
            <th scope="col">ApellidoPaterno</th>
            <th scope="col">ApellidoMaterno</th>
            <th scope="col">Correo</th>
            <th scope="col">Usuario</th>
            <th scope="col">Contraseña</th>
            </tr>
        </thead>
<?php
include('conec.php');
$consulta = "SELECT*FROM usuario";

$resultado = mysqli_query($conexion, $consulta);
while ($fila = mysqli_fetch_array($resultado)){
?>
    <tr>
    <th scope="row">
        <?php echo $fila["Nombre"]?>
    </th>
    
    <td><?php echo $fila["ApellidoPaterno"]?></td>
    <td><?php echo $fila["ApellidoMaterno"]?></td>
    <td><?php echo $fila["Telefono"]?></td>
    <td><?php echo $fila["correo"]?></td>
    <td><?php echo $fila["usuario"]?></td>
    <td><?php echo $fila["contra"]?></td>

    </tr>
    
    <?php 
    } 

?>
</table>
        <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"
    ></script>
    </body>
    </html>-

</body>
</html>