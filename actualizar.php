<?php 

include("conexion.php");
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

$sql="UPDATE usuario SET nombre='$nombre', apellidos='$apellidos', rutdni='$rutdni', direccion='$direccion', sexo='$sexo', fechanac='$fechanac', edad='$edad', usuario='$usuario', email='$email'";
$query=mysqli_query($con,$sql);


    if($query)
    {
        Header("Location: usuario.php");
    }

?>