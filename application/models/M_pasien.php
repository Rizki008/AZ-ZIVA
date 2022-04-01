<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_pasien extends CI_Model
{
	public function register($data)
	{
		$this->db->insert('pasien', $data);
	}

	public function pasien()
	{
		$this->db->select('*');
		$this->db->from('pasien');
		$this->db->order_by('id_pasien', 'desc');
		return $this->db->get()->result();
	}

	public function add($data)
	{
		$this->db->insert('berobat', $data);
	}
}
