<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {


	public function __construct(){
		parent::__construct();
		$this->load->model('users_model');
		$this->logged_in();
		$data = array(
			"scripts" => array(
				"util.js",
				"login.js"
			));
	}

	private function logged_in() {
		if(! $this->session->userdata('authenticated')) {
			redirect('login');
		}
	}

	public function index(){
		$data['title'] = "Dashboard - SISCAO";
		$data["scripts"] = ["util.js"];
		$data['user'] = $this->users_model->get_all();
		//echo "<pre>";print_r($data);die();
		$this->admin->show('admin/list_users', $data);
	}

	public function register(){
		$data["scripts"] = ["util.js"];
		$data['title'] = "Register Page";
		$this->form_validation->set_rules('name', 'name', 'trim|required|min_length[5]|max_length[50]');
		$this->form_validation->set_rules('email', 'email', 'trim|required|valid_emails|valid_email|is_unique[tbl_users.email]', ['is_unique' => 'E-mail já cadastrado em base de dados']);
		$this->form_validation->set_rules('password', 'password', 'trim|required|min_length[6]|matches[password]', ['matches' => 'Password não confere!', 'min_length' => 'Password muito curto']);
		$this->form_validation->set_rules('passconf', 'repeat password', 'trim|required|matches[password]', ['matches' => 'Password não confere!']);
		$this->form_validation->set_error_delimiters('<div class="error text-danger" style="font-size:12px;">', '</div>');

		if ($this->form_validation->run() == FALSE) {
			//$this->session->set_flashdata('danger', validation_errors());
			$this->admin->show('admin/register_users', $data);
		} else {
			$user = $this->users_model->insert();
			if ($user) {
				$this->session->set_flashdata('success', 'User Registred Successfully');
				redirect('dashboard/users/register');
			}else{
				$this->session->set_flashdata('danger', 'Error in to resgister user!');
				$this->admin->show('admin/register_users', $data);
			}
		}	
	} // End User Register

	public function edit($id){
		$data["scripts"] = ["util.js"];
		$data['title'] = 'Pagina de Ediçao';
		$data['user'] = $this->users_model->get_by_id($id);
		$this->admin->show('admin/edit_users', $data);
	}

	public function update() {
		$this->form_validation->set_rules('id', 'id', 'trim|min_length[1]|max_length[10]');
		$this->form_validation->set_rules('name', 'name', 'trim|min_length[5]|max_length[50]');
		$this->form_validation->set_rules('email', 'email', 'trim|valid_emails|valid_email');
		$this->form_validation->set_rules('role_id', 'Grupo', 'trim');
		$this->form_validation->set_rules('is_active', 'Status', 'trim');
		$this->form_validation->set_rules('password', 'password', 'trim|min_length[6]|matches[password]', ['matches' => 'Password não confere!', 'min_length' => 'Password muito curto']);
		$this->form_validation->set_rules('passconf', 'repeat password', 'trim|matches[password]', ['matches' => 'Password não confere!']);
		$this->form_validation->set_error_delimiters('<div class="error text-danger" style="font-size:12px;">', '</div>');

		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('danger', validation_errors());
			$this->admin->show('admin/edit_users');
		} else {
			$id = html_escape($this->input->post('id'));
			$this->users_model->update($id);
			$this->session->set_flashdata('success', 'Paciente Atualizado com sucesso');
			redirect('dashboard/users');
		}
	}

	public function delete($id){
		$id = $this->uri->segment(4);
		if (empty($id)){
			show_404();
		} 
		$data["scripts"] = ["util.js"];
		$data['user'] = $this->users_model->delete($id);
		$this->session->set_flashdata('success', 'Paciente deletado com sucesso');
		redirect(base_url('dashboard/users'));
	}

	

}

/* End of file Users.php */
/* Location: ./application/controllers/cpanel/Users.php */