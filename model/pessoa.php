<?php 

#echo "Pessoa";

class Pessoa
{
	public $id = null;
	public $nome = null;
	public $telefone = null;

	public function __construct($id,$nome, $telefone){

		if($id !=null){
			$this->id = $id;
		}
		$this->nome = $nome;
		$this->telefone = $telefone;
		echo "</br>Criando Pessoa";
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
			echo "</br>Chamando id igual a null";
		}else{
			parent::__construct($id,$nome,$telefone);
		}
		$this->sobrenome = $sobrenome;
		$this->cpf = $cpf;
		echo "</br>Criando Pessoa Fisica";
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