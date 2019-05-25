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
				
				//printf() -> print formatado. %d valor decimal (pos ou neg). %u valor decimal sem sinal (apenas positivos). %f valor real. %s string.
				$p = "leite";
				$pr = 4.5;
				echo "O $p custa R$ ". number_format($pr,2);
				echo"<br/>";
				printf ("O %s custa R$ %.2f", $p, $pr);
				
				
				//print_r() -> Mostra o vetor e suas posições separadamente. pode usar também var_dump($v) ou var_export($v).
				echo "</br></br>";
				$v[0] = 4;
				$v[1] = 3;
				$v[2] = 8;
				print_r ($v);
				$v2 = array(3, 7, 6, 2, 1, 9);
				echo"</br>";
				print_r($v2);
				
				
				//wordwrap() -> Quebra o texto de acordo com a qnt de char escolhidos. Se tirar o parâmetro, quebra apenas no código fonte. "20"-> qnt de caracteres por frase. "<br/>"\n -> apenas para o código onte. true ou false -> false: palavras inteiras sem quebrar. true corta a palavra quando der os 10 caracteres.
				echo "</br></br>";
				$txt = "Curso em vídeo de PHP";
				$res = wordwrap($txt, 30, "<br/>", false);
				echo $res;
				
				
				//strlen() -> Te dá o tamanho da sua string. No caso, 14. Se tiver acento, ele conta também.
				echo"<br/></br>";
				$txt2 = "Curso em Video";
				$tamanho = strlen($txt2);
				echo "$tamanho";
				
				
				//trim() -> Elimina os espaços entre o começo e o final da string. Também tem rtrim(cortar os espaços da direita) ou ltrim(cortar os espaços da esquerda)
				echo"<br/><br/>";
				$nome = "   Jose da Silva   ";
				echo"Nome antes de cortar os espaços: ".(strlen($nome));
				$novo = trim($nome);
				echo"<br/>";
				echo"Nome depois de cortar os espaços: ".(strlen($novo));
				
				
				//str_word_count() -> quantidade de palavras dentro de uma string
				echo"<br/><br/>";
				$frase = "Eu vou estudar PHP agora";
				$cont = str_word_count($frase,0); // -> Parâmetro 0: vai contar as palavras. 1: Vai criar um vetor onde cada posicao(0,1,2,34) é uma palavra (usar com o print_r. 2: Vai gerar um vetor onde as posições serão de acordo com o começo de cada palavra(0,3,7,15,19).
				echo $cont;
				
				
				//explode() -> versão "mais nova" de str_word_count: Vai quebrar a string de acordo com o parâmetro (" " neste caso) e criar um vetor onde cada palavra estará em um índice.
				echo"<br/><br/>";
				$site = "Curso em Video";
				$vetor = explode(" ", $site);
				print_r($vetor);
				
				
				//str_split() -> Vai pegar cada letra e por em um índice separado no vetor.
				echo"<br/><br/>";
				$nome_ = "Maria";
				$vetor_ = str_split($nome_);
				print_r($vetor_);
				
				
				//implode() -> Junta os índices de acordo com o elemento de união, no caso, #.
				echo"<br/><br/>";
				$vetor2[0] = "Curso";
				$vetor2[1] = "em";
				$vetor2[2] = "Vídeo";
				$texto = implode("#",$vetor2); //também pode usar join();
				echo "$texto";
				
				
				//chr() -> Te mostra qual elemento está em certo caractere.
				echo"<br/><br/>";
				$letra = chr(67); // No caso do 67, é a letra C. 99 é c.
				echo "$letra";
				
				
				//ord() -> Te mostra qual o código do caractere digitado.
				echo"<br/><br/>";
				$letra_ = "C";
				$cod = ord($letra_);
				echo "$cod";
			?>
		</div>
	</body>
</html>
 