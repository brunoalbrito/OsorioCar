<?php

echo "Chamando conexao";

//conexão com o banco de dados
$banco = "osoriocar";
$host = "127.0.0.1"; //DESTINO DO BANCO
$usuario = "root"; // USUARIO DO BANCP
$senha = "admin"; // SENHA DO BANCO

$conexao = mysqli_connect($host,$usuario,$senha,$banco) or die (mysql_error());
#PARA CORRIGIR ERRO DE TIPO DE FONTE (UTF-8) INSIRA ALINHA ABAIXO
mysqli_set_charset($conexao,"utf8");

// tratamento de erros
if (mysqli_connect_error())
{
	echo "Não foi possível conectar: " . mysqli_connect_error();
} else{
	echo "</br>Conexao realizada com sucesso";

 	//	Teste de busca de para ver se banco esta online
	// $resultado = mysqli_query($conexao, "select * from pessoa") 
	// or die("Não foi possível executar a SQL: " . mysqli_error($conexao));
	// if ($resultado) {
	// 	while ($row = mysqli_fetch_array($resultado)) {
	// 		$nome = ($row["nome"]);
	// 		echo "</br>".$nome;
	// 		break;
	// 	}
	// }
 }
?>