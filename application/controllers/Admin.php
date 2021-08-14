<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
  
	public function index()
	{
    $data['konten'] = 'dashboard';
    $data['dokter'] = count($this->ModelDokter->getAll());
    $data['pasien'] = count($this->ModelPasien->getAll());
		$this->load->view('template', $data);
	}
}
