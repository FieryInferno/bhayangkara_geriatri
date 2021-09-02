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

  public function getAll()
  {
    return $this->db->get('post')->result_array();
  }

  public function getById($id_post)
  {
    return $this->db->get_where('post', ['id_post'  => $id_post])->row_array();
  }

  public function edit($id_post)
  {
    if ($_FILES['gambar']['name'] !== '') {
      $gambar = $this->upload();
      file_exists('asset/' . $this->input->post('gambar_lama')) ? unlink('asset/' . $this->input->post('gambar_lama')) : '';
    } else {
      $gambar = $this->input->post('gambar_lama');
    }
    $this->db->update('post', [
      'judul'   => $this->input->post('judul'),
      'gambar'  => $gambar,
      'konten'  => $this->input->post('konten')
    ], ['id_post' => $id_post]);
  }

  public function delete($id_post)
  {
    $this->db->delete('post', ['id_post'  => $id_post]);
  }
}
