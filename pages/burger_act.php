<?php
include('../config.php');

if (isset($_POST['submit'])) {

  $id = $_POST['_id'];
  $deskripsi  = $_POST['editor1'];
  $now        = date("Y/m/d h:i:s");
  // UPDATE t_artikel SET title = '$judul', description = '$deskripsi', image = '$newfilename' WHERE id_artikel = $id"
  $query = mysqli_query($conn, "UPDATE burger SET data = '$deskripsi' WHERE id = $id");

  if ($query) {
    header("location: ../admin?page=burger");
  } else {
    echo 'Data gagal diinput. Silahkan coba lagi <a href="../admin?page=burger">Di sini</a>';
  }

} else {
  header("location: ../admin?page=burger", true, 200);
}