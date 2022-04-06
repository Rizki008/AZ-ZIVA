<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_obat extends CI_Model
{

	public function obat()
	{
		$this->db->select('*');
		$this->db->from('obat');
		$this->db->order_by('id_obat', 'desc');
		return $this->db->get()->result();
	}
	public function obat_masuk()
	{
		$this->db->select('*');
		$this->db->from('obat_masuk');
		$this->db->order_by('id_obat_masuk', 'desc');
		return $this->db->get()->result();
	}
	public function obat_keluar()
	{
		$this->db->select('*');
		$this->db->from('obat_keluar');
		$this->db->join('obat_masuk', 'obat_keluar.id_obat_masuk = obat_masuk.id_obat_masuk', 'left');
		$this->db->order_by('id_obat_keluar', 'desc');
		return $this->db->get()->result();
	}
	public function berobat()
	{
		$this->db->select('*');
		$this->db->from('berobat');
		$this->db->join('booking_berobat', 'berobat.id_boking = booking_berobat.id_boking', 'left');
		$this->db->join('pasien', 'booking_berobat.id_pasien = pasien.id_pasien', 'left');
		$this->db->order_by('id_berobat', 'desc');
		return $this->db->get()->result();
	}

	//pesan obat
	public function pesan_obat()
	{
		$id = '0';
		$this->db->select('*');
		$this->db->from('obat_masuk');
		$this->db->where('obat_masuk.stock!=', $id);

		return $this->db->get()->result();
	}
	public function pemesanan()
	{
		$this->db->select('*');
		$this->db->from('berobat');
		$this->db->order_by('tgl_berobat', 'desc');

		return $this->db->get()->result();
	}
	public function detail_berobat($id_berobat)
	{
		$this->db->select('*');
		$this->db->from('berobat');
		$this->db->join('obat_keluar', 'berobat.id_berobat = obat_keluar.id_berobat', 'left');
		$this->db->join('obat_masuk', 'obat_keluar.id_obat_masuk = obat_masuk.id_obat_masuk', 'left');
		$this->db->where('berobat.id_berobat', $id_berobat);
		return $this->db->get()->result();
	}
	//end

	public function resep_obat()
	{
		$tgl1 = date('Y');
		$tgl2 = date('Y', strtotime('-3 year', strtotime($tgl1)));
		$data = $this->db->query("SELECT id_obat, tgl_berobat, SUM(IF(YEAR(tgl_berobat) = " . $tgl2 . " , qty, 0)) AS jml FROM berobat JOIN obat_keluar ON berobat.id_berobat=obat_keluar.id_berobat GROUP BY id_obat")->result();
		return $data;
	}

	public function detail($id_obat)
	{
		$this->db->select('*');
		$this->db->from('obat');
		$this->db->where('id_obat', $id_obat);
		return $this->db->get()->row();
	}

	public function periksa($data)
	{
		$this->db->where('id_berobat', $data['id_berobat']);
		$this->db->update('berobat', $data);
	}

	public function add_obat_masuk($data)
	{
		$this->db->insert('obat_masuk', $data);
	}

	public function edit_obat_masuk($data)
	{
		$this->db->where('id_obat_masuk', $data['id_obat_masuk']);
		$this->db->update('obat_masuk', $data);
	}

	public function delete_obat_masuk($data)
	{
		$this->db->where('id_obat_masuk', $data['id_obat_masuk']);
		$this->db->delete('obat_masuk');
	}

	public function add($data)
	{
		$this->db->insert('obat_masuk', $data);
	}

	public function edit($data)
	{
		$this->db->where('id_obat', $data['id_obat']);
		$this->db->update('obat', $data);
	}

	public function delete($data)
	{
		$this->db->where('id_obat', $data['id_obat']);
		$this->db->delete('obat');
	}
}
