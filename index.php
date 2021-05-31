<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <script src="chronometer.js"></script>
    <link rel="stylesheet" href="design.css">
    
        <!-- jQuery library -->
<!-- CSS only -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

<!-- JS, Popper.js, and jQuery -->
<!--script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script -->
<script src="https://code.jquery.com/jquery-3.1.1.min.js">

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script><meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" href="design.css">

    <title>Index</title>
</head>
<body>
    <div  class="container">
        <div class="row">

            <div class=" col-ms-12 col-md-12 ">
                 <h1 style="color:#34495E;" class="display-2 "><span class="title_p ">Janitoral</span><span class="display-4 "><span class="title_p1">Coronas LLC</span></span></h1>
          
            </div>
            
         
            
            <div class=" col-ms-12 col-md-12 ">

            <span id="worck_done">
               <a type="button" class="btn btn-outline-primary " href="work_done.php">Works done</a>
           </span>
                    
                <form class=" was-validated mt-5">
                    <br>
                    <div class="form-row">
                    
                            <div id="name1" class="col-ms-12 col-md-6 ">
                                <label style="color:#34495E;"  for="validationInput">Full name</label>
                                <input class="form-control is-invalid" id="full_name" placeholder="Write your name" required>
                                <div class="invalid-feedback is-invalid">
                                <span style="color:#212F3D;"> Please enter a name in the textarea.</span> 
                                </div>
                            </div>

                            <div id="name2" class="col-ms-12 col-md-6">
                                <label style="color:#34495E;"  for="validationInput">Company name</label>
                                <input class="form-control is-invalid" id="company_name" placeholder="Write the company name" required>                                <div class="invalid-feedback">
                              <span style="color:#212F3D;"> Please enter a name in the textarea.</span> 
                                </div>
                           </div>


                           <div id="button" class="col-ms-12 col-md-12 ">
                                 <button type="button" id="button" onclick="Go();"  class="btn btn-success offset-md-11">Check IN</button>
                           </div>

                           <div class="col-ms-12 col-md-12 ">
                                <div id="result_message"></div>
                            <div>
                                

                                <div class="col-ms-12 col-md-12  center" >
                                    <div class="display-1 offset-md-3 " style="color:#212F3D;" id="screen">00:00:00</div>
                                   
                                   
                                </div>

                                <div class="col-ms-12 col-md-12 mt-1" >
                                    <div id="button_stop" class="col-md-12">
                                </div>
                                    
                         
                                    
                                    
                                   
                                
                            
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
              
            </div>
        </div>
    </div>
</div>



<div id="resultado"></div>

</body>
</html>

<script>
    var full_name1 =0,company_name1=0;
function Go() {

    var full_name = document.getElementById("full_name").value;
    var company_name = document.getElementById("company_name").value;

     var parametros = {"full_name":full_name,"company_name":company_name,"get":0};
     full_name1=full_name;
     company_name1=company_name;
     if (full_name !=0 && company_name!=0) {

        

                            $.ajax({
                            data:parametros,
                            url:'save_data.php',
                            type: 'post',
                            beforeSend: function () {
                                $("#resultado");
                            },
                            success: function (response) {   
                                $("#resultado").html(response);
                                document.getElementById("result_message").innerHTML = '<div class="alert alert-dark col-md-12" role="alert"> <h6 class="alert-heading">WORKING</h6><center> <b>EMPLOYEE:</b> '+full_name+' <b>&nbsp;&nbsp;&nbsp;COMPANY:</b> '+company_name+'</center></div>';
                                document.getElementById("button_stop").innerHTML = '<br><center><button type="button" class="btn btn-danger btn-lg " onclick=" save(); ">Check OUT</button></center>';
                                document.getElementById("name1").innerHTML = '';
                                document.getElementById("name2").innerHTML = '';
                                document.getElementById("button").innerHTML = '';
                                document.getElementById("worck_done").innerHTML = '';
                                
                             
                                
                            }
                        });
     }else{
        alert("Please enter a name in the textarea.");
        
    }

}
function save(){

   
  var c =  document.getElementById("screen").innerHTML;


  var parametros = {"full_name":full_name1,"company_name":company_name1,"time":c,"get":1};

        

                            $.ajax({
                            data:parametros,
                            url:'save_data.php',
                            type: 'post',
                            beforeSend: function () {
                                $("#resultado");
                            },
                            success: function (response) {   
                                $("#resultado").html(response);
                                stop();
                              
                            }
                        }); 
   

}
</script>