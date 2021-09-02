<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelUser extends CI_Model {
  
	public function getByUsername($username)
	{
    return $this->db->get_where('user', ['username' => $username])->row_array();
	}

  public function ubah_password()
  {
    $this->db->update('user', ['password' => password_hash($this->input->post('password_baru'), PASSWORD_DEFAULT)], ['id_user' => $this->session->id_user]);
  }

  public function getById($id_user)
  {
    return $this->db->get_where('user', ['id_user'  => $id_user])->row_array(); 
  }
  
  public function getOperator()
    {
        return $this->db->get_where('user', ['level_access' => 'operator'])->result_array();
    }
    
     public function tambah()
  {
    $this->db->insert('user', [
      'nama_user'         => $this->input->post('nama_user'),
      'username'          => $this->input->post('username'),
      'level_access'      => 'operator',
      'password'          => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
      'created_at'        => date('Y-m-d h:i:s', time()),
      'update_at'        => date('Y-m-d h:i:s', time())
    ]);
  }
  
  public function hapus($id_user)
  {
    $this->db->delete('user', ['id_user'  => $id_user]);
  }
}
