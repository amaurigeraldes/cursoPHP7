<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Restrita</title>
</head>

    <?php

    /* "require_once 'db_connect.php';" para fazer a consulta é necessária a inclusão do db_connect.php na index.php. */
    require_once 'db_connect.php';

    # Iniciar uma Sessão
    session_start();

    # Fazer a verificação se não existe a Sessão Logado
    if(!isset($_SESSION['logado'])) {
        # Se não estiver logado, redirecionar para a index.php
        header('Location: index.php');
    }

    
    # Dados do BD
    $id = $_SESSION['id_usuario'];
    $sql = "SELECT * FROM usuarios WHERE id = '$id'";
    $resultado = mysqli_query($connect, $sql);
    # A variável $dados tem todas as informações do usuário
    $dados = mysqli_fetch_array($resultado);

    # Sempre após fazer uma consulta ao BD, fechar a Conexão
    mysqli_close($connect);

    ?>


<body>

    <h1>Olá, <?php echo $dados['nome']; ?> </h1>

    <!-- Criando uma Página de Logout do Usuário -->
    <a href="logout.php"> Sair </a>
    
    

</body>

</html>