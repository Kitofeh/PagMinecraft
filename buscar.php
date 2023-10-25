<?php
        include("conexion.php");
        $con = conectar();

        // Inicializa la consulta para mostrar todos los datos
        $sql = "SELECT * FROM usuario";

        // Verifica si se ha enviado una consulta de búsqueda
        if (isset($_GET['busqueda'])) {
            $busqueda = $_GET['busqueda'];
            // Modifica la consulta para buscar según el término de búsqueda
            $sql = "SELECT * FROM usuario WHERE 
                    nombre LIKE '%$busqueda%' OR 
                    apellidos LIKE '%$busqueda%' OR 
                    usuario LIKE '%$busqueda%' OR 
                    rutdni LIKE '%$busqueda%' OR 
                    direccion LIKE '%$busqueda%' OR 
                    sexo LIKE '%$busqueda%' OR 
                    fechanac LIKE '%$busqueda%' OR 
                    edad LIKE '%$busqueda%' OR 
                    email LIKE '%$busqueda%'";
        }

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


</body>
</html>
