<html>
<body>

<?php

?>

<?php
if (isset($_POST['enviar-formulario'])) {
	// array de erros
	$erros = array();

	// sanitize
	$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
	
	$idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT);
	if (!filter_var($idade, FILTER_SANITIZE_NUMBER_INT)):
		$erros[] = "A idade precisa ser um inteiro!";
	endif;

	$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
	if (!filter_var($email, FILTER_SANITIZE_EMAIL)):
		$erros[] = "O campo precisa ser um email!";
	endif;

	$url = filter_input(INPUT_POST, 'url', FILTER_SANITIZE_URL);
	if (!filter_var($url, FILTER_SANITIZE_URL)):
		$erros[] = "URL inválida!";
	endif;	

	// exibindo mensagens
	if (!empty($erros)) :
		foreach ($erros as $erro) {
			echo "<li> $erro </li>";
		}
	else:
		echo "Parabéns, seus dados estão corretos!";
	endif;
}
?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
	Nome: &emsp; <input type="text" name="nome"><br>
	Idade: &emsp; <input type="text" name="idade"><br>
	Email: &emsp; <input type="text" name="email"><br>
	URL: &emsp; <input type="text" name="url"><br>
<button type="submit" name="enviar-formulario">Enviar</button>
</form>
</body>
</html>