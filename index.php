<?php
// Create database connection using config file
include_once("config.php");

// query desc profile
if (!$result_desc_profile = $conn->query("SELECT * FROM tentang ORDER BY id_tentang DESC LIMIT 1")) {
}

// query desc profile
if (!$result_investasi = $conn->query("SELECT * FROM investasi ORDER BY id ASC")) {
}

// query desc donasi
if (!$result_desc_burger = $conn->query("SELECT * FROM burger ORDER BY id DESC LIMIT 1")) {
}

// query artikel
if (!$result_menu = $conn->query("SELECT * FROM menu ORDER BY id DESC limit 6")) {
}

// query t_gallery
if (!$result_testimoni = $conn->query("SELECT * FROM testimoni ORDER BY id DESC limit 10")) {
}
if (!$result_lokasi = $conn->query("SELECT * FROM lokasi ORDER BY id_lokasi DESC limit 10")) {

}
$lokasi=mysqli_fetch_assoc($result_lokasi);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>START UP UFO BURGER</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/faviconnn.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.html">START UP UFO BURGER</a></h1>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Beranda</a></li>
          <li><a class="nav-link scrollto" href="#about">Tentang</a></li>
          <li><a class="nav-link scrollto" href="#services">Burger</a></li>
          <li><a class="nav-link scrollto" href="#kemitraan">Kemitraan</a></li>
          <li><a class="nav-link scrollto" href="#team">Tim</a></li>
          <li><a class="nav-link scrollto" href="#contact">Kontak</a></li>
          <li><a class="getstarted scrollto" href="login.php">Login</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <h1>Solusi tepat untuk memiliki bisnis viral</h1>
          <h2>Paradise? nah, it's ufo burger</h2>
          <h3>Setumpuk roti dengan isian berupa sayuran dan daging pilihan terbaik yang akan membuat mood menjadi lebih baik. rasakan sensasi ufo burger seperti anda berada di antariksa</h3>
          
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <img src="assets/img/ufoo.png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= sl corp ======= -->
    <section id="clients" class="clients section-bg">
      <div class="container">

        <div class="row" data-aos="zoom-in">

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="https://sambellayah.co.id/wp-content/uploads/2020/02/logo-sambel-layah-1.png" class="img-fluid" alt="sambel layah">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="https://djagojowo.co.id/wp-content/uploads/logo-djago-jowo.png" class="img-fluid" alt="djago jowo">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="https://1.bp.blogspot.com/-hu6oRx-crZE/WIlaHiyRVFI/AAAAAAAACac/vwc2W8FV_QMLCkzJpnuOEnoJuAJuZeoZgCLcB/s1600/LOGO%2BBLEDEX%2BOKE%2BFIKS%2B1.png" class="img-fluid" alt="sambel bledex">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="https://img.snapixa.com/a/upload/2021/12/19/2837/desain-tanpa-judul-%2875%29.png" class="img-fluid" alt="ufo burger">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="https://1.bp.blogspot.com/-EbxFTVGrg9g/XOS-MvZXe1I/AAAAAAAABjg/s-C-cvlgUrABV9oShmXgFyTp8YBCSzG2ACLcBGAs/s1600/WEDANGAN%2BASYIK.png" class="img-fluid" alt="wedangan asyik">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="https://sambellayah.co.id/wp-content/uploads/0-wkwk-food-and-drink.png" class="img-fluid" alt="wkwk food and drink">
          </div>

        </div>

      </div>
    </section><!-- End Cliens Section -->

    <!-- ======= TENTANG ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">


        <div class="row content justify-content-center">
          <div class="col-lg-12">
          <?php
          // fetch data
          while ($profile_data = mysqli_fetch_array($result_desc_profile)) {
            ?>
          <div class="section-title">
            <h2 align="center"><?= $profile_data['judul'] ?></h2>
          </div>
            <?= $profile_data['isi'] ?>
            <?php
          }
          ?>
          </div>
        </div>

      </div>
    </section><!-- End TENTANG -->

    <!-- ======= vidio ======= -->
    <section id="why-us" class="why-us section-bg">
      <div class="container-fluid" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-6 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

            <div class="content">
              <h3>Grand Opening di seluruh Indonesia! Telah dinantikan oleh masyarakat setempat</h3>
              <p>
                Start Up UFO Burger kini hadir di Purwokerto!</p>
                  <P>Hadir dengan berbagai varian rasa yang dapat meningkatkan mood.</P>
                  <P>1. Cheesesteak Burger</P>
                  <P>2. BBQ Chicken Burger</P>
                  <P>3. BBQ Beef Burger</P>
                  <P>4. Bulgogi Burger
              </p>
            </div>
          </div>
          <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img" data-aos="zoom-in" data-aos-delay="150">&nbsp;<iframe width="560" height="315" src="https://www.youtube.com/embed/eVxacAoqJDw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= vidio 2 ======= -->
    <section id="skills" class="skills">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-4 d-flex align-items-center" style="" data-aos="fade-right" data-aos-delay="100">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/0V5uL5cww-8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <!-- <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img" data-aos="zoom-in" data-aos-delay="150">&nbsp;<iframe width="560" height="315" src="https://www.youtube.com/embed/0V5uL5cww-8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div> -->
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left" data-aos-delay="100">
            <h3>Hasil Review Ufo Burger</h3>
            <p class="fst-italic">
              Berikut hasil review Top Menu Start Up Ufo Burger  Purwokerto 2 dari para pembeli
            </p>

            <div class="skills-content">

              <div class="progress">
                <span class="skill">Cheesesteak Burger <i class="val">100%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

              <div class="progress">
                <span class="skill">BBQ Chicken Burger <i class="val">90%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

              <div class="progress">
                <span class="skill">BBQ Beef Burger <i class="val">75%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

              <div class="progress">
                <span class="skill">Bulgogi Burger <i class="val">55%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

            </div>

          </div>
        </div>

      </div>
    </section><!-- End Skills Section -->

    <!-- ======= top menu ======= -->
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Top Menu</h2>
        </div>
        <div class="row">
        <?php
          // fetch data
          while ($menu_data = mysqli_fetch_array($result_menu)) {
            ?>
            
            <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
              <div class="icon-box"> 
                <img src="/image/<?= $menu_data['image'] ?>" style="width: 60%;">
                <h4><?=$menu_data['name'], "(", $menu_data['price'], "K)"?></h4>
                <p><?= $menu_data['description'] ?></p>
              </div>
            </div>
          <?php
          }
          ?>
      </div>
    </section><!-- End Services Section -->

    <!-- ======= burger ======= -->
    <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="row">
        <?php
          // fetch data
          while ($menu_data = mysqli_fetch_array($result_desc_burger)) {
            ?>
          <div class="col-lg-9 text-center text-lg-start">
            <h3>Start Up Ufo Burger</h3>
            <p><?=$menu_data['data']?></p>
        </div>
        </div>
        <?php
          }
          ?>
      </div>
    </section><!-- End burger -->

    <!-- ======= kemitraan ======= -->
    <section id="kemitraan" class="kemitraan">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>kemitraan</h2>
        </div>
        <div class="margin">
          <div class="poto">
            <p style="font-size: 2.5em;">Kenapa Harus Start Up Ufo Burger</p>
            <div class="one-img"><img src="assets/img/one.PNG" class="img-fluid" alt="promo"></div>
            <div class="two-img"><img src="assets/img/two.PNG" class="img-fluid" alt="promo"></div>
            <div class="three-img"><img src="assets/img/three.PNG" class="img-fluid" alt="promo"></div>
            <div class="four-img"><img src="assets/img/four.PNG" class="img-fluid" alt="promo"></div>
          </div>
        </div>
        <div class="section-title">
          <h2>Testimoni</h2>
        </div>
        <?php
          // fetch data
          while ($testimoni_data = mysqli_fetch_array($result_testimoni)) {
            ?>
        <div class="row kemitraan-container" data-aos="fade-up" data-aos-delay="200">
          <div class="col-lg-4 col-md-6 kemitraan-item">
            <div class="kemitraan-img"><img src="/image/testimoni/<?= $testimoni_data['name'] ?>" class="img-fluid" alt=""></div>
            <div class="kemitraan-info">
              <h4><?= $testimoni_data['description'] ?></h4>
              <p>Ufo Burger</p>
            </div>
          </div>
          <?php
          }
          ?>
      </div>
    </section><!-- End kemitraan Section -->

