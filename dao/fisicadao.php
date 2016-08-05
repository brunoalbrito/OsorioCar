<?php 

#include 'conexao.php';  

class FisicaDAO
{

	public $array;

	static function adicionarFisica($fisica){
		//echo '</br>FisicaDao';
		//echo "</br>Nome: ".$fisica->nome." /Sobrenome: ".$fisica->sobrenome." /Telefone: ".$fisica->telefone." /Cpf: ".$fisica->cpf;
		// fechamento da conexão 
		include 'conexao.php';  
		$resultado = mysqli_query($conexao,"INSERT INTO pessoa(nome,telefone)VALUES('".$fisica->nome."','".$fisica->telefone."')") 
		or die("Não foi possivel executar a SQL: " . mysqli_error($conexao));

		$resultado1 = mysqli_query($conexao,"INSERT INTO fisica(fk_id_pessoa,sobrenome,cpf)VALUES((select max(idPessoa) from pessoa), '".$fisica->sobrenome."','".$fisica->cpf."')") 
		or die("Não foi possivel executar a SQL: " . mysqli_error($conexao));

		if($resultado == TRUE && $resultado1 == TRUE){
			echo "</br>Cadastro no banco executado com sucesso";
		}

	}

	public static function buscarFisica($fisica){

		include 'conexao.php'; 
		$resultado = mysqli_query($conexao, "SELECT pessoa.idPessoa,pessoa.nome,pessoa.telefone,fisica.sobrenome,fisica.cpf 
			FROM pessoa INNER JOIN fisica ON pessoa.idPessoa=fisica.fk_id_pessoa 
			WHERE nome = '".$fisica->nome."' AND fisica.sobrenome = '".$fisica->sobrenome."' or idPessoa = '".$fisica->id."'") or die("Não foi possível executar a SQL: " . mysqli_error($conexao));

		$array = array();

		if ($resultado) {
			while ($row = mysqli_fetch_array($resultado)) {
				array_push($array, new Fisica($row["idPessoa"],$row["nome"],$row["telefone"],$row["sobrenome"],$row["cpf"]));
			}
		}
		return $array;
	}
	public static function excluirFisica($id){
		echo '<br>Chamando inside function DAO '.$id;
		include 'conexao.php'; 

		$resultado = mysqli_query($conexao,"DELETE from pessoa where idPessoa = '".$id."'")or die(mysqli_error().'Sorry connection fail');

		if($resultado){
			echo '</br>Delete doing with sucess';
		}
	}

	public static function alterarFisica($fisica){
		include 'conexao.php';

		echo "</br>ID: ".$fisica->id." Nome: ".$fisica->nome." /Sobrenome: ".$fisica->sobrenome." /Telefone: ".$fisica->telefone." /Cpf: ".$fisica->cpf;

		$resultado = mysqli_query($conexao,'UPDATE pessoa SET nome = "'.$fisica->nome.'",telefone = "'.$fisica->telefone.'" 
			WHERE idPessoa = "'.$fisica->id.'"')or die(mysql_error($conexao));

		$resultado1 = mysqli_query($conexao,'UPDATE fisica SET sobrenome = "'.$fisica->sobrenome.'",
			cpf = "'.$fisica->cpf.'" WHERE fk_id_pessoa ="'.$fisica->id.'"')or die(mysql_error($conexao));

		if ($resultado === TRUE || $resultado1 === TRUE) {
			echo "<br/>Alteraçao alterado com sucesso!";
			#header('Location: alterarAgenda.php');
		} 
	}
}
?>