<?php 
# Header
include_once 'includes/header.php';
?>

<!-- Centralizar o formulário na página: class="row" -->
<div class="row">
    <!-- Efeito de movimento quando clicar nos campos do formulário: class="col s12 m6 push-m3" -->
    <div class="col s12 m6 push-m3">
        <h3 class="light"> Novo Cliente </h3>
        <!-- Após preencher o Formulário, executar: <form action="php_action/create.php" method="POST"> -->
        <form action="php_action/create.php" method="POST">
            <div class="input-field col s12">
                <input type="text" name="nome" id="nome">
                <label for="nome">Nome</label>
            </div>

            <div class="input-field col s12">
                <input type="text" name="sobrenome" id="sobrenome">
                <label for="sobrenome">Sobrenome</label>
            </div>

            <div class="input-field col s12">
                <input type="text" name="email" id="email">
                <label for="email">E-mail</label>
            </div>

            <div class="input-field col s12">
                <input type="text" name="idade" id="idade">
                <label for="idade">Idade</label>
            </div>
            <!-- Incluindo o Botão Cadastrar -->
            <!-- Quando clicar em Cadastrar, criar um índice: name="btn-cadastrar" -->
            <button type="submit" name="btn-cadastrar" class="btn"> Cadastrar </button>
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





      