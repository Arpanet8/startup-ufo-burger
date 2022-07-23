<?php
include('../config.php');

if (isset($_POST['submit'])) {

  $id = $_POST['_id'];
  $judul  = $_POST['judul'];
  $deskripsi  = $_POST['editor1'];
  // UPDATE t_artikel SET title = '$judul', description = '$deskripsi', image = '$newfilename' WHERE id_artikel = $id"
  $query = mysqli_query($conn, "UPDATE tentang SET judul = '$judul', isi = '$deskripsi' WHERE id_tentang = $id");

  if ($query) {
    header("location: ../admin?page=tentang");
  } else {
    echo 'Data gagal diinput. Silahkan coba lagi <a href="../admin?page=tentang">Di sini</a>';
  }

} else {
  header("location: ../admin?page=tentang", true, 200);
}