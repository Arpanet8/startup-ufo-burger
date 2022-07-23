<?php

// Create database connection using config file
include_once("../config.php");

// query desc profile
if ($result = $conn->query("SELECT * FROM investasi ORDER BY id DESC")) {
}
?>

<section class="section">
  <div class="section-header">
    <h1>Investasi</h1>
  </div>

  <div class="section-body">

    <div class="row">
      <div class="col-12 col-md-12 col-lg-12">
        <div class="card">
          <form action="buat_investasi_act.php" enctype="multipart/form-data" method="post">
            <div class="card-header">
              <h4>List Investasi</h4>
            </div>
            <div class="card-body">
              <a href="/admin?page=buat-investasi" class="btn btn-primary mb-3">Tambah Investasi Baru</a>
              <div class="table-responsive">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Judul</th>
                      <th scope="col">harga</th>
                      <th scope="col">benefit</th>
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
                      echo "<td>" . substr($d['name'], 0,  50) . "</td>";
                      echo "<td>" . substr($d['price'], 0,  50) . "</td>";
                      echo "<td>" . substr($d['benefit'], 0,  80) . "</td>";
                      echo '<td> <a href="admin?page=update_investasi&update_id=' . $d['id'] . '" class="btn btn-info mr-1 mt-1">Update</a><a href="/pages/delete_investasi_act.php?page=delete-investasi&delete_id=' . $d['id'] . '" class="btn btn-danger">Delete</a> </td>';
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