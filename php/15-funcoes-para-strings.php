<?php

// strtoupper e strtolower- converte tudo para maiuscula e minuscula
$nome = "Guilherme Miranda";
$novoNome = strtoupper($nome);
echo $novoNome."<br>";
$novoNome = strtolower($nome);
echo $novoNome."<br>";


// substr - retorna uma parte da string
echo "<br><hr><br>";
$mensagem = "Ola mundo!";
echo substr($mensagem, 4)."<br>";
echo substr($mensagem, 4,4)."<br>";

// str_pad - adiciona espaços ou caracteres específicos ao final de uma string
echo "<br><hr><br>";
$objeto = "mouse";
$novoObjeto = str_pad($objeto, 7, "*", STR_PAD_LEFT);
// STR_PAD_LEFT, STR_PAD_RIGHT e STR_PAD_BOTH
echo $novoObjeto;

//str_repeat - repete uma determinada string
echo "<br><hr><br>";
$string = str_repeat("Sucesso!", 3);
echo $string;

//strlen - retorna o comprimento de um array
echo "<br><hr><br>";
$mensagem = "Ola Mundo!";
echo strlen($mensagem);

//str_replace - substitui o conteudo por outro
echo "<br><hr><br>";
$frase = "O gremio é campeao!";
$novaFrase = str_replace("gremio", "internacional", $frase);
echo $novaFrase;

//strpos - retorna a posicao de uma string
echo "<br><hr><br>";
echo strpos($novaFrase, "é");
