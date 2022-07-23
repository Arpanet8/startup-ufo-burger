<?php
// Create database connection using config file
include_once("../config.php");

if (isset($_GET['update_id'])) {
  $id = $_GET['update_id'];

  // query desc profile
  if ($result = $conn->query("SELECT * FROM investasi where id = $id")) {
  }
} else {
  header("location: /admin?page=list-investasi");
}
?>

<section class="section">
  <div class="section-header">
    <h1>Investasi</h1>
  </div>

  <div class="section-body">

    <?php
    while ($d = mysqli_fetch_array($result)) {
    ?>
      <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
          <div class="card">
            <form action="/pages/update_investasi_act.php?id=<?php echo $d['id'] ?>" enctype="multipart/form-data" method="post">
              <div class="card-header">
                <h4>Buat investasi Baru</h4>
              </div>
              <div class="card-body">
                <div class="form-group">
                  <label>Judul</label>
                  <input name="judul" type="text" class="form-control" required="" placeholder="Judul investasi" value="<?php echo $d['name'] ?>">
                  <input name="_id" type="hidden" class="form-control" required="" value="<?php echo $d['id'] ?>">
                </div>
                <div class="form-group">
                  <label>Price</label>
                  <input name="price" type="number" class="form-control" required="" placeholder="Price Investasi" value="<?php echo $d['price']?>">
                </div>
                <div class="form-group">
                  <label>Deskripsi investasi</label>
                  <textarea name="editor1" id="editor1" class="form-control" required="" placeholder="Judul investasi">
                  <?php echo $d['benefit'] ?>
                </textarea>
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