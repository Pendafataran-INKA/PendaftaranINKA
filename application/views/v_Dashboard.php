<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Pendaftaran Praktek INKA</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?php echo base_url('assets_user/assets/img/favicon.png') ?>" rel="stylesheet" rel="icon">
  <link href="<?php echo base_url ('assets_user/assets/img/apple-touch-icon.png') ?>" rel="stylesheet" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i,900" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo base_url ('assets_user/assets/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
  <link href="<?php echo base_url ('assets_user/assets/vendor/icofont/icofont.min.css') ?>" rel="stylesheet">
  <link href="<?php echo base_url ('assets_user/assets/vendor/boxicons/css/boxicons.min.css') ?>" rel="stylesheet">
  <link href="<?php echo base_url ('assets_user/assets/vendor/animate.css/animate.min.css') ?>" rel="stylesheet">
  <link href="<?php echo base_url ('assets_user/assets/vendor/venobox/venobox.css') ?>" rel="stylesheet">
  <link href="<?php echo base_url ('assets_user/assets/vendor/aos/aos.css') ?>" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?php echo base_url ('assets_user/assets/css/style.css') ?>" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Mamba - v2.0.1
  * Template URL: https://bootstrapmade.com/mamba-one-page-bootstrap-template-free/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-none d-lg-block">
    <div class="container clearfix">
      <div class="contact-info float-left">
        <i class="icofont-envelope"></i><a href="mailto:sekretariat@inka.co.id">sekretariat@inka.co.id</a>
        <i class="icofont-phone"></i> (0351) 452271-74
      </div>
      <div class="social-links float-right">
        <a href="https://twitter.com/ptinka" class="twitter"><i class="icofont-twitter"></i></a>
        <a href="https://web.facebook.com/ptinkapersero" class="facebook"><i class="icofont-facebook"></i></a>
        <a href="https://www.instagram.com/pt_inka/" class="instagram"><i class="icofont-instagram"></i></a>
        <a href="https://id.linkedin.com/company/pt-industri-kereta-api" class="linkedin"><i class="icofont-linkedin"></i></i></a>
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container">

      <div class="logo float-left">
      
      <a href="<?= base_url(''); ?>"><img src="assets_user/assets/img/inka_logo.png" alt="" class="img-fluid"> 
      </a>
      </div>

      <!-- .nav-menu -->
      <nav class="nav-menu float-right d-none d-lg-block">
        <ul>
          <li class="active"><a href="<?= base_url(''); ?>">Beranda</a></li>
          <li class="drop-down"><a href="">Pengumuman</a>
            <ul>
              <li><a href="<?= base_url('Pengumuman'); ?>">Penerimaan Prakerin (SMK)</a></li>
              <li><a href="<?= base_url('Pengumuman/kp'); ?>">Penerimaan PKL (MAHASISWA)</a></li>
            </ul>
          </li>
          <li><a href="<?= base_url('Persyaratan'); ?>">Persyaratan Umum</a></li>
          <li class="drop-down"><a href="">Alur</a>
            <ul>
              <li><a href="<?= base_url('AlurPSG'); ?>">Pendaftaran Prakerin (SMK)</a></li>
              <li><a href="<?= base_url('AlurKP'); ?>">Pendaftaran PKL</a></li>
            </ul>
          </li>
          <li><a href="<?= base_url('Login'); ?>">Log-In</a></li>
        </ul>
      </nav>
      <!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <!-- ======= SLIDE Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="carousel-item active" style="background-image: url('assets_user/assets/img/slide/slide-1.jpg');">
            <div class="carousel-container">
              <div class="carousel-content container">
                <h2 class="animated fadeInDown">Pendaftaran Praktek Kerja lapang <span> (PKL)</span></h2>
                <p class="animated fadeInUp">Praktek Kerja Lapang di buka khusus untuk mahasiswa dari perguruan tinggi yang ingin melakukan praktek kerja lapang di INKA.</p>
              </div>
            </div>
          </div>

          <!-- Slide 2 -->
          <div class="carousel-item" style="background-image: url('assets_user/assets/img/slide/slide-2.jpg');">
            <div class="carousel-container">
              <div class="carousel-content container">
                <h2 class="animated fadeInDown">Pendaftaran Praktek Kerja Industri (PRAKERIN)</h2>
                <p class="animated fadeInUp">Praktek Kerja Lapang di buka khusus untuk siswa/siswi dari sekolah menengah kejuruan (SMK) yang ingin melakukan praktek kerja di INKA.</p>
              </div>
            </div>
          </div>

          <!-- Slide 3 -->
          <div class="carousel-item" style="background-image: url('assets_user/assets/img/slide/slide-3.jpg');">
            <div class="carousel-container">
              <div class="carousel-content container">
                <h2 class="animated fadeInDown">PERSYARATAN UMUM</h2>
                <p class="animated fadeInUp">Ada pula persyaratan umum yang perlu di ketahui dan di penuhi sebelum mendaftar untuk kerja praktek di INKA.</p>
                <a href="<?= base_url('PersyaratanPSG'); ?>" class="btn-get-started animated fadeInUp scrollto">Tampilkan</a>
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon icofont-rounded-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon icofont-rounded-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>
  </section><!-- End SLIDE -->

  <main id="main">

   

    <!-- ======= Shortcut Section ======= -->
    <section id="shortcut" class="services">
      <div class="container">

        <div class="section-title">
          <h2>ALUR & PERSYARATAN UMUM</h2>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up">
            <div class="icon"><i class="icofont-computer"></i></div>
            <h4 class="title"><a href="<?= base_url('AlurPSG'); ?>">Alur Pendaftar SMK</a></h4>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="250">
            <div class="icon"><i class="icofont-computer"></i></div>
            <h4 class="title"><a href="<?= base_url('AlurKP'); ?>">Alur Pendaftar PKL</a></h4>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="500">
            <div class="icon"><i class="icofont-tasks-alt"></i></div>
            <h4 class="title"><a href="<?= base_url('Persyaratan'); ?>">Persyaratan Umum</a></h4>  
          </div>
        </div>

      </div>
    </section><!-- End Services Section -->

    
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-info">
            <h3>INKA</h3>
            <p>
              Jl. Yos Sudarso No. 71 <br>
              Madiun 63122, Jawa Timur <br><br>
              <strong>Phone:</strong> (0351) 452271-74<br>
              <strong>Fax:</strong>  (0351) 452275<br>
              <strong>Email:</strong> sekretariat@inka.co.id<br>
            </p>
            <div class="social-links mt-3">
              <a href="https://twitter.com/ptinka" class="twitter" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="https://web.facebook.com/ptinkapersero" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="https://www.instagram.com/pt_inka/" class="instagram" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="https://id.linkedin.com/company/pt-industri-kereta-api" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4 align="right">PINTASAN</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="<?= base_url(''); ?>">Beranda</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="<?= base_url('Pengumuman'); ?>">Pengumuman</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="<?= base_url('Pernyataan'); ?>">Dokumen Pernyataan</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>MENU</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="<?= base_url('AlurPSG'); ?>">Alur Prakerin</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="<?= base_url('AlurKP'); ?>">Alur PKL</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="<?= base_url('Login'); ?>">Login</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>COMMITTED TO EXCELLENT</h4>
            <p>Create an integrated solution for railway and urban transportation with competitive advantages in business and the appropriate of product technology to encourage the development of sustainable transport.</p>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Mamba</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/mamba-one-page-bootstrap-template-free/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?php echo base_url ('assets_user/assets/vendor/jquery/jquery.min.js') ?>"></script>
  <script src="<?php echo base_url('assets_user/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')?>"></script>
  <script src="<?php echo base_url('assets_user/assets/vendor/jquery.easing/jquery.easing.min.js')?>"></script>
  <script src="<?php echo base_url('assets_user/assets/vendor/php-email-form/validate.js')?>"></script>
  <script src="<?php echo base_url('assets_user/assets/vendor/jquery-sticky/jquery.sticky.js')?>"></script>
  <script src="<?php echo base_url('assets_user/assets/vendor/venobox/venobox.min.js')?>"></script>
  <script src="<?php echo base_url('assets_user/assets/vendor/waypoints/jquery.waypoints.min.js')?>"></script>
  <script src="<?php echo base_url('assets_user/assets/vendor/counterup/counterup.min.js')?>"></script>
  <script src="<?php echo base_url('assets_user/assets/vendor/isotope-layout/isotope.pkgd.min.js')?>"></script>
  <script src="<?php echo base_url('assets_user/assets/vendor/aos/aos.js')?>"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo base_url('assets_user/assets/js/main.js')?>"></script>

</body>

</html>