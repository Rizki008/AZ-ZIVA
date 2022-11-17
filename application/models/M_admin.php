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
		$this->db->select('COUNT(qty) AS total_obat_tanggal, obat_masuk.nama_obat');
		$this->db->from('obat_keluar');
		$this->db->join('obat_masuk', 'obat_keluar.id_obat_masuk = obat_masuk.id_obat_masuk', 'left');
		$this->db->where('DAY(obat_keluar.tgl_keluar)', $tanggal);
		$this->db->where('MONTH(obat_keluar.tgl_keluar)', $bulan);
		$this->db->where('YEAR(obat_keluar.tgl_keluar)', $tahun);
		$this->db->group_by('obat_masuk.nama_obat');
		$this->db->order_by('qty', 'desc');
		return $this->db->get()->result();
	}

	public function analisis_bulan($bulan, $tahun)
	{
		$this->db->select('COUNT(qty) AS total_obat_bulan, obat_masuk.nama_obat');
		$this->db->from('obat_keluar');
		$this->db->join('obat_masuk', 'obat_keluar.id_obat_masuk = obat_masuk.id_obat_masuk', 'left');
		$this->db->where('MONTH(tgl_keluar)', $bulan);
		$this->db->where('YEAR(tgl_keluar)', $tahun);
		$this->db->group_by('obat_masuk.nama_obat');
		$this->db->order_by('qty', 'desc');
		return $this->db->get()->result();
	}

	public function analisis_tahun($tahun)
	{
		$this->db->select('COUNT(qty) AS total_obat, obat_masuk.nama_obat');
		$this->db->from('obat_keluar');
		$this->db->join('obat_masuk', 'obat_keluar.id_obat_masuk = obat_masuk.id_obat_masuk', 'left');
		$this->db->where('YEAR(tgl_keluar)', $tahun);
		$this->db->group_by('obat_masuk.nama_obat');
		$this->db->order_by('qty', 'desc');

		return $this->db->get()->result();
	}
	public function analisis_stock_tanggal($tanggal, $bulan, $tahun)
	{
		$this->db->select('stock AS total_stock_obat_tanggal, obat_masuk.nama_obat');
		$this->db->from('obat_masuk');
		$this->db->where('DAY(obat_masuk.tgl_masuk)', $tanggal);
		$this->db->where('MONTH(obat_masuk.tgl_masuk)', $bulan);
		$this->db->where('YEAR(obat_masuk.tgl_masuk)', $tahun);
		$this->db->order_by('stock', 'asc');
		return $this->db->get()->result();
	}

	public function analisis_stock_bulan($bulan, $tahun)
	{
		$this->db->select('stock AS total_stock_obat_bulan, obat_masuk.nama_obat');
		$this->db->from('obat_masuk');
		$this->db->where('MONTH(tgl_masuk)', $bulan);
		$this->db->where('YEAR(tgl_masuk)', $tahun);
		$this->db->order_by('stock', 'asc');
		return $this->db->get()->result();
	}

	public function analisis_stock_tahun($tahun)
	{
		$this->db->select('stock AS total_stock_obat, obat_masuk.nama_obat');
		$this->db->from('obat_masuk');
		$this->db->where('YEAR(tgl_masuk)', $tahun);
		$this->db->order_by('stock', 'asc');

		return $this->db->get()->result();
	}

	//gejala
	public function analisis_tanggal_gejala($tanggal, $bulan, $tahun)
	{
		$this->db->select('COUNT(gejala) AS total_gejala_tanggal, berobat.gejala');
		$this->db->from('berobat');
		$this->db->where('DAY(berobat.tgl_berobat)', $tanggal);
		$this->db->where('MONTH(berobat.tgl_berobat)', $bulan);
		$this->db->where('YEAR(berobat.tgl_berobat)', $tahun);
		$this->db->group_by('berobat.gejala');
		$this->db->order_by('gejala', 'desc');
		return $this->db->get()->result();
	}

	public function analisis_bulan_gejala($bulan, $tahun)
	{
		$this->db->select('COUNT(gejala) AS total_gejala_bulan, berobat.gejala');
		$this->db->from('berobat');
		$this->db->where('MONTH(tgl_berobat)', $bulan);
		$this->db->where('YEAR(tgl_berobat)', $tahun);
		$this->db->group_by('berobat.gejala');
		$this->db->order_by('gejala', 'desc');
		return $this->db->get()->result();
	}

	public function analisis_tahun_gejala($tahun)
	{
		$this->db->select('COUNT(gejala) AS total_gejala, berobat.gejala');
		$this->db->from('berobat');
		$this->db->where('YEAR(tgl_berobat)', $tahun);
		$this->db->group_by('berobat.gejala');
		$this->db->order_by('gejala', 'desc');

		return $this->db->get()->result();
	}
	//bpjs
	public function analisis_tanggal_bpjs($tanggal, $bulan, $tahun)
	{
		$this->db->select('COUNT(bpjs) AS total_bpjs_tanggal, pasien.bpjs');
		$this->db->from('pasien');
		$this->db->where('DAY(pasien.tgl_daftar)', $tanggal);
		$this->db->where('MONTH(pasien.tgl_daftar)', $bulan);
		$this->db->where('YEAR(pasien.tgl_daftar)', $tahun);
		$this->db->group_by('pasien.bpjs');
		$this->db->order_by('bpjs', 'desc');
		return $this->db->get()->result();
	}

	public function analisis_bulan_bpjs($bulan, $tahun)
	{
		$this->db->select('COUNT(bpjs) AS total_bpjs_bulan, pasien.bpjs');
		$this->db->from('pasien');
		$this->db->where('MONTH(tgl_daftar)', $bulan);
		$this->db->where('YEAR(tgl_daftar)', $tahun);
		$this->db->group_by('pasien.bpjs');
		$this->db->order_by('bpjs', 'desc');
		return $this->db->get()->result();
	}

	public function analisis_tahun_bpjs($tahun)
	{
		$this->db->select('COUNT(bpjs) AS total_bpjs_tahun, pasien.bpjs');
		$this->db->from('pasien');
		$this->db->where('YEAR(tgl_daftar)', $tahun);
		$this->db->group_by('pasien.bpjs');
		$this->db->order_by('bpjs', 'desc');

		return $this->db->get()->result();
	}

	public function rekam_medis()
	{
		$this->db->select('*');
		$this->db->from('berobat');
		$this->db->join('booking_berobat', 'berobat.id_boking = booking_berobat.id_boking', 'left');
		$this->db->join('obat_keluar', 'berobat.no_resep = obat_keluar.no_resep', 'left');
		$this->db->join('obat_masuk', 'obat_keluar.id_obat_masuk = obat_masuk.id_obat_masuk', 'left');
		$this->db->join('pasien', 'booking_berobat.id_pasien = pasien.id_pasien', 'left');
		$this->db->order_by('berobat.id_berobat', 'desc');
		$this->db->group_by('berobat.id_boking');
		return $this->db->get()->result();
	}
	public function detail($no_resep)
	{
		return $this->db->query("SELECT *
		FROM `booking_berobat`
		LEFT JOIN `berobat` ON `booking_berobat`.`id_boking` = `berobat`.`id_boking`
		LEFT JOIN `obat_keluar` ON `berobat`.`no_resep` = `obat_keluar`.`no_resep`
		LEFT JOIN `obat_masuk` ON `obat_keluar`.`id_obat_masuk` = `obat_masuk`.`id_obat_masuk`
		LEFT JOIN `pasien` ON `booking_berobat`.`id_pasien` = `pasien`.`id_pasien` WHERE berobat.no_resep='" . $no_resep . "'")->result();
	}
}
