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

	public function detail($id_obat)
	{
		$this->db->select('*');
		$this->db->from('obat');
		$this->db->where('id_obat', $id_obat);
		return $this->db->get()->row();
	}

	public function add($data)
	{
		$this->db->insert('obat', $data);
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
