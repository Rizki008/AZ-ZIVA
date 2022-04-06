<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_berobat extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_obat');
	}

	public function index()
	{
		$this->user_login->proteksi_halaman();
		$data = array(
			'title' => 'Resep Obat',
			'obat' => $this->m_obat->pesan_obat(),
			'pesanan' => $this->m_obat->pemesanan(),
			'berobat' => $this->m_obat->berobat(),
			'isi' => 'layout/backend/berobat/v_data_berobat'
		);
		$this->load->view('layout/backend/v_wrapper', $data, FALSE);
	}

	public function pesan()
	{
		$this->user_login->proteksi_halaman();
		$data = array(
			'id' => $this->input->post('id'),
			'qty' => $this->input->post('qty'),
			'name' => $this->input->post('name'),
			'price' => '0'
		);
		$this->cart->insert($data);
		$this->session->set_flashdata('pesan', 'Berhasil');
		redirect('data_berobat');
	}

	public function delete($rowid)
	{
		$this->cart->remove($rowid);
		redirect('data_berobat');
	}

	public function checkout()
	{
		$data = array(
			'no_resep' => $this->input->post('no_resep'),
			'status' => '3',
		);
		$this->db->update('berobat', $data);

		$i = 1;
		foreach ($this->cart->contents() as $item) {
			$data_rinci = array(
				'no_resep' => $this->input->post('no_resep'),
				'id_obat_masuk' => $item['id'],
				'qty' => $this->input->post('qty' . $i++)
			);
			$this->db->insert('obat_keluar', $data_rinci);
		}
		$this->cart->destroy();
		redirect('data_berobat', 'refresh');
	}

	public function detail_berobat($id_berobat)
	{
		$data_view['detail'] = $this->m_obat->detail_berobat($id_berobat);
		header('Content-Type: application/json');
		echo json_encode($data_view);
	}

	public function selesai($id_berobat)
	{
		$data = array(
			'status' => '4'
		);
		$this->db->where('id_berobat', $id_berobat);
		$this->db->update('berobat', $data);
		$this->session->set_flashdata('pesan', 'Pesanan Diterima!!!');
		redirect('data_berobat');
	}

	public function update($id_berobat = NULL)
	{
		$data = array(
			'id_berobat' => $id_berobat,
			'tgl_berobat' => date('Y-m-d'),
			'nama_dokter' => $this->input->post('nama_dokter'),
			'gejala' => $this->input->post('gejala'),
			'datang' => $this->input->post('datang'),
			'status' => 2,
		);
		$this->m_obat->periksa($data);
		$this->session->set_flashdata('pesan', 'Data Berhasil Ditambahkan');
		redirect('data_berobat');
	}
}
