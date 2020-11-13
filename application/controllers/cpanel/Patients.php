<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Patients extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('pacientes_model');
	}


	function index(){
    // Allowing akses to admin only
		if($this->session->userdata('role_id') == 1){
			$data['title'] = "Dashboard - SISCAO";
			$data['user'] = $this->pacientes_model->get_all();
			//echo "<pre>";print_r($user);die();
			$this->admin->show('admin/list_patients', $data);
		}else{
			echo "Access Denied";
		}
	}

	function register(){
    // Allowing akses to admin only
		if($this->session->userdata('role_id') == 1){
			$data['title'] = "Dashboard - SISCAO";
			$this->form_validation->set_rules('name', 'nome', 'trim|required|min_length[10]|max_length[50]');
			$this->form_validation->set_rules('nomemae', 'nomemae', 'trim|required|min_length[10]|max_length[50]');
			$this->form_validation->set_rules('cpf', 'cpf', 'trim|required|min_length[11]|max_length[11]|is_unique[tbl_pacientes.cpf]', ['is_unique' => 'CPF já cadastrado']);
			$this->form_validation->set_rules('cnes', 'cnes', 'trim|required|min_length[15]|max_length[15]|is_unique[tbl_pacientes.cnes]', ['is_unique' => 'CNES já cadastrado']);
			$this->form_validation->set_rules('nascimento', 'nascimento', 'trim|required');
			$this->form_validation->set_rules('cep', 'cep', 'trim|required|min_length[8]|max_length[10]');
			$this->form_validation->set_rules('logradouro', 'logradouro', 'trim|required|max_length[250]');
			$this->form_validation->set_rules('complemento', 'complemento', 'trim|required|max_length[50]');
			$this->form_validation->set_rules('localidade', 'cidade', 'trim|required');
			$this->form_validation->set_rules('uf', 'estado', 'trim|required');
			$this->form_validation->set_rules('email', 'email', 'required|valid_emails|valid_email|is_unique[tbl_pacientes.email]', ['is_unique' => 'E-mail já cadastrado']);
			$this->form_validation->set_rules('celular', 'celular', 'trim|required');
			$this->form_validation->set_rules('telefone', 'telefone');
			$this->form_validation->set_rules('recado', 'recado');
			$this->form_validation->set_error_delimiters('<div class="error text-danger mt-2" style="font-size:12px;">', '</div>');

			if ($this->form_validation->run() == FALSE) {
				$this->session->set_flashdata('danger', validation_errors());
				$this->admin->show('admin/insert_patients', $data);
			} else {
				//echo "<pre>";print_r(cpf_verify($cpf));die();
				$this->pacientes_model->insert();
				echo "Dados Cadastrados com sucesso";
				redirect('dashboard/patients');
			}
			
		}else{
			echo "Access Denied";
		}
	}

	function edit(){
    // Allowing akses to admin only
		if($this->session->userdata('role_id') == 1){
			$data['title'] = "Dashboard - SISCAO";
			$this->admin->show('admin/edit_patients', $data);
		}else{
			echo "Access Denied";
		}
	}

}

/* End of file Patients.php */
/* Location: ./application/controllers/cpanel/Patients.php */