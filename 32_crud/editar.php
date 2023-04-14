<?php 
# Fazendo a Conexão:
include_once 'php_action/db_connect.php';
# Header
include_once 'includes/header.php';

# Select para verificar se existe o parâmetro id na URL através da Superglobal $_GET
if(isset($_GET['id'])) {
    # Se existir, será atribuido para a variável $id
    $id = mysqli_escape_string($connect, $_GET['id']);

    # Dar um Select de todos os campos do Banco de Dados
    $sql = "SELECT * FROM clientes WHERE id= '$id'";
    $resultado = mysqli_query($connect ,$sql);
    $dados = mysqli_fetch_array($resultado);
}



?>

<!-- Centralizar o formulário na página: class="row" -->
<div class="row">
    <!-- Efeito de movimento quando clicar nos campos do formulário: class="col s12 m6 push-m3" -->
    <div class="col s12 m6 push-m3">
        <h3 class="light"> Editar Cliente </h3>
        <!-- Após preencher o Formulário, executar: <form action="php_action/update.php" method="POST"> -->
        <form action="php_action/update.php" method="POST">
            <!-- Criando um input type="hidden" invisível com name="id" e value="" para pegar o 'id' do registro em update.php -->
            <input type="hidden" name="id" value="<?php echo $dados['id']; ?>">
            <div class="input-field col s12">
                <!-- Parâmetros para Editar os Dados em : value=""  -->
                <input type="text" name="nome" id="nome" value="<?php echo $dados['nome']; ?>">
                <label for="nome">Nome</label>
            </div>

            <div class="input-field col s12">
                <!-- Parâmetros para Editar os Dados em : value=""  -->
                <input type="text" name="sobrenome" id="sobrenome" value="<?php echo $dados['sobrenome']; ?>">
                <label for="sobrenome">Sobrenome</label>
            </div>

            <div class="input-field col s12">
                <!-- Parâmetros para Editar os Dados em : value=""  -->
                <input type="text" name="email" id="email" value="<?php echo $dados['email']; ?>">
                <label for="email">E-mail</label>
            </div>

            <div class="input-field col s12">
                <!-- Parâmetros para Editar os Dados em : value=""  -->
                <input type="text" name="idade" id="idade" value="<?php echo $dados['idade']; ?>">
                <label for="idade">Idade</label>
            </div>
            <!-- Incluindo o Botão Atualizar -->
            <!-- Quando clicar em Atualizar, criar um índice: name="btn-editar" -->
            <button type="submit" name="btn-editar" class="btn"> Atualizar </button>
            <!-- Incluindo o Botão Lista de Clientes -->
            <!-- Link de retorno para a index.php -->
            <a href="index.php" class="btn green"> Lista de Clientes </a>
        </form>
        
       
    </div>

</div>





<?php 
# Footer
include_once 'includes/footer.php';
?>





      