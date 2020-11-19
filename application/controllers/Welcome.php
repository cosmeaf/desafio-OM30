<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index(){
		$this->load->view('welcome_message');
	}

	public function imagem(){
		$this->load->view('admin/list_imagem');
	}

	public function do_upload(){
		//$post = $_FILES['choose-file'];
		//$post = $this->input->post(null, TRUE);
		//echo "<pre>";var_dump($post);
		$config['upload_path'] = APPPATH . 'uploads';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['max_size'] = 0;
		$config['max_width']  = 0;
		$config['max_height']  = 0;
		$config['file_ext_tolower']  = TRUE;
		$config['overwrite']  = FALSE;
		$config['max_filename']  = 0;
		$config['encrypt_name']  = TRUE;
		$config['remove_spaces']  = TRUE;
		$config['detect_mime']  = TRUE;
		$config['mod_mime_fix']  = TRUE;

		//echo "<pre>";var_dump($config);

		$this->upload->initialize($config);

		$this->load->library('upload', $config);
		
		if ( ! $this->upload->do_upload('choose-file')){
			$error = array('error' => $this->upload->display_errors());
			$this->load->view('admin/list_imagem', $error);
		}
		else{
			$data = array('upload_data' => $this->upload->data());
			redirect('imagem/do_upload', $data);
		}
	}

	public function validaCns(){
		$cns = $this->input->post('cns');
		//echo "<pre>";var_dump($cns);die();
		$validator1 = '/^[1-2][0-9]{10}00[0-1][0-9]$/';
		$validator2 = '/^[7-9][0-9]{14}$/';
        // CNSs definitivos começam em 1 ou 2 / CNSs provisórios em 7, 8 ou 9
		if (preg_match($validator1, $cns) || preg_match($validator2, $cns) ) {
			$result = $this->somaPonderadaCns($cns) % 11 == 0;
			//echo "<pre>";var_dump($result);die();
			if ($result) {
				echo "Numero Valido";
				$this->load->view('admin/list_imagem');
			}else{
				echo "Numero invalido";
				$this->load->view('admin/list_imagem');
			}
		}
		return false;
	}


	private function somaPonderadaCns($cns): int{
		$soma = 0;

		for ($i = 0; $i < mb_strlen($cns); $i++) {
			$soma += $cns[$i] * (15 - $i);
		}

		return $soma;
	}

}