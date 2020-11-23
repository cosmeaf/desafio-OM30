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
			'imagem' => 'default.png'
		];
		$this->db->insert($this->table, $data);
		$insert_id = $this->db->insert_id();
		return  $insert_id;
	}

	function get_all() {
		return $this->db->get($this->table)
		->result_array();
	}
	
	function get_by_id($id){
		return $this->db->get_where($this->table, array('id' => $id))
		->row_array();
	}

	function update($id) {
		$data = [
			'id' => html_escape($this->input->post('id')),
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
			'recado' => html_escape($this->input->post('recado'))
		];
		//echo "<pre>";print_r($data);die();
		$this->db->where('id', $id);
		$this->db->update($this->table, $data);       
	}

	function delete($id) {
		$this->db->where('id', $id);
		$this->db->delete($this->table);
	}

	function updateImage($id, $image){
		if (empty($image)) {
			$image = 'default.png';
		}
		if (empty($id)) {

		}else{
			$data = [ 
				'id' => $id,
				'imagem' => $image
			];
			//echo "<pre>";var_dump($image);die();
			$this->db->where('id', $id);
			$this->db->update($this->table, $data); 
		}
	}	

	
}

/* End of file Pacientes_model.php */
/* Location: ./application/models/Pacientes_model.php */