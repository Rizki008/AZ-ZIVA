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

	public function gejala()
	{
		$data = array(
			'title' => 'Data Analisis Gejala',
			'isi' => 'layout/pemilik/analisis_gejala/v_analisis'
		);
		$this->load->view('layout/pemilik/v_wrapper', $data, FALSE);
	}
	//gejala
	public function analisis_tanggal_gejala()
	{

		$tanggal = $this->input->post('tanggal');
		$bulan = $this->input->post('bulan');
		$tahun = $this->input->post('tahun');
		$data = array(
			'title' => 'Analisis Gejala Pertanggal',
			'grafik' => $this->m_berobat->grafik_gejala(),
			'tanggal' => $tanggal,
			'bulan' => $bulan,
			'tahun' => $tahun,
			'analisis_tanggal' => $this->m_admin->analisis_tanggal_gejala($tanggal, $bulan, $tahun),
			'isi' => 'layout/pemilik/analisis_gejala/v_analisis_tanggal'
		);
		$this->load->view('layout/pemilik/v_wrapper', $data, FALSE);
	}
	public function analisis_bulan_gejala()
	{
		$bulan = $this->input->post('bulan');
		$tahun = $this->input->post('tahun');
		$data = array(
			'title' => 'Analisis Gejala Perbulan',
			'grafik' => $this->m_berobat->grafik_gejala(),
			'bulan' => $bulan,
			'tahun' => $tahun,
			'analisis_bulan' => $this->m_admin->analisis_bulan_gejala($bulan, $tahun),
			'isi' => 'layout/pemilik/analisis_gejala/v_analisis_bulan'
		);
		$this->load->view('layout/pemilik/v_wrapper', $data, FALSE);
	}
	public function analisis_tahun_gejala()
	{

		$tahun = $this->input->post('tahun');
		$data = array(
			'title' => 'Analisis Gejala Pertahun',
			'grafik' => $this->m_berobat->grafik_gejala(),
			'tahun' => $tahun,
			'analisis_tahun' => $this->m_admin->analisis_tahun_gejala($tahun),
			'isi' => 'layout/pemilik/analisis_gejala/v_analisis_tahun'
		);
		$this->load->view('layout/pemilik/v_wrapper', $data, FALSE);
	}
	public function bpjs()
	{
		$data = array(
			'title' => 'Data Analisis BPJS',
			'isi' => 'layout/pemilik/analisis_bpjs/v_analisis'
		);
		$this->load->view('layout/pemilik/v_wrapper', $data, FALSE);
	}
	//gejala
	public function analisis_tanggal_bpjs()
	{

		$tanggal = $this->input->post('tanggal');
		$bulan = $this->input->post('bulan');
		$tahun = $this->input->post('tahun');
		$data = array(
			'title' => 'Analisis BPJS Pertanggal',
			'grafik' => $this->m_berobat->grafik_bpjsa(),
			'tanggal' => $tanggal,
			'bulan' => $bulan,
			'tahun' => $tahun,
			'analisis_tanggal' => $this->m_admin->analisis_tanggal_bpjs($tanggal, $bulan, $tahun),
			'isi' => 'layout/pemilik/analisis_bpjs/v_analisis_tanggal'
		);
		$this->load->view('layout/pemilik/v_wrapper', $data, FALSE);
	}
	public function analisis_bulan_bpjs()
	{
		$bulan = $this->input->post('bulan');
		$tahun = $this->input->post('tahun');
		$data = array(
			'title' => 'Analisis BPJS Perbulan',
			'grafik' => $this->m_berobat->grafik_bpjsa(),
			'bulan' => $bulan,
			'tahun' => $tahun,
			'analisis_bulan' => $this->m_admin->analisis_bulan_bpjs($bulan, $tahun),
			'isi' => 'layout/pemilik/analisis_bpjs/v_analisis_bulan'
		);
		$this->load->view('layout/pemilik/v_wrapper', $data, FALSE);
	}
	public function analisis_tahun_bpjs()
	{

		$tahun = $this->input->post('tahun');
		$data = array(
			'title' => 'Analisis BPJS Pertahun',
			'grafik' => $this->m_berobat->grafik_bpjsa(),
			'tahun' => $tahun,
			'analisis_tahun' => $this->m_admin->analisis_tahun_bpjs($tahun),
			'isi' => 'layout/pemilik/analisis_bpjs/v_analisis_tahun'
		);
		$this->load->view('layout/pemilik/v_wrapper', $data, FALSE);
	}
	//obat
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
