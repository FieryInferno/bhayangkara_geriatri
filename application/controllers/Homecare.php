<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homecare extends CI_Controller {
  
	public function index()
	{
    $data['konten'] = 'homecare';
    $data['dokter'] = $this->ModelHomecare->getAll();
		$this->load->view('template', $data);
	}
}
