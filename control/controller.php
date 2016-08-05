<?php 
include '../dao/fisicadao.php';
include '../dao/carrodao.php';
include '../dao/consertodao.php';

include '../model/pessoa.php';
include '../model/carro.php';
include '../model/conserto.php';

echo 'Funcionando Controller';

$acao = $_GET['act'];

switch ($acao) {
	#Busca na url cadastrar Fisica
	case 'cadastrarFisica':
	echo "</br>Fazendo cadastro de fisica";
	Controller::cadastrarFisica($_POST['nome'],$_POST['telefone'],$_POST['sobrenome'],$_POST['cpf']);
	break;

	#Busca na url cadastrar Carro
	case 'cadastrarCarro':
	echo "</br>Cadastrando Carro";
	Controller::cadastrarCarro($_POST['fkidpessoa'],$_POST['modelo'],$_POST['ano'],$_POST['marca'],$_POST['placa']);
	break;

	#Busca na url cadastrar Conserto
	case 'registrarConserto':
	echo "Registrando Conserto";
	Controller::registarConserto($_POST['idcarro'],$_POST['dataregistro'],$_POST['valorPecas'],
		$_POST['pecasUtilizadas'],$_POST['descricao'],$_POST['valorMaodeObra']);
	break;


	case 'buscarFisica':
	echo "</br> buscarfisica - CALLED";
	Controller::buscarFisica($_POST['nome'],$_POST['sobrenome']);
	break;

	#EXCLUIR FISICA
	case 'excluirFisica':
	Controller::excluirFisica($_GET['id']);
	break;

	#ALTERAR FISICA
	case 'alterarFisica':
	Controller::alterarFisica($_POST['id'],$_POST['nome'],$_POST['telefone'],$_POST['sobrenome'],$_POST['cpf']);
	break;


// 	// default:
// 	// echo '</br>Error';
// 	// break;
}




class Controller
{

	public static function cadastrarFisica($nome,$telefone,$sobrenome,$cpf){
		echo "</br>Nome: ".$nome." /Sobrenome: ".$sobrenome." /Telefone: ".$telefone." /Cpf: ".$cpf;
		$fisica = new Fisica(null,$nome,$telefone,$sobrenome,$cpf);
		FisicaDAO::adicionarFisica($fisica);
		echo '</br>Cadastro realizado com sucesso';
	}


	####BUSCA FISICA
	public static function buscarFisica($id,$nome, $telefone, $sobrenome, $cpf){
		$pessoa = new Fisica($id,$nome, $telefone, $sobrenome, $cpf);
		$array = FisicaDAO::buscarFisica($pessoa);

		return $array;
	}
	####DELETAR FISICA
	public static function excluirFisica($id){
		FisicaDAO::excluirFisica($id);
	}

	####ALTERAR FISICA
	public static function alterarFisica($id,$nome,$telefone,$sobrenome,$cpf){
		$fisica = new Fisica($id,$nome,$telefone,$sobrenome,$cpf);
		FisicaDAO::alterarFisica($fisica);
	}

	//------------------------------------------------------------------------------------------------------------------
	public static function cadastrarCarro($id,$modelo, $ano, $marca, $placa){
		$carro = new Carro($modelo, $ano, $marca, $placa);
		$pessoa = new Pessoa($id,null, null);
		CarroDao::adicionarCarro($carro,$pessoa);
		echo '</br>Cadastro realizado com sucesso';

	}
	####BUSCA CARRO
	public static function buscarCarro($placa){
		$carro = new Carro(null,null,null,$placa);

		return $array = CarroDAO::pesquisarCarro($carro);
	}

	//------------------------------------------------------------------------------------------------------------------
	public static function registarConserto($idcarro,$data,$valorPecas,$pecasUtilizadas,$descricao,$valorMaodeObra){

		$conserto = new Conserto($data,floatval($valorPecas),$pecasUtilizadas,$descricao,$valorMaodeObra);
		ConsertoDao::adicionarConserto($conserto,$idcarro);
		echo '</br>Cadastro realizado com sucesso';
	}

	public static function buscarConserto($placa){
		$array = ConsertoDAO::pesquisarConserto($placa);

		return $array;
	}
}
?>