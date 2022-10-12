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
			'isi' => 'layout/dokter/rekamedis/v_rekammedis'
		);
		$this->load->view('layout/dokter/v_wrapper', $data, FALSE);
	}
}

/* End of file Home.php */
