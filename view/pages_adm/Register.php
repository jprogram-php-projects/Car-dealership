<!DOCTYPE html>

<html lang = "pt-br">
	<head>
		<meta charset = "utf-8"/>
		<title>Cadastro</title>
		<link rel="stylesheet" type="text/css" href="../../config/css/Register_style.css">
	</head>

	<body>
		<header>
			<nav></nav>
		</header>

		<section>
			<form id = "cadastro" action="../../control/RegisterController.php" method="POST">
				<br><br>
				<label>Tipo Veículo:</label><br>

				<select id="tipo_veiculo" name="tipo_veiculo">
					<option selected disabled value=" ">Selecione uma opção</option>
				    <option value="1">Carros</option>
				    <option value="2">Motos</option>
				    <option value="3">Caminhões</option>
				    <option value="4">Aviões</option>
				    <option value="5">Trens</option>
				</select> <br><br>

				<label>Nome:</label>  <br>
				<input type="text" id="nome" name="nome" placeholder="Nome do Veiculo" /> <br><br>

				<label>Ano de Fabricacao</label> <br>
				<input type="text" id="fabricacao" name="fabricacao" placeholder="EX: 2019"/>
				<br><br>

				Marca:<br>
				<input type="text" id="marca" name="marca" placeholder="Nome da Marca" />

				<br><br>

				Preco:<br>
				<input type="text" id="preco" name="preco" placeholder="Valor de Mercado" />

				<br><br>

				Status:<br>
				<select id="situacao" name="situacao">
					<option selected disabled value=" ">Selecione uma opção</option>
				    <option value="disponivel">Disponivel</option>
				    <option value="locado">Locado</option>
				    <option value="oficina">Oficina</option>
				</select>

				<br><br>
				<button id = "btnCadastro" type="submit">Cadastrar</button>
				<button id = "btnLimparCampos" type="button" value="Limpar" onclick="limparCamposCadastro()">Limpar</button>
			</form> 	 
		</section>
	</body>
</html>