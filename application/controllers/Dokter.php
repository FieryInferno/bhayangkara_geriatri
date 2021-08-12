<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dokter extends CI_Controller {
  
	public function index()
	{
    $data['konten'] = 'dokter';
    $data['dokter'] = $this->ModelDokter->getAll();
		$this->load->view('template', $data);
	}

  public function tambah()
  {
    $this->form_validation->set_rules('nama_dokter', 'Nama Dokter', 'required');
    $this->form_validation->set_rules('no_ktp', 'No KTP', 'required');
    $this->form_validation->set_rules('password', 'Password', 'required');

    if ($this->form_validation->run()) {
      $this->ModelDokter->tambah();
      $this->session->set_flashdata('pesan', 'Berhasil Tambah Dokter');
    } else {
      $this->session->set_flashdata('error', 'Data Tidak Boleh Kosong');
    }
    redirect('dokter');
  }

  public function edit($id_dokter)
  {
    $this->form_validation->set_rules('nama_dokter', 'Nama Dokter', 'required');
    $this->form_validation->set_rules('no_ktp', 'No KTP', 'required');

    if ($this->form_validation->run()) {
      $this->ModelDokter->edit($id_dokter);
      $this->session->set_flashdata('pesan', 'Berhasil Edit Dokter');
    } else {
      $this->session->set_flashdata('error', 'Data Tidak Boleh Kosong');
    }
    redirect('dokter');
  }
}
