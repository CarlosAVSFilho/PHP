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
					//Formas de exibir o vetor
					$n = array(0=>3,
							   1=>5,
							   2=>8,
							   3=>2);
					foreach($n as $valor){
						echo"$valor ";
					}
					
					
					echo"<br/><br/>";
					print_r ($n); //O print_r é útil em todas coleções, seja vetor, lista, etc.
					
					
					echo"<br/><br/>";
					var_dump($n); //semelhante ao print_r.
					
					
					echo"<br/><br/>";
					echo "O vetor tem " .count($n). " elementos."; // função count para contar a qntd de elementos do vetor.
					
					
					echo"<br/><br/>";
					array_push($n,7); //Vai adicionar o 7 no final do vetor.
					array_pop($n); //Vai eliminar o último elemento - É igual ao unset.
					print_r ($n);
					
					
					echo"<br/><br/>";
					array_unshift($n,45); //Vai adicionar o 45 no início do vetor.
					array_shift($n); //Vai eliminar o primeiro elemento.
					print_r ($n);
					
					
					echo"<br/><br/><br/><br/>Definindo o vetor:<br/>";
					$n2 = array(8, 2, 7, 21);
					print_r ($n2);
					
					echo"<br/><br/>Ordenando em ordem crescente:<br/>";
					sort($n2); //para ordenar o vetor ordem crescente.
					print_r ($n2);
					
					echo"<br/><br/>Ordenando em ordem decrescente:<br/>";
					rsort($n2); //ordenando em ordem decrescente.
					print_r ($n2);
					
					echo"<br/><br/>Ordenando em ordem crescente porém levando junto os índices:<br/>";
					asort($n2);
					print_r ($n2); //vai colocar o vetor em ordem crescente porém leva junto o índice.
					
					echo"<br/><br/>Ordenando em ordem decrescente porém levando junto os índices:<br/>";
					arsort($n2);
					print_r ($n2); //vai colocar o vetor em ordem decrescente porém leva junto o índice.
					
					echo"<br/><br/>Ordenando pelas chaves:<br/>";
					ksort($n2);
					print_r ($n2); //vai colocar os índices em ordem, tanto faz a ordem dos valores.
					
					echo"<br/><br/>Ordenando decrescentemente pelas chaves:<br/>";
					krsort($n2);
					print_r ($n2); //vai colocar os índices em ordem decrescentemente, tanto faz a ordem dos valores.
					
					echo"<br/><br/>";
					
					
					
					
				?>
		</div>
	</body>
</html>
 