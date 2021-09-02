<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelEmergency extends CI_Model {
  
	public function getAll()
	{
    $this->db->join('pasien', 'emergency.pasien_id = pasien.id_pasien');
    return $this->db->get('emergency')->result_array();
	}

  public function getNotifikasi()
  {
    $this->db->join('pasien', 'emergency.pasien_id = pasien.id_pasien');
    return $this->db->get_where('emergency', ['notifikasi' => '0'])->result_array();
  }

  public function getByIdPasien($id_pasien)
  {
    $this->db->join('pasien', 'emergency.pasien_id = pasien.id_pasien');
    return $this->db->get_where('emergency', ['pasien_id'  => $id_pasien])->result_array();
  }

  public function ubahStatusByIdPasien($id_pasien)
  {
    $this->db->update('emergency', ['notifikasi' => '1'], ['pasien_id' => $id_pasien]);
  }
}
