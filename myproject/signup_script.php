<?php
 require 'includes\common.php';
 ?>
<?php
$name = mysqli_real_escape_string($con, $_POST['name']);
$email = mysqli_real_escape_string($con, $_POST['email']);
$password=md5(mysqli_real_escape_string($con, $_POST['password']));
$contact = $_POST['contact'];
$city = $_POST['city'];
$address = $_POST['address'];
$id = "SELECT id FROM users where email='$email'";
$select_query_result = mysqli_query($con, $id) or die(mysqli_error($con));
$total_rows_fetched = mysqli_num_rows($select_query_result);
if($total_rows_fetched>0)
{
    echo "email already exist";
    header("Location: signup.php");
}
else
{
$user_registration_query = "insert into users(name, email, password, contact, city, address) values ('$name', '$email', '$password', '$contact', '$city', '$address' )";
$user_registration_submit = mysqli_query($con, $user_registration_query) or die(mysqli_error($con));
echo "User successfully inserted";
$_session['email'] = $email;
    $_session['id'] = mysqli_insert_id($con);
    header("Location: products.php");
}
?>
