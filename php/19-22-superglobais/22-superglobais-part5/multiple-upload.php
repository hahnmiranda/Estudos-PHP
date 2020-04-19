<html>
<body>

<?php
if (isset($_POST['enviar-formulario'])):
	$formatosPermitidos = array("png", "jpeg", "jpg", "gif");
	$quantidadeArquivos = count($_FILES['arquivo']['name']);
	$contador = 0;

	$mensagem = array();

	while ($contador < $quantidadeArquivos):

		$extensao = pathinfo($_FILES['arquivo']['name'][$contador], PATHINFO_EXTENSION);

		if(in_array($extensao, $formatosPermitidos)):
			$pasta = "arquivos/";
			$temporario = $_FILES['arquivo']['tmp_name'][$contador];
			$novoNome = uniqid().".$extensao";

			if(move_uploaded_file($temporario, $pasta.$novoNome)):
				$mensagem[] = "Upload feito com sucesso para o endereço: $pasta$novoNome";
			else:
				$mensagem[] = "Não foi possível enviar o arquivo! - $novoNome";
			endif;
		else:
			$mensagem[] = "Arquivo inválido! - $extensao";
		endif;

		$contador++;
	endwhile;

	foreach ($mensagem as $key) {
		echo $key."<br>";
	}
 
endif;
?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
	<input type="file" name="arquivo[]" multiple><br>
	<input type="submit" name="enviar-formulario">
</form>

</body>
</html>