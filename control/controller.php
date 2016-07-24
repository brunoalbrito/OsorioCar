<?php 

#echo 'Funcionando Controller';

include '../dao/fisicadao.php';
include '../dao/carrodao.php';
include '../dao/consertodao.php';

include '../model/pessoa.php';
include '../model/carro.php';
include '../model/conserto.php';

$acao = $_GET['act'];

switch ($acao) {
	case 'cadastrarFisica':
	echo "Fazendo cadastro de fisica";
	Controller::cadastrarFisica($_POST['nome'],$_POST['telefone'],$_POST['sobrenome'],$_POST['cpf']);
	break;
	case 'cadastrarJuridica':
	echo "Cadastrando Juridica";
	break;
	case 'cadastrarCarro':
	echo "Cadastrando Carro";
	Controller::cadastrarCarro($_POST['modelo'],$_POST['ano'],$_POST['marca'],$_POST['placa']);
	break;
	case 'registrarConserto':
	echo "Registrando Conserto";
	Controller::registarConserto($_POST['dataregistro'],$_POST['valorPecas'],
		$_POST['pecasUtilizadas'],$_POST['descricao'],$_POST['valorMaodeObra']);
	break;
	default:
	echo 'Error';
	break;
}
#Controller::$acao($nome,"4556656","Brito","4567");




class Controller
{

	public static function cadastrarFisica($nome,$telefone,$sobrenome,$cpf){
		//echo $nome."/".$telefone;
		#echo 'chamando';
		$fisica = new Fisica($nome,$telefone,$sobrenome,$cpf);
		echo "</br>Nome: ".$fisica->nome." /Sobrenome: ".$fisica->sobrenome." /Telefone: ".$fisica->telefone." /Cpf: ".$fisica->cpf;
		FisicaDAO::adicionarFisica($fisica);
		echo '</br>Cadastro realizado com sucesso';
	}

	public static function cadastrarCarro($modelo, $ano, $marca, $placa){
		$carro = new Carro($modelo, $ano, $marca, $placa);
		echo '</br>'.$modelo."/".$placa;
		// echo '</br>chamando';
		#$carro = new Carro("FIT", "2004", "Honda", "DDF-9009");
		#echo $carro->marca;
		CarroDao::adicionarCarro($carro);
		echo '</br>Cadastro realizado com sucesso';

	}

	public static function registarConserto($data,$valorPecas,$pecasUtilizadas,$descricao,$valorMaodeObra){
		$conserto = new Conserto($data,floatval($valorPecas),$pecasUtilizadas,$descricao,$valorMaodeObra);
		#echo "</br>Exibir: ".floatval($valorMaodeObra);
		#$conserto = new Conserto("2016",2000,"Jogo de Vela","Troca de velas",299);
		echo "</br>".$conserto->data."/ Valor Total: ".$conserto->valorTotal;

		ConsertoDao::adicionarConserto($conserto);
		echo '</br>Cadastro realizado com sucesso';


	}
}
?>