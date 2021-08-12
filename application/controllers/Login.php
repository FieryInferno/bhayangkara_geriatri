<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
  
	public function index()
	{
    if ($this->input->post()) {
      // print_r($this->input->post());
      // die();
      $this->form_validation->set_rules('username', 'Username', 'required');
      $this->form_validation->set_rules('password', 'Password', 'required');

      if ($this->form_validation->run()) {
        $data = $this->ModelUser->getByUsername($this->input->post('username'));
        if ($data) {
          if (password_verify($this->input->post('password'), $data['password'])) {
            $this->session->set_userdata([
              'login'     => TRUE
            ]);
            redirect('dashboard');
          } else {
            $this->session->set_flashdata(['pesan'  => 'Password salah']);
          }
        } else {
          $this->session->set_flashdata(['pesan'  => 'Username salah']);
        }
      } else {
        $this->session->set_flashdata(['pesan'  => 'Data username dan password harus diisi']);
      }
      redirect('login');
    }
		$this->load->view('login');
	}
}
