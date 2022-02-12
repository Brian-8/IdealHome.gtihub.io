<?php
  $servername = "localhost";
    $username = "rootcbd";
    $password = "1234";
    $database = "idealhome";
    //Create connection
    $conn = new mysqli($servername, $username,$password,$database,);
    
    //Check connection
    if(!$conn){
       die("Connection failed:" .mysqli_connect_error());
    };   





?>