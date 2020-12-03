<?php

  $halaman="pemesanan";

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>PO. Dewi Permata | Pemesanan</title>
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

  <link href="assets/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">


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
            <div class="card shadow-lg" data-aos="fade-up">
              <div class="card-header">
                <center><h2>PEMESANAN</h2></center>
              </div>
              <div class="card-body">
                <form method="post" action="">

                  <div class="form-group">
                    <label for="berangkat">Jemput</label>
                    <select name="kota" class="form-control" style="width: 100%; height: 40px;" required>
                      <option disabled selected value>Dari</option>
                        <option value="Jakarta">Jakarta</option>
                        <option value="Bogor">Bogor</option>
                        <option value="Depok">Depok</option>
                        <option value="Tangerang">Tangerang</option>
                        <option value="Bekasi">Bekasi</option>
                        <option value="Banten">Banten</option>
                              

                    </select>
                  </div>
                  <div class="form-group">
                    <label for="tujuan">Tujuan</label>
                    <input type="" class="form-control" id="tujuan" placeholder="Ke">
                  </div>
                  <div class="form-group">
                    <div class="form-row">
                      <div class="col">
                        <label class="label">Tgl Mulai:</label>
                        <input class="form-control" type="text" name="mulai" placeholder="mm/dd/yyyy" id="input-start">
                      </div>
                      <div class="col">
                        <label class="label">Jam Mulai:</label>
                        <input type="time" class="form-control" name="waktu1" placeholder="--:--">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="form-row">
                      <div class="col">
                        <label class="label">Tgl Selesai:</label>
                        <input class="form-control" type="text" name="Selesai" placeholder="mm/dd/yyyy" id="input-end">
                      </div>
                      <div class="col">
                        <label class="label">Jam Selesai:</label>
                        <input type="time" class="form-control" name="waktu2" placeholder="--:--">
                      </div>
                    </div>
                  </div>
                  <div class="col">


                        <center><button onclick= 'jacascript:alert("Silahkan login untuk melakukan Pemesanan")' class="btn btn-success" href='#'>Search</button></center>

                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    

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
  <script src="assets/vendor/datepicker/moment.min.js"></script>
  <script src="assets/vendor/datepicker/daterangepicker.js"></script>
  <script src="assets/vendor/jquery-validate/jquery.validate.min.js"></script>

<!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="assets/js/global.js"></script>

</body>

</html>