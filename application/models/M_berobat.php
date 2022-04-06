<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_berobat extends CI_Model
{

	public function berobat()
	{
		$this->db->select('*');
		$this->db->from('booking_berobat');
		$this->db->where('status=0');
		$this->db->join('pasien', 'booking_berobat.id_pasien = pasien.id_pasien', 'left');
		$this->db->order_by('id_boking', 'desc');
		return $this->db->get()->result();
	}

	public function data_berobat()
	{
		$this->db->select('*');
		$this->db->from('berobat');
		$this->db->join('pasien', 'berobat.id_pasien = pasien.id_pasien', 'left');
		$this->db->where('status=1');
		$this->db->order_by('id_berobat', 'desc');
		return $this->db->get()->result();
	}

	public function data_berobat_selesai()
	{
		$this->db->select('*');
		$this->db->from('berobat');
		$this->db->join('pasien', 'berobat.id_pasien = pasien.id_pasien', 'left');
		$this->db->where('status=2');
		$this->db->order_by('id_berobat', 'desc');
		return $this->db->get()->result();
	}

	public function detail($id_berobat)
	{
		$this->db->select('*');
		$this->db->from('berobat');
		$this->db->where('id_berobat', $id_berobat);
		return $this->db->get()->row();
	}

	public function add($data)
	{
		$this->db->insert('berobat', $data);
	}

	public function update($data)
	{
		$this->db->where('id_boking', $data['id_boking']);
		$this->db->update('booking_berobat', $data);
		$this->db->insert('berobat', $data);
	}

	public function delete($data)
	{
		$this->db->where('id_berobat', $data['id_berobat']);
		$this->db->delete('berobat');
	}

	public function grafik()
	{
		$this->db->select_sum('qty');
		$this->db->select('obat_masuk.nama_obat');
		$this->db->from('obat_keluar');
		$this->db->join('obat_masuk', 'obat_keluar.id_obat_masuk = obat_masuk.id_obat_masuk', 'left');
		$this->db->group_by('obat_keluar.id_obat_keluar');
		$this->db->order_by('id_obat_keluar', 'desc');
		return $this->db->get()->result();
	}
}
