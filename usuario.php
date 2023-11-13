
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PAGINA USUARIOS</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    

</head>
<body>




<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 class ="mt-3 color-blanco">PANEL DE BÚSQUEDA</h1>
            <form action="usuario.php" method="GET">
            <input type="text" class="form-control mb-5" name="busqueda" id="busqueda_input" placeholder="BUSCAR COINCIDENCIA">
   
            </form>
        </div>
        
    </div>

    



    <div class="container">
        <div class="row">

            <div class="col-md-2">
                <h1 class ="mt-3 color-blanco">INGRESE DATOS</h1>
                <form action="insertar.php" method="POST">

                                <input type="text" class ="mb-3 form-control" name = "nombre" placeholder = "nombre">
                                <input type="text" class ="mb-3 form-control" name = "apellidos" placeholder = "apellidos">
                                <input type="text" class ="mb-3 form-control" name = "rutdni" placeholder = "rutdni">
                                <input type="text" class ="mb-3 form-control" name = "direccion" placeholder = "direccion">
                                <select class ="mb-3 form-control" id="opciones" name="sexo">
                                <option value="">...</option>
                                <option value="Masculino">Masculino</option>
                                <option value="Femenino">Femenino</option>
                                <option value="Otros">Otros</option>
                                </select>
                                <input type="date" class ="mb-3 form-control" name = "fechanac" placeholder = "fechanac">
                                <input type="number" class ="mb-3 form-control" name = "edad" placeholder = "edad">
                                <input type="text" class ="mb-3 form-control" name = "usuario" placeholder = "usuario">
                                <input type="email" class ="mb-3 form-control" name = "email" placeholder = "email">
                                <input type="text" class ="mb-3 form-control" name ="contrasena" placeholder = "contraseña">

                                <input type="submit" class ="btn btn-primary btn-success">

                    
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
                            <th>Contraseña</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                   
                    include("conexion.php");
                    $con = conectar();

                    $sql = "SELECT * FROM usuario";

                    if (isset($_GET['busqueda']) && !empty($_GET['busqueda'])) {
                        $busqueda = $_GET['busqueda'];

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
                    echo "<td>" . $row['contrasena'] . "</td>";
                    echo "<td><a href='usuario_actualizar.php?id=" . $row['rutdni'] . "' class='btn btn-success'>Modificar</a></td>";
                    echo "<td><button type='button' class='btn btn-danger' data-rutdni='" . $row['rutdni'] . "'>Eliminar</button></td>";
                    echo "</tr>";
                }
                ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    

    
                



</body>


<script src="js/bootstrap.min.js"></script>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
   
<script>
     let timer; // VARIABLE TEMPORIZADOR    

const inputBusqueda = document.getElementById('busqueda_input');
inputBusqueda.addEventListener('input', function () {
    //PARAR TEMPORIZADOR SI ESTA EN EJECUCIÓN
    clearTimeout(timer);

    //TEMPORIZADOR
    timer = setTimeout(function () {
        const busqueda = inputBusqueda.value;
        window.location.href = `usuario.php?busqueda=${busqueda}`;
    }, 500); //500ms
});
</script>



<script>
  
document.querySelectorAll('.btn-danger').forEach(function(button) {
    button.addEventListener('click', function() {
        var rutdni = this.getAttribute('data-rutdni');
        var confirmation = confirm("¿Está seguro de que desea eliminar este usuario?");
        if (confirmation) {
           
            fetch('eliminar.php?id=' + rutdni, {
                method: 'GET'
            })
        
        }
    });
});

</script>

</html>
