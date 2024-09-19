<?php
var_dump($_POST); // To debug and see the posted data

// Retrieving the form data
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$photo = $_FILES['photo'];

// Output the data for testing
echo "<h1>$name and $email and $password</h1>";

// Debugging the uploaded photo information
print_r($photo);
?>
