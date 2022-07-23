<?php
include('../config.php');

if (isset($_POST['submit'])) {

  $id = $_POST['_id'];
  $judul      = $_POST['judul'];
  $price      = $_POST['price'];
  $benefit  = $_POST['editor1'];
  $now        = date("Y/m/d h:i:s");

  echo $benefit;
  // UPDATE t_artikel SET title = '$judul', description = '$deskripsi', image = '$newfilename' WHERE id_artikel = $id"
  $query = mysqli_query($conn, "UPDATE investasi SET name = '$judul', price = '$price', benefit = '$benefit' WHERE id = $id");

  if ($query) {
    header("location: ../admin?page=investasi");
  } else {
    echo 'Data gagal diinput. Silahkan coba lagi <a href="../admin?page=buat-investasi">Di sini</a>';
  }

} else {
  header("location: ../admin?page=buat-investasi", true, 200);
}