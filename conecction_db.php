<?php 


function connectDB(){
   

  
    $server ="localhost";
    $bd     ="id14429585_store";
    $user   ="id14429585_root";
    $pass   ="Xl5+imA)hKS7r7gQ";

    $conexion = mysqli_connect($server, $user, $pass,$bd) 
        or die("Ha sucedido un error inexperado en la conexion de la base de datos");

    return $conexion;
} 


function disconnectDB($conexion){

    $close = mysqli_close($conexion) 
        or die("Ha sucedido un error inexperado en la desconexion de la base de datos");

    return $close;

    

}





?>