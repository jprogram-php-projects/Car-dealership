<!DOCTYPE html>

<html lang="pt-br">
	<head>
		<title>Veiculos Cadastrados</title>
		<meta charset="utf-8"/>
	</head>

	<body>
		<section style="text-align: center;">
			<button onclick = " window.location.href = 'page_adm.php'; ">Pagina Inicial</button>
			<button onclick = " window.location.href = '../../control/Logout.php'; ">Sair</button>

			<h1>.: Listagem de Veiculos Cadastradas :.</h1>
			<?php
				require_once '../../control/VeiculosController.php';
				$lista = new VeiculosController();
			?>
		</section>
	</body>
</html>