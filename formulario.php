<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Página de Minecraft</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    

     
</head>






<body>

   
  <!--COMENTARIO.... -->
  <header>
      
  <div  class="row">
    <nav class="col-md-12">
        <div id="bannernav">
            <!-- Elementos de la izquierda (logo y lista) -->
            <div class="d-flex align-items-center">
                <ul>
                    <?php
                    include("conexion.php");
                    $con = conectar();
                    session_start();

                    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {

                        echo "<li><p>Bienvenido, " . $_SESSION['email'] . "</p></li>";
                        echo "<li class='card border-success'><a href='logout.php'>CERRAR SESIÓN</a></li>";
                    } else {
                        echo "<li class='card border-success mx-2'><a class ='mt-5' type='button' data-toggle='modal' data-target='#exampleModalCenter'>LOGIN</a></li>";
                    }
          
                    echo "<li class='card border-success mx-2'><a href='index.php'>INICIO</a></li>";
                    echo "<li class='card border-success mx-2'><a href='nosotros2.php'>NOSOTROS</a></li>";

                    ?>
                </ul>
            </div>

                <div class="div1 centrado">
                    <div class="card__giratorio">
                        <div class="card__giratorio-conteudo">
                            <div class="card__giratorio-conteudo--frente">
                                <img src="IMAGENES/logo-minecraft.svg" alt="Logo Programador CS" class="logo">
                            </div>
                            <div class="card__giratorio-conteudo--traseira">
                                <img src="IMAGENES/minecraft wiki.svg" alt="Logo Programador CS" class="logo">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>

                      
                      <!-- Modal -->
                      <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLongTitle">INICIO DE SESIÓN</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <div class="color-negro">
                                <div class="row">
                                    <div class="col-md-6 offset-lg-3 color-negro">
                                        <form  name="flogin" action = "autentificar.php" onsubmit = "return validation()" method="POST">
                                            <div class="centrado form-group mb-3">
                                                <label for="nombre">CORREO:</label>
                                                <input type="email" class="form-control mb-3 mt-3" name ="email" id="email" placeholder="Ingresa tu e-mail">
                                            </div>
                                            <div class="centrado form-group mb-3">
                                                <label for="apellido">CONTRASEÑA:</label>
                                                <input type="password" class="form-control mb-3 mt-3" name="contrasena"  id="apellido" placeholder="Ingresa tu contraseña">
                                            </div>
                                            <p class ="centrado mb-3 mt-3"><a class="color-negro " href="recuperar_contrasena.php">¿OLVIDÓ SU CONTRASEÑA?</a>
                                            <p class ="centrado mb-3 mt-3"><a class="color-negro" href="formulario.php">¿NO TIENE UNA CUENTA? REGÍSTRESE ACÁ</a>
                                            <input type="submit" class="mt-3 btn btn-primary btn-block" value="REGISTRARSE"></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      
                    



  </header>

  <div class="m-5 justify-content-center">
        <div class="row">
            <div class="col-md-2 offset-md-5">

                <form id="myForm" class ="m-2" action="insertar.php" method="POST">
                    <div class="form-group">
                    <input type="text" class ="mb-3 form-control" name = "nombre" placeholder = "Nombre">
                    </div>
                    <div class="form-group">
                    <input type="text" class ="mb-3 form-control" name = "apellidos" placeholder = "Apellidos">
                    </div>
                    <div class="form-group">
                    <input type="text" class ="mb-3 form-control" name = "usuario" placeholder = "Usuario">
                    </div>
                    <div class="form-group">
                    <input type="password" class ="mb-3 form-control" name = "contrasena" placeholder = "Contraseña">
                    </div>
                    <div class="form-group">
                    <input type="text" class ="mb-3 form-control" name = "rutdni" placeholder = "RUT/DNI">
                    </div>
                    <div class="form-group">
                    <input type="email" class ="mb-3 form-control" name = "email" placeholder = "email" >
                    </div>
                    <div class="form-group">
                    <input type="text" class ="mb-3 form-control" name = "direccion" placeholder = "direccion">
                    </div>
                    <div class="form-group">
                    <input type="date" class ="mb-3 form-control" name = "fechanac" placeholder = "Fecha Nacimiento">
                    </div>
                    <div class="form-group">
                    <input type="number" min="1" class ="mb-3 form-control" name = "edad" placeholder = "Edad">
                    </div>
                    <div class="color-blanco">
                        <input class ="m-4" type = "radio" name ="sexo" value="Masculino"><label>MASCULINO</label>
                    
                        <input class ="m-4" type = "radio" name ="sexo" value="Femenino"><label>FEMENINO</label>
                    
                        <input class ="m-4" type = "radio" name ="sexo" value="Otros"><label>OTROS</label>
                    </div>

                    <input type="submit" class="mx-5 btn btn-primary" id="guardarButton" value="Guardar">
                    
                </form>
            </div>
        </div>
    </div>


   



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
                      <li><a href="#">SUGERENCIA</a></li>
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

<script src="js/bootstrap.min.js"></script>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script>
document.getElementById('guardarButton').addEventListener('click', function (event) {
    var confirmation = confirm("¿Estás seguro de que deseas guardar estos datos?");
    if (!confirmation) {
        event.preventDefault(); // Evita que el formulario se envíe si el usuario cancela la confirmación
    }
});
</script>


</html>