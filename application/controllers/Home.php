<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_pasien');
	}
	public function index()
	{
		$data = array(
			'title' => 'Home',
			'hapus_otomatis' => $this->m_pasien->hapus_otomatis(),
			'hapus_data' => $this->m_pasien->hapus_data(),
			'isi' => 'v_home'
		);
		$this->load->view('layout/frontend/v_wrapper', $data, FALSE);
	}
}
