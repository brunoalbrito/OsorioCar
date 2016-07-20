<?php
include 'menusystem.php';
?>
<html>
<head>
	<meta charset='utf-8'>
	<meta name="author" content="Bruno Albuquerque Brito">
	<title>OsórioCar</title>
	<link rel="stylesheet" type="text/css" href="../css/content/buscarfisica/default.css">
</head>
<body>
	<div class='content'>
		<div class="col-md-12 col-sm-12 col-xs-12 text-middle" id="busca"> 
			<form class="form-inline col-md-8 text-middle" method='post' action="#">
				<label>Nome</label>
				<input type="text" class="form-control" name="nome">

				<label>CNPJ</label>
				<input type="text" class="form-control" name="cnpj">

				<button class="btn btn-default" id="check" type="submit"><i class="fa fa-check" aria-hidden="true"></i>Buscar</button>
			</form>
		</div>
	</div>
</body>
</html>