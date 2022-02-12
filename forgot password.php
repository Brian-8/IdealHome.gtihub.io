<!DOCTYPE html>

   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Login</title>
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="../CSS/signupuser.css">
      <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
      <style>
      .error{
         color: red;
      }
      </style>
   </head>
   <body>
   <?php 
    


    $servername = "localhost";
    $username = "root";
    $password = "";
    //Create connection
    $conn = new mysqli($servername, $username);
    
    //Check connection
    if(!$conn){
       die("Connection failed:" .mysqli_connect_error());
    };
    
    
    
    
    $email="";
    $emailErr = "";
    
    if($_SERVER["REQUEST_METHOD"]== "POST"){
       if(empty($_POST["name"])){
          $nemailErr = "Email Address is required";
       }else{
          $email = test_input($_POST["email"]);
       }    
    
       $email = test_input($_POST["email"]);      
    }    
    
    function test_input($data){
       $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);
    }  
    
    
    ?>

      <div class="container">
         <div class="logo">
           <img src="logo.jpg" alt="logo">
         </div>
         
             <h3 style= "padding:0px 30px;font-weight:400; ">Enter valid email address below:</h3>
        
         <form style= "padding:0px 30px" id="form"  method="POST" class="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" >
            <div class="form-control">
               
               <input type="text" placeholder="email address" id="Email Address" name="email">
               <span class="error"><?php echo $emailErr;?></span>
             
            </div>
            
            
            <button style="margin-bottom:20px;">Submit</button>
         </form>
      </div>
      
      
    
      <script src="" async defer></script>
   </body>
</html>