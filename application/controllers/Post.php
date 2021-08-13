<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Post extends CI_Controller {
  
	public function index()
	{
    $data['konten'] = 'post';
		$this->load->view('template', $data);
	}

  public function tambah()
  {
    $this->form_validation->set_rules('judul', 'Judul', 'trim|required');
    $this->form_validation->set_rules('konten', 'Konten', 'required');

    
    if ($this->form_validation->run() == TRUE) {
      $this->ModelPost->tambah();
      $this->session->set_flashdata('success', 'Berhasil menambah postingan');
    } else {
      $this->session->set_flashdata('error', 'Data tidak boleh kosong');
    }
    redirect('post');
  }
}
