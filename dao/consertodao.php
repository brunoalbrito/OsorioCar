<?php 



class ConsertoDao
{

	public static function adicionarConserto($conserto){

		include 'conexao.php';
		echo '</br>Chamando adicionarConserto';

		echo '</br> ID CARRO: '.$conserto->idcarro;
		//echo "</br>".$conserto->data." ".$conserto->valorPecas." ".$conserto->pecasUtilizadas." ".$conserto->valorTotal;


		$resultado = mysqli_query($conexao,"INSERT INTO conserto(fk_id_carro,dataRegistro,valor_peca,pecas_utilizadas,descricao,valorMaoObra,valor_total)VALUES('1','".$conserto->data."','".$conserto->valorPecas."','".$conserto->pecasUtilizadas."',
				'".$conserto->descricao."','".$conserto->valorMaodeObra."','".$conserto->valorTotal."')");
		
		//$resultado = TRUE;
		if($resultado){
			echo '</br>Salvo com sucesso';
		}
	}

	public static function pesquisarConserto($placa){
		include 'conexao.php';

		$resultado = mysqli_query($conexao,
			"select * from conserto inner join carro on 
			(conserto.fk_id_carro = carro.idCarro) inner join pessoa 
			on (carro.fk_id_pessoa = pessoa.idPessoa) where carro.placa = '".$placa."'")or die("Nao foi possivel realizar a pesquisa".mysql_error());

		$array = array();
		if($resultado){
			while ($row = mysqli_fetch_array($resultado)) {
				
				array_push($array, 
					new Pessoa(null,$row['nome'], $row['telefone']),
					new Carro($row["modelo"], $row["ano"], $row["marca"], $row['placa']),
					new Conserto(null,$row["dataRegistro"],$row["valor_peca"],$row["pecas_utilizadas"],$row["descricao"],$row["valorMaoObra"]));
			}
		}
		return $array;
	}
}
?>