<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dipatcontroller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Load Dependencies
		is_logged_in();

}

	// List all your items
public function index()
{
	$data['title'] = 'Dipat';

	$data['tb_dipat'] = $this->db->get('tb_dip4t')->num_rows();



	$this->load->view('admin/dipat.php', $data);

}
}

/* End of file DashboardController.php */
/* Location: ./application/controllers/Admin/DashboardController.php */