<!-- ======= investasi ======= -->
<section id="pricing" class="pricing">
  <div class="container" data-aos="fade-up">
 
    <div class="section-title">
      <h2>Investasi</h2>
      <p>Anda sepertinya tertarik memiliki bisnis ini. Berapa investasinya?</p>
    </div>
    <div class="row">
    <?php
          // fetch data
          while ($investasi_data = mysqli_fetch_array($result_investasi)) {
            ?>
        
      <div class="col-xl-3" data-aos="fade-up" data-aos-delay="100">
        <div class="box">
          <h3><?= $investasi_data['name']?></h3>
          <h4><sup>Rp.</sup><?php
          $hasil_rupiah = number_format($investasi_data ['price'],2,',','.');
          echo $hasil_rupiah
           ?></h4>
          <ul>
            <?= $investasi_data['benefit']?>
          </ul>
          <a href="https://api.whatsapp.com/send?phone=6285311100877&text=Hello%2C%20saya%20dapat%20info%20dari%20website%20Startup%20UFO%20Burger%20dan%20Saya%20Mau%20Daftar%20Kemitraan%20PAKET%20BASIC" class="buy-btn">Gabung </a>
        </div>
      </div>
      <?php
          }
          ?>
    </div>
  </div>
</section>
<!-- End investasi -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Adhinata Project Team</h2>
          <p>Adhinata project team adalah tim yang berasal dari Software Engineering IT Telkom Purwokerto yang dibentuk guna menciptakan web dengan UI/UX yang baik</p>
        </div>
        <div class="row">
          <div class="col-lg-6">
            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="100">
              <div class="pic"><img src="assets/img/team/Falah.jpeg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Falah Arfani</h4>
                <span>Web Engineer</span>
                <p>Tetap Tenang Di era Gempuran Error 404 NOT FOUND</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href="https://www.instagram.com/arpanets_00/"><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4 mt-lg-0">
            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="200">
              <div class="pic"><img src="assets/img/team/Dimas.jpeg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Dimas Fadhillah Sugiono</h4>
                <span>UI/UX Designer</span>
                <p>Coding memang menyebalkan, tetapi lebih menyebalkan jika tidak belajar coding</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href="https://www.instagram.com/dimas_fadhillahs"><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4">
            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="300">
              <div class="pic"><img src="assets/img/team/Zahra.jpeg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Amanah Nur Az-zahroh</h4>
                <span>Content Creator</span>
                <p>Cintai ususmu</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href="https://www.instagram.com/amanahnr"><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4">
            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="400">
              <div class="pic"><img src="assets/img/team/Amel.jpeg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Difara Seci Amelia</h4>
                <span>Content Creator</span>
                <p>Minum susu tiap hari</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href="https://instagram.com/dframll"><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Team Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Apabila anda memiliki kendala, pertanyaan, dan saran beri tahu kami dengan mengisi formulir kontak di bawah ini</p>
        </div>

        <div class="row">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Lokasi:</h4>
                <p><?= $lokasi['lokasi'] ?></p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p><?= $lokasi['email'] ?></p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Telepon:</h4>
                <p><?= $lokasi['no_telp'] ?></p>
              </div>

              <iframe src="<?= $lokasi['link_maps'] ?>" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="/pages/contact_us_act.php" method="post" role="form" class="php-email-form" enctype="multipart/form-data">
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name">Your Name</label>
                  <input type="text" name="name" class="form-control" id="name" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Your Email</label>
                  <input type="email" class="form-control" name="email" id="email" required>
                </div>
              </div>
              <div class="form-group">
                <label for="name">Subject</label>
                <input type="text" class="form-control" name="subject" id="subject" required>
              </div>
              <div class="form-group">
                <label for="name">Message</label>
                <textarea class="form-control" name="message" rows="10" required></textarea>
              </div>
              <!-- <div class="loading">Loading</div> -->
              <div class="text-center"><input type="submit" name="submit" value="Submit" class="btn btn-success" required></div>
            </form>
          </div>
        </div>

      </div>
    </section>
    <!-- End Contact Section -->

  </main>
  <!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center">
          </div>
        </div>
      </div>
    </div>

    
    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>SE ITTP</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a href="https://ittelkom-pwt.ac.id/tag/prodi-s1-rekayasa-perangkat-lunak/">Software Engineering IT Telkom Purwokerto</a>
      </div>
    </div>
  </footer>
  <!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>
</html>