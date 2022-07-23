<?php
include('../config.php');

if (isset($_POST['submit'])) {

  $nama      = $_POST['nama'];
  $email      = $_POST['email'];
  $password1      = $_POST['password1'];
  $password2      = $_POST['password2'];
  $hash      = md5($_POST['password2']);
  $now        = date("Y/m/d h:i:s");

  if ($password1 != $password2) {
    header("location: /admin/admin?page=buat_akun");
  } else {
    $query = mysqli_query($conn, "INSERT INTO users (id, username, email, password) VALUES (NULL, '$nama', '$email', '$hash')");

    if ($query) {
      header("location: ../admin/admin?page=akun&status=sukses");
    } else {
      header("location: ../admin/admin?page=akun&status=gagal");
    }
  }
} else {
  header("location: ../admin/admin?page=buat-akun&status=gagal", true, 200);
}