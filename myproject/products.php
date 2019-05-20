<?php
require 'includes/common.php';
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
      include 'includes/Check-if-added.php ';
      ?>
            </div>
            
             </div>
        <br>
        <div class="container">
            <div class="jumbotron">
                <h1>Welcome to our Lifestyle Store! </h1>
                <p>  We have the best cameras, watches and shirts for you. No need to hunt around, we have all in one place.</p>
            </div>
        
                <div class="row text-center">
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <img src="images/camera.jpg" alt="camera">
                        <div class="caption">
                            <h2>Cannon-EOS</h2>
                            <p>Price Rs.35999.99</p>
                                <?php
                                    if (!isset($_SESSION['email'])) 
                                    { 
                                    ?>                                 
                                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>                                 
                                    <?php                             
                                    } 
                                    else 
                                    {                                 
                                        if (check_if_added_to_cart(1)) 
                                        {                                      
                                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';                                
                                         }
                                         else
                                         {                                    
                                         ?>                                     
                                           <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>                                    
                                        <?php                                 
                                       }                            
                                        }                            
                                        ?>
                          
                        </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                        <img src="images/camera.jpg" alt="camera">
                        <div class="caption">
                            <h2>Sony DSLR</h2>
                            <p>Price Rs.49999.99</p>
                            <?php
                            if (!isset($_SESSION['email'])) 
                           { 
                           ?>                                 
                           <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a>
                           </p>                                 
                           <?php                             
                           } else 
                           {                                 

                           if (check_if_added_to_cart(2)) 
                           {                                      
                           echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';                                
                            }
                            else
                            {                                    
                            ?>                                     
                           <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>                                    
                            <?php                                 
                           }                            
                            }                            
                            ?>
                            
                        </div>
                    </div>
                    </div>
                      <div class="col-md-3 col-sm-6">
                        <div  class="thumbnail">
                        <img src="images/camera.jpg" alt="camera">
                        <div class="caption">
                            <h2>Sony DSLR</h2>
                            <p>Price Rs.39999.99</p>
                            <?php
                            if (!isset($_SESSION['email'])) 
                           { 
                           ?>                                 
                           <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a>
                           </p>                                 
                           <?php                             
                           } else 
                           {                                 

                           if (check_if_added_to_cart(3)) 
                           {                                      
                           echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';                                
                            }
                            else
                            {                                    
                            ?>                                     
                           <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>                                    
                            <?php                                 
                           }                            
                            }                            
                            ?>
                                                       
                                                   </div>
                                               </div>
                                               </div>
                                               <div class="col-md-3 col-sm-6">
                                                   <div class="thumbnail">
                                                   <img src="images/camera.jpg" alt="camera">
                                                   <div class="caption">
                                                       <h2>Olympus</h2>
                                                       <p>Price Rs.30999.99</p><?php
                            if (!isset($_SESSION['email'])) 
                           { 
                           ?>                                 
                           <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a>
                           </p>                                 
                           <?php                             
                           } else 
                           {                                 

                           if (check_if_added_to_cart(4)) 
                           {                                      
                           echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';                                
                            }
                            else
                            {                                    
                            ?>                                     
                           <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>                                    
                            <?php                                 
                           }                            
                            }                            
                            ?>
                            
                        </div>
                    </div>
                    </div>
            </div>
            <div class="row text-center">
                <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                        <img src="images/watch.jpg" alt="watches">
                        <div class="caption">
                            <h2>Titan Model#301</h2>
                            <p>Price Rs.3999.99</p>
                            <?php
                            if (!isset($_SESSION['email'])) 
                           { 
                           ?>                                 
                           <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a>
                           </p>                                 
                           <?php                             
                           } else 
                           {                                 

                           if (check_if_added_to_cart(5)) 
                           {                                      
                           echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';                                
                            }
                            else
                            {                                    
                            ?>                                     
                           <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>                                    
                            <?php                                 
                           }                            
                            }                            
                            ?>
                            
                        </div>
                    </div>
                    </div>
                <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                        <img src="images/watch.jpg" alt="watches">
                        <div class="caption">
                            <h2>Titan Model#501</h2>
                            <p>Price Rs.5999.99</p>
                            <?php
                            if (!isset($_SESSION['email'])) 
                           { 
                           ?>                                 
                           <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a>
                           </p>                                 
                           <?php                             
                           } else 
                           {                                 

                           if (check_if_added_to_cart(6)) 
                           {                                      
                           echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';                                
                            }
                            else
                            {                                    
                            ?>                                     
                           <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>                                    
                            <?php                                 
                           }                            
                            }                            
                            ?>
                          
                        </div>
                    </div>
                    </div>
                <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                        <img src="images/watch.jpg" alt="watches">
                        <div class="caption">
                            <h2>Fastrack</h2>
                            <p>Price Rs.2999.99</p>
                            <?php
                            if (!isset($_SESSION['email'])) 
                           { 
                           ?>                                 
                           <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a>
                           </p>                                 
                           <?php                             
                           } else 
                           {                                 

                           if (check_if_added_to_cart(7)) 
                           {                                      
                           echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';                                
                            }
                            else
                            {                                    
                            ?>                                     
                           <a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>                                    
                            <?php                                 
                           }                            
                            }                            
                            ?>
                           
                        </div>
                    </div>
                    </div>
                <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                        <img src="images/watch.jpg" alt="watches">
                        <div class="caption">
                            <h2>Casio</h2>
                            <p>Price Rs.1999.99</p>
                            <?php
                                if (!isset($_SESSION['email'])) 
                               { 
                               ?>                                 
                               <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a>
                               </p>                                 
                               <?php                             
                               } else 
                               {                                 

                               if (check_if_added_to_cart(8)) 
                               {                                      
                               echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';                                
                                }
                                else
                                {                                    
                                ?>                                     
                               <a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>                                    
                                <?php                                 
                               }                            
                                }                            
                                ?>
                            
                        </div>
                    </div>
                    </div>
                
                
                
            </div>
            <div class="row text-center">
                
                <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                        <img src="images/shirt.jpg" alt="shirts">
                        <div class="caption">
                            <h2>H&W</h2>
                            <p>Price Rs.1599.99</p>
                            <?php
                            if (!isset($_SESSION['email'])) 
                           { 
                           ?>                                 
                           <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a>
                           </p>                                 
                           <?php                             
                           } else 
                           {                                 

                           if (check_if_added_to_cart(9)) 
                           {                                      
                           echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';                                
                            }
                            else
                            {                                    
                            ?>                                     
                           <a href="cart-add.php?id=9" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>                                    
                            <?php                                 
                           }                            
                            }                            
                            ?>
                            
                        </div>
                    </div>
                    </div>
                <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                        <img src="images/shirt.jpg" alt="shirts">
                        <div class="caption">
                            <h2>Mufti</h2>
                            <p>Price Rs.2499.99</p>
                            <?php
                            if (!isset($_SESSION['email'])) 
                           { 
                           ?>                                 
                           <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a>
                           </p>                                 
                           <?php                             
                           } else 
                           {                                 

                           if (check_if_added_to_cart(10)) 
                           {                                      
                           echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';                                
                            }
                            else
                            {                                    
                            ?>                                     
                           <a href="cart-add.php?id=10" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>                                    
                            <?php                                 
                           }                            
                            }                            
                            ?>
                           
                        </div>
                    </div>
                    </div>
                <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                        <img src="images/shirt.jpg" alt="shirts">
                        <div class="caption">
                           <h2>Luis Philip</h2>
                            <p>Price Rs.2599.99</p>
                            <?php
                            if (!isset($_SESSION['email'])) 
                           { 
                           ?>                                 
                           <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a>
                           </p>                                 
                           <?php                             
                           } else 
                           {                                 

                           if (check_if_added_to_cart(11)) 
                           {                                      
                           echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';                                
                            }
                            else
                            {                                    
                            ?>                                     
                           <a href="cart-add.php?id=11" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>                                    
                            <?php                                 
                           }                            
                            }                            
                            ?>
                          
                        </div>
                    </div>
                    </div>
                <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                        <img src="images/shirt.jpg" alt="shirts">
                        <div class="caption">
                           <h2>Jhalansi</h2>
                            <p>Price Rs.1999.99</p>
                            <?php
                            if (!isset($_SESSION['email'])) 
                           { 
                           ?>                                 
                           <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a>
                           </p>                                 
                           <?php                             
                           } else 
                           {                                 

                           if (check_if_added_to_cart(12)) 
                           {                                      
                           echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';                                
                            }
                            else
                            {                                    
                            ?>                                     
                           <a href="cart-add.php?id=12" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>                                    
                            <?php                                 
                           }                            
                            }                            
                            ?>
                            
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
