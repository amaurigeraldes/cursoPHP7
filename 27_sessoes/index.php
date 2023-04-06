<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sessões no PHP</title>
</head>

<body>

    <h1>Sessões no PHP</h1>
    <!-- Sessões: servem para armazenar informações que poderão ser utilizadas em várias páginas  -->
    <!-- Geralmente são utilizadas para armazenar "Carrinhos de Compras", "Sistemas de Login", etc -->
    
    <?php 
    # Iniciar a sessão:
    session_start();

    # Para criar uma sessão, utilizar a Superglobal $_SESSION
    $_SESSION['cor'] = "Verde";
    $_SESSION['carro'] = "Veloster";

    echo $_SESSION['cor'] . "<br>";
    echo $_SESSION['carro'] . "<br>";
    echo session_id() . "<br>";
    
    ?>

</body>

</html>