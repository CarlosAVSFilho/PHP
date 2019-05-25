<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="_css/estilo.css"/>
		<meta charset="UTF-8"/>
		<title>Curso de PHP - CursoemVideo.com</title>
	</head>
	
	<body>
		<div>
			Ex1. Mostrar uma contagem progressiva de 1 até 10.
			<br/><?php
				$c = 1;
				while ($c <= 10) {
					echo "$c ";
					$c += 1;
				}
			?>

		
			<br/><br/>Ex2. Criar dinamicamente 5 caixas de texto em um formulário.
			<form method="get" action="aula11.php">
				<?php
				$c = 1;
				
				while ($c <= 5) {	
					echo "Valor $c: <input type='number' name='v$c' max='100' min='0' value='0'/><br/>";
				$c += 1;
				}
				
			/*  $c = 1;
				while ($c <= 5) {
					$valor = $_GET["v$c"];
					echo "Valor $c: $valor<br/>";
				$c += 1;
				} */
				?>
				<input type="submit" value="Enviar" class="botao"/>
			</form>
			
			
			<br>Ex3. Criar um contador personalizável. <br/>
			<?php
				$inicio = $_GET["inicio"];
				$fim = $_GET["fim"];
				$incremento = $_GET["incremento"]; 
			
			if ($inicio < $fim) {
				while ($inicio <= $fim) {
					echo "$inicio ";
					
					$inicio = $inicio + $incremento;
				}
			}
			elseif ($inicio > $fim) {
				while ($inicio >= $fim) {
					echo "$inicio ";
					
					$inicio = $inicio - $incremento;
				}
			}
			?>
				<br/><a href="aula11.html" class="botao">Voltar</a>
			
		</div>
	</body>
</html>
 