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

<body>

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
          <li class=""><a href="<?= base_url('DashboardPSG'); ?>">Beranda</a></li>
          <li class=""><a href="<?= base_url('PSG_Daftar'); ?>">Pendaftaran Praktik kerja</a></li>
          <li class="active"><a href="<?= base_url('DU_PSG'); ?>">Daftar Ulang</a></li>
          <li class=""><a href="<?= base_url('Pengumuman/psg'); ?>">Pengumuman</a></li>
          <li><a href="assets_user/assets/file/DOKUMEN_PERNYATAAN.docx" download>Dokumen Pernyataan</a></li>
          <li><a href="">User</a></li>
        </ul>
      </nav>

    </div>
  </header>
<!-- End Header -->

<!-- Body -->
    <!-- Judul Halaman-->

<!--Gambar Alur-->

    <div class="daftar-wrap3" center> 
  <div class="daftar-html">

    <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Pendaftaran Praktek Kerja</label>
    <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab"></label>
   
    <div class="daftar-form">
      <div class="group">
      <br>
          <label for="nama" class="label">Nama Lengkap</label>
          <input id="nama" type="text" class="input4" value="Rifqi Hakim Ariesdianto" readonly> 
          <br>
          <label for="nama" class="label">Asal Sekolah</label>
          <input id="nama" type="text" class="input4" value="SMKN 1 JEMBER" readonly> 
          <br> 
          
          <label for="nama" class="label">Penempatan</label>
          <input id="nama" type="text" class="input4" value="Divisi Pengembangan Bisnis" readonly>  
          <br>
          <div class="group">
         <a class="buttonU" href="" ><center> Pilih File </center> </a>
          <input id="user" type="text" class="input4" value="scan surat penugasan .jpg/png" readonly>
        </div>
        <center>
        <div class="group" >
        <br >
          <a class="button" href="<?= base_url('DashboardPSg'); ?>" ><center> Daftar ulang </center> </a>
        </div>
        </center>
      </div>
        </div>
      </div>
    </div>
  </div>
</div>
  </div>
</div>

    
  </BR>
  </BR>
<!-- End Body -->


     

  </main>
<!-- End #main -->

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
            <h4 align="right">PINTASAN MENU</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="<?= base_url(''); ?>">Beranda</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4 style="visibility: hidden;"> MENU </h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="assets_user/assets/file/DOKUMEN_PERNYATAAN.docx" download>Dokumen Pernyataan</a></li>
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