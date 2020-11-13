<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {


	public function __construct(){
		parent::__construct();
		$this->logged_in();
	}

	private function logged_in() {
		if(! $this->session->userdata('authenticated')) {
			redirect('login');
		}
	}


	function users(){
		$data['title'] = "SISCAP - Lexlam";
		$this->admin->show('admin/user_list', $data);
	}
}

/* End of file Users.php */
/* Location: ./application/controllers/cpanel/Users.php */