<?php 
	


	class ConsertoDao
	{
		
		static function adicionarConserto($conserto)
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
	}
	?>