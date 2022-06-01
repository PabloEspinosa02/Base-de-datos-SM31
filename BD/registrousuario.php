<?php

include ('conec.php');

if(isset($_POST['enviar'])){
    
    $nomUsuario = $_POST['nomUsuario'];
    $ApePaterno = $_POST['ApePaterno'];
    $ApeMaterno = $_POST['ApeMaterno'];
    $Telefono = $_POST['Telefono'];
    $correo = $_POST['correo'];
    $usuario = $_POST['usuario'];
    $contra = $_POST['contra'];



    $insertarUsuario= 
    "INSERT INTO usuario(Nombre,ApellidoPaterno,ApellidoMaterno,Telefono,correo,usuario,contra) VALUES ('$nomUsuario','$ApePaterno','$ApeMaterno','$Telefono','$correo','$usuario','$contra')";

    $resultado = mysqli_query($conexion, $insertarUsuario);

    
    if(!$resultado){
    
        echo '<script>alert("los datos no se insertaron")</script>';
    
    }else{
        echo '<script>alert("los datos se insertaron")</script>';
    }
}

header ('Location: usuarios.php');

?>