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
      
      
    <div id ="navindex">
      <nav>

          <div id="bannernav">

              
              <div>
                  <img src="IMAGENES/logo minecraft.webp" alt="Logo Barra Nav" id = "logonavindex">
  
              </div>

              <div>
              <ul>
                  <li class ="card border-success" ><a href="index.html">INICIO</a></li>
                  <li class ="card border-success" ><a type="button" data-toggle="modal" data-target="#exampleModalCenter">
                    LOGIN
                  </a>
                  </li>
                  
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
                                    <h2 class="fnormal text-center">REGISTRO</h2>
                                    <form>
                                        <div class="centrado form-group">
                                            <label for="nombre">USUARIO:</label>
                                            <input type="text" class="form-control" id="nombre" placeholder="Ingresa tu nombre">
                                        </div>
                                        <div class="centrado form-group">
                                            <label for="apellido">CONTRASEÑA:</label>
                                            <input type="password" class="form-control" id="apellido" placeholder="Ingresa tu contraseña">
                                        </div>
                                        <div class="centrado form-group">
                                            <label for="confirmarContrasena">CONFIRMAR CONTRASEÑA:</label>
                                            <input type="password" class="form-control" id="confirmarContrasena" placeholder="Confirma tu contraseña">
                                        </div>
                                        <p class ="centrado m-auto"><a class="fnormal color-negro" href="#">¿OLVIDÓ SU CONTRASEÑA?</a>
                                        <p class ="centrado m-auto"><a class="fnormal color-negro" href="formulario.html">¿NO TIENE UNA CUENTA? REGÍSTRESE ACÁ</a>
                                        <button type="submit" class="m-auto fnormal btn btn-primary btn-block">REGISTRARSE</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                  <li class ="card border-success" ><a href="nosotros.html">NOSOTROS</a></li>  
              </ul>
              
              </div>
              
              <div class ="div1  centrado">
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



  </header>

        


   


    
      <div class="justify-content-center m-5">
          <div class="col-md-4 offset-md-4" id="divform">
              <form id="myForm" class ="m-2" action="insertar.php" method="POST">
                <div class="color-blanco col-md-2 offset-md-3">

                  

                  <input type="text" class ="mb-3 form-control-sm" name = "nombre" placeholder = "Nombre">
        
                  <input type="text" class ="mb-3 form-control-sm" name = "apellidos" placeholder = "Apellidos">
        
                  <input type="text" class ="mb-3 form-control-sm" name = "usuario" placeholder = "Usuario">

                  <input type="text" class ="mb-3 form-control-sm" name = "rutdni" placeholder = "RUT/DNI">
        
        
                  <input type="text" class ="mb-3 form-control-sm" name = "email" placeholder = "email" >
        
                  <input type="text" class ="mb-3 form-control-sm" name = "direccion" placeholder = "direccion">
        
                  <input type="text" class ="mb-3 form-control-sm" name = "fechanac" placeholder = "Fecha Nacimiento">
        
                  <input type="number" min="1" class ="mb-3 form-control-sm" name = "edad" placeholder = "Edad">

                  <input type = "radio" name ="sexo" value="Masculino"><label>MASCULINO</label>
                  
                  <input type = "radio" name ="sexo" value="Femenino"><label>FEMENINO</label>
                  
                  <input type = "radio" name ="sexo" value="Otros"><label>OTROS</label>
                  
                  
                  
    
        
                  <label>ÁREA DE INTERÉS:</label>
        
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="">
                    <label class="form-check-label">
                      FAN
                    </label>
                  </div>
                          
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="">
                    <label class="form-check-label">
                      SUPERVISOR
                    </label>
                  </div>
        
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="">
                    <label class="form-check-label">
                      CREADOR
                    </label>
                  </div>
        
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="">
                    <label class="form-check-label">
                      OTRA ÁREA
                    </label>
                  </div>
    
                  
                
                <input type="submit" class="btn btn-primary" id="guardarButton" value="Guardar">
               
             
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