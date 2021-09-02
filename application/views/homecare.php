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
                  <th>Tanggal Pelayanan</th>
                  <th>Nama Pasien</th>
                  <th>No. HP</th>
                  <th>Lokasi</th>
                  <th>Keluhan</th>
                  <th>Kondisi Saat Ini</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>Tanggal Pelayanan</th>
                  <th>Nama Pasien</th>
                  <th>No. HP</th>
                  <th>Lokasi</th>
                  <th>Keluhan</th>
                  <th>Kondisi Saat Ini</th>
                </tr>
              </tfoot>
              <tbody>
                <?php
                  foreach ($homecare as $d) { ?>
                    <tr>
                      <td><?= tgl_indo($d['tanggal_pelayanan']); ?></td>
                      <td><?= $d['nama_pasien']; ?></td>
                      <td><?= $d['no_hp']; ?></td>
                      <td><a href="https://www.google.com/maps/search/?api=1&query=<?= $d['latitude'] . ', ' . $d['longitude']; ?>" class="btn btn-primary" target="_blank">Lihat Lokasi</a></td>
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