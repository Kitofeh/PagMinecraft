

<?php
include("conexion.php");
$con = conectar();

// Consulta para obtener todos los datos de la tabla "usuario"
$sql = "SELECT * FROM usuario";
$query = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PAGINA USUARIOS</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>


<div class="container">
    <div class="row">
        <div class="col-md-4">
            <h1>PANEL DE BÚSQUEDA</h1>
            <form action="buscar.php" method="GET">
                <input type="text" class="form-control" name="busqueda" placeholder="BUSCAR">
                <input type="submit" class="mt-3 mb-3 btn btn-primary" value="Buscar">
            </form>
        </div>
        
    </div>






    <div class="container">
        <div class="row">

            <div class="col-md-2">
                <h1>INGRESE DATOS</h1>
                <form action="insertar.php" method="POST">

                                <input type="text" class ="mb-3 form-control" name = "nombre" placeholder = "nombre">
                                <input type="text" class ="mb-3 form-control" name = "apellidos" placeholder = "apellidos">
                                <input type="text" class ="mb-3 form-control" name = "rutdni" placeholder = "rutdni">
                                <input type="text" class ="mb-3 form-control" name = "direccion" placeholder = "direccion">
                                <input type="text" class ="mb-3 form-control" name = "sexo" placeholder = "sexo">
                                <input type="text" class ="mb-3 form-control" name = "fechanac" placeholder = "fechanac">
                                <input type="number" class ="mb-3 form-control" name = "edad" placeholder = "edad">
                                <input type="text" class ="mb-3 form-control" name = "usuario" placeholder = "usuario">
                                <input type="text" class ="mb-3 form-control" name = "email" placeholder = "email">

                                <input type="submit" class ="btn btn-primary">

                    
                </form>
            </div>

            <div class="col-md-8">




                <table class="table">
                    <thead class="table-success table-striped">
                        <tr>
                            <th>Nombre</th>
                            <th>Apellidos</th>
                            <th>Usuario</th>
                            <th>Rut/DNI</th>
                            <th>Direccion</th>
                            <th>Sexo</th>
                            <th>Fecha Nac</th>
                            <th>Edad</th>
                            <th>Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($row = mysqli_fetch_array($query)) {
                            echo "<tr>";
                            echo "<td>" . $row['nombre'] . "</td>";
                            echo "<td>" . $row['apellidos'] . "</td>";
                            echo "<td>" . $row['usuario'] . "</td>";
                            echo "<td>" . $row['rutdni'] . "</td>";
                            echo "<td>" . $row['direccion'] . "</td>";
                            echo "<td>" . $row['sexo'] . "</td>";
                            echo "<td>" . $row['fechanac'] . "</td>";
                            echo "<td>" . $row['edad'] . "</td>";
                            echo "<td>" . $row['email'] . "</td>";
                            echo "<td><a href='usuario_actualizar.php?id=" . $row['rutdni'] . "' class='btn btn-info'>Modificar</a></td>";
                            echo "<td><a href='eliminar.php?id=" . $row['rutdni'] . "' class='btn btn-danger'>Eliminar</a></td>";
                            echo "</tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>
</html>
