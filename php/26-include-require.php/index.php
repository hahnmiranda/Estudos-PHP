<?php
// o include, caso não consiga inserir, não para
include 'header.php'; 
// include_once 'header.php'; // inclui somente uma vez, mesmo que tenham mais includes
?>

<?php echo "Ola programador!"; ?>


<?php
// tenta adicionar o arquivo, se não consegue, retorna erro fatal e para
require 'footer.php'; 
?>
