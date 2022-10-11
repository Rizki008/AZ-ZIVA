<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Pasien extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_auth');
		$this->load->model('m_pasien');
		$this->load->model('m_admin');
	}

	public function register()
	{
		$this->form_validation->set_rules('nama_pasien', 'Nama Pasien', 'required', array('required' => '%s Mohon Untuk diisi!!'));
		$this->form_validation->set_rules('no_berobat', 'Nama Pasien', 'required', array('required' => '%s Mohon Untuk diisi!!'));
		$this->form_validation->set_rules('username', 'Username', 'required', array('required' => '%s Mohon Untuk diisi!!'));
		$this->form_validation->set_rules('password', 'Password', 'required', array('required' => '%s Mohon Untuk diisi!!'));
		$this->form_validation->set_rules('jenis_kl', 'Jenis Kelamin', 'required', array('required' => '%s Mohon Untuk diisi!!'));
		$this->form_validation->set_rules('usia', 'Usia', 'required', array('required' => '%s Mohon Untuk diisi!!'));
		$this->form_validation->set_rules('alamat', 'Alamat', 'required', array('required' => '%s Mohon Untuk diisi!!'));
		$this->form_validation->set_rules('bpjs', 'bpjs', 'required', array('required' => '%s Mohon Untuk diisi!!'));


		if ($this->form_validation->run() == FALSE) {
			$data = array(
				'title' => 'Registrasi Akun',
				'isi' => 'layout/frontend/register/v_register'
			);
			$this->load->view('layout/frontend/v_wrapper', $data, FALSE);
		} else {
			$data = array(
				'nama_pasien' => $this->input->post('nama_pasien'),
				'no_berobat' => $this->input->post('no_berobat'),
				'username' => $this->input->post('username'),
				'password' => $this->input->post('password'),
				'jenis_kl' => $this->input->post('jenis_kl'),
				'usia' => $this->input->post('usia'),
				'alamat' => $this->input->post('alamat'),
				'bpjs' => $this->input->post('bpjs'),
				'datang_berobat' => 1,
				'tgl_daftar' => date('Y-m-d'),
			);
			$this->m_pasien->register($data);
			$this->session->set_flashdata('pesan', 'Registrasi Berhasil, Silahkan Untuk Login');
			redirect('pasien/login');
		}
	}

	public function login()
	{
		$this->form_validation->set_rules('username', 'Username', 'required', array('required' => '%s Mohon Untuk diisi!!'));
		$this->form_validation->set_rules('password', 'Password', 'required', array('required' => '%s Mohon Untuk diisi!!'));


		if ($this->form_validation->run() == TRUE) {
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$this->pasien_login->login($username, $password);
		}
		$data = array(
			'title' => 'Login Pasien',
			'isi' => 'layout/frontend/login/v_login'
		);
		$this->load->view('layout/frontend/v_wrapper', $data, FALSE);
	}

	public function logout()
	{
		$this->pasien_login->logout();
	}

	public function berobat()
	{
		$this->pasien_login->proteksi_halaman();
		$data = array(
			'title' => 'Daftar Berobat',
			'isi' => 'layout/frontend/berobat/v_berobat',

		);
		$this->load->view('layout/frontend/v_wrapper', $data, FALSE);
	}

	public function berobat_baru()
	{
		$this->pasien_login->proteksi_halaman();
		$this->form_validation->set_rules('no_antrian', 'No Antrain', 'required', array('required' => '%s Mohon Untuk Diisi!!'));

		if ($this->form_validation->run() == FALSE) {
			$data = array(
				'title' => 'Daftar Berobat',
				// 'hapus_otomatis' => $this->m_pasien->hapus_otomatis(),
				// 'hapus_data' => $this->m_pasien->hapus_data(),
				'waktu_cek' => $this->m_pasien->cek_total(),
				'total_daftar' => $this->m_admin->total_daftar(),
				'isi' => 'layout/frontend/berobat/v_berobat_baru'
			);
			$this->load->view('layout/frontend/v_wrapper', $data, FALSE);
		} else {
			$antrian = $this->input->post('no_antrian');
			// echo $antrian;
			if ($antrian >= 20) {
				$this->session->set_flashdata('error', 'Antrian Sudah Penuh, Silahkan Daftar Diwaktu Selanjutnya!!');
				redirect('Pasien/berobat_baru');
			} else {
				$data = array(
					'id_pasien' => $this->session->userdata('id_pasien'),
					'no_antrian' => $this->input->post('no_antrian'),
					'keluhan' => $this->input->post('keluhan'),
					'tgl_berobat' => date('Y-m-d'),
					'waktu' => $this->input->post('waktu_cek'),
					'status' => 0,
					'berobat' => 1,
				);
				$this->m_pasien->add($data);
				$this->session->set_flashdata('pesan', 'Daftar Berobat Berhasil');
				redirect('home');
			}

			// }
		}
	}
}
