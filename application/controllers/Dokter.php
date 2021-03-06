<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Dokter extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_berobat');
		$this->load->model('m_admin');
		$this->load->model('m_pasien');
	}

	// List all your items
	public function index($offset = 0)
	{
		$data = array(
			'title' => 'Dashboard',
			'total_pasien' => $this->m_admin->total_pasien(),
			'total_obat' => $this->m_admin->total_obat(),
			'total_daftar' => $this->m_admin->total_daftar(),
			'total_berobat' => $this->m_admin->total_berobat(),
			'grafik' => $this->m_berobat->grafik(),
			'grafik_gejala_pasien' => $this->m_berobat->grafik_penyakit(),
			'isi' => 'v_dokter'
		);
		$this->load->view('layout/dokter/v_wrapper', $data, FALSE);
	}

	// Add a new item
	public function bpjs()
	{
		$data = array(
			'title' => 'Data Pasien BPJS',
			'bpjs' => $this->m_admin->bpjs(),
			'isi' => 'layout/dokter/pasien/v_bpjs'
		);
		$this->load->view('layout/dokter/v_wrapper', $data, FALSE);
	}

	//Update one item
	public function non_bpjs()
	{
		$data = array(
			'title' => 'Data Pasien BPJS',
			'non_bpjs' => $this->m_admin->non_bpjs(),
			'isi' => 'layout/dokter/pasien/v_non_bpjs'
		);
		$this->load->view('layout/dokter/v_wrapper', $data, FALSE);
	}

	//Delete one item
	public function delete($id = NULL)
	{
	}
}

/* End of file Home.php */
