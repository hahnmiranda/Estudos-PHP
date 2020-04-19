<?php

session_start();

$_SESSION['cor'] = "amarelo";
$_SESSION['carro'] = "Ferrari";

echo $_SESSION['cor']."<br>".$_SESSION['carro']."<br>";