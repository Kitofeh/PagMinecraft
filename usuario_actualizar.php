<?php

    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM usuario WHERE rutdni='$id'";

$query=mysqli_query($con,$sql);
$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>ACTUALIZAR USUARIOS</title>
            <link rel="stylesheet" href="styles.css">
            <link rel="stylesheet" href="css/bootstrap.min.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        </head>
    <body>

        <div class= "container mt-5">
            <form action="actualizar.php" method="POST">


                            <input type="text" class ="mb-3 form-control" name = "nombre" placeholder = "nombre" value="<?php echo $row['nombre']?>">
                            <input type="text" class ="mb-3 form-control" name = "apellidos" placeholder = "apellidos" value="<?php echo $row['apellidos']?>">
                            <input type="text" class ="mb-3 form-control" name = "rutdni" placeholder = "rutdni" value="<?php echo $row['rutdni']?>">
                            <input type="text" class ="mb-3 form-control" name = "direccion" placeholder = "direccion" value="<?php echo $row['direccion']?>">
                            <input type="text" class ="mb-3 form-control" name = "sexo" placeholder = "sexo" value="<?php echo $row['sexo']?>">
                            <input type="text" class ="mb-3 form-control" name = "fechanac" placeholder = "fechanac" value="<?php echo $row['fechanac']?>">
                            <input type="number" class ="mb-3 form-control" name = "edad" placeholder = "edad " value="<?php echo $row['edad']?>">
                            <input type="text" class ="mb-3 form-control" name = "usuario" placeholder = "usuario" value="<?php echo $row['usuario']?>">
                            <input type="text" class ="mb-3 form-control" name = "email" placeholder = "email " value="<?php echo $row['email']?>">

                            <input type="submit" class ="btn btn-primary btn-blocK" value="Actualizar">
            </form>

        
    </body>
<script src="js/bootstrap.min.js"></script>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
   


</html>