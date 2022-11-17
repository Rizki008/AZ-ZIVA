<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Rekam_medis extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_admin');
	}

	// List all your items
	public function index($offset = 0)
	{
		$data = array(
			'title' => 'Data Rekam Medis',
			'rekam' => $this->m_admin->rekam_medis(),
			// 'obat' => $this->m_admin->obat(),
			'isi' => 'layout/dokter/rekamedis/v_rekammedis'
		);
		// echo $this->db->last_query($data);

		$this->load->view('layout/dokter/v_wrapper', $data, FALSE);
	}

	public function detail($no_resep)
	{
		$data = array(
			'title' => 'Data Rekam Medis',
			'detail' => $this->m_admin->detail($no_resep),
			'isi' => 'layout/dokter/rekamedis/v_detail'
		);
		// echo $this->db->last_query($data);

		$this->load->view('layout/dokter/v_wrapper', $data, FALSE);
	}
}

/* End of file Home.php */
