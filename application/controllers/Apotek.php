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
		$tanggal = $this->input->post('tanggal');
		$bulan = $this->input->post('bulan');
		$tahun = $this->input->post('tahun');
		$data = array(
			'title' => 'Dashboard',
			'total_pasien' => $this->m_admin->total_pasien(),
			'total_obat' => $this->m_admin->total_obat(),
			'total_obat_keluar' => $this->m_admin->total_obat_keluar(),
			'total_berobat' => $this->m_admin->total_berobat(),
			'grafik' => $this->m_berobat->grafik(),
			'grafik_alamat' => $this->m_pasien->grafik_alamat(),
			'tanggal' => $tanggal,
			'bulan' => $bulan,
			'tahun' => $tahun,
			'analisis_tanggal' => $this->m_admin->analisis_tanggal($tanggal, $bulan, $tahun),
			'analisis_bulan' => $this->m_admin->analisis_bulan($bulan, $tahun),
			'analisis_tahun' => $this->m_admin->analisis_tahun($tahun),
			'isi' => 'v_apotek'
		);
		$this->load->view('layout/apotek/v_wrapper', $data, FALSE);
	}

	public function resep($id_berobat)
	{
		$data = array(
			'status_berobat' => '5'
		);
		$this->db->where('id_berobat', $id_berobat);
		$this->db->update('berobat', $data);
		$this->session->set_flashdata('pesan', 'Pesanan Diterima!!!');
		redirect('apotek/resep_pasien');
	}
	public function selesai($id_berobat)
	{
		$data = array(
			'status_berobat' => '6'
		);
		$this->db->where('id_berobat', $id_berobat);
		$this->db->update('berobat', $data);
		$this->session->set_flashdata('pesan', 'Pesanan Diterima!!!');
		redirect('apotek/resep_pasien');
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
			'pesanan' => $this->m_obat->resep(),
			'berobat' => $this->m_obat->berobat(),
			'isi' => 'layout/apotek/berobat/v_data_berobat'
		);
		$this->load->view('layout/apotek/v_wrapper', $data, FALSE);
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
			'isi' => 'layout/apotek/analisis/v_analisis_tanggal'
		);
		$this->load->view('layout/apotek/v_wrapper', $data, FALSE);
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
			'isi' => 'layout/apotek/analisis/v_analisis_bulan'
		);
		$this->load->view('layout/apotek/v_wrapper', $data, FALSE);
	}
	public function analisis_tahun()
	{

		$tahun = $this->input->post('tahun');
		$data = array(
			'title' => 'Analisis Obat Pertahun',
			'grafik' => $this->m_berobat->grafik(),
			'tahun' => $tahun,
			'analisis_tahun' => $this->m_admin->analisis_tahun($tahun),
			'isi' => 'layout/apotek/analisis/v_analisis_tahun'
		);
		$this->load->view('layout/apotek/v_wrapper', $data, FALSE);
	}
}

/* End of file Home.php */
