<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Content Row -->
  <div class="row">

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-12">
      <div class="card">
        <div class="card-header text-center">
          <h3><strong>Data Dokter</strong></h3>
          <!-- <div class=""> -->
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#tambah">Tambah Data Dokter</button>

            <!-- Modal -->
            <div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Dokter</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <form action="<?= base_url(); ?>dokter/tambah" method="post">
                    <div class="modal-body">
                      <div class="form-group row">
                        <label for="staticEmail" class="col-sm-4 col-form-label">Nama Dokter</label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control" name="nama_dokter" required>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="staticEmail" class="col-sm-4 col-form-label">No. KTP</label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control" name="no_ktp" required>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="staticEmail" class="col-sm-4 col-form-label">Password</label>
                        <div class="col-sm-8">
                          <input type="password" class="form-control" name="password" required>
                        </div>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                      <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          <!-- </div> -->
        </div>
        <div class="card-body">
          <?php
            if ($this->session->pesan) { ?>
              <div class="alert alert-success" role="alert">
                <?= $this->session->pesan; ?>
              </div>
            <?php }
            
            if ($this->session->error) { ?>
              <div class="alert alert-danger" role="alert">
                <?= $this->session->error; ?>
              </div>
            <?php }
          ?>
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Nama Dokter</th>
                  <th>No. Ktp</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>Nama Dokter</th>
                  <th>No. Ktp</th>
                  <th>Aksi</th>
                </tr>
              </tfoot>
              <tbody>
                <?php
                  foreach ($dokter as $d) { ?>
                    <tr>
                      <td><?= $d['nama_dokter']; ?></td>
                      <td><?= $d['no_ktp']; ?></td>
                      <td>
                        <a href="#" class="btn btn-success">Edit</a>
                        <button class="btn btn-danger">Hapus</button>  
                      </td>
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