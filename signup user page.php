<!DOCTYPE html>

   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Sign up</title>
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

	include("database.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$username = $_POST['name'];
		$password = $_POST['password'];
      $email = $_POST['email'];
      $phonenumber = $_POST['phonenumber'];
     

		if(!empty($username) && !empty($password)  && !empty($email)  && !empty($phonenumber)&& !is_numeric($username))
		{

			//save to database
			$user_id = random_num(20);
			$query = "insert into signup (user_Id,username,user_Email,user_Password,user_Mobile) values ('$user_id','$username','$email','$password','$phonenumber')";

			mysqli_query($conn, $query);

			header("Location: login page.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>
   

      <div class="container">
         <div class="logo">
           <img src="logo.jpg" alt="logo">
         </div>
        <form id="form"  method="POST" class="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" >
            <div class="form-control">
               <label for="username">Username</label>
               <input type="text" placeholder="username" id="username" name="name" required>
               
             
            </div>
            <div class="form-control">
               <label for="Email">Email</label>
               <input type="email" placeholder="email address" id="Email" name="email" required>
               
            </div>
            <div class="form-control">
               <label for="Phonenumber">Phone Number</label>
               <input type="text" placeholder="phone number" id="Phonenumber" name="phonenumber" required>
               
            </div>

            <div class="form-control">
               <label for="Password">password</label>
               <input type="password"  placeholder="Password" id="Password" name="password" required>
               
              
               
            </div>
            <div class="form-control">
               <label for="Password2">Confirm Password</label>
               <input type="password" placeholder="password two" id="Password2" name="password2" required>
              
            </div>
            <button type="submit" name="Submit">Submit</button>
         </form>
      </div>
      
      
    
      <script src="" async defer></script>
   </body>
</html>