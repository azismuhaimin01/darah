<?php
  $halaman="register";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dewi Permata Trans | Register</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Arsha - v2.2.1
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <?php
  include("header.php");
  ?>
  <!-- End Header -->

  <!-- ======= Galeri Section ======= -->
    <section>
      <div class="container mt-5">
        <div class="row">
          <div class="col-lg-6 offset-lg-3">
            <div class="card shadow-lg">
              <div class="card-header">
                PENDAFTARAN
              </div>
              <div class="card-body">
              <form>
                <div class="form-group">
                  <div class="form-row">
                    <div class="col">
                      <label for="namalengkap">Nama Lengkap</label>
                      <input type="text" class="form-control" placeholder="Nama Lengkap">
                    </div>
                    <div class="col">
                      <label for="emailaddress">Email Address</label>
                      <input type="email" class="form-control" placeholder="Email Address">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="alamat">Alamat</label>
                  <textarea class="form-control" id="alamat" rows="3"></textarea>
                </div>
                <div class="form-group">
                  <div class="form-row">
                    <div class="col">
                      <label for="namalengkap">Nomor Telepon</label>
                      <input type="text" class="form-control" placeholder="Nama Lengkap">
                    </div>
                    <div class="col">
                      <label for="jeniskelamin">Jenis Kelamin</label>
                      <select class="form-control" id="jeniskelamin">
                        <option value="L">Laki-laki</option>
                        <option value="P">Perempuan</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="form-row">
                    <div class="col">
                      <label for="password">Password</label>
                      <input type="password" class="form-control" placeholder="Password">
                    </div>
                    <div class="col">
                      <label for="konfirm">Konfirmasi Password</label>
                      <input type="password" class="form-control" placeholder="Konfirmasi Password">
                    </div>
                  </div>
                </div>
                <button type="submit" name="daftar" class="btn btn-primary">Daftar Segera</button>
              </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
<!-- End Galeri Section -->

<!-- ======= Footer ======= -->
  <?php
  include("footer.php");
  ?>
<!-- End Footer -->

  <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
  <div id="preloader"></div>

<!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

<!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>