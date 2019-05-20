<?php
require 'includes\common.php';
if (isset($_SESSION['id'])) {
  header("Location: products.php");
} 
else{
    ?>
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
        <br>
        <br>
        <br>
        <br>
        <div class="container">
            <div class="row row_style">
                <div class="col-xs-6">
                    <div class="panel panel-primary" >
                        <div class="panel-heading">
                            <h3 style="text-align: center">SIGN UP</h3>
                        </div>
                        <div class="panel-body">
                            <form method="POST" action="signup_script.php">
                                <div class="form-group">
                                    <input type="name" class="form-control"  placeholder="Name" name="name" required = "true">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control"  placeholder="Email" name="email" required = "true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Password" name="password" required = "true" pattern=".{6,}">
                                </div>
                                <div class="form-group">
                                    <input type="contact" class="form-control"  placeholder="Contact" name="contact" required = "true">
                                </div>
                                <div class="form-group">
                                    <input type="city" class="form-control"  placeholder="City" name="city" required = "true">
                                </div>
                                <div class="form-group">
                                    <input type="address" class="form-control"  placeholder="Address" name="address" required = "true">
                                </div>
                                <button type="submit" name="submit" class="btn btn-primary " >SignUp</button>
                            </form>
                        </div>
                        <div class="panel-footer" style="text-align: center">Already have an account? <a href="login.html">Login</a></div>
                    </div>
                </div>
            </div>
        </div>
        <?php
include 'includes\footer.php';

}
        ?>
        
    </body>
</html>

