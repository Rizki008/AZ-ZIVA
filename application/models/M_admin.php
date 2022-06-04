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
	public function total_obat_keluar()
	{
		return $this->db->get('obat_keluar')->num_rows();
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

	public function analisis_tanggal($tanggal, $bulan, $tahun)
	{
		$this->db->select('*');
		$this->db->from('obat_keluar');
		$this->db->join('obat_masuk', 'obat_keluar.id_obat_masuk = obat_masuk.id_obat_masuk', 'left');
		$this->db->where('DAY(obat_keluar.tgl_keluar)', $tanggal);
		$this->db->where('MONTH(obat_keluar.tgl_keluar)', $bulan);
		$this->db->where('YEAR(obat_keluar.tgl_keluar)', $tahun);
		$this->db->order_by('qty', 'desc');
		return $this->db->get()->result();
	}

	public function analisis_bulan($bulan, $tahun)
	{
		$this->db->select('*');
		$this->db->from('obat_keluar');
		$this->db->join('obat_masuk', 'obat_keluar.id_obat_masuk = obat_masuk.id_obat_masuk', 'left');
		$this->db->where('MONTH(tgl_keluar)', $bulan);
		$this->db->where('YEAR(tgl_keluar)', $tahun);
		$this->db->order_by('qty', 'desc');
		return $this->db->get()->result();
	}

	public function analisis_tahun($tahun)
	{
		$this->db->select('*');
		$this->db->from('obat_keluar');
		$this->db->join('obat_masuk', 'obat_keluar.id_obat_masuk = obat_masuk.id_obat_masuk', 'left');
		$this->db->where('YEAR(tgl_keluar)', $tahun);
		$this->db->order_by('qty', 'desc');

		return $this->db->get()->result();
	}
}
