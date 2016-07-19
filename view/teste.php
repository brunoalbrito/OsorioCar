<html>
<head>
	<title>Teste</title>
	<meta charset="utf-8">
</head>
<body>

</body>
</html>

<?php 

	include '../model/pessoa.php';
	include '../model/carro.php';
	include '../model/conserto.php';
	include '../control/controller.php';


	// $nome = $_POST['nome'];
 //    $sobrenome = $_POST['sobrenome'];
 //    $telefone = $_POST['telefone'];
 //    $cpf = $_POST['cpf'];


	//echo 'Funcionando';

	// $pessoa = new Pessoa($nome,$telefone);
	// echo '</br>Exibir: '.$pessoa->nome;

	#CLASS TESTING FISICA/PESSOA
	// $fisica = new Fisica($_POST['nome'], $_POST['telefone'], $_POST['sobrenome'], $_POST['cpf']);
	// echo '</br>Pessoa Fisica ';
	// echo "</br>Nome: ".$fisica->nome." /Sobrenome: ".$fisica->sobrenome." /Telefone: ".$fisica->telefone." /Cpf: ".$fisica->cpf;

	#Controller::cadastrarFisica($_POST['nome'], $_POST['telefone'], $_POST['sobrenome'], $_POST['cpf']);

	#CLASS TESTING CARRO
	// $carro = new Carro("FIT", "2004", "Honda", "DDF-9009");
	// echo $carro->marca;

	#Controller::cadastrarCarro("FIT", "2004", "Honda", "DDF-9009");

	#CLASS TESTING CONSERTO
	// $conserto = new Conserto("2016",2000,"Jogo de Vela","Troca de velas",299);
	// echo $conserto->data."/Valor Total: ".$conserto->valorTotal;

	Controller::registarConserto("2016",4500,"5 litros de oléo e filtro","Troca de oléo e filtro",90);



?>