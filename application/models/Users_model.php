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
			'role_id' => 1,
			'is_active' => 1,
			'created_at' => date('Y-m-d H:i:s.u'),
			'image' => 'default.png',
			'token' => '0'
		];
		$this->db->insert($this->table, $data);
		$insert_id = $this->db->insert_id();
		return  $insert_id;
	} // End Insert Function

	function get_all() {
		return $this->db->get($this->table)
		->result_array();
	}
	
	function get_by_id($id){
		return $this->db->get_where($this->table, array('id' => $id))
		->row_array();
	}

	function update($id, $image) {
		//$image = html_escape($this->input->post('image'));
		//echo "<pre>";var_dump($image);die();
		if (empty($image)) {
			$image = 'default.png';
		}else{
			$image = $image;
		}
		$data = [
			'id' => html_escape($this->input->post('id')),
			'name' => html_escape($this->input->post('name')),
			'email' => html_escape($this->input->post('email')),			
			'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
			'role_id' => html_escape($this->input->post('role_id')),
			'is_active' => html_escape($this->input->post('is_active')),
			'created_at' => date('Y-m-d'),
			'image' => $image,
			'token' => '0'
		];
		//echo "<pre>";print_r($data);die();
		$this->db->where('id', $id);
		$this->db->update($this->table, $data);       
	}

	function delete($id) {
		$this->db->where('id', $id);
		$this->db->delete($this->table);
	}

	
}

/* End of file Users_model.php */
/* Location: ./application/models/Users_model.php */