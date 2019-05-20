<?php
require 'includes/common.php';
if (!isset($_SESSION['email'])) 
    {   
    header('Location: index.php'); 
    }
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
       <title>LifeStyle Store</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

        <!-- jQuery library -->
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="index.css"/> 
    </head>
    <body>
        <div class="header">
            <div class="panel-heading">
      <?php
      include 'includes/header.php';
      ?>
            </div>
            
             </div>
        <br>
        <br>
        <br>
        <br>
        <?php
        $item_id=$_GET['itemsid'];
        $user_id=$_SESSION['id'];
        $update__name_query="UPDATE users_item SET status='Confirmed' where user_id='$user_id' and status='Added to cart'";
        $update_name_result= mysqli_query($con, $update__name_query) or die(mysqli_error($con));
        
        ?>
        <p> Your order is confirmed. Thank you for shopping with us. <a href="products.php">
   Click here</a> to purchase any other item. </p>
             <br>
         <?php 
        include 'includes/footer.php';
        ?>
    </body>
    
</html>
