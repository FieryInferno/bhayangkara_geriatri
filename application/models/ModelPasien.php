<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelPasien extends CI_Model
{

	public function getAll($tanggal_awal = NULL, $tanggal_akhir = NULL)
	{
		if ($tanggal_awal && $tanggal_akhir) {
			$this->db->where('created_at >=', $tanggal_awal);
			$this->db->where('created_at <=', $tanggal_akhir);
		}
		return $this->db->get('pasien')->result_array();
	}

	public function getPeriksa()
	{
		$this->db->join('pasien', 'pemeriksaan_pasien.pasien_id = pasien.id_pasien');
		$this->db->join('dokter', 'pemeriksaan_pasien.dokter_id = dokter.id_dokter');
		return $this->db->get('pemeriksaan_pasien')->result_array();
	}

	public function updateData($tableName, $data, $where)
	{
		$this->db->update($tableName, $data, $where);
		return $this->db->affected_rows();
	}

	public function getPasienById($id_pasien)
	{
		return $this->db->get_where('pasien', ['id_pasien' => $id_pasien])->row_array();
	}

	public function hapus($id_pasien)
	{
		$this->db->delete('pasien', ['id_pasien'  => $id_pasien]);
	}
}
