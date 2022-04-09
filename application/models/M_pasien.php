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

	// public function hapus_otomatis()
	// {
	// 	$lama =  1;
	// 	$query = $this->db->query("DELETE FROM booking_berobat WHERE DATEDIFF(CURDATE(), tgl_berobat) > $lama");
	// 	return $query;
	// }

	// function hapus_data()
	// {
	// 	$query = $this->db->query("DELETE FROM booking_berobat WHERE id_boking IN (SELECT * FROM(
	// 		SELECT id_boking FROM booking_berobat WHERE DATEDIFF(CURRENT_DATE, 'tgl_berobat') >= 1) AS t2)");
	// 	return $query;
	// }
}
