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
      $data['homecare'] = $this->ModelHomecare->getAll();
    }
    $data['user'] = $this->ModelUser->getById($this->session->userdata('id_user'));
		$this->load->view('template', $data);
	}
}
