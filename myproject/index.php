<?php
if (isset($_SESSION['email'])) {   header('location: products.php'); } 
 
?>
<?php
    require 'includes\common.php';
    ?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Lifestyle Store</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="index.css"/>
        

    </head>
    <body>
        <?php
        include 'includes\header.php';
        ?>
        <div id="banner-image">
            <div class="container">
                <div id="banner-content">
                        <h1>We sell lifestyle</h1>
                        <p> Flat 40% OFF on premium brands </p>
                        <a class="btn btn-danger
btn-lg active" href="products.php">Shop Now</a>
                    </div>
                </div>
        </div>
        <?php
        include 'includes\footer.php';
        ?>
        
    </body>
</html>
<!--<!DOCTYPE html>-->
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<!--<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>-->
       <!-- <?php
        // put your code here
        /*$con= mysqli_connect("localhost", "root", "root", "e-commerce")
               or die(mysqli_error($con));
        
$select_query = "SELECT id, email_id, first_name FROM users";
$select_query_result = mysqli_query($con, $select_query) or die(mysqli_error($con));
$select_query_result = mysqli_query($con, $select_query) or die(mysqli_error($con));
$total_rows_fetched = mysqli_num_rows($select_query_result);
for ($i=0; $i<=$total_rows_fetched; $i++)
{
  $row = mysqli_fetch_array($select_query_result);
  echo $row["id"]."<br/> ";
  echo $row["email_id"]."<br/> ";
  echo $row["first_name"]."<br/> ";
}
*/
        ?>
    </body>
</html>-->
