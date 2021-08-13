<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelPasien extends CI_Model {
  
	public function getAll()
	{
    return $this->db->get('pasien')->result_array();
	}
  
	public function getPeriksa()
	{
    $this->db->join('pasien', 'pemeriksaan_pasien.pasien_id = pasien.id_pasien');
    $this->db->join('dokter', 'pemeriksaan_pasien.dokter_id = dokter.id_dokter');
    return $this->db->get('pemeriksaan_pasien')->result_array();
	}
}
