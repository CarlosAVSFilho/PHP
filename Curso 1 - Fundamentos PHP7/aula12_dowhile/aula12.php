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
			Ex1 Contador de 0 a 20 de 2 em 2.
			<br/><?php
				$c = 0;
				do {
					echo "$c ";
					$c += 2;
				} while ($c<=20);
			?><br/>
			
			<br/>Ex2 Script para calcular o fatorial de um número inteiro.<br/>
			<?php
				$num = $_GET["numero"];
				$fat = 1;
				echo "$num","! = ";
				
				do {
					$fat = $fat * $num;
					if ($num > 1){
						echo "$num x ";
					}
					else {
						echo "$num = ";
					}
					$num -= 1;
				} while ($num > 0);
				
				echo "$fat";
			?>
			
			<br/><br/>Ex3 Exibir a tabuada de um número escolhido pelo usuário de 1 a 10.<br/>
			<?php
				$tab = $_GET["tabuada"];
				$cont = 1;
				do {
					$result = $tab*$cont;
					echo "$tab x $cont = $result<br/>";
					$cont += 1;
				} while ($cont<=10);
			?>

			<br/><a href="aula12.html" class="botao">Voltar<a/>
		</div>
	</body>
</html>
 