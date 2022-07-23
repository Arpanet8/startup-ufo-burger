<?php

// Create database connection using config file
include_once("../config.php");

// query desc profile
if ($result = $conn->query("SELECT * FROM testimoni ORDER BY id DESC")) {
}
?>

<section class="section">
  <div class="section-header">
    <h1>Testimoni</h1>
  </div>

  <div class="section-body">

    <div class="row">
      <div class="col-12 col-md-12 col-lg-12">
        <div class="card">
          <form action="buat_testimoni_act.php" enctype="multipart/form-data" method="post">
            <div class="card-header">
              <h4>List Testimoni</h4>
            </div>
            <div class="card-body">
              <a href="/admin?page=buat-testimoni" class="btn btn-primary mb-3">Tambah Testimoni Baru</a>
              <div class="table-responsive">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Gambar</th>
                      <th scope="col">Desc</th>
                      <th scope="col">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    // fetch data
                    $no = 1;
                    while ($d = mysqli_fetch_array($result)) {
                      echo '<tr>';
                      echo '<th scope="row">' . $no++ . '</th>';
                      echo '<td><img src="/image/testimoni/' . $d['name'] .'" alt="' . $d['description'] . '" class="img-thumbnail" width="100"></td>';
                      echo "<td>" . substr($d['description'], 0,  50) . "</td>";
                      echo '<td> <a href="/admin?page=update_testimoni&update_id=' . $d['id'] . '" class="btn btn-info mr-1 mt-1">Update</a><a href="../pages/delete_testimoni_act.php?delete_id=' . $d['id'] . '" class="btn btn-danger">Delete</a> </td>';
                      echo '</tr>';
                    }
                    ?>
                  </tbody>
                </table>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>