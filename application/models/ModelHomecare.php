<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelHomecare extends CI_Model {
  
	public function getAll()
	{
    $this->db->join('pasien', 'pelayanan_homecare.pasien_id = pasien.id_pasien');
    return $this->db->get('pelayanan_homecare')->result_array();
	}
}
