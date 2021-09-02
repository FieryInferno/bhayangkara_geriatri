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
          <?php
          if ($this->session->success) { ?>
            <div class="alert alert-success" role="alert">
              <?= $this->session->success; ?>
            </div>
          <?php }

          if ($this->session->error) { ?>
            <div class="alert alert-danger" role="alert">
              <?= $this->session->error; ?>
            </div>
          <?php }
          ?>
          <div class="mb-3">
            <form action="<?= base_url(); ?>pasien" method="get">
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
                  <th>Tanggal Daftar</th>
                  <th>Nomor Rekam Medis</th>
                  <th>Nama Pasien Lengkap</th>
                  <th>No. HP</th>
                  <th>Tanggal Lahir</th>
                  <th>No. KTP</th>
                  <th>Jenis Kelamin</th>
                  <th>Agama</th>
                  <th>Pendidikan</th>
                  <th>Alamat</th>
                  <th>Edit</th>
                  <th>Hapus</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>Tanggal Daftar</th>
                  <th>Nomor Rekam Medis</th>
                  <th>Nama Pasien Lengkap</th>
                  <th>No. HP</th>
                  <th>Tanggal Lahir</th>
                  <th>No. KTP</th>
                  <th>Jenis Kelamin</th>
                  <th>Agama</th>
                  <th>Pendidikan</th>
                  <th>Alamat</th>
                  <th>Edit</th>
                  <th>Hapus</th>
                </tr>
              </tfoot>
              <tbody>
                <?php $i = 1; ?>
                <?php
                foreach ($pasien as $d) { ?>
                  <tr>
                    <td><?= tgl_indo(substr($d['created_at'], 0, 10)); ?></td>
                    <td><?= $d['no_rekam_medis']; ?></td>
                    <td><?= $d['nama_lengkap']; ?></td>
                    <td><?= $d['no_hp']; ?></td>
                    <td><?= tgl_indo($d['tanggal_lahir']); ?></td>
                    <td><?= $d['no_ktp']; ?></td>
                    <td><?= $d['jenis_kelamin'] == 'p' ? 'Perempuan' : 'Laki - Laki'; ?></td>
                    <td><?= $d['agama']; ?></td>
                    <td><?= $d['pendidikan']; ?></td>
                    <td><?= $d['alamat']; ?></td>
                    <td>
                      <button type="button" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#editDataPasien<?= $i; ?>">Edit </button></button>
                    </td>
                    <td>
                      <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#hapus<?= $d['id_pasien']; ?>">Hapus</button>

                      <!-- Modal -->
                      <div class="modal fade" id="hapus<?= $d['id_pasien']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Hapus</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <form action="<?= base_url('pasien/hapus/' . $d['id_pasien']); ?>" method="post">
                              <div class="modal-body">
                                Apakah anda yakin akan menghapus data ini?
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-warning" data-dismiss="modal">Batal</button>
                                <button type="submit" class="btn btn-danger">Hapus</button>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <?php $i++; ?>
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

<?php $j = 1; ?>
<?php foreach ($pasien as $d) { ?>
  <!-- Modal -->
  <div class="modal fade" id="editDataPasien<?= $j; ?>" tabindex="-1" role="dialog" aria-labelledby="editDataPasienLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="editDataPasienLabel">Edit Data Pasien</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="<?= base_url('Pasien/editDataPasien/' . $d['id_pasien']); ?>" method="POST">
          <div class="modal-body">
            <div class="form-group">
              <label for="nama_lengkap">Nama Pasien: </label>
              <p class="form-control" /><?= $d['nama_lengkap']; ?></p>
            </div>
            <div class="form-group">
              <label for="no_ktp">Nomor KTP Pasien: </label>
              <p class="form-control" /><?= $d['no_ktp']; ?></p>
            </div>
            <div class="form-group">
              <label for="no_rekam_medis">Nomor Rekam Medis: </label>
              <input type="text" class="form-control" name="no_rekam_medis" id="no_rekam_medis" value="<?= $d['no_rekam_medis']; ?>" />
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <?php $j++; ?>
<?php } ?>