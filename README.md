# Desafio - Vaga - Pessoa Desenvolvedora FullStack PHP

# Para Acesso a base de dados postgres, é necessário adicinar linhas abaixo (application\config\database.php)

$db['default'] = array(
	'dsn'	=> '',
	'hostname' => 'localhost',
	'username' => 'postgres', 	// Usuário a basa de dados
	'password' => 'postgres',	// Senha da base de dados
	'database' => 'db_projeto5',	// Nome da base de dados
	'dbdriver' => 'postgre',
	'dbprefix' => '',
	'pconnect' => FALSE,
	'db_debug' => (ENVIRONMENT !== 'production'),
	'cache_on' => FALSE,
	'cachedir' => '',
	'char_set' => 'utf8',
	'dbcollat' => 'utf8_general_ci',
	'swap_pre' => '',
	'encrypt' => FALSE,
	'compress' => FALSE,
	'stricton' => FALSE,
	'failover' => array(),
	'save_queries' => TRUE,
	'port' => 5432
);


# Utilizar migrations;

Após criação e configuração dos arquivos de migrations do Codeigniter, foi versionado duas tabelas para projeto OM30.

Conforme arquivo localizado em (application\config\migration.php) linha 73.
$config['migration_version'] = 002;

# Modelo Padrão
A versão 001 é para a tables = "tbl_users"
A versão 002 é para a tables = "tbl_pacientes"
