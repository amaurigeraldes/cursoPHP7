<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Login (PHP Procedural)</title>
</head>


<?php 
    /* Conexão: fazer uma consulta no BD para verificar se o Login e a Senha são compatíveis e, caso sejam, abrir uma Sessão.
    "require_once 'db_connect.php';" para fazer a consulta é necessária a inclusão do db_connect.php na index.php. */
    require_once 'db_connect.php';

    # Iniciar uma Sessão
    session_start();
       
    /* Botão Enviar: fazer a verificação se existe o índice btn-entrar na Superglobal POST, no caso de existir, é porque o Botão Enviar foi "clicado".*/

    if(isset($_POST['btn-entrar'])) {
        
        # Criar uma Array $erros para receber as informações se houver erros quando o Botão Enviar for clicado
        $erros = array();
        
        # Utilizar uma função para Filtrar os Dados do input
        $login = mysqli_escape_string($connect, $_POST['login']);
        $senha = mysqli_escape_string($connect, $_POST['senha']);

        # Verificar se os campos vieram Vazios
        if(empty($login) or empty($senha)) {
            $erros[] = "<li> Os campos login e senha precisam ser preenchidos </li>";
        } else {
            # Verificar se o usuário existe no Banco de Dados
            # Comando de Banco de Dados SQL
            $sql = "SELECT login FROM usuarios WHERE login = '$login'";
            # Variável vai armazenar o resultado da consulta: 
            # O 1º parâmetro é a Conexão e o 2º parâmetro é o Comando SQL
            $resultado = mysqli_query($connect, $sql);

            # Verificação se o usuário existe no Banco de Dados
            # Se o número de linhas for maior do que Zero é porque existe algum registro
            if(mysqli_num_rows($resultado) > 0) {
                # Criptografar a Senha com a função MD5 antes de inserir no Select
                $senha = md5($senha);
                # Verificar se a senha confere com a senha do Banco de Dados
                $sql = "SELECT * FROM usuarios WHERE login = '$login' AND senha = '$senha'";
                $resultado = mysqli_query($connect, $sql);
                    # Verificação se o usuário e a senha conferem com os dados do Banco de Dados
                    # Se for igual a 1 é TRUE
                    if(mysqli_num_rows($resultado) == 1) {
                        # mysqli_fetch_array converte o $resultado em um Array que é atribuído à variável $dados
                        $dados = mysqli_fetch_array($resultado);

                        # Sempre após fazer uma consulta ao BD, fechar a Conexão
                        mysqli_close($connect);

                        # Criar uma Sessão
                        $_SESSION['logado'] = true;
                        $_SESSION['id_usuario'] = $dados['id'];
                        header('Location: home.php');
                    } else {
                        $erros[] = "<li> Usuário e/ou Senha não conferem </li>";
                    }

            } else {
                $erros[] = "<li> Usuário Inexistente </li>";
            }


        }
    }
    ?>

<body>

    <!-- Criado BD "sistemalogin" no Mysql no Servidor
         Tabela: usuarios
         Coluna: id, Primary, AI 
         Coluna: nome, varchar(255)
         Coluna: login, varchar(255)
         Coluna: senha, varchar(32), MD5 função para Criptografia -->


    <h1>Sistema de Login (PHP Procedural)</h1>
   
    <?php 
    # Exibição de eventual erro no Login e Senha, se $erros não estiver vazia
    if(!empty($erros)):
        # Percorrer a Array
        foreach($erros as $erro):
            echo $erro;
        endforeach;
    endif;
    ?>
   
   <hr>

    <!-- informar no action uma Superglobal para processar o Formulário na mesma Página: 
        <php echo $_SERVER['PHP_SELF']; ?> ao invés de manter vazia ou index.php -->
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    Login: <input type="text" name="login" id="id_login"><br>
    Senha: <input type="password" name="senha" id="id_senha"><br><br>
    <button type="submit" name="btn-entrar"> Entrar </button>
    </form>


   

</body>

</html>