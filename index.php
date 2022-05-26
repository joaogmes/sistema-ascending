<?php
error_reporting(E_ALL);
ini_set("display_errors","On");
require './core/class/Rotas.php';
$rota = new Rotas;
$uri = $_SERVER['REQUEST_URI'];
$uri_array = explode('/', $uri);
session_start();
?>
<html>
<head>
	<base href="http://localhost:8000/">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Ascending | Gestão operacional</title>
	<link href="./assets/css/style.css" rel="stylesheet">
	<script src="//code.jquery.com/jquery-2.2.4.min.js"></script>
</head>
<body>
	<div class="content">
		<a href="./">
			<img class="logo" src="./assets/img/Logo ascending_negativo.png">
		</a>
		<h3 class="center">Sistema de Gestão : <?=strtoupper($uri_array[1])?></h3>
		<hr>
		<?php
			include $rota->path($uri);
		?>
	</div>
</body>
</html>
