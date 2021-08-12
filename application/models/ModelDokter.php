<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelDokter extends CI_Model {
  
	public function getAll()
	{
    return $this->db->get('dokter')->result_array();
	}

  public function tambah()
  {
    $this->db->insert('dokter', [
      'nama_dokter' => $this->input->post('nama_dokter'),
      'no_ktp'      => $this->input->post('no_ktp'),
      'password'    => password_hash($this->input->post('password'), PASSWORD_DEFAULT)
    ]);
  }
}
