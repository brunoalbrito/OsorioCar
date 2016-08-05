<?php
include 'menusystem.php';
?>
<html>
<head>
	<title>Mecanica Osorio Car</title>
	<!-- <link rel="stylesheet" type="text/css" href="../css/content/exibirconserto/defalt.php"> -->
</head>
<body>
	<div class='content' style='background:gray;'>
		<?php 
			include '../control/controller.php';

			$placa = $_POST['placa'];

			$result = Controller::buscarConserto($placa);

			for ($i=0; $i < count($result); $i+=3) { 
				echo "
					<!-- RAW -->
		<div class='col-md-12 col-sm-12 col-xs-12' style='border-style:solid;'>
			<!-- PESSOA -->

			<div class='col-md-12 col-sm-12 col-xs-12'>
				<div class='col-md-6 col-sm-6 col-xs-12' style='background:blue;border-style:solid;'>
					<div class='col-md-12 col-sm-12 col-xs-12'>
						Proprietario:
					</div>
					<div class='col-md-12 col-sm-12 col-xs-12'>
						".$result[$i]->nome."
					</div>
				</div>

				<div class='col-md-6 col-sm-6 col-xs-12' style='background:blue;border-style:solid;'>
					<div class='col-md-12 col-sm-12 col-xs-12'>
						Telefone:
					</div>
					<div class='col-md-12 col-sm-12 col-xs-12'>
						".$result[$i]->telefone."
					</div>
				</div>
			</div>

			<div class='col-md-12 col-sm-12 col-xs-12'> 
				<!-- CARRO -->
				<div class='col-md-3 col-sm-3 col-xs-6' style='background:yellow;border-style:solid;'>
					<div class='col-md-12 col-sm-12 col-xs-12'>
						Placa:
					</div>
					<div class='col-md-12 col-sm-12 col-xs-12'>
						".$result[$i+1]->placa."
					</div>
				</div>

				<div class='col-md-3 col-sm-3 col-xs-6' style='background:yellow;border-style:solid;'>
					<div class='col-md-12 col-sm-12 col-xs-12'>
						Modelo:
					</div>
					<div class='col-md-12 col-sm-12 col-xs-12'>
						".$result[$i+1]->modelo."
					</div>
				</div>

				<div class='col-md-3 col-sm-3 col-xs-6' style='background:yellow;border-style:solid;'>
					<div class='col-md-12 col-sm-12 col-xs-12'>
						Ano:
					</div>
					<div class='col-md-12 col-sm-12 col-xs-12'>
						".$result[$i+1]->ano."
					</div>
				</div>

				<div class='col-md-3 col-sm-3 col-xs-6' style='background:yellow;border-style:solid;'>
					<div class='col-md-12 col-sm-12 col-xs-12'>
						Marca:
					</div>
					<div class='col-md-12 col-sm-12 col-xs-12'>
						".$result[$i+1]->marca."
					</div>
				</div>
			</div>

			<!-- CONSERTO -->
			<div class='col-md-12 col-sm-12 col-xs-12'>
				<div class='col-md-4 col-sm-4 col-xs-12' style='background:green;border-style:solid;'>
					<div class='col-md-12 col-sm-12 col-xs-12'>
						Data de Execução:
					</div>
					<div class='col-md-12 col-sm-12 col-xs-12'>
						".$result[$i+2]->data."
					</div>
				</div>

				<div class='col-md-4 col-sm-4 col-xs-12' style='background:green;border-style:solid;'>
					<div class='col-md-12 col-sm-12 col-xs-12'>
						Descrição:
					</div>
					<div class='col-md-12 col-sm-12 col-xs-12'>
						".$result[$i+2]->descricao."
					</div>
				</div>

				<div class='col-md-4 col-sm-4 col-xs-12' style='background:green;border-style:solid;'>
					<div class='col-md-12 col-sm-12 col-xs-12'>
						Peças Utilizadas:
					</div>
					<div class='col-md-12 col-sm-12 col-xs-12'>
						".$result[$i+2]->pecasUtilizadas."
					</div>
				</div>
			</div>
			<div class='col-md-12 col-sm-12 col-xs-12'>
				<div class='col-md-4 col-sm-4 col-xs-12' style='background:green;border-style:solid;'>
					<div class='col-md-12 col-sm-12 col-xs-12'>
						Valor Pecas:
					</div>
					<div class='col-md-12 col-sm-12 col-xs-12'>
						".$result[$i+2]->valorPecas."
					</div>
				</div>
				<div class='col-md-4 col-sm-4 col-xs-12' style='background:green;border-style:solid;'>
					<div class='col-md-12 col-sm-12 col-xs-12'>
						Valor Mão de Obra:
					</div>
					<div class='col-md-12 col-sm-12 col-xs-12'>
						".$result[$i+2]->valorMaodeObra."
					</div>
				</div>
				<div class='col-md-4 col-sm-4 col-xs-12' style='background:green;border-style:solid;'>
					<div class='col-md-12 col-sm-12 col-xs-12'>
						Valor Total:
					</div>
					<div class='col-md-12 col-sm-12 col-xs-12'>
						".$result[$i+2]->valorTotal."
					</div>
				</div>
			</div>

		</div>																																			
				";
			}
		?>
		<!-- END CONTENT -->
	</div>
</body>
</html>