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
/* 				//Rotinas
				//(Função sem retorno)
				function soma($a, $b) {
					$s = $a + $b;
					echo "$a + $b = $s<br/>";
				}
					
				soma(7,4);
				$x = 8;
				$y = 5;
				soma($x,$y); */
			?>
			
			<?php
/* 				//(Função com retorno com definição de nmr parâmetros)
				function soma($a, $b) {
					$s = $a + $b;
					return $s;
				}
					
				$resultado = soma(7,4);
				echo "O resultado da soma entre 7 e 4 é $resultado<br/>";
				$x = 8;
				$y = 5;
				$resultado = soma($x,$y);
				echo "O resultado da soma entre $x e $y é $resultado"; */
			?>
			
			<?php
			//(Função com retorno sem definição de nmr parâmetros)
				function soma(){
					$p = func_get_args(); // vai funcionar como um vetor, guardando a posição de cada argumento
					$tot = func_num_args(); //vai receber a qtd de argumentos
					$s = 0;
					
					for ($i=0; $i < $tot; $i++) {
						$s = $s + $p[$i];
					}
					return $s;
				}
			
			$r = soma(3,5,2);
			echo "A soma dos valores é $r."
			
			
			?>
		</div>
	</body>
</html>
 