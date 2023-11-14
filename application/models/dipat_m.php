<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dipat_m extends CI_Model {

	private $table = 'tb_dip4t';
	private $primary_key = 'id';

	public function create($data)
	{
		return $this->db->insert($this->table, $data);;
	}
	public function data_table()
	{
		$this->db->select('tb_dipat.id_tanah,tb_dipat.nama_pmk,tb_dipat.no_ktp_pmk,tb_dipat.luas_ob,tb_dipat.desa_ob,tb_dipat.kecamatan_ob,tb_dipat.penggunaan_ob');
		$this->db->from($this->table);
		return $this->db->get();
	}
	public function data_table_kecamatan($kecamatan)
	{
		$this->db->select('tb_dipat.id_tanah,tb_dipat.nama_pmk,tb_dipat.no_ktp_pmk,tb_dipat.luas_ob,tb_dipat.desa_ob,tb_dipat.kecamatan_ob,tb_dipat.penggunaan_ob');
		$this->db->from($this->table);
		$this->db->where('kecamatan_ob' $kecamatan)
		return $this->db->get();
	}
	public function data_table_kecamatan($desa)
	{
		$this->db->select('tb_dipat.id_tanah,tb_dipat.nama_pmk,tb_dipat.no_ktp_pmk,tb_dipat.luas_ob,tb_dipat.desa_ob,tb_dipat.kecamatan_ob,tb_dipat.penggunaan_ob');
		$this->db->from($this->table);
		$this->db->where('desa_ob' $desa)
		return $this->db->get();
	}
	public function data_table_detail()
	{
		$this->db->select('tb_dipat.*');
		$this->db->from($this->table);
		return $this->db->get();
	}
}
