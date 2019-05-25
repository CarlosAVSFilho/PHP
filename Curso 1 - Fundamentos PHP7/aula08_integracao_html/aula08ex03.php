<!DOCTYPE html>
<html>
	<head>
		<?php
			$texto = isset($_GET["t"])?$_GET["t"]:"Texto Genérico";
			$tamanho = isset($_GET["tam"])?$_GET["tam"]:"12pt";
			$cor = isset($_GET["cor"])?$_GET["cor"]:"#000000";
		?>
		
		<link rel="stylesheet" href="_css/estilo.css"/>
		<meta charset="UTF-8"/>
		<title>Curso de PHP - CursoemVideo.com</title>
		<style>
			h2 {
				font: 15pt Arial;
				color: #171559;
				font-weight: bold;
			}
			
			span.texto {
				font-size: <?php echo $tamanho; ?>;	
				color: <?php echo $cor; ?>;
			}
		</style>
	</head>
	
	<body>
		<div>
			<?php
				echo "<span class='texto'>$texto</span>";
			?>


			<br><a href="aula08ex03.html">Voltar</a>
		</div>
	</body>
</html>
 