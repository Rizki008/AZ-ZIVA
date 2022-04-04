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

	public function add()
	{
		$redirect_page =  $this->input->post('redirect_page');
		$data = array(
			'id'      => $this->input->post('id'),
			'qty'     => $this->input->post('qty'),
			'name'    => $this->input->post('name'),
		);

		$this->cart->insert($data);
		redirect($redirect_page, 'refresh');
	}

	// public function delete($rowid)
	// {
	//     $this->cart->remove($rowid);
	//     redirect('belanja');
	// }

	public function update_obat()
	{
		$i = 1;
		foreach ($this->cart->contents() as $items) {
			$data = array(
				'rowid' => $items['rowid'],
				'qty'   => $this->input->post($i . '[qty]'),
			);
			$this->cart->update($data);
			$i++;
		}
		$this->session->set_flashdata('pesan', 'Berhasil Diupdate');
		redirect('berobat/beobat_masuk');
	}

	public function clear()
	{
		$this->cart->destroy();
		redirect('berobat/berobat_masuk');
	}

	public function cekout()
	{
		//proteksi halaman
		$this->pelanggan_login->proteksi_halaman();

		if ($this->form_validation->run() == FALSE) {
			$data = array(
				'title' => 'Langsung Beli',
				'isi' => 'layout/backend/obat/v_detail_obat'
			);
			$this->load->view('layout/backend/v_wrapper', $data, FALSE);
		} else {
			//simpan ke tabel transaksi
			$data = array(
				'id_berobat' => $this->session->userdata('id_berobat'),

			);
			$this->m_transaksi->simpan_transaksi($data);

			//simpan ke tabel rinci transaksi
			$i = 1;
			foreach ($this->cart->contents() as $item) {
				$data_rinci = array(
					'no_berobat' => $this->input->post('no_berobat'),
					'id_berobat' => $item['id'],
					'qty' => $this->input->post('qty' . $i++),
				);

				$this->m_transaksi->simpan_rinci_obat($data_rinci);
			}
			$this->session->set_flashdata('pesan', 'Pesanan Berhasil Diproses');
			$this->cart->destroy();
			redirect('berobat/berobat_masuk');
		}
	}
}
