<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Obat extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_obat');
	}

	public function index()
	{
		$data = array(
			'title' => 'Data Obat',
			'obat' => $this->m_obat->obat(),
			'isi' => 'layout/backend/obat/v_obat'
		);
		$this->load->view('layout/backend/v_wrapper', $data, FALSE);
	}
	public function obat_masuk()
	{
		$data = array(
			'title' => 'Data Obat',
			'obat_masuk' => $this->m_obat->obat_masuk(),
			'isi' => 'layout/backend/obat/v_obat_masuk'
		);
		$this->load->view('layout/backend/v_wrapper', $data, FALSE);
	}
	public function obat_keluar()
	{
		$data = array(
			'title' => 'Data Obat',
			'obat_keluar' => $this->m_obat->obat_keluar(),
			'isi' => 'layout/backend/obat/v_obat_keluar'
		);
		$this->load->view('layout/backend/v_wrapper', $data, FALSE);
	}

	public function add_obat_masuk()
	{
		$data = array(
			'nama_obat' => $this->input->post('nama_obat'),
			'jenis_obat' => $this->input->post('jenis_obat'),
			'qty' => $this->input->post('qty'),
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
			'qty' => $this->input->post('qty'),
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
}
