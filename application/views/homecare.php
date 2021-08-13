<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Content Row -->
  <div class="row">

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-12">
      <div class="card">
        <div class="card-header text-center">
          <h3><strong>Data Masuk Layanan Homecare</strong></h3>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Nama Pasien</th>
                  <th>No. HP</th>
                  <th>Lokasi</th>
                  <th>Keluhan</th>
                  <th>Kondisi Saat Ini</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>Nama Pasien</th>
                  <th>No. HP</th>
                  <th>Lokasi</th>
                  <th>Keluhan</th>
                  <th>Kondisi Saat Ini</th>
                </tr>
              </tfoot>
              <tbody>
                <?php
                  foreach ($dokter as $d) { ?>
                    <tr>
                      <td><?= $d['nama_lengkap']; ?></td>
                      <td><?= $d['no_hp']; ?></td>
                      <td><button class="btn btn-primary"></button></td>
                      <td><?= $d['keluhan']; ?></td>
                      <td><?= $d['kondisi_saat_ini']; ?></td>
                    </tr>
                  <?php }
                ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>
<!-- /.container-fluid -->