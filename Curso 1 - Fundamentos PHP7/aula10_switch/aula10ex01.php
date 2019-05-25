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
				$num = isset($_GET["num"])?$_GET["num"]:0;
				$op = isset($_GET["operacao"])?$_GET["operacao"]:"dobro";
				
				switch ($op){
					case "dobro":
						echo "O dobro de $num é: ".$num*2;
						break;
					case "rq":
						echo "A raíz quadrada de $num é ".sqrt($num);
						break;
					case "cubo":
						echo "O cubo de $num é: ".$num**3;
				}
			?>
			<br><br><a href="javascript:history.back()" class="botao">Voltar</a>
		</div>
	</body>
</html>
 