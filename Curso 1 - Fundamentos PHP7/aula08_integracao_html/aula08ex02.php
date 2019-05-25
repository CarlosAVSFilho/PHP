<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="_css/estilo.css"/>
		<meta charset="UTF-8"/>
		<title>Curso de PHP - CursoemVideo.com</title>
		<style>
			h2 {
				font: 15pt Arial;
				color: #171559;
				font-weight: bold;
			}
		</style>
	</head>
	
	<body>
		<div>
			<?php
				$nome = isset($_GET["nome"])?$_GET["nome"]:'[nome não informado]';
				$ano = isset($_GET["ano"])?$_GET["ano"]:date("Y"); 
				$sexo = isset($_GET["sexo"])?$_GET["sexo"]:'[sexo não informado]';
				$idade = date("Y") - $ano;
				echo "$nome, $sexo, tem $idade anos."
			?>
			<br><a href="aula08ex02.html">Voltar</a>
		</div>
	</body>
</html>
 