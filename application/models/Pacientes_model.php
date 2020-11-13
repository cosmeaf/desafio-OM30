<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pacientes_model extends CI_Model {

	protected $table = 'tbl_pacientes';

	public function __construct(){
		parent::__construct();
	}


	function insert(){
		//echo "<pre>";print_r(cnes1($cnes));die();

		$data = [
			'name' => html_escape($this->input->post('name')),
			'nomemae' => html_escape($this->input->post('nomemae')),
			'cpf' => html_escape($this->input->post('cpf')),
			'cnes' => html_escape($this->input->post('cnes')),
			'nascimento' => html_escape($this->input->post('nascimento')),
			'cep' => html_escape($this->input->post('cep')),
			'logradouro' => html_escape($this->input->post('logradouro')),
			'complemento' => html_escape($this->input->post('complemento')),
			'localidade' => html_escape($this->input->post('localidade')),
			'uf' => html_escape($this->input->post('uf')),
			'email' => html_escape($this->input->post('email')),
			'celular' => html_escape($this->input->post('celular')),
			'telefone' => html_escape($this->input->post('telefone')),
			'recado' => html_escape($this->input->post('recado')),
			'imagem' => html_escape($this->input->post('imagem'))
		];
		$this->db->insert($this->table, $data);
		$insert_id = $this->db->insert_id();
		return  $insert_id;
	}

	public function get_all() {
		return $this->db->get($this->table)
		->result_array();
	}
	
	function get_all_id(){
		$cpf = $this->security->xss_clean(html_escape($this->input->post('cpf')));

		$query = $this->db->get_where($this->table, ['cpf' => $cpf]);

		if ($query->num_rows() > 0) {
			return $query->row_array();
		} else {
			return 0;
		}
	}
}

/* End of file Pacientes_model.php */
/* Location: ./application/models/Pacientes_model.php */