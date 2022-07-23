<?php
include('../config.php');

$id = $_GET['delete_id'];
$query = mysqli_query($conn, "delete from menu where id = $id");
// $query = true;
if($query) {
    // echo 'Data berhasil disimpan. Klik <a href="input.html">Di sini</a> untuk input data kembali';
    header("location: ../admin/index.php?page=top");
} else {
    header("location: ../admin/index.php?page=top");  
}
?>