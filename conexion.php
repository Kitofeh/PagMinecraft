<?php 

function conectar()
{
    $host = "localhost";
    $user = "root";
    $pass = "kito1234";

    $bd = "dbpagina";

    $con = mysqli_connect($host, $user, $pass);
    
        
    mysqli_select_db($con,$bd);

    return $con;
    

    
}
?>