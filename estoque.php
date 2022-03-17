<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Estoque</title>
	</head>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<?php include('conn.php');?>
	<link rel="stylesheet" href="style.css">
<body>
<header>
	<div onclick="showside()" id="leftbutton">
		<img src="./menu-icons/side.png">
	</div>
	<h1>Market App</h1>
	<div id="rightbutton">Button</div>
</header>
<aside id="sidemenu" onclick="showside()">
	<a href="/sistema-php/app.php">Principal</a><hr>
	<a href="/sistema-php/estoque.php">Estoque</a><hr>
	<a href="/">Opcao 03</a><hr>
	<a href="/">Opcao 04</a><hr>
	<a href="/">Opcao 05</a><hr>
</aside>
<main>
	<h1>Tabela de Produtos:</h1>
<div id="table_box">
<table>
	<tr>
		<th>ID</th>
		<th>NOME</th>
		<th>SETOR</th>
		<th>VALIDADE</th>
		<th>FABRICACAO</th>
		<th>PRECO</th>
		<th>PRECO ATC</th>
		<th>MARCA</th>
	</tr>
	<?php
	$res = mysqli_query($conn, "select * from produtos");
	while($res2 = mysqli_fetch_assoc($res)){
		echo "<tr>";
		echo "<td>".$res2['id']."</td>";
		echo "<td>".$res2['nome']."</td>";
		echo "<td>".$res2['setor']."</td>";
		echo "<td>".$res2['validade']."</td>";
		echo "<td>".$res2['fabricacao']."</td>";
		echo "<td>"."R$".$res2['preco']."</td>";
		echo "<td>"."R$".$res2['preco_atc']."</td>";
		echo "<td>".$res2['marca']."</td>";
		echo "</tr>";
	}
	?>
	
</table>
</div>
<button id="btn_cad" onclick="openForm()">
	<h1 id="opt_title">Cadastrar Produto</h1>
</button>
	<form id="cad_prod" method="post">
		<label>Nome:</label>
		<input type="text" name="nome" placeholder="nome" id="nome">
		<label>Preco:</label>
		<input type="text" name="preco" placeholder="preco" id="preco"><br>
		<label>Preco Atc:</label><br>
		<input type="text" name="preco_atc" placeholder="preco atacado" id="preco_atc"><br>
		<label>Marca:</label><br>
		<input type="text" name="marca" placeholder="marca" id="marca"><br>
		<label>Validade:</label>
		<input type="date" name="validade" placeholder="validade" id="validade">
		<label>Data de Fabricacao:</label>
		<input type="date" name="fabricacao" placeholder="data de fabric." id="fabricacao"><br>
		<label>Setor</label>
		<select name="setor" id="setor">
			<option value="frios">Frios</option>
			<option value="enlatados">Enlatados</option>
			<option value="graos">Graos</option>
			<option value="bebidas">Bebidas</option>
			<option value="frutaria">Frutaria</option>
		</select>
		<button onclick="sendData()">Enviar</button>
	<form>
</main><br>
</body>
<script src="./scripts/dinamic.js"></script>
<script src="./scripts/ajax.js"></script>
</html>