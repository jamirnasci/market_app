<?php include('conn.php');?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Principal</title>
</head>
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
	<a href="/">Opção 03</a><hr>
	<a href="/">Opção 04</a><hr>
	<a href="/">Opção 05</a><hr>
<aside>
<main>
	<h1>Welcome to Market Application</h1>
</main>
</body>
<script>
	function showside(){
		let tag = document.getElementById('sidemenu')
		let stat = tag.style.display
		if(stat == "block"){
			tag.style.display = "none"
		}
		else{
			tag.style.display = "block"
		}
	}
</script>
</html>