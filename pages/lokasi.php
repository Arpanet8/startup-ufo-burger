<?php
// Create database connection using config file
include_once("../config.php");

  // query desc alamat
  if ($result = $conn->query("SELECT * FROM lokasi ORDER BY id_lokasi DESC LIMIT 1")) {
  }

?>

<section class="section">
  <div class="section-header">
    <h1>Ubah Data Lokasi</h1>
  </div>

  <div class="section-body">

    <?php
    while ($d = mysqli_fetch_array($result)) {
    ?>
      <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
          <div class="card">
            <form action="pages/lokasi_act.php?id=<?php echo $d['id_lokasi'] ?>" enctype="multipart/form-data" method="post">
              <div class="card-header">
                <h4>Lokasi</h4>
              </div>
              <div class="card-body">
                <div class="form-group">
                  <label>Lokasi</label>
                  <input name="lokasi" type="text" class="form-control" required="" placeholder="lokasi" value="<?php echo $d['lokasi'] ?>">
                  <input name="_id" type="hidden" class="form-control" required="" value="<?php echo $d['id_lokasi'] ?>">
                </div>
                <div class="form-group">
                  <label>email</label>
                  <input name="email" type="text" class="form-control" required="" placeholder="Email" value="<?php echo $d['email'] ?>">
                </div>
                <div class="form-group">
                  <label>No Telepon</label>
                  <input name="no_telp" type="text" class="form-control" required="" placeholder="No telp" value="<?php echo $d['email'] ?>">
                </div>
                <div class="form-group">
                  <label>Link Google Maps</label>
                  <input name="linkmaps" type="text" class="form-control" required="" value="<?php echo $d['link_maps'] ?>">
                </div>
              </div>
              <div class="card-footer text-right">
                <input type="submit" value="Submit" name="submit" class="btn btn-primary">
              </div>
            </form>
          </div>
        </div>
      </div>
    <?php
    }
    ?>
  </div>
</section>