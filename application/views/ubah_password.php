<!-- Begin Page Content -->
<div class="container">

  <!-- Content Row -->
  <div class="row">

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-12">
      <form action="<?= base_url(); ?>ubah_password" method="post" enctype="multipart/form-data">
        <div class="card">
          <div class="card-header text-center">
            <h3><strong>Ubah Password</strong></h3>
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
            <div class="form-group row">
              <label for="staticEmail" class="col-sm-2 col-form-label">Password Lama</label>
              <div class="col-sm-10">
                <input type="password" class="form-control" name="password_lama" required>
              </div>
            </div>
            <div class="form-group row">
              <label for="staticEmail" class="col-sm-2 col-form-label">Password Baru</label>
              <div class="col-sm-10">
                <input type="password" class="form-control" name="password_baru" required>
              </div>
            </div>
            <div class="form-group row">
              <label for="staticEmail" class="col-sm-2 col-form-label">Konfirmasi Password</label>
              <div class="col-sm-10">
                <input type="password" class="form-control" name="konfirmasi_password" required>
              </div>
            </div>
          </div>
          <div class="card-footer">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">Ubah Password</button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Ubah Password</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    Apakah anda yakin akan mengubah password?
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Ubah Password</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>

</div>
<!-- /.container-fluid -->