<?php
include('../config.php');

if (isset($_POST['submit'])) {

  $deskripsi  = $_POST['editor1'];
  $now        = date("Y/m/d h:i:s");

  $target_dir     = "../image/testimoni/";
  $target_file    = $target_dir . basename($_FILES["image"]["name"]);
  $uploadOk       = 1;
  $imageFileType  = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
  $temp           = explode(".", $_FILES["image"]["name"]);
  $newfilename    = round(microtime(true)) . '.' . end($temp);

  // Check if image file is a actual image or fake image
  if (isset($_POST["submit"])) {
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if ($check !== false) {
      $uploadOk = 1;
    } else {
      echo 1;
      $uploadOk = 0;
    }
  }

  // Check if file already exists
  if (file_exists($target_file)) {
    echo 2;
    $uploadOk = 0;
  }

  // Check file size
  if ($_FILES["image"]["size"] > 2_000_000) {
    $uploadOk = 0;
    echo 3;
  }

  // Allow certain file formats
  if (
    $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif"
  ) {
    echo 4;
    $uploadOk = 0;
  }

  // Check if $uploadOk is set to 0 by an error
  if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
  } else {
    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_dir . $newfilename)) {
      $nama = htmlspecialchars(basename($_FILES["image"]["name"])) . date("Y/m/d h:i:s");
      $query = mysqli_query($conn, "INSERT INTO testimoni (id, name, description, image) VALUES (NULL, '$newfilename', '$deskripsi', '$now')");

      if ($query) {
        header("location: ../admin?page=testimoni");
      } else {
        echo 'Data gagal diinput. Silahkan coba lagi <a href="../admin?page=buat-testimoni">Di sini</a>';
      }
    } else {
      header("location: ../admin?page=buat-testimoni", true, 200);
    }
  }

}