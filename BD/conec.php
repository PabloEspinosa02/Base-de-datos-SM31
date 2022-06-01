<?php

$hostname='localhost';
$username='root';
$password='';
$database='tienda';

$conexion=mysqli_connect($hostname,$username,$password,$database);


/*Validar*/
if(mysqli_connect_error()){
        echo 'Conexion Fallida'; 
}else{

echo 'Conexion existosa';

}
