<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelPost extends CI_Model {
  
  public function tambah()
  {
    $this->db->insert('post', [
      'judul'   => $this->input->post('judul'),
      'gambar'  => $this->upload(),
      'konten'  => $this->input->post('konten')
    ]);
  }

  public function upload()
  {
    $config['upload_path']    = './asset/';
    $config['allowed_types']  = 'jpg|png|jpeg';

    $this->load->library('upload', $config);

    if ( ! $this->upload->do_upload('gambar')) {
      $this->session->set_flashdata('error', 'Gagal mengupload gambar');
      redirect('post');
    } else {
      return $this->upload->data('file_name');
    }
  }
}
