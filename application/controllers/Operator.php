<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Operator extends CI_Controller {
  
	public function index()
	{
    $data['konten'] = 'operator';
    $data['operator'] = $this->ModelUser->getOperator();
    $data['user'] = $this->ModelUser->getById($this->session->userdata('id_user'));
    if($data['user']['level_access'] !== 'admin') {
        redirect();
        } 
		$this->load->view('template', $data);
	}

  public function tambah()
  {
    $this->form_validation->set_rules('nama_user', 'Nama Operator', 'required');
    $this->form_validation->set_rules('username', 'Username', 'required');
    $this->form_validation->set_rules('password', 'Password', 'required');

    if ($this->form_validation->run()) {
      $this->ModelUser->tambah();
      $this->session->set_flashdata('pesan', 'Berhasil Tambah Operator');
    } else {
      $this->session->set_flashdata('error', 'Data Tidak Boleh Kosong');
    }
    redirect('operator');
  }

  public function hapus($id_user)
  {
    $this->ModelUser->hapus($id_user);
    $this->session->set_flashdata('pesan', 'Berhasil Hapus Operator');
    redirect('operator');
  }
}
