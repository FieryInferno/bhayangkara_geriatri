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
          <div class="mb-3">
            <form action="<?= base_url(); ?>homecare" method="get">
              <div class="col-lg-6">
                <div class="form-group">
                  <label>Date range:</label>

                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="far fa-calendar-alt"></i>
                      </span>
                    </div>
                    <input type="text" class="form-control float-right" id="reservation" name="tanggal">
                  </div>
                  <!-- /.input group -->
                </div>
                <button type="submit" class="btn btn-primary">Tampilkan</button>
                <!-- <button type="submit" class="btn btn-primary">Print</button> -->
                <!-- <a class="btn btn-primary" href="<?= base_url(); ?>admin/pembayaran/laporan_harian" target="_blank">Print Laporan Harian</a> -->
              </div>
            </form>
          </div>
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