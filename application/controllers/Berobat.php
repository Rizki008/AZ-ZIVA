<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Berobat extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_berobat');
		$this->load->model('m_pasien');
		$this->load->model('m_obat');
	}

	public function index()
	{
		$data = array(
			'title' => 'Data Pasien Daftar Berobat',
			'berobat' => $this->m_berobat->berobat(),
			'isi' => 'layout/backend/berobat/v_brobat'
		);
		$this->load->view('layout/backend/v_wrapper', $data, FALSE);
	}

	public function pasien_berobat()
	{
		$data = array(
			'title' => 'Data Pasien Berobat',
			'pasien_berobat' => $this->m_berobat->data_berobat(),
			'isi' => 'layout/backend/berobat/v_data_berobat'
		);
		$this->load->view('layout/backend/v_wrapper', $data, FALSE);
	}

	public function pasien_selesai_berobat()
	{
		$data = array(
			'title' => 'Data Pasien Berobat',
			'pasien_selesai_berobat' => $this->m_berobat->data_berobat_selesai(),
			'isi' => 'layout/backend/berobat/v_data_selesai_berobat'
		);
		$this->load->view('layout/backend/v_wrapper', $data, FALSE);
	}

	public function proses($id_berobat = NULL)
	{
		$data = array(
			'id_berobat' => $id_berobat,
			'status' => 1,
		);
		$this->m_berobat->update($data);
		$this->session->set_flashdata('pesan', 'Data Berhasil Ditambahkan');
		redirect('berobat');
	}

	public function resep_obat()
	{
		$data = array(
			'title' => 'Data Obat',
			'resep_obat' => $this->m_berobat->resep_obat(),
			'isi' => 'layout/backend/obat/v_detail_obat'
		);
		$this->load->view('layout/backend/v_wrapper', $data, FALSE);
	}

	public function update($id_berobat = NULL)
	{
		$data = array(
			'id_berobat' => $id_berobat,
			'nama_dokter' => $this->input->post('nama_dokter'),
			'nama_penyakit' => $this->input->post('nama_penyakit'),
			'berobat' => $this->input->post('berobat'),
			'status' => 2,
		);
		$this->m_berobat->update($data);
		$this->session->set_flashdata('pesan', 'Data Berhasil Ditambahkan');
		redirect('berobat/pasien_berobat');
	}

	public function delete($id_berobat = NULL)
	{
		$data = array(
			'id_berobat' => $id_berobat,
		);
		$this->m_berobat->delete($data);
		$this->session->set_flashdata('pesan', 'Data Berhasil Ditambahkan');
		redirect('berobat/pasien_selesai_berobat');
	}
}
