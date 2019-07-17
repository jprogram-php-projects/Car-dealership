<?php  
	require_once '../../control/Editar.php';
	$id = $_GET['id'];
	$update = new Editar($id);
	$obj = $update->obterVeiculo();
?>

<html lang = "pt-br">
	<head>
		<meta charset = "utf-8"/>
		<title>Editar Dados</title>
		<link rel="stylesheet" type="text/css" href="../../config/css/form_update.css">
	</head>

	<body>
		<header>
			<nav></nav>
		</header>

		<section>
			<form id = "cadastro" action="../../control/EditarController.php" method="POST">
				<br><br>

				<label>Id:</label>
				<input type="text" name="id" value="<?php echo $obj->id; ?>"> <br><br>

				<label>Tipo Veículo:</label><br>

				<select id="tipo_veiculo" name="tipo_veiculo">
					<option value="<?php echo $obj->tipo_veiculo; ?>"><?php echo $obj->tipo_veiculo; ?></option>
				    <option value="1">1 - Carros</option>
				    <option value="2">2 - Motos</option>
				    <option value="3">3 - Caminhões</option>
				    <option value="4">4 - Aviões</option>
				    <option value="5">5 - Trens</option>
				</select> <br><br>

				<label>Nome:</label>  <br>
				<input type="text" id="nome" name="nome" value="<?php echo $obj->nome; ?>" /> <br><br>

				<label>Ano de Fabricacao</label> <br>
				<input type="text" id="fabricacao" name="fabricacao" value="<?php echo $obj->anoFab; ?>"/>
				<br><br>

				Marca:<br>
				<input type="text" id="marca" name="marca" value="<?php echo $obj->marca; ?>"/>

				<br><br>

				Preco:<br>
				<input type="text" id="preco" name="preco" value="<?php echo $obj->preco; ?>"/>

				<br><br>

				Status:<br>
				<select id="situacao" name="situacao">
					<option value="<?php echo $obj->status; ?>"><?php echo $obj->status; ?>"</option>
				    <option value="Disponivel">Disponivel</option>
				    <option value="Locado">Locado</option>
				    <option value="Oficina">Oficina</option>
				</select>

				<br><br>
				<button id = "btnCadastro" type="submit">Editar</button>
				<button id = "btnLimparCampos" type="reset" value="Limpar">Limpar</button>
			</form> 	 
		</section>
	</body>
</html>