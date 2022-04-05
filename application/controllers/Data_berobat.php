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
			'isi' => 'layout/backend/berobat/v_data_berobat'
		);
		$this->load->view('layout/backend/v_wrapper', $data, FALSE);
	}

	public function pesan()
	{
		$this->user_login->proteksi_halaman();
		$data = array(
			'id' => $this->input->post('pesan_obat'),
			'qty' => $this->input->post('qty'),
			'name' => $this->input->post('nama'),
		);
		$this->cart->insert($data);
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
			'id_berobat' => $this->input->post('id_berobat'),
			'tgl_berobat' => date('Y-m-d'),
			'status' => '1',
		);
		$this->db->insert('berobat', $data);

		$i = 1;
		foreach ($this->cart->contents() as $item) {
			$data_rinci = array(
				'id_berobat' => $this->input->post('id_berobat'),
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
		$obat = $this->m_obat->detail_pemesanan($id_berobat);
		foreach ($obat as $key => $value) {
			$data = array(
				'tgl_berobat' => date('Y-m-d'),
				'id_obat_masuk' => $value->id_obat_masuk,
				'qty' => $value->qty
			);
			$this->db->insert('obat_berobat', $data);
		}
		$data = array(
			'status' => '3'
		);
		$this->db->where('id_berobat', $id_berobat);
		$this->db->update('berobat', $data);
		$this->session->set_flashdata('pesan', 'Pesanan Diterima!!!');
		redirect('data_berobat');
	}
}
