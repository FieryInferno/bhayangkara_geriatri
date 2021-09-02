<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Content Row -->
  <div class="row">

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-12">
      <form action="<?= isset($postingan['id_post']) ? base_url('post/edit/' . $postingan['id_post']) : base_url('post/tambah') ?>" method="post" enctype="multipart/form-data">
        <div class="card">
          <div class="card-header text-center">
            <h3><strong>Buat Postingan</strong></h3>
            <!-- <div class=""> -->
              <!-- Button trigger modal -->
              <?php
                if (isset($postingan['id_post'])) echo '<button type="button" class="btn btn-success float-right" data-toggle="modal" data-target="#edit">Edit</button>';
                else echo '<button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#tambah">Post</button>';
              ?>
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

              <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Edit</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      Apakah anda yakin akan mengedit postingan?
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                      <button type="submit" class="btn btn-success">Simpan</button>
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
                <input type="text" class="form-control" name="judul" required value="<?= isset($postingan['judul']) ? $postingan['judul'] : '' ?>">
              </div>
            </div>
            <div class="form-group row">
              <label for="staticEmail" class="col-sm-1 col-form-label">Gambar</label>
              <div class="col-sm-11">
                <input type="file" class="form-control" name="gambar" <?= isset($postingan['id_post']) ? '' : 'required' ?>>
                <input type="hidden" name="gambar_lama" value="<?= isset($postingan['gambar']) ? $postingan['gambar'] : '' ?>">
              </div>
            </div>
            <div class="form-group row">
              <label for="staticEmail" class="col-sm-1 col-form-label">Konten</label>
              <div class="col-sm-11">
                <textarea name="konten" id="editor" cols="30" rows="10" class="form-control"><?= isset($postingan['konten']) ? $postingan['konten'] : "" ?></textarea>
              </div>
            </div>
          </div>
        </div>
      </form>
    </div>
    <div class="col-xl-12">
      <div class="card">
        <div class="card-header text-center">
          <h3><strong>Daftar Postingan</strong></h3>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th width="20%">Judul</th>
                  <th width="30%">Gambar</th>
                  <th width="50%">Konten</th>
                  <th width="10%">Aksi</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>Judul</th>
                  <th>Gambar</th>
                  <th>Konten</th>
                  <th>Aksi</th>
                </tr>
              </tfoot>
              <tbody>
                <?php
                  foreach ($post as $d) { ?>
                    <tr>
                      <td><?= $d['judul']; ?></td>
                      <td><img src="<?= base_url('asset/' . $d['gambar']); ?>" alt="Gambar Postingan" width="50%"></td>
                      <td><?= $d['konten']; ?></td>
                      <td>
                        <a href="<?= base_url('post/edit/' . $d['id_post']); ?>" class="btn btn-success"><i class="fas fa-pencil-alt"></i></a>
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#hapus<?= $d['id_post']; ?>"><i class="fas fa-trash"></i></button>

                        <!-- Modal -->
                        <div class="modal fade" id="hapus<?= $d['id_post']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Posting</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                Apakah anda yakin akan menghapus postingan?
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-success" data-dismiss="modal">Batal</button>
                                <a href="<?= base_url('post/hapus/' . $d['id_post']); ?>" class="btn btn-danger">Hapus</a>
                              </div>
                            </div>
                          </div>
                        </div>
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