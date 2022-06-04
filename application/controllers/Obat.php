<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Obat extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_obat');
		$this->load->model('m_admin');
		$this->load->model('m_berobat');
		$this->load->model('m_pasien');
	}

	public function index()
	{
		$data = array(
			'title' => 'Data Obat',
			'obat' => $this->m_obat->obat(),
			'isi' => 'layout/apotek/obat/v_obat'
		);
		$this->load->view('layout/apotek/v_wrapper', $data, FALSE);
	}
	public function obat_masuk()
	{
		$data = array(
			'title' => 'Data Obat',
			'obat_masuk' => $this->m_obat->obat_masuk(),
			'isi' => 'layout/apotek/obat/v_obat_masuk'
		);
		$this->load->view('layout/apotek/v_wrapper', $data, FALSE);
	}
	public function obat_keluar()
	{
		$data = array(
			'title' => 'Data Obat',
			'obat_keluar' => $this->m_obat->obat_keluar(),
			'isi' => 'layout/apotek/obat/v_obat_keluar'
		);
		$this->load->view('layout/apotek/v_wrapper', $data, FALSE);
	}

	public function add_obat_masuk()
	{
		$data = array(
			'nama_obat' => $this->input->post('nama_obat'),
			'jenis_obat' => $this->input->post('jenis_obat'),
			'stock' => $this->input->post('stock'),
			'tgl_masuk' => date('Y-m-d'),
		);
		$this->m_obat->add_obat_masuk($data);
		$this->session->set_flashdata('pesan', 'Data Berhasil Ditambahkan');
		redirect('obat/obat_masuk');
	}

	public function edit_obat_masuk($id_obat_masuk = NULL)
	{
		$data = array(
			'id_obat_masuk' => $id_obat_masuk,
			'nama_obat' => $this->input->post('nama_obat'),
			'jenis_obat' => $this->input->post('jenis_obat'),
			'stock' => $this->input->post('stock'),
			'tgl_masuk' => date('Y-m-d'),
		);
		$this->m_obat->edit_obat_masuk($data);
		$this->session->set_flashdata('pesan', 'Data Berhasil Ditambahkan');
		redirect('obat/obat_masuk');
	}

	public function delete_obat_masuk($id_obat_masuk)
	{
		$data = array(
			'id_obat_masuk' => $id_obat_masuk
		);
		$this->m_obat->delete_obat_masuk($data);
		$this->session->set_flashdata('pesan', 'Data Obat Berhasil Dihapus');
		redirect('obat/obat_masuk');
	}

	// Add a new item
	public function bpjs()
	{
		$data = array(
			'title' => 'Data Pasien BPJS',
			'bpjs' => $this->m_admin->bpjs(),
			'grafik' => $this->m_berobat->grafik(),
			'grafik_alamat' => $this->m_pasien->grafik_alamat(),
			'grafik_alamat_pasien' => $this->m_berobat->grafik_alamat(),
			'grafik_gejala_pasien' => $this->m_berobat->grafik_penyakit(),
			'grafik_nonbpjs' => $this->m_berobat->grafik_nonbpjs(),
			'grafik_bpjs_analis' => $this->m_berobat->grafik_bpjs_analis(),
			'isi' => 'layout/pemilik/pasien/v_bpjs'
		);
		$this->load->view('layout/pemilik/v_wrapper', $data, FALSE);
	}

	//Update one item
	public function non_bpjs()
	{
		$data = array(
			'title' => 'Data Pasien Non BPJS',
			'non_bpjs' => $this->m_admin->non_bpjs(),
			'grafik' => $this->m_berobat->grafik(),
			'grafik_alamat' => $this->m_pasien->grafik_alamat(),
			'grafik_alamat_pasien' => $this->m_berobat->grafik_alamat(),
			'grafik_gejala_pasien' => $this->m_berobat->grafik_penyakit(),
			'grafik_bpjs_analis' => $this->m_berobat->grafik_bpjs_analis(),
			'grafik_nonbpjs' => $this->m_berobat->grafik_nonbpjs(),
			'isi' => 'layout/pemilik/pasien/v_non_bpjs'
		);
		$this->load->view('layout/pemilik/v_wrapper', $data, FALSE);
	}
}
