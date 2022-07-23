<?php
include('../config.php');

$id = $_GET['delete_id'];
$query = mysqli_query($conn, "DELETE from testimoni where id = $id");
// $query = true;
if($query) {
    // echo 'Data berhasil disimpan. Klik <a href="input.html">Di sini</a> untuk input data kembali';
    header("location: /admin/index.php?page=testimoni");
} else {
    header("location: /admin/index.php?page=testimoni");  
}
?>