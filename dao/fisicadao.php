<?php 

#include 'conexao.php';  

class FisicaDAO
{
	static function adicionarFisica($fisica){
		//echo '</br>FisicaDao';
		//echo "</br>Nome: ".$fisica->nome." /Sobrenome: ".$fisica->sobrenome." /Telefone: ".$fisica->telefone." /Cpf: ".$fisica->cpf;
		// fechamento da conexão 
		include 'conexao.php';  
		$resultado = mysqli_query($conexao,"INSERT INTO pessoa(nome,telefone)VALUES('".$fisica->nome."','".$fisica->telefone."')") 
		or die("Não foi possivel executar a SQL: " . mysqli_error($conexao));

		$resultado1 = mysqli_query($conexao,"INSERT INTO fisica(fk_id_pessoa,sobrenome,cpf)VALUES((select max(idPessoa) from pessoa), '".$fisica->sobrenome."','".$fisica->cpf."')") or die("Não foi possivel executar a SQL: " . mysqli_error($conexao));

		if($resultado == TRUE && $resultado1 == TRUE){
			echo "</br>Cadastro no banco executado com sucesso";
		}
	}
}
?>