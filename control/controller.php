<?php 

echo 'Funcionando Controller';

include '../dao/fisicadao.php';
include '../dao/carrodao.php';
include '../dao/consertodao.php';

include '../model/pessoa.php';
include '../model/carro.php';
include '../model/conserto.php';

$acao = $_GET['act'];

switch ($acao) {
	#Busca na url cadastrar Fisica
	case 'cadastrarFisica':
	echo "Fazendo cadastro de fisica";
	Controller::cadastrarFisica($_POST['nome'],$_POST['telefone'],$_POST['sobrenome'],$_POST['cpf']);
	break;

	#Busca na url cadastrar Carro
	case 'cadastrarCarro':
	echo "</br>Cadastrando Carro";
	Controller::cadastrarCarro($_POST['modelo'],$_POST['ano'],$_POST['marca'],$_POST['placa']);
	break;

	#Busca na url cadastrar Conserto
	case 'registrarConserto':
	echo "Registrando Conserto";
	Controller::registarConserto($_POST['dataregistro'],$_POST['valorPecas'],
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


	// default:
	// echo '</br>Error';
	// break;
}
#Controller::$acao($nome,"4556656","Brito","4567");




class Controller
{

	public static function cadastrarFisica($nome,$telefone,$sobrenome,$cpf){
		echo "</br>Nome: ".$nome." /Sobrenome: ".$sobrenome." /Telefone: ".$telefone." /Cpf: ".$cpf;
		#echo 'chamando';
		$fisica = new Fisica(null,$nome,$telefone,$sobrenome,$cpf);
		#echo "</br>Nome: ".$fisica->nome." /Sobrenome: ".$fisica->sobrenome." /Telefone: ".$fisica->telefone." /Cpf: ".$fisica->cpf;
		FisicaDAO::adicionarFisica($fisica);
		echo '</br>Cadastro realizado com sucesso';
	}


	####BUSCA FISICA
	####
	####
	###
	public static function buscarFisica($id,$nome, $telefone, $sobrenome, $cpf){
		$pessoa = new Fisica($id,$nome, $telefone, $sobrenome, $cpf);
		echo $pessoa->id;	
		#echo '</br>Dentro do buscarFisica: '.$pessoa->nome .'/'. $pessoa->sobrenome;
		$array = FisicaDAO::buscarFisica($pessoa);
		// foreach ($array as $value) {
		// 	print("</br>".$value->nome." / ".$value->sobrenome." / ".$value->telefone." / ".$value->cpf);
		// }

		return $array;
	}
	####DELETAR FISICA
	####
	####
	###
	public static function excluirFisica($id){
		FisicaDAO::excluirFisica($id);
	}

	####ALTERAR FISICA
	####
	####
	###
	public static function alterarFisica($id,$nome,$telefone,$sobrenome,$cpf){
		#echo "</br>ID: ".$id." Nome: ".$nome." /Sobrenome: ".$sobrenome." /Telefone: ".$telefone." /Cpf: ".$cpf;
		#echo 'chamando';
		$fisica = new Fisica($id,$nome,$telefone,$sobrenome,$cpf);
		#echo "</br>ID: ".$fisica->id." Nome: ".$fisica->nome." /Sobrenome: ".$fisica->sobrenome." /Telefone: ".$fisica->telefone." /Cpf: ".$fisica->cpf;
		FisicaDAO::alterarFisica($fisica);
		// echo '</br>Cadastro realizado com sucesso';
	}

	//------------------------------------------------------------------------------------------------------------------
	public static function cadastrarCarro($modelo, $ano, $marca, $placa){
		$carro = new Carro($modelo, $ano, $marca, $placa);
		echo '</br>'.$modelo."/".$placa;
		// echo '</br>chamando';
		#$carro = new Carro("FIT", "2004", "Honda", "DDF-9009");
		#echo $carro->marca;
		CarroDao::adicionarCarro($carro);
		echo '</br>Cadastro realizado com sucesso';

	}
	####BUSCA CARRO
	####
	####
	###
	public static function buscarCarro($placa){
		echo "</br>Chamando";
		$carro = new Carro(null,null,null,$placa);
		#echo '</br>'.$carro->placa;
		return $array = CarroDAO::pesquisarCarro($carro);

		// echo '</br>';
		// foreach ($array as $key => $valueall) {
		// 	foreach ($valueall as $key => $value) {
		// 		echo $value." ";
		// 	}
		// }
	}

	//------------------------------------------------------------------------------------------------------------------
	public static function registarConserto($data,$valorPecas,$pecasUtilizadas,$descricao,$valorMaodeObra){
		$conserto = new Conserto($data,floatval($valorPecas),$pecasUtilizadas,$descricao,$valorMaodeObra);
		#echo "</br>Exibir: ".floatval($valorMaodeObra);
		#$conserto = new Conserto("2016",2000,"Jogo de Vela","Troca de velas",299);
		echo "</br>".$conserto->data."/ Valor Total: ".$conserto->valorTotal;

		ConsertoDao::adicionarConserto($conserto);
		echo '</br>Cadastro realizado com sucesso';
	}

	public static function buscarConserto($placa){
		$array = ConsertoDAO::pesquisarConserto($placa);

		#print_r($array);
		return $array;
	}
}
?>