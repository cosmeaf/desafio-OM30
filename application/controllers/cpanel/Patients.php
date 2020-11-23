<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Patients extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('pacientes_model');
	}


	public function index(){
    // Allowing akses to admin only 
		if($this->session->userdata('role_id') == 1){
			$data['title'] = "Dashboard - SISCAO";
			$data["scripts"] = ["util.js"];
			$data['user'] = $this->pacientes_model->get_all();
			//echo "<pre>";print_r($user);die();
			$this->admin->show('admin/list_patients', $data);
		}else{
			echo "Access Denied";
		}
	}

	public function register(){
    // Allowing akses to admin only
		$data["scripts"] = ["util.js"];
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
				//$this->session->set_flashdata('danger', validation_errors());
				$this->admin->show('admin/insert_patients', $data);
			} else {
				//echo "<pre>";print_r(cpf_verify($cpf));die();
				$this->pacientes_model->insert();
				// echo "Dados Cadastrados com sucesso";
				$this->session->set_flashdata('success', 'Paciente Cadastrado com sucesso');
				redirect('dashboard/patients');
			}
			
		}else{
			echo "Access Denied";
		}
	}

	public function edit($id){
		$data["scripts"] = ["util.js"];
		$data['title'] = 'Pagina de Ediçao';
		$data['user'] = $this->pacientes_model->get_by_id($id);
		$this->admin->show('admin/edit_patients', $data);
	}

	public function update() {
		$data['user'] = $this->pacientes_model->get_all();
		$this->form_validation->set_rules('id', 'id');
		$this->form_validation->set_rules('name', 'name', 'trim|required|min_length[10]|max_length[50]');
		$this->form_validation->set_rules('nomemae', 'nomemae', 'trim|required|min_length[5]|max_length[50]');
		$this->form_validation->set_rules('cpf', 'cpf', 'trim|required|min_length[11]|max_length[11]');
		$this->form_validation->set_rules('cnes', 'cnes', 'trim|required|min_length[15]|max_length[15]');
		$this->form_validation->set_rules('nascimento', 'nascimento', 'trim|required|min_length[10]|max_length[10]');
		$this->form_validation->set_rules('cep', 'cep', 'trim|required|min_length[8]|max_length[9]');
		$this->form_validation->set_rules('logradouro', 'logradouro', 'trim|required|min_length[5]|max_length[250]');
		$this->form_validation->set_rules('complemento', 'complemento', 'trim|required|min_length[10]|max_length[128]');
		$this->form_validation->set_rules('localidade', 'cidade', 'trim|required|min_length[5]|max_length[128]');
		$this->form_validation->set_rules('uf', 'uf', 'trim|required|min_length[2]|max_length[2]');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('celular', 'celular', 'trim|required|min_length[5]|max_length[12]');
		$this->form_validation->set_rules('telefone', 'telefone', 'trim');
		$this->form_validation->set_rules('recado', 'recado', 'trim');
		$this->form_validation->set_error_delimiters('<div class="error text-danger" style="font-size:12px;">', '</div>');

		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('danger', validation_errors());
			$this->admin->show('admin/list_patients', $data);
		} else {
			$id = html_escape($this->input->post('id'));
			$this->pacientes_model->update($id);
			$this->session->set_flashdata('success', 'Paciente Atualizado com sucesso');
			redirect('dashboard/patients');
		}
	}

	public function updateImage(){
		$image = $this->do_upload();
		$this->form_validation->set_rules('id', 'id', 'trim|required');
		$this->form_validation->set_rules('imagem', 'imagem');
		$this->form_validation->set_error_delimiters('<div class="error text-danger" style="font-size:12px;">', '</div>');
		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('danger', validation_errors());
			$this->admin->show('admin/edit_patients', $data);
		} else {
			//echo "<pre>";var_dump($image);die();
			$id = html_escape($this->input->post('id'));
			$this->pacientes_model->updateImage($id, $image);
			$this->session->set_flashdata('success', 'Foto Atualizado com sucesso');
			redirect('dashboard/patients');
		}
	}

	private function do_upload(){
		$config['upload_path'] = APPPATH . './uploads/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg|JPEG|JPG|PNG|GIF';
		$config['max_size'] = 0;
		$config['max_width']  = 0;
		$config['max_height']  = 0;
		$config['file_ext_tolower']  = TRUE;
		$config['overwrite']  = TRUE;
		$config['max_filename']  = 0;
		$config['encrypt_name']  = FALSE;
		$config['remove_spaces']  = TRUE;
		$config['detect_mime']  = TRUE;
		$config['mod_mime_fix']  = TRUE;

		//echo "<pre>";var_dump($config);

		$this->upload->initialize($config);

		$this->load->library('upload', $config);
		
		if ( ! $this->upload->do_upload('imagem')){
			$error = array('error' => $this->upload->display_errors());
		}
		else{
			//$data = array('upload_data' => $this->upload->data());
			$data = $this->upload->data();
			$name = $data['file_name'];
			return $name;
		}
	}

	public function delete($id){
		$id = $this->uri->segment(4);
		if (empty($id)){
			show_404();
		} 
		$data["scripts"] = ["util.js"];
		$data['user'] = $this->pacientes_model->delete($id);
		$this->session->set_flashdata('success', 'Paciente deletado com sucesso');
		redirect(base_url('dashboard/patients'));
	}

}


/* End of file Patients.php */
/* Location: ./application/controllers/cpanel/Patients.php */