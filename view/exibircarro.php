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
		<div class='col-md-8 col-sm-12 col-xs-12 text-middle'>
			<?php 

			include '../control/controller.php';
			$placa = $_POST['placa'];
			
			$array = Controller::buscarCarro($placa);
			print_r($array);
			echo '</br>';
			//print_r($array);
			for ($i=0; $i < count($array); $i+=2) { 
				echo"
				<!--ROW-->
				<div class='col-md-12 col-sm-12 col-xs-12' style='background:yellow;'>
				<!--COLUMN-->
				<div class='col-md-1 col-sm-2 col-xs-12'>
				<div class='col-md-12 col-sm-12 col-xs-6'>
				ID
				</div>
				<div class='col-md-12 col-sm-12 col-xs-6'>
				".$array[$i]->id."
				</div>
				</div>

				<!--COLUMN-->
				<div class='col-md-2 col-sm-2 col-xs-12'>
				<div class='col-md-12 col-sm-12 col-xs-6'>
				Nome
				</div>
				<div class='col-md-12 col-sm-12 col-xs-6'>
				".$array[$i]->nome."
				</div>
				</div>	

				<!--COLUMN-->
				<div class='col-md-2 col-sm-2 col-xs-12'>
				<div class='col-md-12 col-sm-12 col-xs-6'>
				Modelo
				</div>
				<div class='col-md-12 col-sm-12 col-xs-6'>
				".$array[$i+1]->modelo."	
				</div>
				</div>	

				<!--COLUMN-->
				<div class='col-md-1 col-sm-2 col-xs-12'>
				<div class='col-md-12 col-sm-12 col-xs-6'>
				Ano
				</div>
				<div class='col-md-12 col-sm-12 col-xs-6'>
				".$array[$i+1]->ano."	
				</div>
				</div>	

				<!--COLUMN-->
				<div class='col-md-2 col-sm-2 col-xs-12'>
				<div class='col-md-12 col-sm-12 col-xs-6'>
				Marca
				</div>
				<div class='col-md-12 col-sm-12 col-xs-6'>
				".$array[$i+1]->marca."
				</div>
				</div>	

				<!--COLUMN-->
				<div class='col-md-2 col-sm-2 col-xs-12'>
				<div class='col-md-12 col-sm-12 col-xs-6'>
				Placa
				</div>
				<div class='col-md-12 col-sm-12 col-xs-6'>
				".$array[$i+1]->placa."
				</div>
				</div>	

				<!--COLUMN-->
				<div class='col-md-1 col-sm-2 col-xs-6'>
				<div class='col-md-12 col-sm-12 col-xs-12'>
				Alterar
				</div>
				<div class='col-md-12 col-sm-12 col-xs-12'>
				<a href='#''>Alterar</a>	
				</div>
				</div>	

				<!--COLUMN-->
				<div class='col-md-1 col-sm-2 col-xs-6'>
				<div class='col-md-12 col-sm-12 col-xs-12'>
				Excluir
				</div>
				<div class='col-md-12 col-sm-12 col-xs-12'>
				<a href='#'>Excluir</a>	
				</div>
				</div>				
				</div>
				<!-- END ROW -->";			
			}?>
		</div>
	</div>
</body>
</html>


