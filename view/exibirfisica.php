<html>
<html lang="pt-br">
<head>
	<title>Mecanica OsorioCar</title>
	<meta charset="utf-8">
	<!--Colocar isso para ficar responsivo-->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<meta name="author" content="Bruno Albuquerque Brito">

	<link rel="stylesheet" href="../css/bootstrap.css">

	<script src="../js/jquery-2.2.3.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>

	<link rel="stylesheet" href="../css/font-awesome.css">
	<link rel="stylesheet" href="../css/font-awesome.min.css">


	<link href='https://fonts.googleapis.com/css?family=Merriweather' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" type="text/css" href="../css/content/exibirfisica/default.css">


</head> 
<body>
	<div class="content">

		<?php 

		include '../control/controller.php';

		$array = Controller::buscarFisica(null,$_GET['nome'],null,$_GET['sobrenome'],null);
		
		// foreach ($array as $value) {
		// 	print("</br>".$value->nome." / ".$value->sobrenome." / ".$value->telefone." / ".$value->cpf);
		// }

		print_r($array);
		foreach ($array as $value) {
			print '<div class="content">

		<!-- INICIO -->

		<div class="col-md-12 col-sm-12 col-xs-12"	 style="background:blue">


			<!--PARA FICAR IGUAL-->
			<!--ID-->
			<div class="col-md-1 col-sm-12 col-xs-12" style="background:red">
				<div class="col-md-12 col-sm-12 col-xs-12">
					ID:
				</div>
				<div class="col-md-12 col-sm-12 col-xs-12">
					'.$value->id.'
				</div>
			</div>


			<!--NOME-->
			<div class="col-md-1 col-sm-12 col-xs-12" style="background:red">
				<div class="col-md-12 col-sm-12 col-xs-12">
					Nome:
				</div>
				<div class="col-md-12 col-sm-12 col-xs-12">
					'.$value->nome.'
				</div>
			</div>


			<!--SOBRENOME-->
			<div class="col-md-2 col-sm-12 col-xs-12" style="background:red">
				<div class="col-md-12 col-sm-12 col-xs-12">
					Sobrenome:
				</div>
				<div class="col-md-12 col-sm-12 col-xs-12">
					'.$value->sobrenome.'
				</div>
			</div>


			<!--TELEFONE-->
			<div class="col-md-2 col-sm-12 col-xs-12" style="background:red">
				<div class="col-md-12 col-sm-12 col-xs-12">
					Telefone:
				</div>
				<div class="col-md-12 col-sm-12 col-xs-12">
					'.$value->telefone.'
				</div>
			</div>

			<!--CPF-->
			<div class="col-md-2 col-sm-12 col-xs-12" style="background:red">
				<div class="col-md-12 col-sm-12 col-xs-12">
					CPF:
				</div>
				<div class="col-md-12 col-sm-12 col-xs-12">
					'.$value->cpf.'
				</div>
			</div>


			<!--Alterar-->
			<div class="col-md-2 col-sm-6 col-xs-6" style="background:red">
				<div class="col-md-12 col-sm-12 col-xs-12">
					Alterar:
				</div>
				<div class="col-md-12 col-sm-12 col-xs-12">
					<a href="editaralteracocoesfisica.php?id='.$value->id.'">Alterar</a> 
				</div>
			</div>

			<!--Alterar-->
			<div class="col-md-2 col-sm-6 col-xs-6" style="background:red">
				<div class="col-md-12 col-sm-12 col-xs-12">
					Excluir:
				</div>
				<div class="col-md-12 col-sm-12 col-xs-12">
					<a href="../control/controller.php?act=excluirFisica&id='.$value->id.'"">Excluir</a>
				</div>
			</div>


		</div>

		<!-- FIM -->';
		}
		?>

	</div>
</body>
</html>