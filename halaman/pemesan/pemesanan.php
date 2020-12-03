<?php
$halaman="pemesanan";

session_start();
include("../../koneksi.php");

if(isset($_POST['pemesanan'])) {
    $nama_pemesan = $_POST['nama_pemesan'];
    $telp = $_POST['telp'];
    $berangkat = $_POST['berangkat'];
    $almt_berangkat = $_POST['almt_berangkat'];
    $tujuan = $_POST['tujuan'];
    $almt_tujuan = $_POST['almt_tujuan'];
    $tipe_bus = $_POST['tipe_bus'];
    $tgl_mulai = $_POST['tgl_mulai'];
    $jam_mulai = $_POST['jam_mulai'];
    $tgl_selesai = $_POST['tgl_selesai'];
    $jam_selesai = $_POST['jam_selesai'];


    $query = mysqli_query($koneksi,"INSERT INTO pemesanan(nama_pemesan,telp,berangkat,almt_berangkat,tujuan,almt_tujuan,tipe_bus,tgl_mulai,jam_mulai,tgl_selesai,jam_selesai) VALUES('$nama_pemesan','$telp','$berangkat','$almt_berangkat','$tujuan','$almt_tujuan','$tipe_bus','$tgl_mulai','$jam_mulai','$tgl_selesai','$jam_selesai')");
    if($query) {
      echo "<script>alert('Proses Pemesanan Berhasil, Tunggu Konfirmasi !');window.location.href='daftartunggu.php';</script>";
    }else{
      echo "<script>alert('Pemesanan Gagal !');window.location.href='pemesanan.php';</script>";
    }
  }
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

  <link href="../../assets/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">


  <!-- Template Main CSS File -->
  <link href="../../assets/css/style.css" rel="stylesheet">

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
                    <div class="form-row">
                      <div class="col">
                        <strong><label for="nama_pemesan">Nama Pemesan</label></strong>
                        <input type="text" class="form-control" name="nama_pemesan" placeholder="Masukkan nama lengkap" required>
                      </div>
                      <div class="col">
                        <strong><label for="telp">Telepon/Whatsapp</label></strong>
                        <input type="number" class="form-control" name="telp" placeholder="Masukkan nomor telepon" required>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <strong><label for="berangkat">Berangkat</label></strong>
                    <select name="berangkat" class="form-control" required>
                      <option disabled selected value>Dari</option>
                        <option value="Jakarta">Jakarta</option>
                        <option value="Bogor">Bogor</option>
                        <option value="Depok">Depok</option>
                        <option value="Tangerang">Tangerang</option>
                        <option value="Tangerang Selatan">Tangerang Selatan</option>
                        <option value="Bekasi">Bekasi</option>
                        <option value="Cilegon">Cilegon</option>
                        <option value="Serang">Serang</option>
                        <option value="Pandeglang">Pandeglang</option>
                        <option value="Lebak">Lebak</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <strong><label for="alamatjemput">Alamat Lengkap Keberangkatan</label></strong>
                    <textarea class="form-control" name="almt_berangkat" placeholder="Masukkan alamat secara lengkap" rows="3" required=""></textarea>
                  </div>
                  <div class="form-group">
                    <strong><label for="tujuan">Tujuan</label></strong>
                    <select name="tujuan" class="form-control" required>
                      <option disabled selected value>Ke</option>
                        <option value="wisata_rekreasi">Wisata/Rekreasi</option>
                        <option value="wisata_religi">Wisata Religi</option>
                        <option value="gathering">Gathering/Group Travelling</option>
                        <option value="ziarah_walisongo">Ziarah Walisongo</option>
                        <option value="study_tour">Study Tour</option>
                        <option value="dll">Dll~</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <strong><label for="alamattujuan">Alamat Lengkap Tujuan</label></strong>
                    <textarea class="form-control" name="almt_tujuan" placeholder="Masukkan alamat secara lengkap" rows="3" required=""></textarea>
                  </div>
                  <div class="form-group">
                    <strong><label for="tipe_bus">Tipe Bus</label></strong>
                    <select name="tipe_bus" class="form-control" required>
                      <option disabled selected value>Pilih tipe bus & kapasitas kursi</option>
                        <option value="vip">VIP CLASS JB3+ HDD 59seat 2-3</option>
                        <option value="executive">EXECUTIVE CLASS JB3+ HDD 47seat 2-2</option>
                        <option value="super_executive">SUPER EXECUTIVE CLASS JB3+ SHD 32seat 2-2</option>
                        <option value="super_luxury">SUPER LUXURY CLASS LEGAXY SR2 XHD PRIME 22seat 2-1</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <div class="form-row">
                      <div class="col">
                        <strong><label for="label">Tgl Mulai:</label></strong>
                        <input class="form-control" type="date" id="tgl_mulai" name="tgl_mulai">
                      </div>
                      <div class="col">
                        <strong><label class="label">Jam Mulai:</label></strong>
                        <input type="time" class="form-control" name="jam_mulai">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="form-row">
                      <div class="col">
                        <strong><label class="label">Tgl Selesai:</label></strong>
                        <input class="form-control" type="date" name="tgl_selesai">
                      </div>
                      <div class="col">
                        <strong><label class="label">Jam Selesai:</label></strong>
                        <input type="time" class="form-control" name="jam_selesai">
                      </div>
                    </div>
                  </div>
                  <div class="col">
                        <center><button type="submit" name="pemesanan" class="btn btn-warning"><strong>MELANJUTKAN RESERVASI</strong></button></center>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="pemesananbus" class="pemesananbus section-bg">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="card mb-3" style="max-width: relative;">
            <div class="row no-gutters">
              <div class="col-md-3">
                <img src="../../assets/img/team/B.png" class="card-img" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
              </div>
            </div>
          </div>
          <div class="card mb-3" style="max-width: relative;">
            <div class="row no-gutters">
              <div class="col-md-3">
                <img src="../../assets/img/team/shd1.png" class="card-img" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
              </div>
            </div>
          </div>
          <div class="card mb-3" style="max-width: relative;">
            <div class="row no-gutters">
              <div class="col-md-3">
                <img src="../../assets/img/team/shd.png" class="card-img" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
              </div>
            </div>
          </div>
          <div class="card mb-3" style="max-width: relative;">
            <div class="row no-gutters">
              <div class="col-md-3">
                <img src="../../assets/img/team/xhd.png" class="card-img" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
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
  <script src="../../assets/vendor/jquery/jquery.min.js"></script>
  <script src="../../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../../assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="../../assets/vendor/php-email-form/validate.js"></script>
  <script src="../../assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="../../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../../assets/vendor/venobox/venobox.min.js"></script>
  <script src="../../assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="../../assets/vendor/aos/aos.js"></script>
  <script src="../../assets/vendor/datepicker/moment.min.js"></script>
  <script src="../../assets/vendor/datepicker/daterangepicker.js"></script>
  <script src="../../assets/vendor/jquery-validate/jquery.validate.min.js"></script>

<!-- Template Main JS File -->
  <script src="../../assets/js/main.js"></script>
  <script src="../../assets/js/global.js"></script>

</body>

</html>