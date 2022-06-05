<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_berobat extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_obat');
		$this->load->model('m_berobat');
	}

	public function index()
	{
		$this->user_login->proteksi_halaman();
		$data = array(
			'title' => 'Resep Obat',
			'obat' => $this->m_obat->pesan_obat(),
			'pesanan' => $this->m_obat->pemesanan(),
			'berobat' => $this->m_obat->berobat(),
			'isi' => 'layout/dokter/berobat/v_data_berobat'
		);
		$this->load->view('layout/dokter/v_wrapper', $data, FALSE);
	}

	public function resep_obat($id)
	{
		$data = array(
			'title' => 'Resep Obat',
			'id' => $id,
			'obat' => $this->m_obat->pesan_obat(),
			'isi' => 'layout/dokter/berobat/v_resep'
		);
		$this->load->view('layout/dokter/v_wrapper', $data);
	}
	public function pesan()
	{
		$this->user_login->proteksi_halaman();
		$id_berobat = $this->input->post('id_berobat');
		$data = array(
			'id' => $this->input->post('id'),
			'qty' => $this->input->post('qty'),
			'name' => $this->input->post('name'),
			'price' => '0'
		);
		$this->cart->insert($data);
		$this->session->set_flashdata('pesan', 'Berhasil');
		redirect('data_berobat/resep_obat/' . $id_berobat);
	}

	public function delete($rowid)
	{
		$this->cart->remove($rowid);
		redirect('data_berobat');
	}

	public function checkout()
	{
		$id_berobat = $this->input->post('id_berobat');
		$data = array(
			'no_resep' => $this->input->post('no_resep'),
			'status_berobat' => '3',
		);
		$this->db->where('id_berobat', $id_berobat);
		$this->db->update('berobat', $data);

		//simppan obat keluar
		$i = 1;
		foreach ($this->cart->contents() as $item) {
			$data_rinci = array(
				'no_resep' => $this->input->post('no_resep'),
				'id_obat_masuk' => $item['id'],
				'tgl_keluar' => date('Y-m-d'),
				'qty' => $this->input->post('qty' . $i++)
			);
			$this->m_berobat->add_obat_keluar($data_rinci);
		}
		$this->cart->destroy();
		redirect('data_berobat');
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
			'status_berobat' => '4'
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
			'id_user' => $this->session->userdata('id_user'),
			'gejala' => $this->input->post('gejala'),
			'status_berobat' => 2,
		);
		$this->m_obat->periksa($data);
		$this->session->set_flashdata('pesan', 'Data Berhasil Ditambahkan');
		redirect('data_berobat');
	}
}
