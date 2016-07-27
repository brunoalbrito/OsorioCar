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
		#echo '</br>Dentro do daobuscarFisica: '.$fisica->nome .'/'. $fisica->sobrenome;

		include 'conexao.php'; 
		$resultado = mysqli_query($conexao, "SELECT pessoa.idPessoa,pessoa.nome,pessoa.telefone,fisica.sobrenome,fisica.cpf 
			FROM pessoa INNER JOIN fisica ON pessoa.idPessoa=fisica.fk_id_pessoa 
			WHERE nome = '".$fisica->nome."' AND fisica.sobrenome = '".$fisica->sobrenome."'") or die("Não foi possível executar a SQL: " . mysqli_error($conexao));

		$array = array();

		if ($resultado) {
			while ($row = mysqli_fetch_array($resultado)) {
				#echo "</br>".$idPessoa = ($row["nome"]);
				array_push($array, new Fisica($row["idPessoa"],$row["nome"],$row["telefone"],$row["sobrenome"],$row["cpf"]));
				#echo $row['idPessoa'];
			}
		}
		return $array;
	}
}
?>