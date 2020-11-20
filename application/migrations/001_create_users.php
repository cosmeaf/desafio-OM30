<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Create_users extends CI_Migration {

	public function __construct(){
		$this->load->dbforge();
		$this->load->database();
	}

	public function up() {
		$this->dbforge->add_field(array(
			'id' => array(
				'type' => 'INT',
				'constraint' => 11,
				'unsigned' => TRUE,
				'auto_increment' => TRUE
			),
			'name' => array(
				'type' => 'VARCHAR',
				'constraint' => 128,
			),
			'email' => array(
				'type' => 'VARCHAR',
				'constraint' => 128,
			),
			'password' => array(
				'type' => 'VARCHAR',
				'constraint' => 256,
			),
			'role_id' => array(
				'type' => 'INT',
				'constraint' => 255,
			),
			'is_active' => array(
				'type' => 'TINYINT',
				'constraint' => 1,
			),
			'created_at' => array(
				'type' => 'TIMESTAMP',
			),
			'image' => array(
				'type' => 'VARCHAR',
				'constraint' => 255,
			),
			'token' => array(
				'type' => 'INT',
				'constraint' => 256,
			),
		));
		$this->dbforge->add_key('id', 'TRUE');
		$this->dbforge->create_table('tbl_users');
	}

	public function down() {
		$this->dbforge->drop_table('tbl_users');
	}

}

/* End of file 001_create_users.php */
/* Location: ./application/migrations/001_create_users.php */