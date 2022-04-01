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
			$username = $cek->username;
			$password = $cek->password;
			$jenis_kl = $cek->jenis_kl;
			$usia = $cek->usia;
			$alamat = $cek->alamat;
			$bpjs = $cek->bpjs;
			$foto = $cek->foto;

			$this->ci->session->set_userdata('username', $username);
			$this->ci->session->set_userdata('password', $password);
			$this->ci->session->set_userdata('jenis_kl', $jenis_kl);
			$this->ci->session->set_userdata('usia', $usia);
			$this->ci->session->set_userdata('alamat', $alamat);
			$this->ci->session->set_userdata('bpjs', $bpjs);
			$this->ci->session->set_userdata('foto', $foto);

			redirect('home');
		} else {
			$this->ci->session->set_flashdata('pesan', 'Username atau password salah');
			redirect('pasien/login');
		}
	}

	public function logout()
	{
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
