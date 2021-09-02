<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Post extends CI_Controller {
  
	public function index()
	{
    $data['konten'] = 'post';
    $data['post']   = $this->ModelPost->getAll();
    $data['user'] = $this->ModelUser->getById($this->session->userdata('id_user'));
    if($data['user']['level_access'] !== 'admin') {
        redirect();
        } 
        
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

  public function edit($id_post)
  {
    if ($this->input->post()) {
      $this->ModelPost->edit($id_post);
      $this->session->set_flashdata('success', 'Berhasil mengedit postingan');
      redirect('post');
    }
    $data['postingan']  = $this->ModelPost->getById($id_post);
    $data['konten']     = 'post';
    $data['post']       = $this->ModelPost->getAll();
    $data['user'] = $this->ModelUser->getById($this->session->userdata('id_user'));
    $this->load->view('template', $data);
  }

  public function hapus($id_post)
  {
    $this->ModelPost->delete($id_post);
    $this->session->set_flashdata('success', 'Berhasil mengedit postingan');
    redirect('post');
  }
}
