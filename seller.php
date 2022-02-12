<!DOCTYPE html>

<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <title>Seller</title>
   <meta name="description" content="">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   
   <link rel="stylesheet" href="../CSS/seller.css">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
</head>

<body>
   <?php 
   session_start();

   include('header.php');
   include("database.php");
   include("functions.php");
   $user_data = check_login($conn);

   if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
      $title = $_POST['Title'];
		$categories = $_POST['Categories'];
      $bedrooms = $_POST['Bedrooms'];
      $location = $_POST['Location'];
      $price = $_POST['Price'];
      $description = $_POST['Description'];
      $image = $_POST['FileInput'];
      if(!empty($categories) && !empty($bedrooms)  && !empty($location)  && !empty($price)&&  !empty($description) && !empty($image) && !empty($title))
		{

			//save to database
         $user_Id = random_num(20);
			$query = "insert into ads (ad_Title,ad_Categories,ad_Description,ad_Location,ad_Bedrooms,ad_Image,user_Id) values ('$title','$categories','$description','$location','$bedrooms','$image','$user_Id')";

			
         // echo "ad successfully uploaded";

			// header("Location: index page.php");
		
		}else
		{
			echo "Please enter some valid information!";
		}
      if(mysqli_query($conn, $query)){
         echo "record created successfully";
      }else {
         echo "Error: " . $query . "<br>" . mysqli_error($conn);
       }
	}

   ?>
   <section id="main">

<div id="container">
   <div id="form-inputs">
 <h3>Please provide your Ad's info</h3>
      <form action="" method="POST">
      <div class="input-group title borderNone">
      <label for="title" class="labelTitle">Title</label><br>
            <input type="text" name="Title" id="title" style= "width:100%;" required>
         </div>

         <div class="input-group categories">
            
            <select name="Categories" id="categories" required>
               <option value="categories">Category</option>
               <option value="Apartments">Apartments</option>
               <option value="Houses">Houses</option>
            </select>
         </div>
         <div class="input-group rooms">
            <select name="Bedrooms" id="bedrooms" required>
               <option value="number of bedrooms">Number of Bedroom</option>
               <option value="one">1</option>
               <option value="two">2</option>
               <option value="three">3</option>
               <option value="four">4</option>
            </select>
         </div>
         <div class="input-group region">
            <select name="Location" id="location" required>
               <option value="location">Location</option>
               <option value="Langata">Ruiru</option>
               <option value="Kahawa West">Kahawa West</option>
               <option value="Lavingtone">Lavingtone</option>
               <option value="Westlands">Westlands</option>
               <option value="Ngara">Ngara</option>
               <option value="Imara Daima">Imara Daima</option>
               <option value="south C">south C</option>
               <option value="South B">South B</option>
               <option value="Kibera">Kibera</option>
               <option value="Pipeline">Pipeline</option>
               <option value="Nairobi West">Nairobi West</option>
               <option value="Roysambu">Roysambu</option>
               <option value="Fedha">Fedha</option>
               <option value="Mathare">Kilimani</option>
               <option value="Githurai">Githurai</option>

            </select>
         </div>
         
         <div class="input-group details borderNone">
            <label for="price" class="labelTitle">Price in Kshs</label><br>
            <input type="number" name="Price" id="price" style= "width:100%;" required>

         </div>
         <div class="input-group details borderNone">
            <label for="description" class="labelTitle">Description</label><br>
            <textarea name="Description" id="description" cols="10" rows="4" style= "width:100%;" required></textarea>

         </div>
         
         <div class="input-group">
         <h3>Upload ad images below</h3>
            <label for="fileInput">
               <img src="../images/upload avatar1.svg" alt="upload-image">               
            </label>

            <form action="" enctype="multipart/form-data" method="POST">
               <input type="file" name="FileInput" id="fileInput" style="display: none;" required>

               </form>
         </div>
          
               <div class="input-group btn">
                  
           <button name="upload" type="submit" style="width: 100%;">Submit Ad</button>
         </div>

         </div>
         

      </form>
   </div>
   







</section>
<?php 
      include('footer.php');    
   ?>

   

   <script src="" async defer></script>
</body>

</html>