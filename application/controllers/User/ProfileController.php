<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProfileController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Load Dependencies
		is_logged_in();
	}

	// List all your items
	public function index()
	{
        $data['title'] = 'Profile';

        $user = $this->db->get_where('tb_user',['username' => $this->session->userdata('username')])->row_array();

		if ($user == TRUE) :
			$data['user'] = $user;
		endif;

        $this->load->view('user/profile', $data);
	}
}

/* End of file ProfileController.php */
/* Location: ./application/controllers/User/ProfileController.php */
