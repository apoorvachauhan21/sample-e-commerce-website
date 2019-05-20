<?php
require 'includes\common.php';
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
        <br/>
        <br/>
        <br/>
        <br/>
        <div class="container">
            <div class="row row_style">
                <div class="col-xs-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 style="text-align: center">LOGIN</h3>
                        </div>
                        <div class="panel-body">
                            <p style="text-align: center">Login to make a purchase</p>
                            <form method="POST" action="login_submit.php">
                                <div class="form-group">
                                    <input type="email" class="form-control"  placeholder="Email" name="email" required = "true">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Password" name="password" required = "true">
                                </div>
                                <button type="submit" name="submit" class="btn btn-primary">Login</button>
                            </form>
                        </div>
                        <div class="panel-footer" style="text-align: center;">Don't have an account? <a href="signup.html">Register</a></div>
                    </div>
                </div>
            </div>
        </div>
        <?php
        include 'includes\footer.php';
        ?>
        
    </body>
</html>

