<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homecare extends CI_Controller {
  
	public function index($id_pasien = NULL)
	{
    $data['konten']   = 'homecare';
    if ($id_pasien) {
      $data['homecare'] = $this->ModelHomecare->getByIdPasien($id_pasien);
      $this->ModelHomecare->ubahStatusByIdPasien($id_pasien);
    } else {
      if ($this->input->get()) {
        $tanggal        = explode(' - ', $this->input->get('tanggal'));
        $tanggal_awal   = explode('/', $tanggal[0]);
        $tanggal_awal   = $tanggal_awal[2] . '-' . $tanggal_awal[0] . '-' . $tanggal_awal[1];
        $tanggal_akhir  = explode('/', $tanggal[1]);
        $tanggal_akhir  = $tanggal_akhir[2] . '-' . $tanggal_akhir[0] . '-' . $tanggal_akhir[1];
      } else {
        $tanggal_awal   = NULL;
        $tanggal_akhir  = NULL;
      }

      $data['homecare'] = $this->ModelHomecare->getAll($tanggal_awal, $tanggal_akhir);
    }
    $data['user'] = $this->ModelUser->getById($this->session->userdata('id_user'));
		$this->load->view('template', $data);
	}
}
