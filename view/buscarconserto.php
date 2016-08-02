<?php 
	include 'menusystem.php';
?>
<html>
<head>
	<title>Mecanica Osorio Car</title>
	<meta charset='utf-8'>

	<link rel="stylesheet" type="text/css" href="../css/content/buscarconserto/default.css">
</head>
<body>
	<div class='content'>
		<div class='col-md-4 col-sm-12 col-xs-12 text-middle'>
			<form class='form-inline' style='margin-top:4%;' method='post' action="exibirconserto.php" >
				<label>Placa</label>
				<input type="text" class="form-control" name="placa">

				<button class="btn btn-default" id="check" type="submit"><i class="fa fa-check" aria-hidden="true"></i>Buscar</button>
			</form>
		</div>
	</div>
</body>
</html>