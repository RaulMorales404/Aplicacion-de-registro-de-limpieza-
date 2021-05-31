<?php 
include("conecction_db.php");
if ($_POST["get"]==1) {
    
$time  = $_POST["time"];


 date_default_timezone_set('America/Mexico_City');
 $data = date("Y") . "-" . date("m") . "-" . date("d");
 $conexion = connectDB();

 mysqli_set_charset($conexion, "utf8");
 
 $datos= 'INSERT INTO janitoral (full_name,company_name,date_s,hour) VALUES ("'.$_POST["full_name"].'","'.$_POST["company_name"].'","'.$data.'","'.substr($time, 0, -1).'")';
 
     $insert  = $datos;
     if(!$result = mysqli_query($conexion,$insert)) die();

 
 disconnectDB($conexion);

 

echo '<script> 

window.location.replace("work_done.php"); 

</script>';
}if($_POST["get"]==0){
    echo "
    <script>start();
    </script>
    ";
    }


?>