<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Pasien_login
{
	protected $ci;

	public function __construct()
	{
		$this->ci = &get_instance();
		$this->ci->load->model('m_auth');
	}

	public function login($username, $password)
	{
		$cek = $this->ci->m_auth->pasien_login($username, $password);

		if ($cek) {
			$id_pasien = $cek->id_pasien;
			$nama_pasien = $cek->nama_pasien;
			$no_berobat = $cek->no_berobat;
			$datang_berobat = $cek->datang_berobat;
			$username = $cek->username;
			$password = $cek->password;
			$jenis_kl = $cek->jenis_kl;
			$usia = $cek->usia;
			$alamat = $cek->alamat;
			$bpjs = $cek->bpjs;
			$foto = $cek->foto;

			$this->ci->session->set_userdata('id_pasien', $id_pasien);
			$this->ci->session->set_userdata('nama_pasien', $nama_pasien);
			$this->ci->session->set_userdata('no_berobat', $no_berobat);
			$this->ci->session->set_userdata('datang_berobat', $datang_berobat);
			$this->ci->session->set_userdata('username', $username);
			$this->ci->session->set_userdata('password', $password);
			$this->ci->session->set_userdata('jenis_kl', $jenis_kl);
			$this->ci->session->set_userdata('usia', $usia);
			$this->ci->session->set_userdata('alamat', $alamat);
			$this->ci->session->set_userdata('bpjs', $bpjs);
			$this->ci->session->set_userdata('foto', $foto);

			redirect('home');
		} else {
			$this->ci->session->set_flashdata('error', 'Username atau password salah');
			redirect('pasien/login');
		}
	}

	public function proteksi_halaman()
	{
		if ($this->ci->session->userdata('username') == '') {
			$this->ci->session->set_flashdata('error', 'Anda Belum Login Atau register');
			redirect('pasien/login');
		}
	}

	public function logout()
	{
		$this->ci->session->unset_userdata('nama_pasien');
		$this->ci->session->unset_userdata('no_berobat');
		$this->ci->session->unset_userdata('datang_berobat');
		$this->ci->session->unset_userdata('username');
		$this->ci->session->unset_userdata('password');
		$this->ci->session->unset_userdata('jenis_kl');
		$this->ci->session->unset_userdata('usia');
		$this->ci->session->unset_userdata('alamat');
		$this->ci->session->unset_userdata('bpjs');
		$this->ci->session->unset_userdata('foto');

		$this->ci->session->set_flashdata('pesan', 'Berhasil Logout');
		redirect('pasien/login');
	}
}
