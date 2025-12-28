<?php
include 'db.php';

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$query = "INSERT INTO contacts (name,email,message)
          VALUES ('$name','$email','$message')";

mysqli_query($conn, $query);

echo "Message Sent Successfully!";
?>
