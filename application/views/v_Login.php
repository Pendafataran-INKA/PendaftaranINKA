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


</head>

<body class="bodyL">

  <!-- ======= Top Bar ======= -->


<!-- ======= Header ======= -->
      <!-- .nav-menu -->
  <header id="header">
    <div class="container">

      <div class="logo float-left">
      
      <a href="<?= base_url(''); ?>"><img src="assets_user/assets/img/inka_logo.png" alt="" class="img-fluid"> 

      </a>
      
        
      </div>

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
    </div>
  </header>
<!-- End Header -->

<!-- Body -->
    <!-- Judul Halaman-->
<div class="login-wrap" center> 
  <div class="login-html">

    <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Masuk / LOGIN</label>
    <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab"></label>
    <div class="login-form">
      <div class="sign-in-htm">
        <div class="group">
          <label for="user" class="label"><strong>Email</strong></label>
          <input id="user" type="text" class="input">
        </div>
        <div class="group">
          <label for="pass" class="label"><strong>Password</strong></label>
          <input id="pass" type="password" class="input" data-type="password">
        </div>
        <div class="group">
          <input id="check" type="checkbox" class="check" checked>
          <label for="check"><span class="icon"></span> Keep me Signed in</label>
        </div>
        <div class="group" >
          <a class="button" href="<?= base_url('admin/admin_Dashboard'); ?>" ><center> Masuk</center> </a>
        </div>
        <div class="hr"></div>
        <div class="foot-lnk">
          <a href="<?= base_url('DaftarACC'); ?>">Belum Memiliki Akun</a>
           <a href="<?= base_url('DashboardPSG'); ?>">PSG</a>
           <a href="<?= base_url('DashboardKP'); ?>">KP</a>
        </div>
      </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- End Body -->


     

  </main>
<!-- End #main -->



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