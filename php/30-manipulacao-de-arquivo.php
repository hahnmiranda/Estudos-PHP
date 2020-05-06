<?php

// MANIPULACAO DE ARQUIVOS

// definindo o arquivo
$arquivo = 'arquivo.txt';

$conteudoDeTeste = "Conteudo de teste\r\n";

// filesize - retorna tamanho do arquivo em linhas
$tamanhoArquivo = filesize($arquivo);

// fopen - abre o arquivo (abaixo estão os modos de abertura que deve ser passado como parâmetro)
/* 

	‘r’ Abre somente para leitura; coloca o ponteiro do arquivo no começo do arquivo.

	‘r+’ Abre para leitura e escrita; coloca o ponteiro do arquivo no começo do arquivo.

	‘w’ Abre somente para escrita; coloca o ponteiro do arquivo no começo do arquivo e reduz o comprimento do arquivo para zero. Se o arquivo não existir, tenta criá-lo.

	‘w+’ Abre para leitura e escrita; coloca o ponteiro do arquivo no começo do arquivo e reduz o comprimento do arquivo para zero. Se o arquivo não existir, tenta criá-lo.

	‘a’ Abre somente para escrita; coloca o ponteiro do arquivo no final do arquivo. Se o arquivo não existir, tenta criá-lo.

	‘a+’ Abre para leitura e escrita; coloca o ponteiro do arquivo no final do arquivo. Se o arquivo não existir, tenta criá-lo.

	‘x’ Cria e abre o arquivo somente para escrita; coloca o ponteiro no começo do arquivo. Se o arquivo já existir, a chamada a fopen() falhará, retornando FALSE e gerando um erro de nível E_WARNING. Se o arquivo não existir, tenta criá-lo.

	‘x+’ Cria e abre o arquivo para leitura e escrita; coloca o ponteiro no começo do arquivo. Se o arquivo já existir, a chamada a fopen() falhará, retornando FALSE e gerando um erro de nível E_WARNING. Se o arquivo não existir, tenta criá-lo.
*/
$arquivoAberto = fopen($arquivo, 'r+');

// !feof() - não for final do arquivo (usado para percorrer arquivos)
// fgets 
while(!feof($arquivoAberto)):
	$linha = fgets($arquivoAberto, $tamanhoArquivo);
	echo $linha."<br>";
endwhile;

// fwrite - escreve no arquivo
fwrite($arquivoAberto, $conteudoDeTeste);

// fclose - fecha um arquivo aberto
fclose($arquivoAberto);
