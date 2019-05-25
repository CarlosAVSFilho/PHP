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
				//Funções para manipulação de strings: printf, print_r
				
				//strtolower -> coloca TODAS as letras todas em minúsculo.
				$nome = "Carlos Filho";
				$nome2 = strtolower($nome);
				echo"Seu nome é $nome2.";
				
				
				//strtoupper -> coloca TODAS as letras todas em maiúsculo.
				echo"<br/><br/>";
				$nome = "Carlos Filho";
				$nome2 = strtoupper($nome);
				echo"Seu nome é $nome2.";
				
				
				//ucfirst -> Coloca em maiúsculo APENAS a PRIMEIRA LETRA DA PRIMEIRA PALAVRA (Upper case), sem alterar as outras.
				echo"<br/><br/>";
				$nome = "carlos filho";
				$nome2 = ucfirst($nome);
				echo"Seu nome é $nome2.";
				
				
				//ucwords -> Coloca em maiúsculo a primeira letra de cada palavra.
				echo"<br/><br/>";
				$nome = "carlos filho";
				$nome2 = ucwords($nome);
				echo"Seu nome é $nome2.";
				
				
				//strrev -> Apresenta a string ao contrário: Carlos -> solraC
				echo"<br/><br/>";
				$nome = "Carlos Filho";
				$nome2 = strrev($nome);
				echo"Seu nome é $nome2.";
				
				
				//strpos -> Mostra a posição onde apareceu a string que colocou-se para procurar (PHP neste caso, se for minúsculo já não acha).
				echo"<br/><br/>";
				$frase = "Estou aprendendo PHP";
				$pos = strpos($frase, "PHP");
				echo"A string foi encontrada na posição $pos.";
				
				
				//stripos -> Mostra a posição onde apareceu a string que colocou-se para procurar (PHP neste caso). E ele ignora a caixa (minusc ou maiusc).
				echo"<br/><br/>";
				$frase = "Estou aprendendo PHP";
				$pos = stripos($frase, "php");
				echo"A string foi encontrada na posição $pos.";
				
				
				//substr_count -> Te conta quantas vezes apareceu a string que procurou-se (PHP no caso)
				echo"<br/><br/>";
				$frase = "Estou aprendendo PHP no Curso em Vídeo de PHP";
				$cont = substr_count($frase,"PHP");
				print("PHP encontrado $cont vezes");
				
				
				//substr -> Fatiamento da string: Te mostra qual string apareceu entre o começo e o final (0 e 5 neste caso).
				echo"<br/><br/>";
				$site = "Curso em Vídeo";
				$sub = substr($site, 0, 5); //Se eu deixar apenas um parâmetro, ele vai do seu parâmetro até o final. Valores negativos: Conta do fim pro começo, começa a escrever e vai até o final.
				print ($sub);
				
				
				//str_pad -> Vai fazer uma string caber em um determinado espaço.
				echo"<br/><br/>";				
				$nome = "Carlos";
				$nome2 = str_pad($nome,20,"=-",STR_PAD_BOTH); //Colocar objetos (=- neste caso) repetidos depois do nome centralizado (both), neste caso.
				print("Eu sou o $nome2, famoso em Jataí.");
				
				
				//str_repeat -> Repete a string.
				echo"<br/><br/>";				
				$txt = str_repeat("Php",5); //5 vezes neste caso.
				print("O texto gerado foi $txt");
				
				
				//str_replace -> troca strings por novas. Tem também a str_ireplace para ignorar letras maísculas.
				echo"<br/><br/>";
				$frase = "Gosto de estudar Matemática.";
				$nova_frase = str_replace("Matemática","PHP",$frase);
				print($nova_frase);

			?>
		</div>
	</body>
</html>
 