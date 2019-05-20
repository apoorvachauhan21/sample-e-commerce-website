<?php
include 'includes/common.php';
$user_id=$_SESSION['id'];
$item_id=$_GET['id'];
$users_cart="INSERT INTO users_item(user_id, item_id, status) VALUES('$user_id', '$item_id', 'Added to cart')"; 
$usregs_subm= mysqli_query($con, $users_cart) or die(mysqli_error($con));
header('Location: products.php');
?>
