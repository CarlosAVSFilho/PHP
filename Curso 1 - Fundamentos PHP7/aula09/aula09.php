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
/* 				$nascimento = isset($_GET["ano"])?$_GET["ano"]:0;
				
				$idade = date("Y") - $nascimento;
				
				echo "Você nasceu no ano $nascimento e tem $idade anos.<br>";
				
				if ($idade < 16) {
					echo "<br>Votar: NÃO
					<br>Dirigir: Negado";
				}
				elseif ($idade >= 16 && $idade < 18) {
					echo "<br>Votar: Opcional
					<br>Dirigir: Negado";
				}
				elseif ($idade >= 18 && $idade < 65) {
					echo "<br>Votar: Obrigatório
					<br>Dirigir: Permitido";
				}
				else {
					echo "<br>Votar: Opcional
					<br>Dirigir: Permitido";
				} */
				
				
				
				$n1 = isset($_GET["n1"])?$_GET["n1"]:0;
				$n2 = isset($_GET["n2"])?$_GET["n2"]:0;
				
				$media = ($n1 + $n2)/2;
				
				echo "A média entre $n1 e $n2 é: $media.<br>";
				
				if ($media < 5) {
					echo "Aluno <span class='foco'>REPROVADO.</span>";
				}
				elseif ($media >= 5 && $media <7){
					echo "Aluno <span class='foco'>EM RECUPERAÇÃO.</span>";
				}
				else {
					echo "Aluno <span class='foco'>APROVADO.</span>";
				}
			?>
			
			<br><br><a href="aula09.html" class="botao">Voltar</a>
		</div>
	</body>
</html>
 