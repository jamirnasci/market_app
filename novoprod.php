<?php 
	include("conn.php");
	$nome = $_POST["nome"];
	$marca = $_POST["marca"];
	$preco = $_POST["preco"];
	$preco_atc = $_POST["preco_atc"];
	$validade = $_POST["validade"];
	$fabricacao = $_POST["fabricacao"];
	$setor = $_POST["setor"];
	
	mysqli_query($conn, "insert into produtos(id, nome, setor, validade, fabricacao, marca, preco, preco_atc) values('','$nome', '$setor', '$validade', '$fabricacao', '$marca', $preco, $preco_atc)");
?>