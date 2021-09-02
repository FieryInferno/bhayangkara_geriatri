<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Content Row -->
  <div class="row">

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-12">
      <div class="card">
        <div class="card-header text-center">
          <h3><strong>Notifikasi</strong></h3>
        </div>
        <div class="card-body">
          <a href="?tipe=homecare" class="btn btn-warning btn-xl">Homecare <span class="badge badge-light" id="jumlahHomecare"><?= $homecare > 0 ? $homecare : ''; ?></span></a>
          <a href="?tipe=emergency" class="btn btn-danger btn-xl">Emergency <span class="badge badge-light" id="jumlahEmergency"><?= $emergency > 0 ? $emergency : ''; ?></span></a>
        </div>
      </div>
      <?php
        if ($this->input->get()) { ?>
          <div class="card">
            <div class="card-header"></div>
            <div class="card-body" id="notif">
              <?php
                switch ($this->input->get('tipe')) {
                  case 'homecare':
                    foreach ($notif as $d) { ?>
                      <a href="<?= base_url('homecare/' . $d['id_pasien']); ?>">
                        <div class="card">
                          <div class="card-body bg-warning text-white">
                            Pasien dengan nama <?= $d['nama_lengkap']; ?> memesan pelayanan homecare dengan keluhan <?= $d['keluhan']; ?> dan kondisi saat ini <?= $d['kondisi_saat_ini']; ?>
                          </div>
                        </div>
                      </a>
                    <?php }
                    break;

                  case 'emergency':
                    foreach ($notif as $d) { ?>
                      <a href="<?= base_url('emergency/' . $d['id_pasien']); ?>">
                        <div class="card">
                          <div class="card-body bg-danger text-white">
                            Pasien dengan nama <?= $d['nama_lengkap']; ?> memesan pelayanan emergency
                          </div>
                        </div>
                      </a>
                    <?php }
                    break;

                  default:
                    # code...
                    break;
                
                } 
              ?>
            </div>
          </div>
        <?php }
      ?>
    </div>
  </div>

</div>
<!-- /.container-fluid -->