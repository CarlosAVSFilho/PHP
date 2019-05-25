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
			<pre>
				<table border="1"><tr>
					<?php
						//Declaração de um vetor
						$n1 = array(3, 5, 8, 2);
						$n1[] = 15;
						$n1[] = 78;
						
						print_r($n1);
						
		/* 				$n2 = range(0, 32, 6);
						foreach($n2 as $valor){
							echo "<td>$valor </td>";
						} */
						
						
						//Chaves personalizadas
						echo"<br></br>";
						$v = array(1=>"A",
								   3=>"B",
								   6=>"C",
								   8=>"D");
						$v[] = "E";
						unset($v[9]); //retirando o elemento que está alocado na posicao 9.
						
						print_r($v);
						
						
						//Chaves associativas
						echo"<br></br>";
						$cad = array("nome" => "Carlos",
									 "idade" => 27,
									 "peso" => 95.5);
						$cad["fuma"] = true;
						
						print_r($cad);
						
						foreach($cad as $campo => $valor){
							echo"O campo '$campo' possui valor '$valor'<br/>";
						}
						
						
						//Matrizes em PHP (Coleção de vetores)
						$n = array(array(2,3),
								   array(3,4),
								   array(9,5));
						print_r($n);
						$n[2][0] = $n[1][1]; //Trocando elementos.
						print_r($n);
					?>
				</tr></table>
			</pre>
		</div>
	</body>
</html>
 