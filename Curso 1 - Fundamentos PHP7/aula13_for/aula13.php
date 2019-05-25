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
		Ex1. Contador com "for":<br/>
			<?php
/* 				for ($i = 1; $i<=10; $i++) {
					echo "$i ";
				}
				echo "<br/>";
				
				for ($i = 10; $i>=1; $i--) {
					echo "$i ";
				}
				echo "<br/>";
				
				for ($i = 0; $i<=50; $i+=5) {
					echo "$i ";
				}
				echo "<br/>";
				
				for ($i = 20; $i>=0; $i-=2) {
					echo "$i ";
				}
				echo "<br/>"; */
			?>
			
			<br/>Ex2. Exibir a tabuada de um número de 1 a 10.
			<form method="get" action="aula13.php">
				<select name="num">
					<?php
/* 						for ($c=1; $c<=10; $c++) {
							echo "<option>$c</option>";
						} */
					?>
				</select>
				<input type="submit" value="Tabuada"/>
			</form>
					
			<?php
/* 				$n = $_GET["num"];
				for ($c=1; $c<=10; $c++) {
					$r = $n * $c;
				echo "$n x $c = $r<br/>";
				} */
			?>
					
			<br/>Ex3. Verifique se um número digitado pelo usuário é primo.<br/>
			<form method="get" action="aula13.php">
				Número: <input type="number" value="0" name="primo" max="100000" min="0"/>
				<input type="submit" value="É primo?"/>
			</form><br/>
			
			<?php
/* 			
			$primo = $_GET["primo"];
			$result = 0;
			
			for ($cont=$primo; $cont>0; $cont--) {
				if ($primo%$cont == 0) {
					$result++ ;
				}
			}
			if ($result == 2) {
				echo "$primo É PRIMO";
			}
			else {
				echo "$primo NÃO É PRIMO";
			} */
				
			?>
		</div>
	</body>
</html>
 