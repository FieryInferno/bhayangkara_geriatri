<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
  
	public function index()
	{
    $data['konten'] = 'dashboard';
    $data['dokter'] = count($this->ModelDokter->getAll());
    $data['pasien'] = count($this->ModelPasien->getAll());
    $data['user'] = $this->ModelUser->getById($this->session->userdata('id_user'));
    
		$this->load->view('template', $data);
	}

  public function ubahPassword()
  {
    if ($this->input->post()) {
      $this->form_validation->set_rules('password_lama', 'Password Lama', 'trim|required');
      $this->form_validation->set_rules('password_baru', 'Password Baru', 'trim|required');
      $this->form_validation->set_rules('konfirmasi_password', 'Konfirmasi Password', 'trim|required|matches[password_baru]');
      
      if ($this->form_validation->run() == TRUE) {
        $data = $this->ModelUser->getById($this->session->id_user);
        if (password_verify($this->input->post('password_lama'), $data['password'])) {
          $this->ModelUser->ubah_password();
          $this->session->set_flashdata('pesan', 'Berhasil ubah password');
        } else {
          $this->session->set_flashdata('error', 'Password lama tidak sesuai');
        }
      } else {
        $this->session->set_flashdata('error', 'Data tidak boleh kosong');
      }
      redirect('ubah_password');
    }
    $data['konten'] = 'ubah_password';
    $data['user'] = $this->ModelUser->getById($this->session->userdata('id_user'));
    $this->load->view('template', $data);
  }

  public function notifikasi()
  {
    if ($this->input->get()) {
      switch ($this->input->get('tipe')) {
        case 'homecare':
          $data['notif']  = $this->ModelHomecare->getNotifikasi();
          break;
        case 'emergency':
          $data['notif']  = $this->ModelEmergency->getNotifikasi();
          break;
        
        default:
          # code...
          break;
      }
    }
    $data['homecare']   = count($this->ModelHomecare->getNotifikasi());
    $data['emergency']  = count($this->ModelEmergency->getNotifikasi());
    $data['konten']     = 'notifikasi';
    $data['user'] = $this->ModelUser->getById($this->session->userdata('id_user'));
		$this->load->view('template', $data);
  }

  public function getNotifikasi()
  {
    $data = [
      'homecare'  => $this->ModelHomecare->getNotifikasi(),
      'emergency' => $this->ModelEmergency->getNotifikasi()
    ];
    echo json_encode($data);
  }
}
