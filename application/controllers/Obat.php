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

	public function add()
	{
		$this->form_validation->set_rules('nama_obat', 'Nama Obat', 'required', array('required' => '%s Mohon Untuk Diisi'));
		$this->form_validation->set_rules('jenis_obat', 'Jenis Obat', 'required', array('required' => '%s Mohon Untuk Diisi'));
		$this->form_validation->set_rules('stock', 'Stock', 'required', array('required' => '%s Mohon Untuk Diisi'));


		if ($this->form_validation->run() == FALSE) {
			$data = array(
				'title' => 'Tambah Obat',
				'isi' => 'layout/backend/obat/v_add'
			);
			$this->load->view('layout/backend/v_wrapper', $data, FALSE);
		} else {
			$data = array(
				'nama_obat' => $this->input->post('nama_obat'),
				'jenis_obat' => $this->input->post('jenis_obat'),
				'stock' => $this->input->post('stock'),
			);
			$this->m_obat->add($data);
			$this->session->set_flashdata('pesan', 'Data Berhasil Ditambahkan');
			redirect('obat');
		}
	}

	public function edit($id_obat = NULL)
	{
		$this->form_validation->set_rules('nama_obat', 'Nama Obat', 'required', array('required' => '%s Mohon Untuk Diisi'));
		$this->form_validation->set_rules('jenis_obat', 'Jenis Obat', 'required', array('required' => '%s Mohon Untuk Diisi'));
		$this->form_validation->set_rules('stock', 'Stock', 'required', array('required' => '%s Mohon Untuk Diisi'));


		if ($this->form_validation->run() == FALSE) {
			$data = array(
				'title' => 'Tambah Obat',
				'detail' => $this->m_obat->detail($id_obat),
				'isi' => 'layout/backend/obat/v_edit'
			);
			$this->load->view('layout/backend/v_wrapper', $data, FALSE);
		} else {
			$data = array(
				'id_obat' => $id_obat,
				'nama_obat' => $this->input->post('nama_obat'),
				'jenis_obat' => $this->input->post('jenis_obat'),
				'stock' => $this->input->post('stock'),
			);
			$this->m_obat->edit($data);
			$this->session->set_flashdata('pesan', 'Data Berhasil Ditambahkan');
			redirect('obat');
		}
	}

	public function delete($id_obat)
	{
		$data = array(
			'id_obat' => $id_obat
		);
		$this->m_obat->delete($data);
		$this->session->set_flashdata('pesan', 'Data Obat Berhasil Dihapus');
		redirect('obat');
	}
}
