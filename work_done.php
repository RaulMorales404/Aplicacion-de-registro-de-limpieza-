 <?php include("conecction_db.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">

<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" href="design.css">

  <title>Worck Done</title>
</head>
<body>
<div class="container">
  <div class="row">
  <div class=" col-ms-12 col-md-12 ">
                 <h1 style="color:#34495E;"  class="display-2 "><span class="title_p ">Janitoral</span><span class="display-4 "><span class="title_p1">Coronas LLC</span></span></h1>
    </div>

    <div class=" col-ms-12 col-md-12 ">
        <h1 style="color:#212F3D; font-size:30px;" class="display-4 "><span class="title_p ">Worck Done</h1>

        <span id="worck_done">
            <a type="button" class="btn btn-primary offset-md-11 " href="index.php">Go back</a>
           </span>  
    </div>
            
      <div class="col table_st mt-2">
      
          
      <div class="table-responsive-sm">
  <table class="table table-sm ">
  <thead style="background:#34495E;color:#fff; border:2px solid #34495E ;" >

    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Company</th>
      <th scope="col">Date</th>
      <th scope="col">Time</th>
    </tr>
  </thead>
  <tbody>


  <?php 

$conexion = connectDB();



mysqli_set_charset($conexion,"utf8");
$select_equipo = 'SELECT *  FROM  janitoral  order by id desc ';
$res_equipo = $conexion->query($select_equipo);

if ($res_equipo->num_rows > 0) {
    // output data of each row
    while($row1 = $res_equipo->fetch_assoc()) {

?>
                  
               
                  <tr>
      <th scope="row"><?php echo $row1["id"];?></th>
      <td><?php echo $row1["full_name"];?></td>
      <td><?php echo $row1["company_name"];?></td>
      <td><?php echo $row1["date_s"];?></td>
      <td><?php echo $row1["hour"];?></td>
      
    </tr>       
                  
                   
                   
<?php
  }
} else {
echo "0 results";
}

//desconectamos la base de datos
disconnectDB($conexion);






?>
   

    
  </tbody>
  </table>
</div>


      
      </div>
  </div>
</div>


</body>
</html>