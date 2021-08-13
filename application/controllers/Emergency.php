<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Emergency extends CI_Controller {
  
	public function index()
	{
    $data['konten']     = 'emergency';
    $data['emergency']  = $this->ModelEmergency->getAll();
		$this->load->view('template', $data);
	}
}
