<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {


	public function __construct(){
		parent::__construct();
		$this->logged_in();
	}

	private function logged_in() {
		if($this->session->userdata('authenticated') !== TRUE ) {
			redirect('login');
		}
	}

	function index(){
    // Allowing akses to admin only
		if($this->session->userdata('role_id') == 1){
			$data['title'] = "Dashboard - SISCAO";
			$this->admin->show('admin/home', $data);
		}else{
			echo "Access Denied";
		}
	}



}

/* End of file Dashboard.php */
/* Location: ./application/controllers/cpanel/Dashboard.php */