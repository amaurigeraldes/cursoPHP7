<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filtros de Validação no PHP</title>
</head>

<body>

    <h1>Filtros de Validação no PHP</h1>

    <?php 
    /*
    FILTER_VALIDATE: faz a validação dos dados informados através de input pelo usuário em formulários.
    
    Funções (filter_input - filter_var):
    Retornam um valor true ou false.

    FILTER_VALIDATE_INT
    FILTER_VALIDATE_EMAIL
    FILTER_VALIDATE_FLOAT
    FILTER_VALIDATE_IP
    FILTER_VALIDATE_URL

    Verificar outras possibilidades no Manual do PHP
    */
    ?>

    <?php 
    // Fazer a verificação se existe o índice enviar-formulario na Superglobal POST. 
    // Se existir é porque o Botão Enviar foi "clicado"

    if(isset($_POST['enviar-formulario'])) {
        
        // Criado um array para receber os erros de validação
        $erros = array();

        // VALIDAÇÕES: utilizando o filter_input()

        // Validação do campo idade com Negação (Inverte a Lógica)
        if(!$idade = filter_input(INPUT_POST, 'idade', FILTER_VALIDATE_INT)) {
            $erros[] = "A idade precisa ser um número inteiro";
        };

        // Validação do campo email com Negação (Inverte a Lógica)
        if(!$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)) {
            $erros[] = "E-mail inválido";
        };

        // Validação do campo peso com Negação (Inverte a Lógica)
        if(!$peso = filter_input(INPUT_POST, 'peso', FILTER_VALIDATE_FLOAT)) {
            $erros[] = "O peso precisa ser um número float";
        };

        // Validação do campo ip com Negação (Inverte a Lógica)
        if(!$ip = filter_input(INPUT_POST, 'ip', FILTER_VALIDATE_IP)) {
            $erros[] = "IP inválido";
        };

        // Validação do campo url com Negação (Inverte a Lógica)
        if(!$url = filter_input(INPUT_POST, 'url', FILTER_VALIDATE_URL)) {
            $erros[] = "URL inválida";
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
        Idade: <input type="text" name="idade" id="id_idade"><br>
        E-mail: <input type="text" name="email" id="id_email"><br>
        Peso: <input type="text" name="peso" id="id_peso"><br>
        IP: <input type="text" name="ip" id="id_ip"><br>
        URL: <input type="text" name="url" id="id_url"><br>

        <!-- Criado o índice: enviar-formulario -->
        <button type="submit" name="enviar-formulario"> Enviar </button><br>
        <button type="reset"> Limpar </button><br>
    </form>


</body>

</html>