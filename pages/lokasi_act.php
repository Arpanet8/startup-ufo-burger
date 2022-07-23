<?php
include('../config.php');

if (isset($_POST['submit'])) {

  $id = $_POST['_id'];
  $lokasi  = $_POST['lokasi'];
  $email  = $_POST['email'];
  $no_telp  = $_POST['no_telp'];
  $link_maps  = $_POST['linkmaps'];
  // UPDATE t_artikel SET title = '$judul', description = '$deskripsi', image = '$newfilename' WHERE id_artikel = $id"
  $query = mysqli_query($conn, "UPDATE lokasi SET lokasi = '$lokasi',email = '$email',no_telp = '$no_telp', link_maps = '$link_maps' WHERE id_lokasi = $id");

  if ($query) {
    header("location: ../admin?page=lokasi");
  } else {
    echo 'Data gagal diinput. Silahkan coba lagi <a href="../admin?page=lokasi">Di sini</a>';
  }

} else {
  header("location: ../admin?page=lokasi", true, 200);
}