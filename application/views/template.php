<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Admin</title>

  <!-- Custom fonts for this template-->
  <link href="<?= base_url(); ?>asset/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?= base_url(); ?>asset/css/sb-admin-2.min.css" rel="stylesheet">
  <link href="<?= base_url(); ?>asset/css/daterangepicker.css" rel="stylesheet">
  <link href="<?= base_url(); ?>asset/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-white sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <div class="nav-item text-center">
        <img src="<?= base_url(); ?>asset/img/rsbm.png" alt="" width="50%">
      </div>
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-text mb-3 text-dark">ADMIN</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0" style="border-top: 1px solid #dbdbdb;">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link text-dark" href="index.html">
          <i class="fas fa-th-large text-dark"></i>
          <span>Dashboard</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark" href="<?= base_url(); ?>post">
          <i class="fas fa-edit text-dark"></i>
          <span>Post</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark" href="<?= base_url(); ?>pasien">
          <i class="fas fa-clipboard text-dark"></i>
          <span>Data Masuk Pendaftaran Pasien Baru</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark" href="<?= base_url(); ?>periksa_pasien">
          <i class="fas fa-users text-dark"></i>
          <span>Data Masuk Periksa Pasien</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark" href="<?= base_url(); ?>homecare">
          <i class="fas fa-clipboard text-dark"></i>
          <span>Data Masuk Layanan Homecare</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark" href="<?= base_url(); ?>emergency">
          <i class="fas fa-first-aid text-dark"></i>
          <span>Data Masuk Emergency</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark" href="<?= base_url(); ?>dokter">
          <i class="fas fa-user-md text-dark"></i>
          <span>Data Dokter</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark" href="index.html">
          <i class="fas fa-clipboard text-dark"></i>
          <span>Ubah Password</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark" href="index.html">
          <i class="fas fa-clipboard text-dark"></i>
          <span>Logout</span>
        </a>
      </li>

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

              </nav>
              <!-- End of Topbar -->

              <?php $this->load->view($konten); ?>
          </div>
          <!-- End of Main Content -->

          <!-- Footer -->
          <footer class="sticky-footer bg-white">
              <div class="container my-auto">
                  <div class="copyright text-center my-auto">
                      <span>Copyright &copy; Your Website 2021</span>
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
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                  <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">×</span>
                  </button>
              </div>
              <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
              <div class="modal-footer">
                  <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                  <a class="btn btn-primary" href="login.html">Logout</a>
              </div>
          </div>
      </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="<?= base_url(); ?>asset/js/jquery.min.js"></script>
  <script src="<?= base_url(); ?>asset/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?= base_url(); ?>asset/js/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?= base_url(); ?>asset/js/sb-admin-2.min.js"></script>
  <script src="<?= base_url(); ?>asset/js/daterangepicker.js"></script>
  <script src="<?= base_url(); ?>asset/js/moment.min.js"></script>
  <script src="<?= base_url(); ?>asset/js/jquery-ui.min.js"></script>
  <script src="<?= base_url(); ?>asset/dataTables.bootstrap4.min.js"></script>
  <script src="<?= base_url(); ?>asset/jquery.dataTables.min.js"></script>
  <script src="https://cdn.ckeditor.com/ckeditor5/29.1.0/classic/ckeditor.js"></script>

  <!-- Page level plugins -->
  <!-- <script src="vendor/chart.js/Chart.min.js"></script> -->

  <!-- Page level custom scripts -->
  <!-- <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script> -->
  <script>
    $(document).ready(function() {
      $('#dataTable').DataTable();
    });
    
    $(function () {
      'use strict'
      // The Calender
      $('#calendar').datetimepicker({
        format: 'L',
        inline: true
      })
    })
    
    ClassicEditor
      .create( document.querySelector( '#editor' ) )
      .catch( error => {
          console.error( error );
      } );
  </script>

</body>

</html>