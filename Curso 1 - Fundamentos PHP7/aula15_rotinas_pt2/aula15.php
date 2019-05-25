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
				//Passagem por VALOR
				function teste($x) {
					$x = $x + 2;
					echo "$x<br/>";
				}
				$a = 3; //
				teste($a);
				echo "$a<br/>";
				
				//Passagem por REFERÊNCIA
				function teste2(&$x) {
					$x = $x + 2;
					echo "<br/>$x";
				}
				$a = 1; //Como o "a" foi passado por referência(&$x) para a função, ela mudará o valor (1+2 neste caso).
				teste2($a);
				echo "<br/>$a";
				
				
				//Uso de funções externas
				include "funcoes.php"; 
				//Pode usar include ou require.
				//Include: tenta rodar o script caso não encontre a função. (também tem o include_once: caso já tenha carregado, ele entende que não precisa carregar de novo)
				//Require: para e dá fatal error. (também tem o require_once: caso já tenha carregado, ele entende que não precisa carregar de novo)
				
				echo "<h1>Testando novas funções</h1>";
				ola(); //Função que está dentro de funcoes.php
				mostraValor(8);
				echo"<h2>Finalizando o programa...</h2>";
			?>
		</div>
	</body>
</html>
 