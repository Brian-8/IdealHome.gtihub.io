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
      session_start();
      $message = "";

      include("database.php");
      include("functions.php");
   
   
      if($_SERVER['REQUEST_METHOD'] == "POST")
      {
         //something was posted
         $email = $_POST['Email'];
         $password = $_POST['password'];
   
         if(!empty($email) && !empty($password))
         {
   
            //read from database
            $query = "select * from signup where user_Email = '$email' limit 1";
            $result = mysqli_query($conn, $query);
   
            if($result)
            {
               if($result && mysqli_num_rows($result) > 0)
               {
   
                  $user_data = mysqli_fetch_assoc($result);
                  
                  if($user_data['user_Password'] === $password)
                  {
   
                     $_SESSION['user_Id'] = $user_data['user_Id'];
                     header("Location: index page.php");
                     die;
                  }
               }
            }
            
             $message = "wrong Email or Password";
         }else
         {
           $message = "wrong Email or Password";
         }
      }
   
      ?>
   

      <div class="container">
         <div class="logo">
           <img src="logo.jpg" alt="">
         </div>
         <form id="form"  method="POST" class="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" >
            <div class="form-control">
               <label for="email">Email</label>
               <input type="email" placeholder="Email" id="email" name="Email" required>
               
             
            </div>
            
            <div class="form-control">
               <label for="Password">Password</label>
          
                    <input type="password"  placeholder="password" id="Password" name="password" required>
             
            </div>
                        
            <a href="forgot password.php" style="text-decoration: none;  color:#1B5E20;">Forgot Password?</a>           
            
            <div>
                <span class="error"><?php echo $message;?></span>      
            </div>
            <button type="submit" name="toSubmit">Submit</button>
         </form>
      </div>   
      
    
      <script src="" async defer></script>
   </body>
</html>