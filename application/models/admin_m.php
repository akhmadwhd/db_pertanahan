<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin_m extends CI_Model {

	private $table = 'tb_user';
	private $primary_key = 'id';

	public function create($data)
	{
		return $this->db->insert($this->table, $data);;
	}
}
