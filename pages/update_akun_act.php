<?php
include('../config.php');

if (isset($_POST['submit'])) {

  $id      = $_POST['_id'];
  $username      = $_POST['nama'];
  $email      = $_POST['email'];
  $passwordlama      = $_POST['passwordlama'];
  $password1      = $_POST['password1'];
  $password2      = $_POST['password2'];
  $hash     = md5($_POST['password2']);
  $now        = date("Y/m/d h:i:s");

  $result = $conn->query("SELECT * FROM users WHERE email='$email' limit 1");
  if ($result->num_rows > 0) {
    $row = mysqli_fetch_assoc($result);
    if ($row['password'] == md5($passwordlama)) {
      if ($password1 != $password2) {
        header("location: ../admin/admin?page=akun&status=gagal", true, 200);
      } else {
        $query = mysqli_query($conn, "UPDATE users SET username = '$username', email = '$email', password = '$hash' WHERE id = '$id'");

        if ($query) {
          header("location: ../admin/admin?page=akun&status=sukses");
        } else {
          header("location: ../admin/admin?page=akun&status=gagal");
        }
      }
    } else {
    }
  } else {
    echo "b";
  }
} else {
  header("location: ../admin?page=list-akun&status=gagal", true, 200);
}