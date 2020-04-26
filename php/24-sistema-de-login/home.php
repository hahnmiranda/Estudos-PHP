<?php
// conexao
require_once 'db_connect.php';

// sessao
session_start();

// verificacao
if (!isset($_SESSION['logado'])) {
	header('Location: index.php');
}

//dados
// selecionando o usuário da sessão
$id = $_SESSION['id_usuario'];
// buscando os dados do usuário com a id
$sql = "SELECT * FROM usuarios WHERE id = '$id'";
// conectando com o banco
$resultado = mysqli_query($connect, $sql);
// salvando os dados em um array
$dados = mysqli_fetch_array($resultado);
mysqli_close($connect);
?>


<html>
<head>
	<title>Página restrita</title>
</head>
<body>
	<h1>Olá <?php echo$dados['nome']; ?></h1>
	<a href="logout.php"> Sair </a>
</body>
</html>