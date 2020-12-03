<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="index.php">Dewi Permata Trans</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="<?= $halaman=="home" ? 'active' : ''; ?>"><a href="index.php">Home</a></li>
          <li class="<?= $halaman=="galeri" ? 'active' : '' ?>"><a href="galeri.php">Galeri</a></li>
          <li class="<?= $halaman=="armada" ? 'active' : '' ?>"><a href="armada.php">Armada Bus</a></li>
          <li class="<?= $halaman=="pemesanan" ? 'active' : '' ?>"><a href="pemesanan.php">Pemesanan</a></li>
          <li class="<?= $halaman=="about" ? 'active' : ''; ?>"><a href="about.php">Tentang Kami</a></li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header>

</body>
</html>