<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class grlcontroller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Load Dependencies
		is_logged_in();

}

	// List all your items
public function index()
{
	$data['title'] = 'Ganti Rugi Lahan';

	$data['tb_gantirugi'] = $this->db->get('tb_gantirugi')->num_rows();



	$this->load->view('admin/grl.php', $data);

}
}

/* End of file DashboardController.php */
/* Location: ./application/controllers/Admin/DashboardController.php */
