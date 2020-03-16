<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">


  <title>INKA - Admin</title>

  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url ('assets/vendor/fontawesome-free/css/all.min.css') ?>" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?php echo base_url ('assets/css/sb-admin-2.min.css') ?>" rel="stylesheet">
 <link href="<?php echo base_url ('assets/css/sb-admin-2.css') ?>" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        
        <h3 class="sidebar-brand-text mx-3"><strong><b>ADMIN</b></strong></h3>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url()?>admin/admin_Dashboard">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <b>BERANDA</b></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-cog"></i>
          <span>Pendaftar & Diterima</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Menu :</h6>
            <a class="collapse-item" href="<?php echo base_url()?>admin/Pendaftar_Diterima/PendaftarPSG">Pendaftar</a>
            <a class="collapse-item" href="<?php echo base_url()?>admin/Pendaftar_Diterima/DiterimaPSG">Diterima</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-wrench"></i>
          <span>Instansi & Jurusan</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Menu :</h6>
            <a class="collapse-item" href="<?php echo base_url()?>admin/Sekolah">Sekolah (SMK)</a>
            <a class="collapse-item" href="<?php echo base_url()?>admin/Sekolah/JurusanPSG">Jurusan (SMK)</a>
            <a class="collapse-item" href="<?php echo base_url()?>admin/Perguruan_Tinggi">Perguruan Tinggi(PT)</a>
            <a class="collapse-item" href="<?php echo base_url()?>admin/Perguruan_Tinggi/JurusanPKL">Jurusan(PT)</a>
          </div>
        </div>
      </li>


      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-folder"></i>
          <span>Periode & Kuota</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Menu:</h6>
            <a class="collapse-item" href="<?php echo base_url()?>admin/Periode_Kuota/Master_PeriodePSG">Master Periode</a>
            <a class="collapse-item" href="<?php echo base_url()?>admin/Periode_Kuota/KuotaPSG">Kuota</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Charts -->
            <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseCharts" aria-expanded="true" aria-controls="collapseCharts">
          <i class="fas fa-fw fa-folder"></i>
          <span>Berkas & Persyaratan</span>
        </a>
        <div id="collapseCharts" class="collapse" aria-labelledby="headingCharts" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Menu:</h6>
            <a class="collapse-item" href="<?php echo base_url()?>admin/Berkas_Persyaratan/BerkasPSG">Berkas Pendaftar</a>
            <a class="collapse-item" href="<?php echo base_url()?>admin/Berkas_Persyaratan/PersyaratanPSG">Persyaratan Umum</a>
          </div>
        </div>
      </li>

	    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
          <i class="fas fa-fw fa-folder"></i>
          <span>Dokumen & Admin</span>
        </a>
        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Menu:</h6>
            <a class="collapse-item" href="<?php echo base_url()?>admin/Dokumen_Admin/Pernyataan">Dokumen Pernyataan</a>
            <a class="collapse-item" href="<?php echo base_url()?>admin/Dokumen_Admin/Penempatan">Penempatan(Divisi)</a>
			<a class="collapse-item" href="<?php echo base_url()?>admin/Dokumen_Admin/Tambah_Admin">Tambah Admin</a>
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
		  <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
            <h2><b>TAMBAH DATA PENEMPATAN (DIVISI)</b></h2>
            </div>
          </form>
          

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <!-- Nav Item - Alerts -->
            
              <!-- Dropdown - Alerts -->
              

            <!-- Nav Item - Messages -->
            
                <!-- Counter - Messages -->
               
              <!-- Dropdown - Messages -->

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="" href="#" id="userDropdown" data-toggle="modal" aria-haspopup="true" aria-expanded="false" data-target="#logoutModal" >
                <span class="mr-2 d-none d-lg-inline fas fa-sign-out-alt fa-sm fa-fw text-gray-600 large"> Keluar</span>
              </a>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->

			
		<!-- Content Row -->

                   <div class="main-content">
<div class="section__content section__content--p30">
    <div class="container-fluid">
     <form id="form_input_detail">
        <div class="row">
            <div class="col-lg-12">
                <div class="au-card m-b-30">
                    <div class="au-card-inner">

            
                
                <!-- Card Body -->
                <div class="form-group row">
                         <div class="col-sm-4" >
                        <label>Penempatan (DIVISI):</label>
                        <input type="text" class="form-control" id="nama" name="nama">
                    </div>
					
                    </div>

					  
					  
			  </div>
             </div>


                    
                        </form><center>
						<span class="btn">
                                    <button class="btn btn-info" type="submit">Tambah</button>
                                </span>
                    </center>
					</div>
					</div>
					</div>
				<br><br><br><br><br><br><br><br><br><br><br><br>
				
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; INKA 2020</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Anda Yakin?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Menekan Logout Akan Meninggalkan Sesi Ini</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="<?php echo base_url()?>user_Dashboard">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url ('assets/vendor/jquery/jquery.min.js') ?>"></script>
  <script src="<?php echo base_url ('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')?>"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url ('assets/vendor/jquery-easing/jquery.easing.min.js') ?>"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url ('assets/js/sb-admin-2.min.js') ?>"></script>

  <!-- Page level plugins -->
  <script src="<?php echo base_url ('assets/vendor/chart.js/Chart.min.js')?>"></script>

  <!-- Page level custom scripts -->
  <script src="<?php echo base_url ('assets/js/demo/chart-area-demo.js') ?>"></script>
  <script src="<?php echo base_url ('assets/js/demo/chart-pie-demo.js') ?>"></script>
</body>

</html>
