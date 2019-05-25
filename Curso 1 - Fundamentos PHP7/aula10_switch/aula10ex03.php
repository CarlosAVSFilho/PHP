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
				$estado = isset($_GET["estados"])?$_GET["estados"]:0;
				
				switch ($estado){
					case "AC":
					case "RO":
					case "AM":
					case "RR":
					case "PA":
					case "AP":
					case "TO":
						echo "Região Norte!";
						break;
					case "MA":
					case "PI":
					case "CE":
					case "BA":
					case "RN":
					case "PB":
					case "PE":
					case "AL":
					case "SE":
						echo "Região Nordeste!";
						break;
					case "GO":
					case "MT":
					case "MS":
					case "DF":
						echo "Região Centro-Oeste";
						break;
					case "SP":
					case "MG":
					case "RJ":
					case "ES":
						echo "Região Sudeste";
						break;
					case "PR":
					case "SC":
					case "RS":
						echo "Região Sul";
						break;
					default:
						echo "Entre com um estado válido!";
				}
			?>
			<br><br><a href="javascript:history.back()" class="botao">Voltar</a>
		</div>
	</body>
</html>
 