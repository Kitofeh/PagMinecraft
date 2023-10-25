<?php
include("conexion.php");
include("formulario.php");

$con=conectar();

$nombre=$_POST['nombre'];
$apellidos=$_POST['apellidos'];
$rutdni=$_POST['rutdni'];
$direccion=$_POST['direccion'];
$sexo=$_POST['sexo'];
$fechanac=$_POST['fechanac'];
$edad=$_POST['edad'];
$usuario=$_POST['usuario'];
$email=$_POST['email'];

$sql="INSERT INTO usuario VALUES('$nombre','$apellidos','$rutdni','$direccion', '$sexo', '$fechanac', '$edad', '$usuario', '$email');";
$query = mysqli_query($con,$sql);

if($query)
{
    Header("Location: usuario.php");

}
else
{

}
?>