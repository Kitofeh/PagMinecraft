<?php
// recuperar_contrasena.php
include("conexion.php");
$con = conectar();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $usuario = $_POST["usuario"];
    $nuevaContrasena = $_POST["nueva_contrasena"];
    $confirmarContrasena = $_POST["confirmar_contrasena"];

    // Verificar si el correo y el nombre de usuario existen en la base de datos
    $query = "SELECT * FROM usuario WHERE email = '$email' AND usuario = '$usuario'";
    $result = mysqli_query($con, $query);

    if (mysqli_num_rows($result) > 0) {
        // El correo y el nombre de usuario coinciden
        if ($nuevaContrasena === $confirmarContrasena) {
            // Las contraseñas coinciden, proceder con la actualización
            $hashedPassword = $nuevaContrasena;
            $updateQuery = "UPDATE usuario SET contrasena = '$hashedPassword' WHERE email = '$email' AND usuario = '$usuario'";
            mysqli_query($con, $updateQuery);

            echo "<p>Contraseña actualizada con éxito.</p>";
        } else {
            echo "<p>Las contraseñas no coinciden. Intenta de nuevo.</p>";
        }
    } else {
        echo "<p>El correo y/o nombre de usuario ingresados no existen en la base de datos.</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperar Contraseña</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>

    <form class="color-blanco" action="recuperar_contrasena.php" method="post">
        <div class="col-md-4 centrado">
            <h2 class="color-blanco m-5">RECUPERAR CONTRASEÑA</h2>
            <div class="form-group m-3">
                <label class="m-3" for="correo">CORREO ELECTRÓNICO:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group m-3">
                <label class="m-3" for="usuario">NOMBRE DE USUARIO:</label>
                <input type="text" class="form-control" id="usuario" name="usuario" required>
            </div>
            <div class="form-group m-3">
                <label class="m-3" for="nueva_contrasena">NUEVA CONTRASEÑA:</label>
                <input type="password" class="form-control" id="nueva_contrasena" name="nueva_contrasena" required>
            </div>
            <div class="form-group m-3">
                <label class="m-3" for="confirmar_contrasena">CONFIRMAR CONTRASEÑA:</label>
                <input type="password" class="form-control" id="confirmar_contrasena" name="confirmar_contrasena" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block m-3 mb-5" id="saveRecuperar">Recuperar Contraseña</button>
        </div>
    </form>
    <footer class="footer">
        <div class="div-bg-gris container-footer">
            <div class="fila">
                <div class="footer-col">
                    <h4 class ="color-blanco"> INFORMACIÓN</h4>
                    <ul class="centrado-justificado">
        
                    <li ><a href="#">MINECRAFT: JAVA</a></li>
                    <li><a href="#">MINECRAFT: BEDROCK</a></li>
                    <li><a href="#">MINECRAFT: LEGENDS</a></li>
                    <li><a href="#">MINECRAFT: DUNGEONS</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4 class ="color-blanco"> LINKs ÚTILES</h4>
                    <ul class="centrado-justificado">
                        <li><a href="#">SUGERENCIAS</a></li>
                        <li><a href="#">FORO</a></li>
                        <li><a href="#">WIKI</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4 class ="color-blanco"> AYUDA</h4>
                    <ul>
                        <li><a href="#">PREGUNTAS</a></li>
                        <li><a  href="#">SOPORTE</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4 class ="color-blanco"> REDES SOCIALES</h4>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
        </div>
   </footer>
  
   <div class ="bgcolor1 centrado color-blanco">
    <label>&copy; 2023 MINECRAFT. TODOS LOS DERECHOS RESERVADOS.</label>
   </div>





</body>
<script>
document.getElementById('saveRecuperar').addEventListener('click', function (event) {
    var confirmation = confirm("¿Estás seguro de que deseas cambiar tu contraseña?");
    if (!confirmation) {
        event.preventDefault();
    }
});
</script>


<script src="js/bootstrap.min.js"></script>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</html>
