<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Emergency extends CI_Controller {
  
	public function index($id_pasien = NULL)
	{
    $data['konten']     = 'emergency';
    if ($id_pasien) {
      $data['emergency'] = $this->ModelEmergency->getByIdPasien($id_pasien);
      $this->ModelEmergency->ubahStatusByIdPasien($id_pasien);
    } else {
      $data['emergency'] = $this->ModelEmergency->getAll();
    }
    $data['emergency']  = $this->ModelEmergency->getAll();
    $data['user'] = $this->ModelUser->getById($this->session->userdata('id_user'));
		$this->load->view('template', $data);
	}
}
