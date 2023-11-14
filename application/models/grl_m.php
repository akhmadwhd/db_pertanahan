<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class grl_m extends CI_Model {

	private $table = 'tb_gantirugi';
	private $primary_key = 'id';

	public function create($data)
	{
		return $this->db->insert($this->table, $data);;
	}
	public function data_table()
	{
		$this->db->select('tb_gantirugi.id,tb_gantirugi.instansi,tb_dipat.nama_pemilik,tb_gantirugi.luas_lahan,tb_gantirugi.ganti_rugi,tb_gantirugi.dasar,tb_gantirugi.keterangan');
		$this->db->from($this->table);
		return $this->db->get();
	}
	public function data_table_instansi($instansi)
	{
		$this->db->select('tb_gantirugi.`id`,tb_gantirugi.instansi,tb_dipat.nama_pemilik,tb_gantirugi.luas_lahan,tb_gantirugi.ganti_rugi,tb_gantirugi.dasar,tb_gantirugi.keterangan');
		$this->db->from($this->table);
		$this->db->where('instansi' $instansi)
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
