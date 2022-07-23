<?php
include('../config.php');
// header("location: /login");
// contact us
if($_POST['submit']){
  $name      = $_POST['name'];
  $email     = $_POST['email'];
  $subject   = $_POST['subject'];
  $message   = $_POST['message'];


  $query = mysqli_query($conn, "INSERT INTO contact (name, email, subject, message) VALUES ('$name', '$email', '$subject', '$message')");

  if ($query) {
    header("location: /");
  } else {
    header("location: /");
  }
} else {
  header("location: /");
}