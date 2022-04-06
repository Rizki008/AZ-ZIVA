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
		$this->db->insert('booking_berobat', $data);
	}

	public function boking()
	{
		return $this->db->query('SELECT MAX(no_antrian +1)AS antrian FROM `booking_berobat` WHERE tgl_berobat GROUP BY tgl_berobat')->row();
	}
}
