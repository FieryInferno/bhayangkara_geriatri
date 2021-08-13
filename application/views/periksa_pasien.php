<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Content Row -->
  <div class="row">

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-12">
      <div class="card">
        <div class="card-header text-center">
          <h3><strong>Data Masuk Periksa Pasien</strong></h3>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Tanggal Periksa</th>
                  <th>Nama Lengkap Pasien</th>
                  <th>Dokter</th>
                  <th>Jenis Bayar</th>
                  <th>Foto Karut BPJS</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>Tanggal Periksa</th>
                  <th>Nama Lengkap Pasien</th>
                  <th>Dokter</th>
                  <th>Jenis Bayar</th>
                  <th>Foto Karut BPJS</th>
                </tr>
              </tfoot>
              <tbody>
                <?php
                  foreach ($pasien as $d) { ?>
                    <tr>
                      <td><?= tgl_indo(substr($d['created_at'], 0, 10)); ?></td>
                      <td><?= $d['nama_lengkap']; ?></td>
                      <td><?= $d['nama_dokter']; ?></td>
                      <td><?= $d['jenis_bayar']; ?></td>
                      <td><img src="<?= base_url('asset/' . $d['foto_bpjs']); ?>" alt="" width="50%"></td>
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