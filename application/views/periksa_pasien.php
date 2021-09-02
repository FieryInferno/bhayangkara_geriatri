 <link rel="stylesheet" type="text/css" href="https://printjs-4de6.kxcdn.com/print.min.css">
 <script src="https://printjs-4de6.kxcdn.com/print.min.js"></script>

<style>
    .modal-target {
  width: 300px;
  border-radius: 5px;
  cursor: pointer;
  transition: 0.3s;
}

.modal-target:hover {opacity: 0.7;}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.8); /* Black w/ opacity */
}

/* Modal Content (image) */
.modal-content {
  margin: auto;
  display: block;
  width: 50%;
  opacity: 1 !important;
  max-width: 500px;
}

/* Caption of Modal Image */
.modal-caption {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 1200px;
  text-align: center;
  color: white;
  font-weight: 700;
  font-size: 1em;
  margin-top: 32px;
}

/* Add Animation */
.modal-content, .modal-caption {  
  -webkit-animation-name: zoom;
  -webkit-animation-duration: 0.6s;
  animation-name: zoom;
  animation-duration: 0.6s;
}

@-webkit-keyframes zoom {
  from {-webkit-atransform:scale(0)} 
  to {-webkit-transform:scale(1)}
}

@keyframes zoom {
  from {transform:scale(0)} 
  to {transform:scale(1)}
}

/* The Close Button */
.modal-close {
  position: absolute;
  top: 15px;
  right: 35px;
  color: #f1f1f1;
  font-size: 40px;
  font-weight: bold;
  transition: 0.3s;
}

.modal-close:hover,
.modal-close:focus {
  color: #bbb;
  text-decoration: none;
  cursor: pointer;
}

#pic_bpjs{
  display: block;
  max-width:230px;
  max-height:95px;
  width: auto;
  height: auto;
}

}

</style>

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
          <div class="mb-3">
            <form action="<?= base_url(); ?>periksa_pasien" method="get">
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
          <div class="table-responsive" style="text-align:center;">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Tanggal Periksa</th>
                  <th>Nama Lengkap Pasien</th>
                  <th>Dokter</th>
                  <th>Jenis Bayar</th>
                  <th width="30%">Foto Kartu BPJS</th>
                  <th>Cetak BPJS</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>Tanggal Periksa</th>
                  <th>Nama Lengkap Pasien</th>
                  <th>Dokter</th>
                  <th>Jenis Bayar</th>
                  <th width="30%">Foto Kartu BPJS</th>
                  <th>Cetak BPJS</th>
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
                      <td><img id="pic_bpjs" class="modal-target" src="http://api.rsbmgeriatri.com/assets/bpjs/<?= $d['foto_bpjs']; ?>" alt="" ></td>
                      <td>
                          <a href="#" id="print_id" onclick="printJS('http://api.rsbmgeriatri.com/assets/bpjs/<?= $d['foto_bpjs']; ?>', 'image');return false;">
                              <button type="submit" class="btn btn-primary"><span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-printer" viewBox="0 0 16 16">
                              <path d="M2.5 8a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z"/>
                              <path d="M5 1a2 2 0 0 0-2 2v2H2a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h1v1a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2v-1h1a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2h-1V3a2 2 0 0 0-2-2H5zM4 3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v2H4V3zm1 5a2 2 0 0 0-2 2v1H2a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-1v-1a2 2 0 0 0-2-2H5zm7 2v3a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1z"/>
                            </svg></span> Print</button>
                            </a>
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

<!-- The Modal -->
<div id="modal" class="modal">
  <span id="modal-close" class="modal-close">&times;</span>
  <img id="modal-content" class="modal-content">
  <div id="modal-caption" class="modal-caption"></div>
</div>

</div>
<!-- /.container-fluid -->

<script>
function printImg(url) {
  var win = window.open('');
  win.document.write('<img src="' + url + '" onload="window.print();window.close()" />');
  win.focus();
}
</script>

<script>
    // Modal Setup
var modal = document.getElementById('modal');

var modalClose = document.getElementById('modal-close');
modalClose.addEventListener('click', function() { 
  modal.style.display = "none";
});

// global handler
document.addEventListener('click', function (e) { 
  if (e.target.className.indexOf('modal-target') !== -1) {
      var img = e.target;
      var modalImg = document.getElementById("modal-content");
      var captionText = document.getElementById("modal-caption");
      modal.style.display = "block";
      modalImg.src = img.src;
      captionText.innerHTML = img.alt;
   }
});

</script>