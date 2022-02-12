<!DOCTYPE html>

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ideal Home</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../CSS/index1.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet"> 
     <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
      <link
      rel="stylesheet"
      href="./fontawesome-free-5.12.1-web/css/all.min.css"
    />
<style>
  .welcome{
    display: flex;
    flex-direction: row-reverse;
    line-height: 1.5;
    font-weight: 400;
  }
</style>

  </head>
  <body>
   <?php 
   session_start();
   include('header.php');
   include("database.php");
	include("functions.php");

	$user_data = check_login($conn);
   ?>
   <!-- <p class="welcome">Welcome, <?php echo $user_data['Username']; ?></p> -->

<section class="search-bar">
  <div id="section-bar">
    <input type="search" name="search" id="Search"><button type="submit">Search</button>
  </div>
</section>

<!-- hero-section -->

<section class="hero-images-container center">
  <div class="hero-image-container fade">
  <img src="../images/banner6.webp" width="800px" height="400px">
  </div>
  <div class="hero-image-container fade">
  <img src="../images/banner5.webp"  width="800px" height="400px">
  </div>
  <div class="hero-image-container fade">
  <img src="../images/banner1.webp"  width="800px" height="400px">
  </div>
  <div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

</section>
<!-- end of hero photos -->
<!-- ads  -->
<article class="products-container">
  <!-- single product -->
  <section class="product-container">
    <div class="product-image">
    <a href="product-1.php"><img src="../images/img_5.jpg" alt="house at Kilimani" height="225" width="300"></a>
    </div>
    <div class="product-info">
    <div class="product-title">
      <a class="title-info" href="product-1.php"><h3>Three-bedroom house </h3></a>      
     
    </div>
    <div class="product-price">
      <p class="price-info">
        Ksh 80,000
      </p>
      </div>
<!-- product icons -->
      <div class="icons">
      <i class="fa fa-bed" aria-hidden="true">3</i>
    <i class="fa fa-map-marker" aria-hidden="true">Kilimani</i>
    </div>
      </div>
          
  </section>
  <!-- end of single product -->

  <!-- single product -->
  <section class="product-container">
    <div class="product-image">
    <a href="product_11.php"><img src="../images/img4.jpg" alt="apartment at Ruiru" width="300" height="225"></a>
    </div>
    <div class="product-info">
    <div class="product-title">
      <a href="product_11.php" class="title-info"><h3>Two-bedroom apartment</h3></a>
    </div>
    <div class="product-price">
      <p class="price-info">
        Ksh 50,000
      </p>
    </div>
      <!-- product icons -->
    <div class="icons">
      <i class="fa fa-bed" aria-hidden="true">2</i>
    <i class="fa fa-map-marker" aria-hidden="true">Ruiru</i>

      </div>
      </div>
  </section>
  <!-- end of single product -->

  <!-- single product -->
  <section class="product-container">
    <div class="product-image">
    <a href="product_12.php"><img src="../images/flat_1.jpg" alt="apartment at Ngara" width="300" ></a>
    </div>
    <div class="product-info">
    <div class="product-title">
      <a href="product_12.php" class="title-info"><h3>One-bedroom apartment</h3></a>
    </div>
    <div class="product-price">
      <p class="price-info">
        Ksh 10,000
      </p>
    </div>
      <!-- product icons -->
    <div class="icons">
      <i class="fa fa-bed" aria-hidden="true">1</i>
    <i class="fa fa-map-marker" aria-hidden="true">Ngara</i>

      </div>
      </div>
  </section>
  <!-- end of single product -->

  <!-- single product -->
  <section class="product-container">
    <div class="ad-image">
    <a href="product_13.php"><img src="../images/img5.jpg" alt="apartments in Kileleshwa" width="300" height="225"></a>
    </div>
    <div class="product-info">
    <div class="product-title">
      <a href="product_13.php" class="title-info"><h3>Three-bedroom apartments</h3></a>
    </div>
    <div class="product-price">
      <p class="price-info">
        Ksh 60,000
      </p>

    </div>
      <!-- product icons -->
    <div class="icons">
      <i class="fa fa-bed" aria-hidden="true">3</i>
    <i class="fa fa-map-marker" aria-hidden="true">Kileleshwa</i>

      </div>
      </div>
  </section>
  <section class="product-container">
    <!-- end of single product -->

    <!-- single product -->
    <div class="product-image">
    <a href="product_2.php"><img src="../images/house_2.jpeg" alt="house at Parklands" width="300" ></a>
    </div>
    <div class="product-info">
    <div class="product-title">
      <a href="product_2.php" class="title-info"><h3>Two-bedroom house</h3></a>
    </div>
    <div class="product-price">
      <p class="price-info">
        Ksh 30,000
      </p>
    </div>
      <!-- product icons -->
    <div class="icons">
      <i class="fa fa-bed" aria-hidden="true">2</i>
    <i class="fa fa-map-marker" aria-hidden="true">Parklands</i>

      </div>
      </div>

  </section>
  <!-- end of single product -->

  <!-- single product -->
  <section class="product-container">
    <div class="product-image">
    <a href="product_7.php"><img src="../images/img_12.jpg" alt="apartments at Dandora" width="300" ></a>
    </div>
    <div class="product-info">
    <div class="product-title">
      <a href="product_7.php" class="title-info"><h3>Two-bedroom apartments</h3></a>
    </div>
    <div class="product-price">
      <p class="price-info">
        Ksh 80,000
      </p>
    </div>
      <!-- product icons -->
    <div class="icons">
      <i class="fa fa-bed" aria-hidden="true">2</i>
    <i class="fa fa-map-marker" aria-hidden="true">Dandora</i>

      </div>
      </div>    
  </section>
  <!-- end of single product -->

  <!-- single product -->
  <section class="product-container">
    <div class="product-image">
    <a href="product_8.php"><img src="../images/img_13.jpg" alt="apartments at Dagoretti" width="300" ></a>
    </div>
    <div class="product-info">
    <div class="prodcut-title">
      <a href="product_8.php" class="title-info"><h3>Two and three-bedroom apartments</h3></a>
    </div>
    <div class="product-price">
      <p class="price-info">
        Ksh 40,000
      </p>
    </div>
    <!-- product icons -->
    <div class="icons">
      <i class="fa fa-bed" aria-hidden="true">2&3</i>
    <i class="fa fa-map-marker" aria-hidden="true">Dagoretti</i>
      </div>
      </div>
      </section>
   <!-- end of single product -->  

  <!-- single product -->
  <section class="product-container">
    <div class="product-image">
    <a href="product_4.php"><img src="../images/img_8.jpg" alt="apartments at Dagoretti" width="300" ></a>
    </div>
    <div class="product-info">
    <div class="prodcut-title">
      <a href="product_4.php" class="title-info"><h3>Two bedroom apartment</h3></a>
    </div>
    <div class="product-price">
      <p class="price-info">
        Ksh 20,000
      </p>
    </div>
    <!-- product icons -->
    <div class="icons">
      <i class="fa fa-bed" aria-hidden="true">2</i>
    <i class="fa fa-map-marker" aria-hidden="true">Pipeline</i>
      </div>
      </div>
      </section>
   <!-- end of single product -->  

</article>


<?php 

include('footer.php');
?>
<script src="../scripts/index1.js"></script>
 
  </body>
</html>