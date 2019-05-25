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
				//Operadores de atribuição
				//Aplicar 10% de aumento em um produto:
				$preco = $_GET["p"];
				echo "O produto tem o valor de R$". number_format($preco, 2, ",", "."),".";
				
				$preco *= 1.1;
				echo "<br>Com 10% de aumento, ficará R$". number_format($preco, 2, ",", "."),".";
				
				//Mostrar qual foi o ano anterior ao ano passado pela url
				$atual = $_GET["aa"];
				echo "<br><br>O ano atual é: $atual";
				echo "<br>O ano anterior é: ". --$atual;
				echo "<br>O próximo ano é: ". (++$atual + 1);
				
				//Variáveis referenciadas
				$a = 5;
				$b = &$a;
				$b = 8;
				echo "<br><br>A=$a e B=$b";
				
				//Variáveis de variáveis
				$site = "cursoemvideo";
				$$site = "cursoPHP";
				echo "<br><br>variavel 'site': $site
				<br>variavel 'cursoemvideo': $cursoemvideo";
			?>
		</div>
	</body>
</html>
 