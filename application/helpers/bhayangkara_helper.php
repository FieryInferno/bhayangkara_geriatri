<?php
  function tgl_indo($tanggal){
    $bulan = array (
      1 =>   'Januari',
      'Februari',
      'Maret',
      'April',
      'Mei',
      'Juni',
      'Juli',
      'Agustus',
      'September',
      'Oktober',
      'November',
      'Desember'
    );
    $pecahkan = explode('-', $tanggal);
    return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
  }

  function notifikasi()
  { 
    $CI =& get_instance();

    $homecare   = count($CI->ModelHomecare->getNotifikasi());
    $emergency  = count($CI->ModelEmergency->getNotifikasi());

    return $homecare + $emergency;
  }