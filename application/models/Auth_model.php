<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_model extends CI_Model {

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

	function doLogin($email, $password){
		
		$query = $this->db->get_where($this->table, ['email' => $email]);

		if ($query->num_rows() > 0) {
			return $query->row_array();
		} else {
			return false;
		}
	} // End doLogin function

}

/* End of file Auth_model.php */
/* Location: ./application/models/Auth_model.php */