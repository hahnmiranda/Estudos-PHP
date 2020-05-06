<?php
// datas
echo date('d'."/".'m'."/".'y');
echo "<br>";

echo date('D/M/Y');
echo "<br>";

echo date('l');
echo "<br>";

echo date('d/m/Y H:i:s A');
echo "<br>";

// setando a zona para exibição
date_default_timezone_set('America/Sao_Paulo');
echo date('d/m/Y H:i:s A');
echo "<br>";

// armazenando no banco de dados

// DATE
$date = date('Y-m-d');
echo $date;
echo "<br>";

// DATETIME
$datetime = date('Y-m-d H:i:s');
echo $datetime;
echo "<br>";

// TIME - retorna a quantidade de segundos que se passou de 1970 até agora
echo time();
echo "<br>";

// formatando o time
$time = time();
echo date('d/m/Y', $time);
echo "<br>";

// função MKTIME - boa para trabalhar com horas passadas
// mktime(hora, minutos, segundos, mes, dia, ano);
$data_pagamento = mktime(15, 30, 00, 02, 15, 2023);
echo date('m/Y - h:i A', $data_pagamento);
echo "<br>";

// transformando a varíavel para inserir no banco de dados
$data = '2020-04-10 13:30:00';
$data = strtotime($data);
echo $data."<br>";
echo date('d/m/y', $data);