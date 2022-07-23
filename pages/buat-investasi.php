<section class="section">
  <div class="section-header">
    <h1>Investasi</h1>
  </div>
  <div class="section-body">
    <div class="row">
      <div class="col-12 col-md-12 col-lg-12">
        <div class="card">
          <form action="../pages/buat_investasi_act.php" enctype="multipart/form-data" method="post">
            <div class="card-header">
              <h4>Buat Investasi Baru</h4>
            </div>
            <div class="card-body">
              <div class="form-group">
                <label>Judul</label>
                <input name="judul" type="text" class="form-control" required="" placeholder="Judul Investasi">
              </div>
              <div class="form-group">
                <label>Price</label>
                <input name="price" type="number" class="form-control" required="" placeholder="Price Investasi">
              </div>
              <div class="form-group">
                <label>Deskripsi Investasi</label>
                <textarea name="editor1" id="editor1" class="form-control" required="" placeholder="Judul kegiatan">
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
  </div>
</section>