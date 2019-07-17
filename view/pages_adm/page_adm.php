<?php
	session_start();
?>

<!DOCTYPE html>

<html>
	<head>
		<title>Page Administrative</title>
		<meta charset="utf-8"/>
		<link rel="stylesheet" type="text/css" href="../../config/css/adm_style.css">
	</head>
	<body>
		<header>
			<nav><button onclick = 'window.location.href = "../../control/Logout.php" ';>Sair</button></nav>
		</header>

		<main style="text-align: center;">
			<h1>Olá senhor, <?php echo $_SESSION['nome']; ?></h1>

			<form method="GET" action="../../control/AdmController.php">
				<label><h3>O que deseja fazer?</h3></label>
					
				<select id="action" name="action">
				  	<option selected disabled value=" ">Selecione uma opção</option>
				    <option value="1">Cadastrar Novo Veículo</option>
				    <option value="2">Listar Veiculos</option>
				    <option value="3">Alterar Vaiculo</option>
				    <option value="4">Apagar Veiculo</option>
				</select>

				<button id="btnAdm" type="submit">Enviar</button>
			</form>
		</main>
	</body>
</html>