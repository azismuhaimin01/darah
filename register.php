<?php
  $halaman="register";
  include("koneksi.php");

  if(isset($_POST['daftar'])){
    $nama_lengkap = $_POST['nama_lengkap'];
    $email = $_POST['email'];
    $alamat = $_POST['alamat'];
    $no_telepon = $_POST['no_telepon'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $password = $_POST['password'];
    $konfirmasi_password = $_POST['konfirmasi_password'];

    // cek kesamaan password
    if($password != $konfirmasi_password){
      echo "<script>alert('Password tidak match !');window.location.href='register.php';</script>";
    }else{
      $query = mysqli_query($koneksi,"INSERT INTO users(nama_lengkap,email,alamat,no_telepon,jenis_kelamin,passwords,level,is_Active) VALUES('$nama_lengkap','$email','$alamat','$no_telepon','$jenis_kelamin',md5('$password'),'0','1')");

      if($query){
        echo "<script>alert('Proses Registrasi Berhasil, Silahkan Login !');window.location.href='login.php';</script>";
      }else{
        echo "<script>alert('Registrasi Gagal !');window.location.href='register.php';</script>";
      }
    }

  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>PO. Dewi Permata | Register</title>
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

  <!-- ======= Daftar ======= -->
    <section>
      <div class="container mt-5">
        <div class="row">
          <div class="col-lg-6 offset-lg-3">
            <div class="card shadow-lg">
              <div class="card-header">
                <h2>PENDAFTARAN
              </div>
              <div class="card-body">
              <form method="post" action="">
                <div class="form-group">
                  <div class="form-row">
                    <div class="col">
                      <label for="namalengkap">Nama Lengkap</label>
                      <input type="text" class="form-control" name="nama_lengkap" placeholder="Masukkan Nama Lengkap" required>
                    </div>
                    <div class="col">
                      <label for="emailaddress">Email Address</label>
                      <input type="email" class="form-control" name="email" placeholder="Masukkan Email" required>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="alamat">Alamat</label>
                  <textarea class="form-control" id="alamat" name="alamat"placeholder="Masukkan Alamat Lengkap Anda" rows="3" required></textarea>
                </div>
                <div class="form-group">
                  <div class="form-row">
                    <div class="col">
                      <label for="namalengkap">Nomor Telepon</label>
                      <input type="number" class="form-control" name="no_telepon" placeholder="Masukkan Nomor Telepon" required>
                    </div>
                    <div class="col">
                      <label for="jeniskelamin">Pilih Jenis Kelamin</label>
                      <select class="form-control" id="jeniskelamin" name="jenis_kelamin" placeholder="Pilih jenis Kelamin" required>
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
                      <input type="password" class="form-control" name="password" placeholder="Buat Password" required>
                    </div>
                    <div class="col">
                      <label for="konfirm">Konfirmasi Password</label>
                      <input type="password" class="form-control" name="konfirmasi_password" placeholder="Konfirmasi Password" required>
                    </div>
                  </div>
                </div>
                <div> <center>
                  <button type="submit" name="daftar" class="btn btn-primary">Daftar Segera</button>
                  <button type="reset" name="daftar" class="btn btn-danger">Hapus</button>
                  <a href="login.php" class="btn btn-success">Login</a></center>
                </div>
              </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
<!-- End Daftar Section -->

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
