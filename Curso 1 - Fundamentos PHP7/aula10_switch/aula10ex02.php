<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="_css/estilo.css"/>
		<meta charset="UTF-8"/>
		<title>Curso de PHP - CursoemVideo.com</title>
	</head>
	
	<body>
		<div>
			<?php
				$dia_semana = isset($_GET["dia"])?$_GET["dia"]:0;
				
				switch ($dia_semana){
					case 2:
					case 3:
					case 4:
					case 5:
					case 6:
						echo "Meio de semana. Dia de ir para aula!";
						break;
					case 1:
					case 7:
						echo "Final de semana. Descanse!";
						break;
					default:
						echo "Entre com um valor de dia válido!";
				}
			?>
			<br><br><a href="javascript:history.back()" class="botao">Voltar</a>
		</div>
	</body>
</html>
 