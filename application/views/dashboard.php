<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Content Row -->
  <div class="row">

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-8">
      <div class="card">
        <div class="card-header text-center">
          <h3><strong>SELAMAT DATANG</strong></h3>
          <h3><strong>DI SISTEM ADMIN BHAYANGKARAN GERIATRI</strong></h3>
        </div>
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col-xl-3"></div>
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3">
              <div class="card">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Dokter</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $dokter; ?></div>
                      </div>
                      <div class="col-auto">
                        <i class="fas fa-user-md fa-2x text-gray-300"></i>
                      </div>
                    </div>
                </div>
              </div>
            </div>
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3">
              <div class="card">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Pasien</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $pasien; ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-users fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-4">
      <!-- Calendar -->
      <div class="card">
        <div class="card-header border-0">

          <h3 class="card-title">
            <i class="far fa-calendar-alt"></i>
            Calendar
          </h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body pt-0">
          <!--The calendar -->
          <div id="calendar" style="width: 100%"></div>
        </div>
        <!-- /.card-body -->
      </div>
    </div>
  </div>

</div>
<!-- /.container-fluid -->