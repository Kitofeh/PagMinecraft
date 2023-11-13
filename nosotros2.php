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

    
    
    
      <div class="container-fluid color-blanco m-5">

        
          <div class="row justify-content-center">
            <div class="col-sm-4 mx-5">
              <div class="card">
                <img src="IMAGENES\pmp-minecraft-howitworks-beresourceful.webp" class="img-fluid rounded-start" alt="...">
                <div class="card-body">
                  <p class="card-text">Nuestra misión es entender, informar, entretener y celebrar a los fans para construir la mejor comunidad de entretenimiento, contenido, juego, servicios y experiencias de Minecraft.</p>
                  <p class="card-text"><small class="text-body-secondary">-El equipo de Minecraft Wiki</small></p>
                </div>
              </div>
            </div>
            <div class="col-sm-4 mx-5">
              <div class="card">
                <img src="IMAGENES\pmp-minecraft-howitworks-survive.webp" class="img-fluid rounded-start" alt="...">
                <div class="card-body">
                  <p class="card-text">Necesitamos tus comentarios para ayudar a nuestro equipo a averiguar sobre lo que es más importante para ti y lo que quieres ver en Minecraft.</p>
                  <p class="card-text"><small class="text-body-secondary">-El equipo de Minecraft Wiki</small></p>
                </div>
              </div>
            </div>
          </div>
        </div>
 
      

    <div class="container color-blanco mt-5 mb-5">

     
    
        <div class="row">
            <div class="centradojustificado col-5">
                <h1 class ="mb-5 text-center">VISIÓN</h1>
                <p class ="h5">La Wiki de Minecraft es una comunidad en línea que reúne información y recursos sobre el popular videojuego Minecraft. Nuestra misión es proporcionar a los jugadores de Minecraft una fuente confiable de información, tutoriales y consejos para aprovechar al máximo su experiencia en el juego. En nuestra Wiki, encontrarás información detallada sobre la jugabilidad, los bloques, los mobs, las recetas de crafteo y mucho más. También ofrecemos tutoriales paso a paso para ayudarte a construir estructuras impresionantes, automatizar tareas y dominar el mundo de Minecraft.Queremos proporcionar a la comunidad de Minecraft un lugar donde puedan aprender, colaborar y compartir su conocimiento. Si eres un apasionado de Minecraft y te encanta compartir tus descubrimientos, te invitamos a unirte a nuestra comunidad y contribuir a la Wiki.</p>
            </div>
            <div class="col-md-6 d-flex justify-content-center align-items-center mt-5">
                <img src="IMAGENES/elytra-image.webp" class="img-fluid" alt="Minecraft">
            </div>
        </div>
   
    </div>


    <div class="container-fluid color-blanco">
        <h2 class ="text-center">NUESTRO EQUIPO</h2>
        <div class="row justify-content-center">
          <div class="col-md-3 m-5">
            <img src="IMAGENES/user.png" class="img-fluid" alt="kitofeh">
            <h4 class ="text-center mt-3">Cristopher</h4>
            <p class ="text-center">Rol: Editor Jefe</p>
          </div>
          <div class="col-md-3 m-5">
            <img src="IMAGENES/user.png" class="img-fluid" alt="carolithos">
            <h4 class ="text-center mt-3">Carlos</h4>
            <p class ="text-center">Rol: Administrador de Contenido</p>
          </div>

          <div class="col-md-3 m-5">
            <img src="IMAGENES/user.png" class="img-fluid" alt="kyshu">
            <h4 class ="text-center mt-3">Franco</h4>
            <p class ="text-center">Rol: Administrador de Contenido</p>
          </div>

         
        </div>
    </div>


    <div class="container color-blanco justify-content-center mt-5 mb-5">

        <div class="centradojustificado col-12">
            <h2 class ="text-center mt-5 mb-5">POR LA COMUNIDAD</h2>
            <p class ="h4">Así que, en última instancia, Minecraft Wiki no se trata solo de nuestro equipo, sino de cada miembro de la comunidad que visita, contribuye y aprende con nosotros.
                Tu apoyo y participación hacen que todo esto sea posible, y por eso estamos agradecidos. Juntos, continuaremos creciendo y evolucionando para servir mejor a la comunidad de Minecraft.
               ¡Gracias por ser parte de nuestra comunidad y por hacer que Minecraft Wiki sea un lugar increíble para aprender y compartir!</p>    
        </div>

    </div>

    <footer class="bgcolor1">
        <div class="container-footer">
            <div class="fila">
                <div class="footer-col">
                    <h4 class ="color-blanco mt-5"> INFORMACIÓN</h4>
                    <ul class="centrado-justificado">
        
                    <li ><a href="#">MINECRAFT: JAVA</a></li>
                    <li><a href="#">MINECRAFT: BEDROCK</a></li>
                    <li><a href="#">MINECRAFT: LEGENDS</a></li>
                    <li><a href="#">MINECRAFT: DUNGEONS</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4 class ="color-blanco mt-5"> LINKs ÚTILES</h4>
                    <ul class="centrado-justificado">
                        <li><a href="#">SUGERENCIAS</a></li>
                        <li><a href="#">FORO</a></li>
                        <li><a href="#">WIKI</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4 class ="color-blanco mt-5"> AYUDA</h4>
                    <ul>
                        <li><a href="#">PREGUNTAS</a></li>
                        <li><a  href="#">SOPORTE</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4 class ="color-blanco mt-5"> REDES SOCIALES</h4>
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
  
    <div class ="bgcolor1 text-center color-blanco mt-5">
        <label>&copy; 2023 MINECRAFT. TODOS LOS DERECHOS RESERVADOS.</label>
       </div>

    




</body>

<script src="js/bootstrap.min.js"></script>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</html>