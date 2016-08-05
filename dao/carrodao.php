<?php 


/**
* 
*/
class CarroDao
{
	
	public static function adicionarCarro($carro,$pessoa){
		include 'conexao.php'; 
		$resultado = mysqli_query($conexao,"INSERT INTO carro(fk_id_pessoa,modelo,ano,marca,placa)values('".$pessoa->id."','".$carro->modelo."', '".$carro->ano."' ,'".$carro->marca."', '".$carro->placa."')") or die(mysql_error()."Não foi possivel realizar o cadastro");

		if ($resultado == TRUE) {
			echo '</br>Cadastro carro realizado com sucesso';
		}
	} 

	public static function pesquisarCarro($carro){
		include 'conexao.php';
		$resultado = mysqli_query($conexao,"SELECT pessoa.idPessoa,pessoa.nome,carro.modelo,carro.ano,carro.marca,carro.placa 
			from pessoa inner join	
			carro on pessoa.idPessoa = carro.fk_id_pessoa where placa = '".$carro->placa."'");


		if($resultado){
			$array =  array();
			$guarda = array();
			$fisica = array();
			$carro = array();	
			while ($row = mysqli_fetch_array($resultado)) {
				array_push($array, 
					new Fisica($row['idPessoa'],$row['nome'], null, null, null),
					new Carro($row['modelo'], $row['ano'], $row['marca'], $row['placa']));
			}
		}
		


		return $array;
	}
}
?>