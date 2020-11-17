<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('auth_model');

	}

	private function logged_in(){
		if(!$this->session->userdata('authenticated')){
			redirect('login');
		}
	}

	public function login(){
		$data["scripts"] = ["util.js"];
		$data['title'] = "Login Page";
		$this->form_validation->set_rules('email', 'email', 'trim|required|valid_emails|valid_email');
		$this->form_validation->set_rules('password', 'password', 'trim|required|min_length[6]');
		$this->form_validation->set_error_delimiters('<div class="error text-danger">', '</div>');

		if ($this->form_validation->run() == FALSE) {
			//$this->session->set_flashdata('danger', validation_errors());
			$this->load->view('auth/login', $data);
		} else {
			$email = $this->security->xss_clean($this->input->post('email'));
			$password = $this->security->xss_clean($this->input->post('password'));
			$user = $this->auth_model->doLogin($email, $password);
			
			//echo "<pre>";print_r($user);

			if ($user['email'] == $email) {
				if ($user['is_active'] == 1) {
					if (password_verify($password, $user['password'])) {
						$sessdata = array(
							'id' => $user['id'],
							'name' => $user['name'],
							'email' => $user['email'],
							'role_id' => $user['role_id'],
							'authenticated' => TRUE
						);
						//echo "<pre>";print_r($sessdata);
						$this->session->set_userdata($sessdata);
						
						if ($user['role_id'] == 1) {
							$this->session->set_flashdata('success', 'Bem vindo ' . $sessdata['name']);
							redirect('dashboard');
						}else{
							$this->session->set_flashdata('success', 'Bem vindo ' . $sessdata['name']);
							redirect('dashboard/users');
						}
						
					}else{
						echo "Password inválido! \n";
						$this->session->set_flashdata('danger', 'Password inválid ');
						redirect('login', $data);
					}
				}else{
					echo "E-mail ou usuário bloqueado! \n";
					$this->session->set_flashdata('danger', 'E-mail ou usuário bloqueado! ');
					redirect('login', $data);
				}
			}else{
				echo "E-mail não confere \n";
				$this->session->set_flashdata('danger', 'E-mail não confere ');
				redirect('login', $data);
			}
			//echo "<pre>";print_r($user);

		}
	} // End User Login


	public function register(){
		$data["scripts"] = ["util.js"];
		$data['title'] = "Register Page";
		$this->form_validation->set_rules('name', 'name', 'trim|required|min_length[5]|max_length[50]');
		$this->form_validation->set_rules('email', 'email', 'trim|required|valid_emails|valid_email|is_unique[tbl_users.email]', ['is_unique' => 'E-mail já cadastrado em base de dados']);
		$this->form_validation->set_rules('password', 'password', 'trim|required|min_length[6]|matches[password]', ['matches' => 'Password não confere!', 'min_length' => 'Password muito curto']);
		$this->form_validation->set_rules('passconf', 'repeat password', 'trim|required|matches[password]', ['matches' => 'Password não confere!']);
		$this->form_validation->set_error_delimiters('<div class="error text-danger">', '</div>');

		if ($this->form_validation->run() == FALSE) {
			//$this->session->set_flashdata('danger', validation_errors());
			$this->load->view('auth/register', $data);
		} else {
			$user = $this->auth_model->insert();
			if ($user) {
				$this->session->set_flashdata('success', 'User Registred Successfully');
				redirect('login');
			}else{
				$this->session->set_flashdata('danger', 'Error in to resgister user!');
				$this->load->view('auth/register', $data);
			}
		}	
	} // End User Register

	public function recovery(){
		$data["scripts"] = ["util.js"];
		$data['title'] = "Recovery Page";
		$this->load->view('auth/recovery', $data);
	}

	public function logout(){
		$data["scripts"] = ["util.js"];
		$data['title'] = "Login Page";
		$this->session->sess_destroy();
		$this->session->set_flashdata('success', 'Sua sessão foi encerrada! ');
		redirect('login', $data);
	}


} // End Controller

/* End of file Auth.php */
/* Location: ./application/controllers/Auth.php */