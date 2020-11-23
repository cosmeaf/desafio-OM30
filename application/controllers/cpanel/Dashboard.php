<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	protected $table = 'migrations';

	public function __construct(){
		parent::__construct();
		$this->load->model('users_model');
		$this->load->model('pacientes_model');
		$this->logged_in();
	}

	private function logged_in() {
		if($this->session->userdata('authenticated') !== TRUE ) {
			redirect('login');
		}
	}

	public function index(){
    // Allowing akses to admin only
		if($this->session->userdata('role_id') == 1){
			$data["scripts"] = ["util.js"];
			$data['title'] = "Dashboard - SISCAO";
			$data['user'] = $this->users_model->get_all();
			$data['user_results'] = $this->users_model->some_model_function();
			$data['patients_results'] = $this->pacientes_model->some_model_function();
			//var_dump($_SESSION);die();
			$this->admin->show('admin/home', $data);
		}else{
			echo "Access Denied";
		}
	}

	public function version(){
    // Allowing akses to admin only
		if($this->session->userdata('role_id') == 1){
			$data["scripts"] = ["util.js"];
			$data['title'] = "Dashboard - SISCAO";
			$data['version'] = $this->get_all();
			//echo "<pre>";print_r($data);die();
			$this->admin->show('admin/list_migration', $data);
		}else{
			echo "Access Denied";
		}
	}

	function get_all() {
		return $this->db->get($this->table)
		->result_array();
	}


}

/* End of file Dashboard.php */
/* Location: ./application/controllers/cpanel/Dashboard.php */