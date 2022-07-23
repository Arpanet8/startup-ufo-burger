<?php

// Create database connection using config file
include_once("../config.php");

// query desc profile
if ($result = $conn->query("SELECT * FROM menu ORDER BY id DESC")) {
}
?>

<section class="section">
  <div class="section-header">
    <h1>Top Menu</h1>
  </div>

  <div class="section-body">

    <div class="row">
      <div class="col-12 col-md-12 col-lg-12">
        <div class="card">
          <form action="/pages/buat_top-menu_act.php" enctype="multipart/form-data" method="post">
            <div class="card-header">
              <h4>List Top Menu</h4>
            </div>
            <div class="card-body">
              <a href="/admin?page=buat-top" class="btn btn-primary mb-3">Buat Top Menu Baru</a>
              <div class="table-responsive">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Judul</th>
                      <th scope="col">Desc</th>
                      <th scope="col">Price</th>
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
                      echo "<td>" . substr($d['description'], 0,  50) . "</td>";
                      echo "<td>" . substr($d['price'], 0,  50) . "</td>";
                      echo '<td> <a href="admin?page=update-top-menu&update_id=' . $d['id'] . '" class="btn btn-info mr-1 mt-1">Update</a><a href="../pages/delete_top-menu_act.php?page=delete-top-menu&delete_id=' . $d['id'] . '" class="btn btn-danger">Delete</a> </td>';
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