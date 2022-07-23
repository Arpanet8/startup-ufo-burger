<?php
include('../config.php');

$id = $_GET['delete_id'];
$query = mysqli_query($conn, "delete from investasi where id = $id");
// $query = true;
if($query) {
    header("location: /admin/index.php?page=investasi");
} else {
    header("location: /admin/index.php?page=investasi");  
}
?>