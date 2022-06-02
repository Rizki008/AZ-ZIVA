<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_berobat extends CI_Model
{

	public function berobat()
	{
		$this->db->select('*');
		$this->db->from('booking_berobat');
		$this->db->join('pasien', 'booking_berobat.id_pasien = pasien.id_pasien', 'left');
		$this->db->where('status=0');
		$this->db->order_by('booking_berobat.id_boking', 'desc');
		return $this->db->get()->result();
	}

	public function data_berobat()
	{
		$this->db->select('*');
		$this->db->from('booking_berobat');
		$this->db->join('berobat', 'berobat.id_boking = booking_berobat.id_boking', 'left');
		$this->db->join('pasien', 'berobat.id_pasien = pasien.id_pasien', 'left');
		// $this->db->where('status=1');
		$this->db->order_by('berobat.id_berobat', 'desc');
		return $this->db->get()->result();
	}

	public function data_berobat_selesai()
	{
		$this->db->select('*');
		$this->db->from('booking_berobat');
		$this->db->join('pasien', 'berobat.id_pasien = pasien.id_pasien', 'left');
		$this->db->where('status=2');
		$this->db->order_by('booking_berobat.id_berobat', 'desc');
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
	public function add_obat_keluar($data)
	{
		$this->db->insert('obat_keluar', $data);
	}
	public function update_berobat($data)
	{
		$this->db->where('id_berobat', $data['id_berobat']);
		$this->db->update('berobat', $data);
	}

	public function update($data)
	{
		$this->db->where('id_boking', $data['id_boking']);
		$this->db->update('booking_berobat', $data);
	}
	public function insert_berobat($data)
	{
		$this->db->insert('berobat', $data);
	}


	public function delete($data)
	{
		$this->db->where('id_berobat', $data['id_berobat']);
		$this->db->delete('berobat');
	}

	public function grafik()
	{
		// $this->db->select_sum('qty');
		$this->db->select('*');
		$this->db->from('obat_masuk');
		// $this->db->join('obat_masuk', 'obat_keluar.id_obat_masuk = obat_masuk.id_obat_masuk', 'left');
		// $this->db->group_by('obat_keluar.id_obat_keluar');
		$this->db->order_by('stock', 'desc');
		return $this->db->get()->result();
	}

	public function data_berobat_pasien($id_pasien)
	{
		$this->db->select('*');
		$this->db->from('berobat');
		$this->db->join('booking_berobat', 'booking_berobat.id_boking = berobat.id_boking', 'left');
		$this->db->join('pasien', 'booking_berobat.id_pasien = pasien.id_pasien', 'left');
		$this->db->where('pasien.id_pasien', $id_pasien);
		return $this->db->get()->row();
	}
}
