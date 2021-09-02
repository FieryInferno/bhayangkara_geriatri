<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title><?= $user['level_access']; ?></title>

  <!-- Custom fonts for this template-->
  <link href="<?= base_url(); ?>asset/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?= base_url(); ?>asset/css/sb-admin-2.min.css" rel="stylesheet">
  <link href="<?= base_url(); ?>asset/css/daterangepicker.css" rel="stylesheet">
  <link href="<?= base_url(); ?>asset/dataTables.bootstrap4.min.css" rel="stylesheet">
  <link href="https://cdn.datatables.net/buttons/1.7.1/css/buttons.dataTables.min.css" rel="stylesheet">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

</head>

<body id="page-top" onload="getNotifikasi()">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-white sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <div class="nav-item text-center">
        <img src="<?= base_url(); ?>asset/img/rsbm.png" alt="" width="50%">
      </div>
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-text mb-3 text-dark"><?= $user['level_access']; ?> - <?= $user['nama_user']; ?></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0" style="border-top: 1px solid #dbdbdb;">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link text-dark" href="<?= base_url(); ?>dashboard">
          <i class="fas fa-th-large text-dark"></i>
          <span>Dashboard</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark" href="<?= base_url(); ?>notifikasi">
          <i class="fas fa-bell text-dark"></i>
          <span id="notifikasi-sidebar">Notifikasi <?= notifikasi() > 1 ? '<span class="badge badge-danger">' . notifikasi() . '</span>' : ''; ?></span>
        </a>
      </li>
      <?php if($user['level_access'] == 'admin') { ?>
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
      <?php } ?>
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
      <?php if($user['level_access'] == 'admin') { ?>
      <li class="nav-item">
        <a class="nav-link text-dark" href="<?= base_url(); ?>dokter">
          <i class="fas fa-user-md text-dark"></i>
          <span>Data Dokter</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark" href="<?= base_url(); ?>operator">
          <i class="fas fa-user-cog text-dark"></i>
          <span>Data Operator</span>
        </a>
      </li>
      <?php } ?>
      <li class="nav-item">
        <a class="nav-link text-dark" href="<?= base_url(); ?>ubah_password">
          <i class="fas fa-key text-dark"></i>
          <span>Ubah Password</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark" data-toggle="modal" data-target="#logout">
          <i class="fas fa-sign-out-alt text-dark"></i>
          <span>Logout</span>
        </a>

        <!-- Modal -->
        <div class="modal fade" id="logout" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Logout</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                Apakah anda yakin akan keluar dari aplikasi?
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <a href="<?= base_url(); ?>logout" class="btn btn-danger">Logout</a>
              </div>
            </div>
          </div>
        </div>
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
                      <span>Copyright &copy; RS Bhayangkara Geriatri 2021</span>
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
  <audio id="alarm">
    <source src="<?= base_url(); ?>asset/alarm.mp3" type="audio/mpeg">
  </audio>

  <!-- Bootstrap core JavaScript-->
  <script src="<?= base_url(); ?>asset/js/jquery.min.js"></script>
  <script src="<?= base_url(); ?>asset/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?= base_url(); ?>asset/js/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?= base_url(); ?>asset/js/sb-admin-2.min.js"></script>
  <script src="<?= base_url(); ?>asset/js/jquery-ui.min.js"></script>
  <script src="<?= base_url(); ?>asset/js/moment.min.js"></script>
  <script src="<?= base_url(); ?>asset/js/daterangepicker.js"></script>
  <script src="<?= base_url(); ?>asset/jquery.dataTables.min.js"></script>
  <script src="<?= base_url(); ?>asset/dataTables.bootstrap4.min.js"></script>
  <script src="https://cdn.ckeditor.com/ckeditor5/29.1.0/classic/ckeditor.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.7.1/js/dataTables.buttons.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.html5.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.print.min.js"></script>

  <!-- Page level plugins -->
  <!-- <script src="vendor/chart.js/Chart.min.js"></script> -->

  <!-- Page level custom scripts -->
  <!-- <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script> -->
  <script>
    let jumlahHC        = 'NULL';
    let jumlahEmergency = 'NULL';

    $(document).ready(function() {
      $('#dataTable').DataTable({
        dom: 'Bfrtip',
        buttons: [
          'csv', 'pdf'
        ]
      });
      
      $('#calendar').datepicker({
        format: 'L',
        inline: true
      })
      
      $('#reservation').daterangepicker()

      if ('<?= $this->uri->segment(1); ?>' == 'periksa_pasien') {
        getPeriksaPasien();
      }
    });
    
    ClassicEditor
      .create( document.querySelector( '#editor' ) )
      .catch( error => {
        console.error( error );
    });

    function getNotifikasi() {
      let alarm = $('#alarm');

      setInterval(() => {
        notifikasi();
      }, 3000);
    }

    function notifikasi() {
      <?php
        if (isset($_GET['tipe'])) { ?>
          tipe  = '<?= $_GET["tipe"]; ?>';
        <?php } else { ?>
          tipe  = 'NULL';
        <?php }
      ?>
      $.ajax({
        url   : '<?= base_url('get_notifikasi'); ?>',
        type  : 'GET',
        success: function(data) {
          let result  = JSON.parse(data);
          let jumlah  = result.homecare.length + result.emergency.length;
          if (jumlah > 0) $('#notifikasi-sidebar').html(
            `Notifikasi <span class="badge badge-danger">${jumlah}</span>` 
          );
          
          if (jumlahHC !== 'NULL') {
            if (jumlahHC !== result.homecare.length) {
              alarm.play();
            }
          }

          if (jumlahEmergency !== 'NULL') {
            if (jumlahEmergency !== result.emergency.length) {
              alarm.play();
            }
          }

          jumlahHC        = result.homecare.length;
          jumlahEmergency = result.emergency.length;

          <?php
            if ($this->uri->segment(1) == 'notifikasi') { ?>
    
              let notif   = ''; 
              switch (tipe) {
                case 'homecare':
                  result.homecare.forEach(element => {
                    notif += `
                      <a href="<?= base_url('homecare/'); ?>${element.pasien_id}">
                        <div class="card">
                          <div class="card-body bg-warning text-white">
                            Pasien dengan nama ${element.nama_lengkap} memesan pelayanan homecare dengan keluhan ${element.keluhan} dan kondisi saat ini ${element.kondisi_saat_ini}
                          </div>
                        </div>
                      </a>`;
                  });
                  $('#notif').html(notif);
                  break;
                case 'emergency':
                  result.emergency.forEach(element => {
                    notif += `
                      <a href="<?= base_url('emergency/'); ?>${element.pasien_id}">
                        <div class="card">
                          <div class="card-body bg-danger text-white">
                            Pasien dengan nama ${element.nama_lengkap} memesan pelayanan emergency
                          </div>
                        </div>
                      </a>`;
                  });
                  $('#notif').html(notif);
                  break;
              
                default:
                  break;
              }
              if (result.homecare.length > 0) $('#jumlahHomecare').html(result.homecare.length);
              if (result.emergency.length > 0) $('#jumlahEmergency').html(result.emergency.length);
            <?php }
          ?>
        }
      })
    }

    function getPeriksaPasien() {

      let username  = 'admin';
      let password  = '1234';

      $.ajax({
        type: 'GET',
        url: 'https://api.rsbmgeriatri.com/api/Pemeriksaan',
        contentType: "application/json",
        dataType: 'json',
        headers: {
          "Authorization": "Basic " + btoa(username + ":" + password)
        },
        beforeSend  : function (xhr) {
          xhr.setRequestHeader ("Authorization", "Basic " + btoa('admin:1234'));
        },
        success: function(data) {
          console.log(data);
        },
        error: function(error) {
          console.log("FAIL....=================");
        }
      });
    }
  </script>

</body>

</html>