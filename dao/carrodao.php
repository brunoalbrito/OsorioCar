<?php 


/**
* 
*/
class CarroDao
{
	
	public static function adicionarCarro($carro){
		include 'conexao.php';
		#echo $carro->marca." ".$carro->placa; 
		$resultado = mysqli_query($conexao,"INSERT INTO carro(fk_id_pessoa,modelo,ano,marca,placa)values('19','".$carro->modelo."', '".$carro->ano."' ,'".$carro->marca."', '".$carro->placa."')") or die(mysql_error()."Não foi possivel realizar o cadastro");

		if ($resultado == TRUE) {
			echo '</br>Cadastro carro realizado com sucesso';
		}
	} 

	public static function pesquisarCarro($carro){
		include 'conexao.php';
		echo '</br>'.$carro->placa;
		$resultado = mysqli_query($conexao,"select pessoa.idPessoa,pessoa.nome,carro.modelo,carro.ano,carro.marca,carro.placa 
			from pessoa inner join	
			carro on pessoa.idPessoa = carro.fk_id_pessoa where placa = '".$carro->placa."'");

		if($resultado){
			$array =  array();
			$guarda = array();
			$fisica = array();
			$carro = array();
			include '../model/pessoa.php';
			include '../model/carro.php';
			while ($row = mysqli_fetch_array($resultado)) {
			// echo '</br>'.$row['nome'].'</br>'.$row['modelo'].'</br>'.$row['ano'].'</br>'.$row['placa'];
			// $fisica = new Fisica(null,$row['nome'], null, null, null);
			// echo '</br>'.$fisica->nome;
				array_push($array, 
					new Fisica($row['idPessoa'],$row['nome'], null, null, null),
					new Carro($row['modelo'], $row['ano'], $row['marca'], $row['placa']));
			}
		}
		


		return $array;
	}
}
?>