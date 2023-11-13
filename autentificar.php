<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
<?php      
    include('conexion.php');  
    $con=conectar();
    $email = $_POST['email'];  
    $contrasena = $_POST['contrasena'];  
      
        //to prevent from mysqli injection  
        $email = stripcslashes($email);  
        $contrasena = stripcslashes($contrasena);  
        $email = mysqli_real_escape_string($con, $email);  
        $contrasena = mysqli_real_escape_string($con, $contrasena);  
      
        $sql = "SELECT * FROM usuario WHERE email = '$email' and contrasena = '$contrasena'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  

            session_start();
            echo "<h1 class ='color-blanco'><center> INICIO DE SESIÓN EXITOSO </center></h1>";  
            $_SESSION['loggedin'] = true;
            $_SESSION['email'] = $email;
            $_SESSION['start'] = time();
            $_SESSION['expire'] = $_SESSION['start'] + (30 * 60) ;

            header('location: index.php');
        }  
        else{  
            echo "<h1 class ='color-blanco centrado align-items-center mt-5'>USUARIO Y/O CONTRASEÑA ESTÁN INCORRECTOS.</h1>";

            echo "<h1 class ='color-blanco centrado align-items-center mt-5'><a href='index.php'>VOLVER ATRÁS</a></h1>"; 
        }     
?>



    
</body>
</html>
