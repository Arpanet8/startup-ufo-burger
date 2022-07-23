<?php
include('../config.php');

if (isset($_POST['submit'])) {
  
  $judul      = $_POST['judul'];
  $price      = $_POST['price'];
  $now        = date("Y/m/d h:i:s");
  $benefit  = $_POST['editor1'];
  
  $query = mysqli_query($conn, "INSERT INTO investasi (id, name, price, benefit) VALUES (NULL, '$judul', '$price', '$benefit')");

  if ($query) {
    header("location: ../admin?page=investasi");
  } else {
    echo 'Data gagal diinput. Silahkan coba lagi <a href="../admin?page=buat-investasi">Di sini</a>';
  }

} else {
  header("location: ../admin?page=buat-investasi", true, 200);
}