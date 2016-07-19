<?php 


/**
* 
*/
class CarroDao
{
	
	static function adicionarCarro($carro){
		include 'conexao.php';
		#echo $carro->marca." ".$carro->placa; 
		$resultado = mysqli_query($conexao,"INSERT INTO carro(fk_id_pessoa,modelo,ano,marca,placa)values('1','".$carro->modelo."', '".$carro->ano."' ,'".$carro->marca."', '".$carro->ano."')") or die(mysql_error()."Não foi possivel realizar o cadastro");

		if ($resultado == TRUE) {
			echo '</br>Cadastro carro realizado com sucesso';
		}
	} 
}
?>