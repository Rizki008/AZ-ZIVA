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
			'title' => 'Data Pasien Berobat',
			'berobat' => $this->m_berobat->berobat(),
			'isi' => 'layout/backend/berobat/v_brobat'
		);
		$this->load->view('layout/backend/v_wrapper', $data, FALSE);
	}

	public function add()
	{
		$this->form_validation->set_rules('id_pasien', 'Nama Pasien', 'required', array('required' => '%s Mohon Di isi Dengan Pasien Yang Sudah Terdaftar!!'));
		$this->form_validation->set_rules('id_obat', 'Nama Obat', 'required', array('required' => '%s Mohon Untuk Diisi!!!'));
		$this->form_validation->set_rules('nama_penyakit', 'Penyakit Di Derita', 'required', array('required' => '%s Mohon Untuk Diisi!!'));
		$this->form_validation->set_rules('nama_dokter', 'Nama Dokter', 'required', array('required' => '%s Mohon Untuk Diisi!!'));
		// $this->form_validation->set_rules('resep_obat', 'Resep Obat', 'required', array('required' => '%s Mohon Untuk Diisi!!'));
		$this->form_validation->set_rules('jml_obat', 'Jumlah Obat', 'required', array('required' => '%s Mohon Untuk Diisi!!'));
		$this->form_validation->set_rules('berobat', 'Berobat', 'required', array('required' => '%s Mohon Untuk Diisi!!'));

		if ($this->form_validation->run() == FALSE) {
			$data = array(
				'title' => 'Tambah Data Berobat',
				'pasien' => $this->m_pasien->pasien(),
				// 'obat' => $this->m_obat->obat(),
				'isi' => 'layout/backend/berobat/v_add'
			);
			$this->load->view('layout/backend/v_wrapper', $data, FALSE);
		} else {
			$data = array(
				'id_pasien' => $this->input->post('id_pasien'),
				'id_obat' => $this->input->post('id_obat'),
				'nama_penyakit' => $this->input->post('nama_penyakit'),
				'nama_dokter' => $this->input->post('nama_dokter'),
				// 'resep_obat' => $this->input->post('resep_obat'),
				'jml_obat' => $this->input->post('jml_obat'),
				'berobat' => $this->input->post('berobat'),
			);
			$this->m_berobat->add($data);
			$this->session->set_flashdata('pesan', 'Data Berhasil Ditambahkan');
			redirect('berobat');
		}
	}

	public function edit($id_berobat = NULL)
	{
		$this->form_validation->set_rules('id_pasien', 'Nama Pasien', 'required', array('required' => '%s Mohon Di isi Dengan Pasien Yang Sudah Terdaftar!!'));
		$this->form_validation->set_rules('id_obat', 'Nama Obat', 'required', array('required' => '%s Mohon Untuk Diisi!!!'));
		$this->form_validation->set_rules('nama_penyakit', 'Penyakit Di Derita', 'required', array('required' => '%s Mohon Untuk Diisi!!'));
		$this->form_validation->set_rules('nama_dokter', 'Nama Dokter', 'required', array('required' => '%s Mohon Untuk Diisi!!'));
		$this->form_validation->set_rules('resep_obat', 'Resep Obat', 'required', array('required' => '%s Mohon Untuk Diisi!!'));
		$this->form_validation->set_rules('jml_obat', 'Jumlah Obat', 'required', array('required' => '%s Mohon Untuk Diisi!!'));
		$this->form_validation->set_rules('berobat', 'Berobat', 'required', array('required' => '%s Mohon Untuk Diisi!!'));


		if ($this->form_validation->run() == FALSE) {
			$data = array(
				'title' => 'Edit Data Berobat',
				'detail' => $this->m_berobat->detail($id_berobat),
				'isi' => 'layout/backend/berobat/v_edit'
			);
			$this->load->view('layout/backend/v_wrapper', $data, FALSE);
		} else {
			$data = array(
				'id_berobat' => $id_berobat,
				'id_pasien' => $this->input->post('id_pasien'),
				'id_obat' => $this->input->post('id_obat[]'),
				'nama_penyakit' => $this->input->post('nama_penyakit'),
				'nama_dokter' => $this->input->post('nama_dokter'),
				'resep_obat' => $this->input->post('resep_obat'),
				'jml_obat' => $this->input->post('jml_obat'),
				'berobat' => $this->input->post('berobat'),
			);
			$this->m_berobat->edit($data);
			$this->session->set_flashdata('pesan', 'Data Berhasil Ditambahkan');
			redirect('berobat');
		}
	}

	public function delete($id_berobat)
	{
		$data = array(
			'id_berobat' => $id_berobat,
		);
		$this->m_berobat->delete($data);
		$this->session->set_flashdata('pesan', 'Data Obat Berhasil Dihapus');
		redirect('berobat');
	}
}
