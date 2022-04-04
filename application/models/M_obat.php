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
		$this->db->order_by('id_obat_keluar', 'desc');
		return $this->db->get()->result();
	}


	public function detail($id_obat)
	{
		$this->db->select('*');
		$this->db->from('obat');
		$this->db->where('id_obat', $id_obat);
		return $this->db->get()->row();
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
