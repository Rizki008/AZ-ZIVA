<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_admin extends CI_Model
{

	public function total_pasien()
	{
		return $this->db->get('pasien')->num_rows();
	}

	public function total_obat()
	{
		return $this->db->get('obat_masuk')->num_rows();
	}
	public function total_daftar()
	{
		return $this->db->get('booking_berobat')->num_rows();
	}
	public function total_berobat()
	{
		return $this->db->get('berobat')->num_rows();
	}
	public function total_non_bpjs()
	{
		return $this->db->get('pasien')->num_rows();
	}

	public function bpjs()
	{
		$this->db->select('*');
		$this->db->from('pasien');
		$this->db->where('bpjs=1');
		return $this->db->get()->result();
	}
	public function non_bpjs()
	{
		$this->db->select('*');
		$this->db->from('pasien');
		$this->db->where('bpjs=2');
		return $this->db->get()->result();
	}
}
