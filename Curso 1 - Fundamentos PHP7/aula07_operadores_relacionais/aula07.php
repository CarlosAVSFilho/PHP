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
/* 				//Operador Ternário -> expressão?verdadeiro:falso
				//$maior = $a>b?$a:$b
				
				//Soma ou subtração?
				$n1 = $_GET["a"];
				$n2 = $_GET["b"];
				$somaousub = $_GET["ss"];
				
				$resultado = $somaousub=='soma'?$n1+$n2:$n1-$n2;
				
				echo "Os valores passados foram $n1 e $n2.<br>O resultado: $resultado." */

/* 				 //Igual (==) ou identico (===)
				 $a = 3;
				 $b = "3";
				 $r = ($a == $b)?"SIM":"NÃO";
				 echo "As variáveis A e B são iguais? $r."; */
				 
/* 				 //Mostrar a situação de acordo com a média de duas notas
				 $n1 = $_GET["n1"];
				 $n2 = $_GET["n2"];
				 $media = ($n1+$n2)/2;
				 $situacao = $media<6?'Reprovado':'Aprovado';
				 
				 echo "A média entre $n1 e $n2 é: $media.";
				 echo "<br>A situação do aluno é: $situacao."; */
				 
				 //Mostrar se o eleitor precisa ou não de votar
				 $ano = $_GET["an"];
				 $idade = 2018 - $ano;
				 echo "Quem nasceu em $ano tem $idade anos.";
				 $tipo = ($idade>=18 && $idade<65)?"OBRIGATORIO":"OPCIONAL";
				 echo " E dessa forma seu voto é: $tipo.";

				?>
		</div>
	</body>
</html>
 