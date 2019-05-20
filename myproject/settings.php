<?php
require 'includes/common.php';
if (!isset($_SESSION['email'])) 
    {   header('Location: index.php'); } 

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
        <div class="container">
                <div class="row">
                    <div class="col-xs-5">
            
        <div class="panel-body">
            <form method="POST" action="settings_script.php">
                <h2 style="color:black;">Change Password</h2>
            
            <div class="form-group">
                <input type="password" class="form-control" name="oldpassword"  placeholder="Old Password" required = "true">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="newpassword" placeholder="New Password" required = "true" pattern=".{6,}">
      
            </div>
                <div class="form-group">
                <input type="password" class="form-control" name="renewpassword" placeholder="Re-write new password" required = "true" pattern=".{6,}">
      
            </div>
            <input type="submit" class="  btn btn-primary " name="change" value="CHANGE">
 
        </form>
            </div>
       
        
        </div>
            </div>
                </div>
        </div>
        </div>
        <br>
  <?php 
        include 'includes/footer.php';
        ?>
    </body>
</html>
