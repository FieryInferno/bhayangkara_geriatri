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
      'spesialis'   => $this->input->post('spesialis'),
      'no_ktp'      => $this->input->post('no_ktp'),
      'password'    => password_hash($this->input->post('password'), PASSWORD_DEFAULT)
    ]);
  }

  public function edit($id_dokter)
  {
    $data = [
      'nama_dokter' => $this->input->post('nama_dokter'),
      'spesialis'   => $this->input->post('spesialis'),
      'no_ktp'      => $this->input->post('no_ktp')
    ];
    if ($this->input->post('password')) $data['password'] = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
    $this->db->update('dokter', $data, ['id_dokter' => $id_dokter]);
  }

  public function hapus($id_dokter)
  {
    $this->db->delete('dokter', ['id_dokter'  => $id_dokter]);
  }
}
