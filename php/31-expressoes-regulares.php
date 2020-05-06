<?php

// EXPRESSOES REGULARES - define um padrão a ser usado para procurar ou substituir palavras ou grupos de palavras

// ^ inicio da expressão, $ final da expressao - /i - case sensitive
$padrao1 = "/^a/";
$padrao2 = "/c$/";

// [] - conjunto de caracteres ([a-z] minusculas, [A-Z] maiusculas [A-Za-z] ambas [A-Za-z0-9] com numeros)
$padrao3 = "/^[a-z]/";

// {} - ocorrencias - ?{0,1} *{0, } +{1, }
$padrao4 = "/^[a-z]{1,3}$/";
$padrao5 = "/^[a-z]+$/";

// Validando email
// /^[a-z0-9.\-\_]+@[a-z0-9-\_]+\.(com|br|com.br|net)$/
$padrao6 = "/^[a-z0-9.\-\_]+@[a-z0-9.\-\_]+\.(com|br|com.br|net)$/i";

// Validando data
// /^[0-9]{2}\/[0-9]{2}\/[0-9]{4}$/
$padrao7 = "/^[0-9]{1,2}\/[0-9]{1,2}\/[0-9]{2,4}$/i";

$string = "abc";
$expressao = "contato@gmail.com";
$data = "5/04/2020";

if(preg_match($padrao7, $data)):
	echo "Válida";
	echo "<hr>";
else:
	echo "Inválida";
	echo "<hr>";
endif;