<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Content Row -->
  <div class="row">

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-12">
      <div class="card">
        <div class="card-header text-center">
          <h3><strong>Data Masuk Emergency</strong></h3>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Nama Pasien</th>
                  <th>Tanggal Lahir</th>
                  <th>Jenis Kelamin</th>
                  <th>Alamat</th>
                  <th>Lokasi</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>Nama Pasien</th>
                  <th>Tanggal Lahir</th>
                  <th>Jenis Kelamin</th>
                  <th>Alamat</th>
                  <th>Lokasi</th>
                </tr>
              </tfoot>
              <tbody>
                <?php
                  foreach ($emergency as $e) { ?>
                    <tr>
                      <td><?= $d['nama_lengkap']; ?></td>
                      <td><?= $d['tanggal_lahir']; ?></td>
                      <td><?= $d['jenis_kelamin'] == 'p' ? 'Perempuan' : 'Laki - Laki'; ?></td>
                      <td><?= $d['alamat']; ?></td>
                      <td><a href="#" class="btn btn-primary">Lihat Lokasi</a></td>
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