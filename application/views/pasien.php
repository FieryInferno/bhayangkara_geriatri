<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Content Row -->
  <div class="row">

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-12">
      <div class="card">
        <div class="card-header text-center">
          <h3><strong>Data Masuk Pendaftaran Pasien Baru</strong></h3>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Tanggal Daftar</th>
                  <th>Nama Pasien Lengkap</th>
                  <th>Tanggal Lahir</th>
                  <th>No. KTP</th>
                  <th>Jenis Kelamin</th>
                  <th>Agama</th>
                  <th>Pendidikan</th>
                  <th>Alamat</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>Tanggal Daftar</th>
                  <th>Nama Pasien Lengkap</th>
                  <th>Tanggal Lahir</th>
                  <th>No. KTP</th>
                  <th>Jenis Kelamin</th>
                  <th>Agama</th>
                  <th>Pendidikan</th>
                  <th>Alamat</th>
                </tr>
              </tfoot>
              <tbody>
                <?php
                  foreach ($pasien as $d) { ?>
                    <tr>
                      <td><?= tlg_indo(substr($d['created_at'], 0, 10)); ?></td>
                      <td><?= $d['nama_lengkap']; ?></td>
                      <td><?= $d['tanggal_lahir']; ?></td>
                      <td><?= $d['no_ktp']; ?></td>
                      <td><?= $d['jenis_kelamin'] == 'p' ? 'Perempuan' : 'Laki - Laki'; ?></td>
                      <td><?= $d['agama']; ?></td>
                      <td><?= $d['pendidikan']; ?></td>
                      <td><?= $d['alamat']; ?></td>
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