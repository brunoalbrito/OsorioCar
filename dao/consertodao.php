<?php 



class ConsertoDao
{

	public static function adicionarConserto($conserto)
	{
		include 'conexao.php';
			// echo "Funcionando";
			#echo "('1',".$conserto->data.",".$conserto->valorPecas.",'".$conserto->pecasUtilizadas."','".$conserto->descricao."',".$conserto->valorMaodeObra.",".$conserto->valorTotal.")";

		$resultado = mysqli_query($conexao,"INSERT INTO conserto(fk_id_carro,dataRegistro,valor_peca,pecas_utilizadas,descricao,valorMaoObra,valor_total)
			VALUES('3','".$conserto->data."',".$conserto->valorPecas.",'".$conserto->pecasUtilizadas."','".$conserto->descricao."',".$conserto->valorMaodeObra.",".$conserto->valorTotal.")") or die(mysql_error($conexao));

		if ($resultado) {
			echo '</br>Conserto Registerado com sucesso';
		}
	}

	public static function pesquisarConserto($placa){
		include 'conexao.php';

		$resultado = mysqli_query($conexao,"SELECT pessoa.nome,pessoa.telefone,carro.placa,carro.modelo,carro.ano,carro.marca,
			conserto.dataRegistro,conserto.descricao,conserto.pecas_utilizadas,conserto.valor_peca,conserto.valorMaoObra,conserto.valor_total 
			from pessoa inner join carro on pessoa.idPessoa = carro.fk_id_pessoa 
			inner join conserto on carro.idCarro = conserto.fk_id_carro where carro.placa = '".$placa."'")or die("Nao foi possivel realizar a pesquisa".mysql_error());
		
		$array = array();
		if($resultado){
			//echo 'Chamando';
			while ($row = mysqli_fetch_array($resultado)) {
				
				// echo $row['nome']."/".$row['telefone']."/".$row['placa']."/".$row["modelo"]."</br>".
				// $row["ano"]."/".$row["marca"]."|".$row["dataRegistro"]."|".$row["descricao"]."|".$row["pecas_utilizadas"]."</br>".
				// $row["valor_peca"]."/".$row["valorMaoObra"]."/".$row['valor_total'];

				array_push($array, 
					new Pessoa(null,$row['nome'], $row['telefone']),
					new Carro($row["modelo"], $row["ano"], $row["marca"], $row['placa']),
					new Conserto($row["dataRegistro"],$row["valor_peca"],$row["pecas_utilizadas"],$row["descricao"],$row["valorMaoObra"]));

			}
		}

		//print_r($array);

		return $array;

	}
}
?>