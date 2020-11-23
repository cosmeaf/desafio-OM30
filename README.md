# Desafio - Vaga - Pessoa Desenvolvedora FullStack PHP

- Para Acesso a base de dados postgres, é necessário adicinar linhas abaixo (application\config\database.php)
Cadastro de pacientes

## Getting Started

Desenvolver um cadastro de pacientes, do qual possamos testar toda sua capacidade de criação de arquitetura, qualidade do código, validações, elaboração de layout e usabilidade.

### Prerequisites

PHP utilizando o framework CodeIgniter 3.11. 
Listagem de paciente, a qual permite a edição, visualização e delete de cada um dos pacientes.
Utilização do banco de dados PostgreSQL 10;
Utilização migrations;

Cadastro de novos pacientes, contendo os campos, respectivas validações e máscaras:
Foto do Paciente;
Nome Completo do Paciente;
Nome Completo da Mãe;
Data Nascimento;
Data de Nascimento;
E-mail, Celular, Telefone, Recado
CPF -sem validação;
CNS (Cartão nacional de saúde) - Validação não implementado;
Endereço completo: (Numero CEP Logradouro, Rua, Avenida Numero, Complemento Cidade Estado) - Com validação de CEP viacep.

### Installing

Realizado instalação 

```
CDNS:
Bootstrap;
popper;
jquery;
fontawesome.
```


## Running the tests

```
- Não se aplica
```

### Break down into end to end tests

```
- Não se aplica
```

### And coding style tests

Para Acesso a base de dados postgres, é necessário adicinar linhas abaixo (application\config\database.php)Explain what these tests test and why

```
$db['default'] = array(
	'dsn'	=> '',
	'hostname' => 'localhost',
@@ -25,14 +78,85 @@ $db['default'] = array(
	'port' => 5432
);

- Utilizar migrations;
```
````
### Utilizar migrations;
Após criação e configuração dos arquivos de migrations do Codeigniter, foi versionado duas tabelas para projeto OM30.
Conforme arquivo localizado em (application\config\migration.php) linha 73.
$config['migration_version'] = 002;
- Modelo Padrão
# Modelo Padrão
A versão 001 é para a tables = "tbl_users" (Usuário admin@admin.com + senha 123456), Como usuário padrão

A versão 002 é para a tables = "tbl_group"

A versão 003 é para a tables = "tbl_pacientes"
````

````
### Função de validaçao do CNES:
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
````
## Deployment

Usado em XAMPP Apache (https://www.apachefriends.org/pt_br/index.html)
Usado Bondo de Dados 

## Built With

* [Codeigniter](https://codeigniter.com/) - The PHP framework used
* [SB Admin 2](https://startbootstrap.com/theme/sb-admin-2) - Dashboard Management


## Contributing

- Não se aplica

## Versioning

- Não se aplica

## Authors

* **Cosme Alves** 


## License

- Não se aplica

## Acknowledgments

* Empresa OM30 e seus colaboradores:
* Suzany Rocha Peixoto
* Gustavo Miguelote
