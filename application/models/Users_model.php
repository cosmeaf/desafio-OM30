<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users_model extends CI_Model {

	protected $table = 'tbl_users';

	public function __construct(){
		parent::__construct();
		$this->load->database();	
	}
	
	function insert(){
		$data = [
			'name' => html_escape($this->input->post('name')),
			'email' => html_escape($this->input->post('email')),			
			'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
			'role_id' => 2,
			'is_active' => 1,
			'created_at' => date('Y-m-d H:i:s.u'),
			'image' => 'default.png',
			'token' => '0'
		];
		$this->db->insert($this->table, $data);
		$insert_id = $this->db->insert_id();
		return  $insert_id;
	} // End Insert Function

	function some_model_function() {	
		$this->db->from($this->table);
		return $num_rows = $this->db->count_all_results();
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
		if (empty($data)) {
			$data = [
				'id' => html_escape($this->input->post('id')),
				'name' => html_escape($this->input->post('name')),
				'email' => html_escape($this->input->post('email')),
				'role_id' => html_escape($this->input->post('role_id')),
				'is_active' => html_escape($this->input->post('is_active')),
				'created_at' => date('Y-m-d')
			];
		//echo "<pre>";print_r($data);die();
			$this->db->where('id', $id);
			$this->db->update($this->table, $data); 
		}
	}

	function updatePassword($id){
		if (empty($id)) {
			
		}else{
			$data = [
				'id' => html_escape($this->input->post('id')),
				'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT)
			];
			var_dump($data);
			$this->db->where('id', $id);
			$this->db->update($this->table, $data); 
		}	
	}

	function updateImage($id, $image){
		if (empty($image)) {
			$image = 'default.png';
		}
		if (empty($id)) {

		}else{
			$data = [ 
				'id' => $id,
				'image' => $image
			];
			//echo "<pre>";var_dump($image);die();
			$this->db->where('id', $id);
			$this->db->update($this->table, $data); 
		}
	}	

	function delete($id) {
		$this->db->where('id', $id);
		$this->db->delete($this->table);
	}

	
}

/* End of file Users_model.php */
/* Location: ./application/models/Users_model.php */