<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filtros de Sanitização no PHP</title>
</head>

<body>

    <h1>Filtros de Sanitização no PHP</h1>

    <?php 
    /*
    FILTER_SANITIZE: faz a limpeza dos dados digitados nos campos do formulário
    Funções (filter_input - filter_var):
    Retornam um valor true ou false.

    FILTER_SANITIZE_SPECIAL_CHARS
    FILTER_SANITIZE_NUMBER_INT
    FILTER_SANITIZE_EMAIL
    FILTER_SANITIZE_URL

    Verificar outras possibilidades no Manual do PHP
    */
    ?>

    <?php 
    // Fazer a verificação se existe o índice enviar-formulario na Superglobal POST. 
    // Se existir é porque o Botão Enviar foi "clicado"

    if(isset($_POST['enviar-formulario'])) {
        
        // Criado um array para receber os erros de validação
        $erros = array();


        // SANITIZAÇÕES e VALIDAÇÕES (Utilizando o filter_var()):
        
        // Sanitizar o campo Nome
        $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    

        // Sanitizar o campo Idade
        $idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT);
        // Validar com a Negação para Inverter a Lógica:
        if(!filter_var($idade, FILTER_VALIDATE_INT)) {
            $erros[] = "A idade informada precisa ser um número inteiro <br>";
        };
        

        // Sanitizar o campo Email
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
        // Validar com a Negação para Inverter a Lógica:
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $erros[] = "E-mail inválido <br>";
        };
        
        
        // Sanitizar o campo URL
        $url = filter_input(INPUT_POST, 'url', FILTER_SANITIZE_URL);
        // Validar com a Negação para Inverter a Lógica:
        if(!filter_var($url, FILTER_VALIDATE_URL)) {
            $erros[] = "URL inválida <br>";
        };

        

        // Exibir a mensagem de erros, se a variável $erros não estiver vazia é porque contém erros:
        if(!empty($erros)) {
            foreach($erros as $erro) {
                echo "<li> $erro </li>";
            };
        } else {
            echo "Seus dados foram informados corretamente!<br>";
        };


    };
    ?>

    <h2>Tela de Cadastro de Clientes</h2>

    <!-- No Método POST os dados do formulário serão enviados para o Script dados.php de forma invisível-->
    <!-- informar no action uma Superglobal para processar o Formulário na mesma Página: <php echo $_SERVER['PHP_SELF']; ?> ao invés de index.php -->

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        Nome: <input type="text" name="nome" id="id_nome" required><br>
        Idade: <input type="number" name="idade" id="id_idade" required><br>
        E-mail: <input type="text" name="email" id="id_email" required><br>
        URL: <input type="text" name="url" id="id_url" required><br>

        <!-- Criado o índice: enviar-formulario -->
        <button type="submit" name="enviar-formulario"> Enviar </button><br>
        <button type="reset"> Limpar </button><br>
    </form>


</body>

</html>