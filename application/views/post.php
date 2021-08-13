<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Content Row -->
  <div class="row">

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-12">
      <form action="<?= base_url(); ?>post/tambah" method="post" enctype="multipart/form-data">
        <div class="card">
          <div class="card-header text-center">
            <h3><strong>Buat Postingan</strong></h3>
            <!-- <div class=""> -->
              <!-- Button trigger modal -->
              <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#tambah">Post</button>

              <!-- Modal -->
              <div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Posting</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      Apakah anda yakin akan menambahkan postingan?
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                      <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                  </div>
                </div>
              </div>
            <!-- </div> -->
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
            <div class="form-group row">
              <label for="staticEmail" class="col-sm-1 col-form-label">Judul</label>
              <div class="col-sm-11">
                <input type="text" class="form-control" name="judul" required>
              </div>
            </div>
            <div class="form-group row">
              <label for="staticEmail" class="col-sm-1 col-form-label">Gambar</label>
              <div class="col-sm-11">
                <input type="file" class="form-control" name="gambar" required>
              </div>
            </div>
            <div class="form-group row">
              <label for="staticEmail" class="col-sm-1 col-form-label">Konten</label>
              <div class="col-sm-11">
                <textarea name="konten" id="editor" cols="30" rows="10" class="form-control"></textarea>
              </div>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>

</div>
<!-- /.container-fluid -->