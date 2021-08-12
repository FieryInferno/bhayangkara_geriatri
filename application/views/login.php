<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Login Administrator</title>

  <!-- Custom fonts for this template-->
  <link href="<?= base_url(); ?>asset/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?= base_url(); ?>asset/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body>

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-6 d-none d-lg-block text-center">
            <img src="<?= base_url(); ?>asset/img/rsbm.png" alt="" width="35%">
            <h2 class="text-white mt-3"><strong>SELAMAT DATANG DI SISTEM ADMIN BHAYANGKARA GERIATRI</strong></h2>
          </div>
          <div class="col-lg-6" style="background-color: #1d06c0;">
            <div class="p-5">
                <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">&nbsp;</h1>
                </div>
                <form class="user" action="<?= base_url(); ?>login">
                  <div class="form-group">
                    <input type="text" class="form-control form-control-user" id="username" placeholder="Username">
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control form-control-user" id="password" placeholder="Password">
                  </div>
                  <button type="submit" class="btn btn-success btn-user btn-block">Login</button>
                  <hr>
                </form>
                <hr>
            </div>
          </div>
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

</body>

</html>