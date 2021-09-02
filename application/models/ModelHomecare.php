<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelHomecare extends CI_Model {
  
	public function getAll()
	{
    $this->db->join('pasien', 'pelayanan_homecare.pasien_id = pasien.id_pasien');
    return $this->db->get('pelayanan_homecare')->result_array();
	}

  public function getNotifikasi()
  {
    $this->db->join('pasien', 'pelayanan_homecare.pasien_id = pasien.id_pasien');
    return $this->db->get_where('pelayanan_homecare', ['notifikasi' => '0'])->result_array();
  }

  public function getByIdPasien($id_pasien)
  {
    $this->db->join('pasien', 'pelayanan_homecare.pasien_id = pasien.id_pasien');
    return $this->db->get_where('pelayanan_homecare', ['pasien_id'  => $id_pasien])->result_array();
  }

  public function ubahStatusByIdPasien($id_pasien)
  {
    $this->db->update('pelayanan_homecare', ['notifikasi' => '1'], ['pasien_id' => $id_pasien]);
  }
}
