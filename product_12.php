<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Two bedroom at Ngara</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet"> 

      <link rel="stylesheet" href="../CSS/ad.css">

      <!-- Google fonts -->

            <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
      <!-- fontAwesome -->

      <link
      rel="stylesheet"
      href="../fontawesome-free-5.12.1-web/css/all.min.css"
    />
</head>
<body>
<?php 
   include('header.php');
   ?>
   <section class="search-bar">
  <div id="section-bar">
    <input type="search" name="search" id="Search"><button type="submit">Search</button>
  </div>
</section>
  
    <div class="outside-container">
    <article class="main-container">
        
    <section class="image-container">
        <!-- title -->
        <div class="product-header">
            <h2>Two Bedroom apartment at Ngara</h2>
        </div>
        <!-- image -->
        <div class="product-img">        
    <img src="../images/flat_1.jpg" alt="" width="700px" height="600px">
    </div>
    <div class="product-description">
        <p class="description">
 
        
        This property located at Ngara with close and easy access to all amenities may require including Yaya centre which is roughly 100 metres away <br>
has the following features: <br>

- 4 bedrooms (all ensuite) plus DSQ with private  <br>
- Living room and separate dining room <br>
- Kitchen with pantry area <br>
- A living room balcony and master bedroom balcony
    </div>
    
</section>
<div class="message-container">
<section class="contact-owner">
    <div class="contact-title">
        <h3>Contact Owner</h3>
    </div>
    <div class="contact-info">
    <i class="far fa-envelope"></i>
    <i class="fas fa-phone-square"></i>

    </div>
    
    
        <form action="">
            <div class="customer-details" >
                <input type="text" placeholder="Phone number">
            </div>
            <div class="customer-details">
                <input type="text" placeholder="Name">
            </div>
            <div class="customer-details">
                <input type="text" placeholder="Email">
            </div>
            
            <div class="customer-details">
                <button type="submit">Send</button>
            </div>
        </form>
    </div>
</section>
    
    </article>
    </div>
<?php 
include('footer.php');
?>
</body>
</html>