<?php
  $halaman="login";
  include("koneksi.php");
  session_start();

  $errorData = "";
  if(isset($_POST['login'])){
    $email_address = $_POST['email_address'];
    $password = $_POST['password'];

    $query = mysqli_query($koneksi, "SELECT * FROM users WHERE email='$email_address' AND passwords=md5('$password')");
    $count = mysqli_num_rows($query);

    if($count > 0){
      $data = mysqli_fetch_assoc($query);
      
      if($data['level'] == 1){
        $_SESSION['email'] = $email_address;
        $_SESSION['role'] = "admin";
        
        echo "<script>alert('Login Admin Berhasil !');window.location.href = 'halaman/admin/dashboard.php';</script>";
      }else if($data['level'] == 0){
        $_SESSION['email'] = $email_address;
        $_SESSION['role'] = "pemesan";

        echo "<script>alert('Login Pemesan Berhasil !');window.location.href = 'halaman/pemesan/dashboard.php';</script>";
      }else{
        header("location:index.php?pesan=Kesalahan Proses Gagal");
      }
    }else{
      $errorData = "Data tidak terdaftar !";
    }

  }

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>PO. Dewi Permata | Login</title>
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


</head>

<body>

  <!-- ======= Header ======= -->
  <?php
  include("header.php");
  ?>
  <!-- End Header -->


    <!-- ======= Login Section ======= -->
    <section id="login" class="login">
      <div class="container" style="margin-top:100px">
        <div class="row" data-aos="fade-up">
          <div class="col-lg-4 offset-lg-4">
            <div class="card">
              <div class="card-body">
              <?php if($errorData != null){ ?>
              <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong><?= $errorData ?></strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <?php } ?>
                <h2>LOGIN ACCOUNT</h2>
                 <form action="" method="post">
                    <div class="form-group">
                      <label for="email_address">Email address</label>
                      <input type="email" class="form-control" id="email_address" name="email_address" aria-describedby="emailHelp" required>
                    </div>
                    <div class="form-group">
                      <label for="password">Password</label>
                      <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <button type="submit" name="login" class="btn btn-success btn-block">Login</button>
                    <a href="register.php" class="btn btn-primary btn-block">Daftar Disini</a>
                  </form>
              </div>
            </div>
         
          </div>
        </div>
      </div>
    </section><!-- End Login Section -->

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