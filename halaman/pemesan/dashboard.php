<?php
  $halaman="beranda";
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Pemesan</title>
	<meta content="" name="description">
	<meta content="" name="keywords">

	  <!-- Favicons -->
	<link href="../../assets/img/favicon.png" rel="icon">
	<link href="../../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

	  <!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

	  <!-- Vendor CSS Files -->
	<link href="../../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="../../assets/vendor/icofont/icofont.min.css" rel="stylesheet">
	<link href="../../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
	<link href="../../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
	<link href="../../assets/vendor/venobox/venobox.css" rel="stylesheet">
	<link href="../../assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
	<link href="../../assets/vendor/aos/aos.css" rel="stylesheet">

<!-- Template Main CSS File -->
	<link href="../../assets/css/style.css" rel="stylesheet">
</head>
<body>

<!-- ======= Header ======= -->
  <?php
  include("header.php");
  ?>
<!-- End Header -->
	<section id="user" class="d-flex align-items-center">

		<div class="container">
      		<div class="section-title">
        		<div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
    			<h1>SELAMAT DATANG <?= $_SESSION['email']; ?></h1>
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
  <script src="../../assets/vendor/jquery/jquery.min.js"></script>
  <script src="../../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../../assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="../../assets/vendor/php-email-form/validate.js"></script>
  <script src="../../assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="../../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../../assets/vendor/venobox/venobox.min.js"></script>
  <script src="../../assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="../../assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="../../assets/js/main.js"></script>
</body>
</html>