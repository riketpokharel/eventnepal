<?php
$connection = mysqli_connect('localhost','root');
mysqli_select_db($connection, "base" );
$name= $_POST['name'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];
$query = "INSERT INTO `sub` (`name`, `email`,`subject`, `message`)
VALUES ('$name','$email','$subject','$message')";
mysqli_query($connection, $query);
echo "Message is send";

header('Location: ' . $_SERVER['PHP_SELF']);
exit;


?>