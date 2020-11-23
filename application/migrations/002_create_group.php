<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Create_group extends CI_Migration {

	public function __construct()
	{
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
			'group' => array(
				'type' => 'VARCHAR',
				'constraint' => 128
			),
			'user_id' => array(
				'type' => 'INT',
				'constraint' => 11
			),
		));
		$this->dbforge->add_key('id', 'TRUE');
		$this->dbforge->create_table('tbl_group');
	}

	public function down() {
		$this->dbforge->drop_table('tbl_group');
	}

}

/* End of file 002_create_group.php */
/* Location: ./application/migrations/002_create_group.php */