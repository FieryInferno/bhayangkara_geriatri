<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelPasien extends CI_Model {
  
	public function getAll()
	{
    return $this->db->get('pasien')->result_array();
	}
}
