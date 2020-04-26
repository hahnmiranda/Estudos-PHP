<?php

$senha = "123456";

$novaSenha = base64_encode($senha);
echo "Base64: ".$novaSenha."<br>";
echo "Sua senha é: ".base64_decode($novaSenha);

echo "<hr>";

// nos modos abaixo não temos como descriptografar a senha, para verificar a senha a comparação é feita com ambas criptografadas
echo "Md5: ".md5($senha)."<br>"; 
echo "Sha1: ".sha1($senha); 

echo "<hr>";

// utilizando hash
$options = ['cost' => 10]; // 10 é o valor padrão, quanto maior este valor mias seguro, mas mais consome hardware
$senhaSegura = password_hash($senha, PASSWORD_DEFAULT, $options);
echo $senhaSegura."<br>";
$senha_db = '$2y$10$dMGe2JxJ0YkYgvxoUda4.eG3HXM8uFedhh2F..7wrTEaIFduXyYQy';

if(password_verify($senha, $senha_db)):
	echo "Senha correta";
else:
	echo "Senha incorreta";
endif;
