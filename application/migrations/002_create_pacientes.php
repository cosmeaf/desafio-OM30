<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Create_pacientes extends CI_Migration {

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
			'name' => array(
				'type' => 'VARCHAR',
				'constraint' => 128
			),
			'nomemae' => array(
				'type' => 'VARCHAR',
				'constraint' => 128
			),
			'cpf' => array(
				'type' => 'VARCHAR',
				'constraint' => 32,
			),
			'cnes' => array(
				'type' => 'VARCHAR',
				'constraint' => 32,
			),
			'nascimento' => array(
				'type' => 'DATE',
			),
			'cep' => array(
				'type' => 'VARCHAR',
				'constraint' => 32,
			),
			'name' => array(
				'type' => 'VARCHAR',
				'constraint' => 128,
			),
			'logradouro' => array(
				'type' => 'VARCHAR',
				'constraint' => 256,
			),
			'complemento' => array(
				'type' => 'VARCHAR',
				'constraint' => 128,
			),
			'localidade' => array(
				'type' => 'VARCHAR',
				'constraint' => 32,
			),
			'uf' => array(
				'type' => 'VARCHAR',
				'constraint' => 32,
			),
			'email' => array(
				'type' => 'VARCHAR',
				'constraint' => 128,
			),
			'celular' => array(
				'type' => 'VARCHAR',
				'constraint' => 32,
			),
			'telefone' => array(
				'type' => 'VARCHAR',
				'constraint' => 32,
				'null' => TRUE,
			),
			'recado' => array(
				'type' => 'VARCHAR',
				'constraint' => 32,
				'null' => TRUE,
			),
			'imagem' => array(
				'type' => 'VARCHAR',
				'constraint' => 32,
				'null' => TRUE,
			),			
		));
		$this->dbforge->add_key('id', 'TRUE');
		$this->dbforge->create_table('tbl_pacientes');
	}

	public function down() {
		$this->dbforge->drop_table('tbl_pacientes');
	}

}

/* End of file 001_create_pacientes.php */
/* Location: ./application/migrations/001_create_pacientes.php */