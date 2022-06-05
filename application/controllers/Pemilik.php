<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Pemilik extends CI_Controller
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
		$tanggal = $this->input->post('tanggal');
		$bulan = $this->input->post('bulan');
		$tahun = $this->input->post('tahun');
		$data = array(
			'title' => 'Dashboard',
			'total_pasien' => $this->m_admin->total_pasien(),
			'total_obat' => $this->m_admin->total_obat(),
			'total_daftar' => $this->m_admin->total_daftar(),
			'total_berobat' => $this->m_admin->total_berobat(),
			'grafik_alamat_pasien' => $this->m_berobat->grafik_alamat(),
			'grafik_gejala_pasien' => $this->m_berobat->grafik_penyakit(),
			'grafik_bpjs' => $this->m_berobat->grafik_bpjs(),
			'grafik_nonbpjs' => $this->m_berobat->grafik_nonbpjs(),
			'grafik_bpjs_analis' => $this->m_berobat->grafik_bpjs_analis(),
			'tanggal' => $tanggal,
			'bulan' => $bulan,
			'tahun' => $tahun,
			'analisis_tanggal' => $this->m_admin->analisis_tanggal($tanggal, $bulan, $tahun),
			'analisis_bulan' => $this->m_admin->analisis_bulan($bulan, $tahun),
			'analisis_tahun' => $this->m_admin->analisis_tahun($tahun),
			'isi' => 'v_pemilik'
		);
		$this->load->view('layout/pemilik/v_wrapper', $data, FALSE);
	}


	public function analisis_tanggal()
	{

		$tanggal = $this->input->post('tanggal');
		$bulan = $this->input->post('bulan');
		$tahun = $this->input->post('tahun');
		$data = array(
			'title' => 'Analisis Obat Pertanggal',
			'grafik' => $this->m_berobat->grafik(),
			'tanggal' => $tanggal,
			'bulan' => $bulan,
			'tahun' => $tahun,
			'analisis_tanggal' => $this->m_admin->analisis_tanggal($tanggal, $bulan, $tahun),
			'isi' => 'layout/pemilik/analisis/v_analisis_tanggal'
		);
		$this->load->view('layout/pemilik/v_wrapper', $data, FALSE);
	}
	public function analisis_bulan()
	{
		$bulan = $this->input->post('bulan');
		$tahun = $this->input->post('tahun');
		$data = array(
			'title' => 'Analisis Obat Perbulan',
			'grafik' => $this->m_berobat->grafik(),
			'bulan' => $bulan,
			'tahun' => $tahun,
			'analisis_bulan' => $this->m_admin->analisis_bulan($bulan, $tahun),
			'isi' => 'layout/pemilik/analisis/v_analisis_bulan'
		);
		$this->load->view('layout/pemilik/v_wrapper', $data, FALSE);
	}
	public function analisis_tahun()
	{

		$tahun = $this->input->post('tahun');
		$data = array(
			'title' => 'Analisis Obat Pertahun',
			'grafik' => $this->m_berobat->grafik(),
			'tahun' => $tahun,
			'analisis_tahun' => $this->m_admin->analisis_tahun($tahun),
			'isi' => 'layout/pemilik/analisis/v_analisis_tahun'
		);
		$this->load->view('layout/pemilik/v_wrapper', $data, FALSE);
	}
}

/* End of file Home.php */
