<?php 
    include 'header.php';
    include_once 'header.php';
?>




<?php 
# Include e Require são funções que servem para inserir o conteúdo de um arquivo PHP em um outro arquivo PHP em execução;

# A Função Include apenas emite um Aviso (Warning) de que houve falha ao abrir alguma das páginas, header ou footer no caso do nosso exemplo, mas continua executando o Script;

# A Função Require dá um Erro Fatal e para o Script;

# No include_once e require_once o PHP verifica se o arquivo já foi incluído e não os incluirá novamente;



echo "<h1>Olá, pessoal</h1>";

?>




<?php 
    require 'footer.php';
    require_once 'footer.php';
?>

