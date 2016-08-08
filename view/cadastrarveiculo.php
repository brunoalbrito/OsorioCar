<?php
include 'menusystem.php';
?>
<html>
<head>
	<title>Mecanica OsorioCar</title>
	<meta charset="utf-8">
	<meta name="author" content="Bruno Albuquerque Brito">

	<link href='https://fonts.googleapis.com/css?family=Merriweather' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" type="text/css" href="../css/content/cadastrarveiculo/default.css">

</head>
<body>
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="col-md-6 col-sm-12 col-xs-12 text-middle">
			<form class="text-middle" method='post' action='../control/controller.php?act=cadastrarCarro'>
				<div class="form-group">
					<?php 

                        include '../control/controller.php';

                        $array = Controller::buscarFisica(null,$_GET['nome'],null,$_GET['sobrenome'],null);

                        print_r($array);

                        print_r($array);
                        echo "<input type='text' class='form-control' id='#' name='fkidpessoa' value='".$array[0]->id."' readonly>";
                    ?>
					<label>Modelo</label>
					<div class="input-group">
						<span class="input-group-addon"><!-- <i class="fa fa-user" aria-hidden="true"></i> --></span>
						<input type="text" class="form-control" id="#" name="modelo">
					</div>
				</div>
				<div class="form-group">
					<label>Ano</label>
					<div class="input-group">
						<span class="input-group-addon"><!-- <i class="fa fa-user" aria-hidden="true"></i> --></span>
						<input type="text" class="form-control" id="#" name="ano">
					</div>
				</div>
				<div class="form-group">
					<label>Marca</label>
					<div class="input-group">
						<span class="input-group-addon"><!-- <i class="fa fa-user" aria-hidden="true"></i> --></span>
						<input type="text" class="form-control" id="#" name="marca">
					</div>
				</div>
				<div class="form-group">
					<label>Placa</label>
					<div class="input-group">
						<span class="input-group-addon"><!-- <i class="fa fa-user" aria-hidden="true"></i> --></span>
						<input type="text" class="form-control" id="#" name="placa">
					</div>
				</div>
				<div class="text-center">
					<button class="btn btn-default btn-lg text-middle" type="submit">Registrar</button>
				</div>
			</form>
		</div>
	</div>

</body>
</html>