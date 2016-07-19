<?php 

#echo 'Funcionando Controller';

include '../dao/fisicadao.php';
include '../dao/carrodao.php';
include '../dao/consertodao.php';


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
		// echo $modelo."/".$placa;
		// echo '</br>chamando';
		$carro = new Carro("FIT", "2004", "Honda", "DDF-9009");
		#echo $carro->marca;
		CarroDao::adicionarCarro($carro);

	}

	public static function registarConserto($data,$valorPecas,$pecasUtilizadas,$descricao,$valorMaodeObra){
		$conserto = new Conserto($data,$valorPecas,$pecasUtilizadas,$descricao,$valorMaodeObra);

		// $conserto = new Conserto("2016",2000,"Jogo de Vela","Troca de velas",299);
		// echo $conserto->data."/Valor Total: ".$conserto->valorTotal;

		ConsertoDao::adicionarConserto($conserto);


	}
}
?>