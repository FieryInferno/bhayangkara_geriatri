<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelEmergency extends CI_Model {
  
	public function getAll()
	{
    $this->db->join('pasien', 'emergency.pasien_id = pasien.id_pasien');
    return $this->db->get('emergency')->result_array();
	}
}
