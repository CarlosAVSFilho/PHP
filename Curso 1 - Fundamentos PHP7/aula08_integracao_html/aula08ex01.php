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
 			<!-- <form method="get" action="aula08ex01.php">
				Valor = <input type="text" name="v"/>
				<input type="submit" value="Calcular Raíz"/>
			</form> -->
			
			<?php
				$valor = $_GET["v"]; //_GET para metodo get e _POST para metodo post
				echo "A raíz quadrada de $valor é: ". number_format(sqrt($valor),2),".";
			?>
			<br><a href="aula08ex01.html">Voltar</a>
		</div>
	</body>
</html>
 