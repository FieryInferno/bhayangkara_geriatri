<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelUser extends CI_Model {
  
	public function getByUsername($username)
	{
    return $this->db->get_where('user', ['username' => $username])->row_array();
	}
}
