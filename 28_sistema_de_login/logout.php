<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout</title>
</head>

<body>

    <h1></h1>
    
    <?php 
    # Encerrando a Sessão
    session_start();
    session_unset();
    session_destroy();

    # Redirecionar o Usuário para a Página index.php
    header('Location: index.php');
    
    ?>

</body>

</html>