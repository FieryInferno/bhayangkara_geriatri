<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pasien extends CI_Controller {
  
	public function index()
	{
    $data['konten'] = 'pasien';
    $data['pasien'] = $this->ModelPasien->getAll();
		$this->load->view('template', $data);
	}
  
	public function periksa()
	{
    $data['konten'] = 'periksa_pasien';
    $data['pasien'] = $this->ModelPasien->getPeriksa();
		$this->load->view('template', $data);
	}
}
