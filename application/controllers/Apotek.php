<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Apotek extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_berobat');
		$this->load->model('m_admin');
		$this->load->model('m_pasien');
		$this->load->model('m_obat');
	}

	// List all your items
	public function index($offset = 0)
	{
		$data = array(
			'title' => 'Dashboard',
			'total_pasien' => $this->m_admin->total_pasien(),
			'total_obat' => $this->m_admin->total_obat(),
			'total_obat_keluar' => $this->m_admin->total_obat_keluar(),
			'total_berobat' => $this->m_admin->total_berobat(),
			'grafik' => $this->m_berobat->grafik(),
			'grafik_alamat' => $this->m_pasien->grafik_alamat(),
			'isi' => 'v_apotek'
		);
		$this->load->view('layout/apotek/v_wrapper', $data, FALSE);
	}

	// Add a new item
	public function bpjs()
	{
		$data = array(
			'title' => 'Data Pasien BPJS',
			'bpjs' => $this->m_admin->bpjs(),
			'isi' => 'layout/apotek/pasien/v_bpjs'
		);
		$this->load->view('layout/apotek/v_wrapper', $data, FALSE);
	}

	//Update one item
	public function non_bpjs()
	{
		$data = array(
			'title' => 'Data Pasien BPJS',
			'non_bpjs' => $this->m_admin->non_bpjs(),
			'isi' => 'layout/apotek/pasien/v_non_bpjs'
		);
		$this->load->view('layout/apotek/v_wrapper', $data, FALSE);
	}

	//Delete one item
	public function resep_pasien()
	{
		$data = array(
			'title' => 'Resep Obat',
			'obat' => $this->m_obat->pesan_obat(),
			'pesanan' => $this->m_obat->pemesanan(),
			'berobat' => $this->m_obat->berobat(),
			'isi' => 'layout/apotek/berobat/v_data_berobat'
		);
		$this->load->view('layout/apotek/v_wrapper', $data, FALSE);
	}
}

/* End of file Home.php */
