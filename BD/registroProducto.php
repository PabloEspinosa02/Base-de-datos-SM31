<?php

include('conec.php');

if(isset($_POST['enviar'])){
    
    $nomProducto = $_POST['nomProducto'];
    $precioProducto = $_POST['precioProducto'];
    $codigoFabricante = $_POST['codFabricante'];
    
    $insertarProducto= 
    "INSERT INTO producto(nombre,precio,codigo_fabricante) VALUES ('$nomProducto','$precioProducto','$codigoFabricante')";

    $resultado = mysqli_query($conexion, $insertarProducto);

    
    if(!$resultado){
    
        echo '<script>alert("los datos no se insertaron")</script>';
    
    }else{
        echo '<script>alert("los datos se insertaron")</script>';
    }
}

header ('Location: producto.php');

?>


