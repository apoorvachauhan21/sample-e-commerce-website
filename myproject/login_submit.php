<?php
require 'includes\common.php';
    ?>
<?php
$email = mysqli_real_escape_string($con, $_POST['email']);
$password=md5(mysqli_real_escape_string($con, $_POST['password']));
$sel = "SELECT * FROM users where email='$email' and password='$password'";
$select_query_result = mysqli_query($con, $sel) or die(mysqli_error($con));
$total_rows_fetched = mysqli_num_rows($select_query_result);
$row = mysqli_fetch_array($select_query_result);
$id=$row['id'];
if($total_rows_fetched>0)
{
    $_SESSION['email'] = $email;
    $_SESSION['id'] = $id;
    header("Location: products.php");
}
else
{
    header('Location: index.php');
}