<?php
defined('BASEPATH') or exit('No direct script access allowed');

require FCPATH . '/vendor/autoload.php';

use Kreait\Firebase\Factory;

class Pasien extends CI_Controller
{

	public function index()
	{
		$data['konten'] = 'pasien';

		if ($this->input->get()) {
			$tanggal        = explode(' - ', $this->input->get('tanggal'));
			$tanggal_awal   = explode('/', $tanggal[0]);
			$tanggal_awal   = $tanggal_awal[2] . '-' . $tanggal_awal[0] . '-' . $tanggal_awal[1];
			$tanggal_akhir  = explode('/', $tanggal[1]);
			$tanggal_akhir  = $tanggal_akhir[2] . '-' . $tanggal_akhir[0] . '-' . $tanggal_akhir[1];
		} else {
			$tanggal_awal   = NULL;
			$tanggal_akhir  = NULL;
		}

		$data['pasien'] = $this->ModelPasien->getAll($tanggal_awal, $tanggal_akhir);
		$data['user'] = $this->ModelUser->getById($this->session->userdata('id_user'));
		if ($data['user']['level_access'] !== 'admin') {
			redirect();
		}
		$this->load->view('template', $data);
	}

	public function periksa()
	{
		$data['konten'] = 'periksa_pasien';
		$data['pasien'] = $this->ModelPasien->getPeriksa();
		$data['user'] = $this->ModelUser->getById($this->session->userdata('id_user'));
		if ($data['user']['level_access'] !== 'admin') {
			redirect();
		}
		$this->load->view('template', $data);
	}

	public function editDataPasien($id_pasien)
	{
		// $this->form_validation->set_rules('no_rekam_medis','Nomor Rekam Medis','required');

		// if($this->form_validation->run == TRUE) {
		$data['no_rekam_medis'] = $this->input->post('no_rekam_medis');

		if ($this->ModelPasien->updateData('pasien', $data, ['id_pasien' => $id_pasien]) > 0) {
			$this->session->set_flashdata('success', 'Nomor Rekam Medis Berhasil Di Update.');
			redirect('Pasien');
		} else {
			$this->session->set_flashdata('error', 'Nomor Rekam Medis Gagal Di Update.');
			redirect('Pasien');
		}
		// } else {
		//     $this->session->set_flashdata('error', 'Edit Pasien Gagal. Nomor Rekam Medis tidak boleh kosong.');
		//     redirect('Pasien');
		// }

	}

	public function hapus($id_pasien)
	{
		$pasien =  $this->ModelPasien->getPasienById($id_pasien);

		$email = $pasien['email'];

		$factory = (new Factory)->withServiceAccount(FCPATH . 'application/config/bhayangkara-chat-firebase-adminsdk-73r1z-06600f061a.json');
		$auth = $factory->createAuth();
		try {
			$user = $auth->getUserByEmail($email);
		} catch (\Kreait\Firebase\Exception\Auth\UserNotFound $e) {
			echo $e->getMessage();
		}

		if (!empty($user)) {
			$userArray = (array) $user;
			$uid = $userArray['uid'];
			$auth->deleteUser($uid);
		}

		$this->ModelPasien->hapus($id_pasien);
		$this->session->set_flashdata('success', 'Berhasil Hapus Pasien');
		redirect('Pasien');
	}
}
