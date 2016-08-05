<?php 

#echo "Pessoa";

class Pessoa
{
	public $id = 0;
	public $nome = null;
	public $telefone = null;

	public function __construct($id,$nome, $telefone){

		if($id !=null){
			$this->id = $id;
		}
		$this->nome = $nome;
		$this->telefone = $telefone;
	} 
}

/**
* Classe filha Fisica
*/
class Fisica extends Pessoa
{
	public $sobrenome = null;
	public $cpf = null;

	function __construct($id,$nome, $telefone, $sobrenome, $cpf)
	{
		if($id == null){
			parent::__construct(null,$nome,$telefone);
		}else{
			parent::__construct($id,$nome,$telefone);
		}
		$this->sobrenome = $sobrenome;
		$this->cpf = $cpf;
	}
}

// /**
// * Classe Admin
// */
// class Admin extends Pessoa
// {
// 	public $nome_usuario = null;
// 	public $senha = null;

// 	function __construct($nome, $telefone,$nome_usuario,$telefone)
// 	{
// 		parent::__construct($nome,$telefone);
// 		$this->nome_usuario = $nome_usuario;
// 		$this->senha = $senha;
// 	}
// }

?>