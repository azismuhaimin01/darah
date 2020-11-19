<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="dashboard.php">Dewi Permata Trans</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="<?= $halaman=="beranda" ? 'active' : ''; ?>"><a href="dashboard.php">Beranda</a></li>
          <li class="<?= $halaman=="pemesanan" ? 'active' : '' ?>"><a href="pemesanan.php">Pemesanan</a></li>
          <li class="<?= $halaman=="daftartunggu" ? 'active' : '' ?>"><a href="daftartunggu.php">Daftar Tunggu</a></li>
          <li class="<?= $halaman=="kontak" ? 'active' : '' ?>"><a href="kontak.php">Kontak Kami</a></li>
          <li class="<?= $halaman=="keluar"? 'active' : ''?>"><a href="../../index.php" class="btn btn-danger">Keluar</a></li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header>

</body>
</html>